<?php

defined( 'ABSPATH' ) || exit; // Exit if accessed directly.

class Safelayout_buttons_elementor_widget extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'Safelayout_buttons_widget';
	}

	public function get_title(): string {
		return esc_html__( 'Button (Safelayout)', 'safelayout-brilliant-buttons' );
	}

	public function get_icon(): string {
		return 'eicon-button safelayout-bb-elementor-widget-icon';
	}

	public function get_class(): string {
		return 'safelayout-bb-elementor-widget';
	}

	public function get_categories(): array {
		return [ 'basic' ];
	}

	protected function is_dynamic_content(): bool {
		return false;
	}

	public function get_keywords(): array {
		return [
			__( 'Button', 'safelayout-brilliant-buttons' ),
			__( 'Buttons', 'safelayout-brilliant-buttons' ),
			__( 'Safelayout', 'safelayout-brilliant-buttons' ),
			__( 'brilliant', 'safelayout-brilliant-buttons' ),
		];
	}

	public function get_style_depends(): array {
		return [ 'safelayout-safelayout-button-style' ];
	}

	public function get_script_depends(): array {
		return [ 'safelayout-safelayout-button-view-script' ];
	}

	protected function register_controls(): void {
		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Button (Safelayout)', 'safelayout-brilliant-buttons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'content',
			[ 'type' => 'Safelayout_buttons_control', ]
		);

		$this->end_controls_section();
	}

	public function get_data( $item = null ) {
		$data = parent::get_data( $item );
		if ( isset( $data['settings']['content'] ) ) {
			$allowed_html = Safelayout_brilliant_buttons::allowed_html_for_kses();
			$data['settings']['content'] = wp_kses( $data['settings']['content'], $allowed_html );
		}
		return $data;
	}

	protected function render(): void {
		$settings = $this->get_settings_for_display();
		$allowed_html = Safelayout_brilliant_buttons::allowed_html_for_kses();
		$temp = explode( 'attsafelayoutatt', $settings['content'] );
		$data = '';
		if ( count( $temp ) > 1 ) {
			$data = $temp['0'];
		}
		echo wp_kses( $data, $allowed_html );
	}

	protected function content_template(): void {
		?>
		<#
			if ( SLBBmceButtons.elementorAction == 0 && view?.el?.classList?.contains( 'elementor-element-editable' ) ) {
				document.getElementById( 'sl-bb-elementor-value' )?.dispatchEvent(new Event('click') );
			}
			SLBBmceButtons.elementorAction = 0;
			let temp = settings.content.split( 'attsafelayoutatt' );
			let data = '';
			if ( temp?.length > 1 ) {
				data = temp[0];
			}
		#>
			{{{ data }}}
		<?php
	}
}