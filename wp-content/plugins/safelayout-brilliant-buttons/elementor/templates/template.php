 <?php
	/** Template library templates **/
	if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<script type="text/template" id="tmpl-sl-ei-template-library-header-actions">
	<div id="sl-ei-template-library-header-sync" class="elementor-templates-modal__header__item">
		<i class="eicon-sync" aria-hidden="true" title="<?php esc_attr_e( 'Sync Library', 'safelayout-brilliant-buttons' ); ?>"></i>
		<span class="elementor-screen-only"><?php echo esc_html__( 'Sync Library', 'safelayout-brilliant-buttons' ); ?></span>
	</div>
</script>

<script type="text/template" id="tmpl-sl-ei-template-library-logo">
	<span class="tmpl-sl-ei-template-library-logo-area">
		<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sl-ei-main-icon-grad001" x1="0.15" y1="0.85" x2="0.85" y2="0.15"><stop stop-color="#FF59BF" offset="0" /><stop stop-color="#FF99D9" offset="0.25" /><stop stop-color="#A6FF66" offset="0.75" /><stop stop-color="#8CFF4C" offset="1" /></linearGradient></defs><path fill="url(#sl-ei-main-icon-grad001)" stroke="#333333" stroke-width="1" d="M11.072 1.87c1.475.496-2.847 2.935-.146 4.571 1.519.92 4.834-3.242 6.498-4.176 1.416-.789 3.899-.949 5.155 1.796 1.592 3.476.204 12.515-5.534 16.151-5.798 3.651-13.099 1.796-15.626-3.884-2.935-6.615 4.556-16.195 9.652-14.457zm1.767 9.419c1.066 2.395 6.864-.73 5.534-4.089-.862-2.175-6.543 1.826-5.534 4.089z" /></svg>
	</span>
	<span class="tmpl-sl-ei-template-library-logo-title">{{{ title }}}</span>
</script>

<script type="text/template" id="tmpl-sl-ei-template-library-loading">
	<div class="elementor-loader-wrapper">
		<div class="elementor-loader">
			<div class="elementor-loader-boxes">
				<div class="elementor-loader-box"></div>
				<div class="elementor-loader-box"></div>
				<div class="elementor-loader-box"></div>
				<div class="elementor-loader-box"></div>
			</div>
		</div>
		<div class="elementor-loading-title"><?php echo esc_html__( 'Loading', 'safelayout-brilliant-buttons' ); ?></div>
	</div>
</script>

<script type="text/template" id="tmpl-sl-ei-template-library-preview">
	<iframe></iframe>
</script>

<script type="text/template" id="tmpl-sl-ei-template-library-insert-button">
	<a class="elementor-template-library-template-action sl-ei-template-library-template-insert elementor-button">
		<i class="eicon-file-download" aria-hidden="true"></i>
		<span class="elementor-button-title"><?php echo esc_html__( 'Insert', 'safelayout-brilliant-buttons' ); ?></span>
	</a>
</script>

<script type="text/template" id="tmpl-sl-ei-template-library-get-pro-button">
	<a class="elementor-template-library-template-action elementor-button elementor-go-pro" href="https://safelayout.com/" target="_blank">
		<i class="eicon-external-link-square" aria-hidden="true"></i>
		<span class="elementor-button-title"><?php echo esc_html__( 'Go Pro', 'safelayout-brilliant-buttons' ); ?></span>
	</a>
</script>

<script type="text/template" id="tmpl-sl-ei-template-library-header-insert">
	<div id="elementor-template-library-header-preview-insert-wrapper" class="elementor-templates-modal__header__item">
		{{{ slTmpl.library.getModal().getTemplateActionButton( obj ) }}}
	</div>
</script>

<script type="text/template" id="tmpl-sl-ei-template-library-header-back">
	<i class="eicon-" aria-hidden="true"></i>
	<span><?php echo esc_html__( 'Back to Library', 'safelayout-brilliant-buttons' ); ?></span>
</script>

<script type="text/template" id="tmpl-sl-ei-template-library-templates">
	<div id="elementor-template-library-toolbar">

		<div id="sl-ei-template-library-filter-area-wrapper">
			<div id="elementor-template-library-filter-category-wrapper">
				<select id="elementor-template-library-filter-category">
					<option value=""><?php esc_html_e( 'All Categories', 'safelayout-brilliant-buttons' ); ?></option>
					<# _.each( slTmpl.library.getCategories(), function( category ) { #>
						<option value="{{{ category }}}">{{{ category }}}</option>
					<# } ); #>
				</select>
			</div>
		</div>

		<div id="elementor-template-library-filter-text-wrapper">
			<label for="sl-ei-template-library-filter-text" class="elementor-screen-only"><?php esc_html_e( 'Search Templates:', 'safelayout-brilliant-buttons' ); ?></label>
			<input id="sl-ei-template-library-filter-text" placeholder="<?php esc_attr_e( 'Search', 'safelayout-brilliant-buttons' ); ?>">
			<i class="eicon-search"></i>
		</div>

	</div>

	<div class="sl-ei-template-library-window">
		<div id="sl-ei-template-library-list"></div>
	</div>

</script>

<script type="text/template" id="sl-ei-template-library-template">

	<div class="elementor-template-library-template-body">
		<# if ( 'page' === type ) { #>
			<div class="elementor-template-library-template-screenshot" style="background-image: url({{ thumbnail }});"></div>
		<# } else { #>
			<img class="sl-ei-template-library-thumbnail" src="{{ thumbnail }}">
		<# } #>
		<div class="sl-ei-template-library-preview">
			<i class="eicon-zoom-in-bold" aria-hidden="true"></i>
		</div>
		<# if ( obj.isPro ) { #>
		<span class="sl-ei-template-library-pro-badge"><?php esc_html_e( 'Pro', 'safelayout-brilliant-buttons' ); ?></span>
		<# } #>
	</div>

	<div class="sl-ei-template-library-footer">
		<div class="sl-ei-template-library-template-info">
			<h5 class="sl-ei-template-library-template-title">{{{ title }}}</h5>
			<h6 class="sl-ei-template-library-template-type">{{{ type }}}</h6>
		</div>

		<div class="sl-ei-template-library-template-action-btn">
			{{{ slTmpl.library.getModal().getTemplateActionButton( obj ) }}}
			<a href="#" class="elementor-button sl-ei-template-library-preview-button">
				<i class="eicon-device-desktop" aria-hidden="true"></i>
				<?php esc_html_e( 'Preview', 'safelayout-brilliant-buttons' ); ?>
			</a>
		</div>

	</div>

</script>

<script type="text/template" id="tmpl-elementor-sl-ei-library-templates-empty">
	<div class="elementor-template-library-blank-icon">
		<img src="<?php echo esc_url(ELEMENTOR_ASSETS_URL . 'images/no-search-results.svg'); ?>" class="elementor-template-library-no-results" />
	</div>
	<div class="elementor-template-library-blank-title"></div>
	<div class="elementor-template-library-blank-message"></div>
	<div class="elementor-template-library-blank-footer">
		<?php echo esc_html__( 'Want to learn more about the Safelayout library?', 'safelayout-brilliant-buttons' ); ?>
		<a class="elementor-template-library-blank-footer-link" href=<?php echo esc_url("https://safelayout.com"); ?> target="_blank"><?php echo esc_html__( 'Click here', 'safelayout-brilliant-buttons' ); ?></a>
	</div>
</script>