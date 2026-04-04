<?php

function wpdevart_theme_backend_enqueue() {
    wp_enqueue_style( 'wpdevart-theme-ai-and-saas-agency-wda-getting-started', get_template_directory_uri() . '/inc/getting-started/notice.css' );
}
add_action( 'admin_enqueue_scripts', 'wpdevart_theme_backend_enqueue' );

function wpdevart_ai_and_saas_agency_wda_menu() {
	add_theme_page( esc_html__( 'About Theme', 'ai-and-saas-agency-wda' ), esc_html__( 'About Theme', 'ai-and-saas-agency-wda' ), 'edit_theme_options', 'wpdevart-theme-about', 'wpdevart_ai_and_saas_agency_wda_about_display' );
}
add_action( 'admin_menu', 'wpdevart_ai_and_saas_agency_wda_menu' );

function wpdevart_ai_and_saas_agency_wda_about_display() {
	$wpdevart_ai_and_saas_agency_wda_theme = wp_get_theme();
	?>
	<div class="wrap about-wrap full-width-layout wpdevart-admin-container">
		<div class="wpdevart-about-theme">
			<div class="wpdevart-theme-description">
				<h1 class="getting-started-heading"><?php echo esc_html( $wpdevart_ai_and_saas_agency_wda_theme ); ?></h1>
				<p class="about-text"><?php echo apply_filters( 'parent_wpdevart_child_description_text', esc_html('The AI and SaaS Agency WDA is a modern WordPress theme crafted for AI startups, SaaS companies, digital agencies, and technology-focused businesses seeking a beautiful and functional website. Its visually striking homepage is designed to capture attention instantly, blending clean layouts with smart content sections that guide visitors toward action. Built with a fully responsive design, the theme looks flawless on desktops, tablets, and mobile devices alike. Every element is optimized for speed and SEO-friendly structure, helping your website rank better in search engines while delivering a smooth user experience. The WordPress Artificial Intelligence and SaaS Agency theme includes a beautifully designed blog layout, perfect for sharing insights, product updates, AI trends, or SaaS case studies.')); ?></p>
				<p class="actions">
					<a target="_blank" href="<?php echo apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-ai-saas-agency-theme')); ?>" class="button button-secondary getting-started-main-button" target="_blank"><?php esc_html_e( 'Theme Info', 'ai-and-saas-agency-wda' ); ?></a>
					<a target="_blank" href="<?php echo apply_filters( 'parent_wpdevart_child_demo_url', esc_url('https://ai-saas-agency.wpdevart.com')); ?>" class="button button-secondary getting-started-main-button" target="_blank"><?php esc_html_e( 'Demo', 'ai-and-saas-agency-wda' ); ?></a>
                    <a target="_blank" href="<?php echo apply_filters( 'parent_wpdevart_child_wp_support_url', esc_url('https://wordpress.org/support/theme/ai-and-saas-agency-wda')); ?>" class="button button-secondary getting-started-main-button" target="_blank"><?php esc_html_e( 'Support', 'ai-and-saas-agency-wda' ); ?></a>
					<a target="_blank" href="<?php echo apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-ai-saas-agency-theme')); ?>" class="button button-secondary getting-started-main-button getting-started-focus-button" target="_blank"><?php esc_html_e( 'Upgrade to Premium', 'ai-and-saas-agency-wda' ); ?></a>
                    <a target="_blank" href="<?php echo esc_url('https://wpdevart.com/hire-wordpress-developer-dedicated-experts-are-ready-to-help/'); ?>" class="button button-secondary getting-started-main-button getting-started-focus-button" target="_blank"><?php esc_html_e( 'Hire a Developer', 'ai-and-saas-agency-wda' ); ?></a>
				</p>
			</div>
			<div class="wpdevart-theme-screenshot">
				<img src="<?php echo esc_url( $wpdevart_ai_and_saas_agency_wda_theme->get_screenshot() ); ?>" />
			</div>
		</div>
		<nav class="nav-tab-wrapper wp-clearfix wpdevart-admin-tab" aria-label="<?php esc_attr_e( 'Secondary menu', 'ai-and-saas-agency-wda' ); ?>">
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'wpdevart-theme-about' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['page'] ) && 'wpdevart-theme-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'About', 'ai-and-saas-agency-wda' ); ?></a>
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'wpdevart-theme-about', 'tab' => 'free_vs_pro' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Free Vs Pro', 'ai-and-saas-agency-wda' ); ?></a>
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'wpdevart-theme-about', 'tab' => 'changelog' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'FAQ', 'ai-and-saas-agency-wda' ); ?></a>
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'wpdevart-theme-about', 'tab' => 'plugins' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'plugins' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Plugins', 'ai-and-saas-agency-wda' ); ?></a>
		</nav>
		<?php
			wpdevart_ai_and_saas_agency_wda_main_screen();
			wpdevart_ai_and_saas_agency_wda_changelog_screen();
			wpdevart_ai_and_saas_agency_wda_free_vs_pro();
			wpdevart_admin_featured_plugins_screen();
		?>
	</div>
	<?php
}

function wpdevart_ai_and_saas_agency_wda_main_screen() {
	if ( isset( $_GET['page'] ) && 'wpdevart-theme-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) {
	?>
		<div class="feature-section two-col wpdevart-feature-section">
			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Theme Customizer', 'ai-and-saas-agency-wda' ); ?></h2>
				<p><?php esc_html_e( 'You can edit and change theme options using the customizer. All theme options are available via Customize screen.', 'ai-and-saas-agency-wda' ) ?></p>
				<p><a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Customize', 'ai-and-saas-agency-wda' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Got theme support question?', 'ai-and-saas-agency-wda' ); ?></h2>
				<p><?php esc_html_e( 'If you have any questions regarding our theme, you can add a support ticket and get fast support from our team.', 'ai-and-saas-agency-wda' ) ?></p>
				<p><a target="_blank" href="<?php echo apply_filters( 'parent_wpdevart_child_wp_support_url', esc_url('https://wordpress.org/support/theme/ai-and-saas-agency-wda')); ?>" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Support Forum', 'ai-and-saas-agency-wda' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Hire a Developer', 'ai-and-saas-agency-wda' ); ?></h2>
				<p><?php esc_html_e( 'Hire WordPress developers from WpDevArt and you will get a quick and flexible solution at cost-effective rates. Our WordPress experts will help you to solve any problem. We provide different services for WordPress – website customization and development, theme/plugin customization and development, SEO optimization, WordPress integration, website speed optimization, etc. Our experts have over 10 years of experience, so a high-quality job is guaranteed.', 'ai-and-saas-agency-wda' ) ?></p>
				<p><a target="_blank" href="<?php echo esc_url('https://wpdevart.com/hire-wordpress-developer-dedicated-experts-are-ready-to-help/'); ?>" class="button button-secondary getting-started-main-button getting-started-focus-button"><?php esc_html_e( 'Check Details', 'ai-and-saas-agency-wda' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Best Offer', 'ai-and-saas-agency-wda' ); ?></h2>
				<p><?php esc_html_e( 'On the Best Offer page, you can check the best deals that our company suggests. At this moment we have 15 powerful and useful WordPress plugins and 15+ well-designed and unique themes. These plugins and themes will help you add various features to your WordPress site and improve its appearance. We decided to collect all plugins and themes in one package and take more than 73.99% of the price. You can find more detailed information on our website.', 'ai-and-saas-agency-wda' ) ?></p>
				<p><a target="_blank" href="<?php echo esc_url('https://wpdevart.com/the-best-offer-from-wpdevart/'); ?>" class="button button-secondary getting-started-main-button getting-started-focus-button"><?php esc_html_e( 'Check Details', 'ai-and-saas-agency-wda' ); ?></a></p>
			</div>
		</div>
	<?php
	}
}

function wpdevart_ai_and_saas_agency_wda_free_vs_pro() {
	if ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) {
	?>
		<div class="wrap about-wrap wpdevart-vs-table">
			<p class="about-description"><?php esc_html_e( 'Check out some of the differences between the free and premium versions below:', 'ai-and-saas-agency-wda' ); ?></p>
			<div class="wpdevart-vs-theme-table">
				<table>
					<thead>
						<tr><th scope="col"></th>
							<th class="head" scope="col"><?php esc_html_e( 'Free Version', 'ai-and-saas-agency-wda' ); ?></th>
							<th class="head" scope="col"><?php esc_html_e( 'Pro Version', 'ai-and-saas-agency-wda' ); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Fully Responsive Design', 'ai-and-saas-agency-wda' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Integrated with WooCommerce', 'ai-and-saas-agency-wda' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Optimized PageSpeed and Clear Codding', 'ai-and-saas-agency-wda' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Customizable Top Bar and Header', 'ai-and-saas-agency-wda' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><span><?php esc_html_e( 'Homepage Premium Sections', 'ai-and-saas-agency-wda' ); ?></span></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( '+7 Homepage Banner Themes', 'ai-and-saas-agency-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Animation Effects', 'ai-and-saas-agency-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Wide and Full-width Layouts', 'ai-and-saas-agency-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Breadcrumbs', 'ai-and-saas-agency-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Customizable Header Cart', 'ai-and-saas-agency-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Patterns', 'ai-and-saas-agency-wda' ); ?></td>
							<td headers="features" class="feature"><?php esc_html_e( '1', 'ai-and-saas-agency-wda' ); ?></td>
							<td headers="features" class="feature"><?php esc_html_e( '13+', 'ai-and-saas-agency-wda' ); ?></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Sticky Header', 'ai-and-saas-agency-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'WooCommerce Search Bar', 'ai-and-saas-agency-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'WooCommerce Shop/Category Structure', 'ai-and-saas-agency-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'WooCommerce Premium Sections', 'ai-and-saas-agency-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Banner Animations', 'ai-and-saas-agency-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Button Animations', 'ai-and-saas-agency-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Preloader', 'ai-and-saas-agency-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Footer Themes', 'ai-and-saas-agency-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Priority Support', 'ai-and-saas-agency-wda' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td class="feature feature--empty"></td>
							<td class="feature feature--empty"></td>
							<td headers="comp-2" class="td-btn-2"><a class="button button-secondary getting-started-main-button getting-started-focus-button" href="<?php echo apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-ai-saas-agency-theme')); ?>" target="_blank"><?php esc_html_e( 'Go For Premium', 'ai-and-saas-agency-wda' ); ?></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	<?php
	}
}

function wpdevart_ai_and_saas_agency_wda_changelog_screen() {
	if ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) {
		global $wp_filesystem;
	?>
			<div class="feature-section two-col wpdevart-feature-section">			
				<div class="col card">
					<h2 class="title"><?php esc_html_e( 'How can I display the custom homepage instead of the latest posts on the main page?', 'ai-and-saas-agency-wda' ); ?></h2>
					<p><?php esc_html_e( 'Go to the theme customize page, then in the left menu, click the Custom Homepage section, go to the Enable Custom Homepage section, and enable the option. Important: You will need to make sure that on the theme Customize page under the Homepage Settings section, the “Your homepage displays” option is set to “Your latest posts.”', 'ai-and-saas-agency-wda' ) ?></p>
				</div>
				<div class="col card">
					<h2 class="title"><?php esc_html_e( 'How can I add widgets to the WooCommerce sidebar?', 'ai-and-saas-agency-wda' ); ?></h2>
					<p><?php esc_html_e( 'You need to go to Appearance > Widgets page, find the WooCommerce Sidebar widget and add the widgets you want.', 'ai-and-saas-agency-wda' ) ?></p>
				</div>
				<div class="col card">
					<h2 class="title"><?php esc_html_e( 'What is the difference between the Primary Button and the header/banner/search page and other buttons?', 'ai-and-saas-agency-wda' ); ?></h2>
					<p><?php esc_html_e( 'The Primary Button is the style of the widget search button and the comments submit button and you can set a custom color for it, while the other buttons are placed on different settings pages and you can choose the color for these buttons from the 10 available colors.', 'ai-and-saas-agency-wda' ) ?></p>
				</div>
				<div class="col card">
					<h2 class="title"><?php esc_html_e( 'What should I do if after successful payment I did not receive a link to download the premium version?', 'ai-and-saas-agency-wda' ); ?></h2>
					<p><?php esc_html_e( 'You need to contact us using the form on the Contact Us page of our website.', 'ai-and-saas-agency-wda' ) ?></p>
				</div>
				<div class="col card">
					<h2 class="title"><?php esc_html_e( 'Can I use animated elements in the free version?', 'ai-and-saas-agency-wda' ); ?></h2>
					<p><?php esc_html_e( 'The animation feature is only available in the premium version, so you need to purchase a theme to use it.', 'ai-and-saas-agency-wda' ) ?></p>
				</div>
			</div>
	<?php
	}
}

function wpdevart_admin_featured_plugins_screen() {
	if ( isset( $_GET['tab'] ) && 'plugins' === $_GET['tab'] ) {
	?>
		<p class="about-description"><?php esc_html_e( 'Below you can see a list of Recommended Plugins:', 'ai-and-saas-agency-wda' ); ?></p>
		<div class="wpdevart-featured-plugins-section">
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/wordpress-countdown-extended-version"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/icon-128x128.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'WordPress Countdown Extended', 'ai-and-saas-agency-wda' ); ?></h2>
				<p><?php esc_html_e( 'Countdown Extended is a fresh and extended version of the countdown timer. You can easily create and add countdown timers to your website.', 'ai-and-saas-agency-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/wordpress-countdown-extended-version" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'ai-and-saas-agency-wda' ); ?></a></p>
			</div>
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/wordpress-organization-chart-plugin"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/chart-featured.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'WordPress Organization Chart', 'ai-and-saas-agency-wda' ); ?></h2>
				<p><?php esc_html_e( 'WordPress organization chart plugin is a great tool for adding organizational charts to your WordPress websites.', 'ai-and-saas-agency-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/wordpress-organization-chart-plugin" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'ai-and-saas-agency-wda' ); ?></a></p>
			</div>
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/wordpress-coming-soon-plugin"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/coming_soon.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'Coming soon and Maintenance mode', 'ai-and-saas-agency-wda' ); ?></h2>
				<p><?php esc_html_e( 'Coming soon and Maintenance mode plugin is an awesome tool to show your visitors that you are working on your website to make it better.', 'ai-and-saas-agency-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/wordpress-coming-soon-plugin" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'ai-and-saas-agency-wda' ); ?></a></p>
			</div>
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/wordpress-booking-calendar-plugin"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/Booking_calendar_featured.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'WordPress Booking Calendar', 'ai-and-saas-agency-wda' ); ?></h2>
				<p><?php esc_html_e( 'WordPress Booking Calendar plugin is an awesome tool to create a booking system for your website. Create booking calendars in a few minutes.', 'ai-and-saas-agency-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/wordpress-booking-calendar-plugin" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'ai-and-saas-agency-wda' ); ?></a></p>
			</div>
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/wordpress-gallery-plugin"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/gallery-album-icon.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'WordPress Gallery plugin', 'ai-and-saas-agency-wda' ); ?></h2>
				<p><?php esc_html_e( 'The gallery plugin is a useful tool that will help you to create Galleries and Albums. Try our nice Gallery views and awesome animations.', 'ai-and-saas-agency-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/wordpress-gallery-plugin" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'ai-and-saas-agency-wda' ); ?></a></p>
			</div>
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/wordpress-contact-form-plugin"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/contact_forms.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'Contact Form Builder', 'ai-and-saas-agency-wda' ); ?></h2>
				<p><?php esc_html_e( 'Contact Form Builder plugin is a handy tool for creating different types of contact forms on your WordPress websites.', 'ai-and-saas-agency-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/wordpress-contact-form-plugin" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'ai-and-saas-agency-wda' ); ?></a></p>
			</div>
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/wordpress-pricing-table-plugin"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/Pricing-table.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'WordPress Pricing Table', 'ai-and-saas-agency-wda' ); ?></h2>
				<p><?php esc_html_e( 'WordPress Pricing Table plugin is a nice tool for creating beautiful pricing tables. Use WpDevArt pricing table themes and create tables just in a few minutes.', 'ai-and-saas-agency-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/wordpress-pricing-table-plugin" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'ai-and-saas-agency-wda' ); ?></a></p>
			</div>
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/wordpress-youtube-embed-plugin"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/youtube.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'WordPress YouTube Embed', 'ai-and-saas-agency-wda' ); ?></h2>
				<p><?php esc_html_e( 'YouTube Embed plugin is a convenient tool for adding videos to your website. Use YouTube Embed plugin for adding YouTube videos in posts/pages, widgets.', 'ai-and-saas-agency-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/wordpress-youtube-embed-plugin" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'ai-and-saas-agency-wda' ); ?></a></p>
			</div>
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/wordpress-vertical-menu-plugin"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/vertical-menu.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'WordPress Vertical Menu', 'ai-and-saas-agency-wda' ); ?></h2>
				<p><?php esc_html_e( 'WordPress Vertical Menu is a handy tool for adding nice vertical menus. You can add icons for your website vertical menus using our plugin.', 'ai-and-saas-agency-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/wordpress-vertical-menu-plugin" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'ai-and-saas-agency-wda' ); ?></a></p>
			</div>
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/wordpress-lightbox-plugin"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/lightbox.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'WordPress Lightbox plugin', 'ai-and-saas-agency-wda' ); ?></h2>
				<p><?php esc_html_e( 'WordPress Lightbox Popup is a highly customizable and responsive plugin for displaying images and videos in the popup.', 'ai-and-saas-agency-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/wordpress-lightbox-plugin" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'ai-and-saas-agency-wda' ); ?></a></p>
			</div>
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/wordpress-facebook-comments-plugin"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/facebook-comments-icon.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'Wpdevart Social comments', 'ai-and-saas-agency-wda' ); ?></h2>
				<p><?php esc_html_e( 'WordPress Facebook comments plugin will help you to display Facebook Comments on your website. You can use Facebook Comments on your pages/posts.', 'ai-and-saas-agency-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/wordpress-facebook-comments-plugin" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'ai-and-saas-agency-wda' ); ?></a></p>
			</div>
			<div class="wpdevart-plugins-col">
				<a target="_blank" class="plugins-image-link" href="https://wpdevart.com/wordpress-duplicate-page-plugin-easily-clone-posts-and-pages"><img src="<?php echo esc_url(get_theme_file_uri('/inc/getting-started/featured_plugins/featured-duplicate.png')) ?>"></a>
				<h2 class="title"><?php esc_html_e( 'WordPress Duplicate page', 'ai-and-saas-agency-wda' ); ?></h2>
				<p><?php esc_html_e( 'Duplicate Page or Post is a great tool that allows duplicating pages and posts. Now you can do it with one click.', 'ai-and-saas-agency-wda' ) ?></p>
				<p><a target="_blank" href="https://wpdevart.com/wordpress-duplicate-page-plugin-easily-clone-posts-and-pages" class="button button-secondary getting-started-main-button"><?php esc_html_e( 'Check Plugin', 'ai-and-saas-agency-wda' ); ?></a></p>
			</div>
		</div>
	<?php
	}
}