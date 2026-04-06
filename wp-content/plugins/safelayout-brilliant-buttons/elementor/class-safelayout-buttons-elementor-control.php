<?php

defined( 'ABSPATH' ) || exit; // Exit if accessed directly.

class Safelayout_buttons_elementor_control extends \Elementor\Base_Data_Control {

	public function get_type(): string {
		return 'Safelayout_buttons_control';
	}

	public function get_default_value(): string {
		return '<div class="safelayout-bb-button-block sl-bb-mce-button-space " style="top: 0px;"><div class="sl-bb-button-block-click-effect001" style="--sl-bb-button-click-effect-transform: translateY(1px);"><a class="sl-bb-button-block-no-effect sl-bb-button-block-animation-slide-top" style="--sl-bb-button-text-color: #00f; --sl-bb-button-background-color: linear-gradient(#ffc559 0%, #ffc559 44%, #ff9730 100%); --sl-bb-button-anim-color: linear-gradient(#fcff7d 0%, #ffd27d 46%, #ffac59 100%); --sl-bb-button-pattern-opacity: 0.2; box-shadow: rgb(0, 0, 0) 0px 1px 3px; text-decoration: none; cursor: pointer; user-select: none;"><span class="sl-bb-button-effect-parent"><span class="sl-bb-button-anim1"></span></span><span class="sl-bb-button-block-content" style="text-align: center;">My Button</span></a><style type="text/css" data-no-optimize="1" data-no-minify="1">.sl-bb-button-block-animation-slide-top .sl-bb-button-anim1{transform:translateY(-101%)}.sl-bb-button-block-animation-slide-top:hover .sl-bb-button-anim1{transform:translateY(0)}.sl-bb-button-block-animation-slide-top{transform:rotateX(.005deg)}.sl-bb-button-block-animation-slide-top:hover{color:var(--sl-bb-button-anim-slide-text-color, var(--sl-bb-button-text-color)) !important}.sl-bb-button-block-animation-slide-top:hover .sl-bb-button-effect-parent{background-color:var(--sl-bb-button-anim-color) !important;transition:background-color 0ms .2s}</style></div></div>attsafelayoutatt%7B%22elementStyle%22%3A%22%22%2C%22content%22%3A%22My%20Button%22%2C%22textColor%22%3A%22%2300f%22%2C%22hasBg%22%3Atrue%2C%22bgColor%22%3A%22linear-gradient(%23ffc559%200%25%2C%20%23ffc559%2044%25%2C%20%23ff9730%20100%25)%22%2C%22textAlign%22%3A%22center%22%2C%22uppercase%22%3Afalse%2C%22fontSize%22%3A%2216px%22%2C%22lineHeight%22%3A%221.5%22%2C%22letterSpacing%22%3A%220px%22%2C%22width%22%3A0%2C%22hasBgShadow%22%3Atrue%2C%22bgShadow%22%3A%220px%201px%203px%20%23000%22%2C%22hasTextShadow%22%3Afalse%2C%22textShadow%22%3A%221px%201px%202px%20%23fff%22%2C%22blockMargin%22%3A%7B%7D%2C%22blockPadding%22%3A%7B%7D%2C%22border%22%3A%7B%7D%2C%22borderRadius%22%3A%7B%7D%2C%22hasIcon%22%3Afalse%2C%22iconShape%22%3A%22No%20Shape%22%2C%22iconShapeColor%22%3A%22%233131ff%22%2C%22iconAnimation%22%3A%22No%20Animation%22%2C%22iconAnimColor%22%3A%22%23fff%22%2C%22iconPos%22%3A%22left%22%2C%22iconGap%22%3A6%2C%22iconName%22%3A%22000_next%22%2C%22iconPaths%22%3A%5B%7B%22d%22%3A%22M6.6%206L5.4%207l4.5%205-4.5%205%201.1%201%205.5-6-5.4-6zm6%200l-1.1%201%204.5%205-4.5%205%201.1%201%205.5-6-5.5-6z%22%7D%5D%2C%22iconColor%22%3A%5B%22%2300f%22%5D%2C%22iconStrokeColor%22%3A%5B%22%23000%22%5D%2C%22iconStrokeWidth%22%3A%5B0%5D%2C%22label%22%3A%22%22%2C%22title%22%3A%22%22%2C%22linkUrl%22%3A%22%22%2C%22linkRel%22%3A%22%22%2C%22linkTarget%22%3A%22%22%2C%22bgPattern%22%3A%22No%20Pattern%22%2C%22patternOpacity%22%3A0.2%2C%22effect%22%3A%22No%20Effect%22%2C%22svgEffect%22%3A%22%22%2C%22rotate%22%3A0%2C%22slbbAnim%22%3A%22slide-top%22%2C%22animColor%22%3A%22linear-gradient(%23fcff7d%200%25%2C%20%23ffd27d%2046%25%2C%20%23ffac59%20100%25)%22%2C%22clickEffect%22%3A%22effect001%22%2C%22clickEffectColor%22%3A%22%231da1f2%22%2C%22hasLoading%22%3Afalse%2C%22loadingText%22%3A%22Please%20wait%20...%22%2C%22loadingEffect%22%3A%22No%20Effect%22%2C%22blockId%22%3A%22ca2f1d7a-4bd5-3b11-289a-8260b2dd6b10%22%2C%22classes%22%3A%22%22%2C%22top%22%3A0%2C%22bold%22%3Afalse%2C%22italic%22%3Afalse%2C%22strikethrough%22%3Afalse%2C%22animColorTwo%22%3A%22%23f00%22%2C%22hasSubText%22%3Afalse%2C%22subText%22%3A%22More%20Text%22%2C%22subTextAlign%22%3A%22left%22%2C%22subTextFontSize%22%3A%2213px%22%2C%22iconAnimColorTwo%22%3A%22%23f00%22%2C%22onlyIcon%22%3Afalse%2C%22hasIconShadow%22%3Afalse%2C%22iconShadow%22%3A%221px%201px%201px%20%23fff%22%2C%22subTextUppercase%22%3Afalse%2C%22subTextBold%22%3Afalse%2C%22subTextItalic%22%3Afalse%2C%22subTextTop%22%3A0%2C%22hasSubTextColor%22%3Afalse%2C%22subTextColor%22%3A%22%2300f%22%2C%22hasSubTextShadow%22%3Afalse%2C%22subTextShadow%22%3A%221px%201px%201px%20%23fff%22%2C%22subTextClasses%22%3A%22%22%2C%22customSVG%22%3A%22%22%2C%22slbbFont%22%3A%22Default%22%7D';
	}

	public function enqueue(): void {
		wp_register_script(
			'Safelayout-buttons-elementor-control',
			SAFELAYOUT_BUTTONS_URL . 'elementor/safelayout_buttons.js',
			array(),
			SAFELAYOUT_BUTTONS_VERSION,
			array(
				'in_footer' => false,
			)
		);
		wp_enqueue_script( 'Safelayout-buttons-elementor-control' );
	}

	public function content_template(): void {
		?>
			<div id="sl-bb-elementor-body"></div>
			<input type="hidden" id="sl-bb-elementor-value" data-setting="{{ data.name }}" />
		<?php
	}

}