<?php
/*
Plugin Name: Safelayout Brilliant Buttons
Plugin URI: https://safelayout.com
Description: Beautiful and high quality buttons.
Requires at least: 6.5
Requires PHP: 7.0
Version: 1.2.3
Author: Safelayout
Text Domain: safelayout-brilliant-buttons
Domain Path: /languages
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Elementor tested up to: 3.35.5
Elementor Pro tested up to: 3.35.1
*/

defined( 'ABSPATH' ) || exit; // Exit if accessed directly.

if ( ! class_exists( 'Safelayout_brilliant_buttons' ) && ! class_exists( 'Safelayout_brilliant_buttons_pro' ) ) {
	
	// Define the constant used in this plugin
	define( 'SAFELAYOUT_BUTTONS_VERSION', '1.2.3');
	define( 'SAFELAYOUT_BUTTONS_PATH', plugin_dir_path( __FILE__ ) );
	define( 'SAFELAYOUT_BUTTONS_URL', plugin_dir_url( __FILE__ ) );
	define( 'SAFELAYOUT_BUTTONS_NAME', plugin_basename( __FILE__ ) );

	class Safelayout_brilliant_buttons {
		protected $options_page_hook = null;
		protected $icons_list_key = false;

		public function __construct() {
			add_action( 'init', array( $this, 'load_textdomain' ) );
			add_action( 'activated_plugin', array( $this, 'activated_plugin' ) );
			add_filter( 'plugin_action_links_' . SAFELAYOUT_BUTTONS_NAME, array( $this, 'plugin_action_links' ) );
			add_filter( 'wp_kses_allowed_html', array( $this, 'allowed_html' ), 10, 2 );
			add_filter( 'safecss_filter_attr_allow_css', array( $this, 'attr_allow_css' ), 99, 2 );
			add_filter( 'safe_style_css', array( $this, 'allowed_css' ), 10, 1 );

			add_action( 'init', array( $this, 'register_block' ) );
			add_action( 'init', array( $this, 'register_patterns' ), 8 );
			add_action( 'enqueue_block_editor_assets', array( $this, 'load_packs' ), 1 );
			add_action( 'enqueue_block_editor_assets', array( $this, 'set_translations' ), PHP_INT_MAX );
			add_filter( 'block_categories_all', array( $this, 'safelayout_blocks_categories_add' ), 10, 2 );

			add_filter( 'tiny_mce_before_init', array( $this, 'new_mce_options' ), PHP_INT_MAX );
			add_filter( 'no_texturize_tags', array( $this, 'mce_no_texturize_tags' ) );
			add_filter( 'the_content', array( $this, 'mce_the_content' ), PHP_INT_MAX );
			add_filter( 'wp_enqueue_scripts', array( $this, 'enqueue_mce' ), PHP_INT_MAX );
			add_filter( 'mce_external_plugins', array( $this, 'mce_plugins' ), PHP_INT_MAX );
			add_filter( 'mce_buttons', array( $this, 'mce_buttons' ), PHP_INT_MAX );

			add_action( 'elementor/widgets/register', array( $this, 'register_widget' ) );
			add_action( 'elementor/controls/register', array( $this, 'register_control' ) );
			add_action( 'elementor/editor/before_enqueue_scripts', array( $this, 'elementor_enqueue' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'register_elementor_front' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'deregister_elementor_script' ), PHP_INT_MAX );
			add_action( 'elementor/editor/after_enqueue_scripts', array( $this, 'after_elementor_enqueue' ) );
			add_action( 'elementor/editor/footer', array( $this, 'print_template_views' ) );

			add_filter( 'litespeed_optimize_css_excludes', array( $this, 'litespeed_css_excludes' ) );
			add_filter( 'litespeed_optimize_js_excludes', array( $this, 'litespeed_js_excludes' ) );
			add_filter( 'litespeed_optm_js_defer_exc', array( $this, 'litespeed_js_excludes' ) );
			add_filter( 'litespeed_optm_gm_js_exc', array( $this, 'litespeed_js_excludes' ) );
			add_filter( 'sgo_js_minify_exclude', array( $this, 'sgo_javascript_exclude' ) );
			add_filter( 'sgo_js_async_exclude', array( $this, 'sgo_javascript_exclude' ) );
			add_filter( 'sgo_javascript_combine_exclude', array( $this, 'sgo_javascript_exclude' ) );
			add_filter( 'sgo_css_combine_exclude', array( $this, 'sgo_css_exclude' ) );
			add_filter( 'sgo_css_minify_exclude', array( $this, 'sgo_css_exclude' ) );
			add_filter( 'wp-optimize-minify-default-exclusions', array( $this, 'wp_optimize_javascript_exclude' ) );
			add_filter( 'autoptimize_filter_js_exclude', array( $this, 'autoptimize_javascript_exclude' ) );
			add_filter( 'autoptimize_filter_css_exclude', array( $this, 'autoptimize_css_exclude' ) );
			add_filter( 'get_rocket_option_remove_unused_css_safelist', array( $this, 'rocket_remove_unused_css_safelist' ) );
			add_filter( 'get_rocket_option_exclude_js', array( $this, 'rocket_exclude_js' ) );
			add_filter( 'get_rocket_option_delay_js_exclusions', array( $this, 'rocket_exclude_js' ) );
			add_filter( 'get_rocket_option_exclude_defer_js', array( $this, 'rocket_exclude_js' ) );

			if ( is_admin() ){
				add_action( 'admin_menu', array( $this, 'admin_menu' ) );
				add_action( 'admin_init', array( $this, 'add_settings_fields' ) );
				add_action( 'admin_init', array( $this, 'add_rate_reminder' ) );
				add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
				add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts_for_feedback' ) );
				add_action( 'admin_footer-plugins.php', array( $this, 'add_code_for_feedback' ) );
				add_action( 'wp_ajax_slbb_buttons_feedback', array( $this, 'buttons_feedback_ajax_handler' ) );
				add_filter( 'http_request_host_is_external', array( $this, 'allow_buttons_feedback_host' ), 10, 3 );
				add_filter( 'register_block_type_args', array( $this, 'add_button_block_to_core_blocks' ), 10, 2 );
			}
		}

		// exclude css WP Rocket
		public function rocket_remove_unused_css_safelist( $excluded ) {
			$list = [ 'safelayout-brilliant-buttons/build/button/style-index.css', ];
			foreach( $list as $li ) {
				if( ! in_array( $li, $excluded ) ) {
					array_push( $excluded, $li );
				}
			}
			return $excluded;
		}

		// exclude js WP Rocket
		public function rocket_exclude_js( $excluded ) {
			$list = [ 'safelayout-brilliant-buttons/build/button/script.js', ];
			foreach( $list as $li ) {
				if( ! in_array( $li, $excluded ) ) {
					array_push( $excluded, $li );
				}
			}
			return $excluded;
		}

		// exclude js autoptimize
		public function autoptimize_javascript_exclude( $excluded ) {
			if( is_string( $excluded ) ) {
				$excluded .= ', safelayout-brilliant-buttons/build/button/script.js';
			}
			return $excluded;
		}

		// exclude js autoptimize
		public function autoptimize_css_exclude( $excluded ) {
			if( is_string( $excluded ) ) {
				$excluded .= ', safelayout-brilliant-buttons/build/button/style-index.css';
			}
			return $excluded;
		}

		// exclude js wp optimize
		public function wp_optimize_javascript_exclude( $excluded ) {
			$excluded[] = 'safelayout-brilliant-buttons/build/button/script.js';
			$excluded[] = 'safelayout-brilliant-buttons/build/button/style-index.css';
			return $excluded;
		}

		// exclude css, LiteSpeed Cache
		public function litespeed_css_excludes( $excludes ) {
			$excludes[] = 'safelayout-brilliant-buttons/build/button/style-index.css';
			return $excludes;
		}

		// exclude js, LiteSpeed Cache
		public function litespeed_js_excludes( $excludes ) {
			$excludes[] = 'safelayout-brilliant-buttons/build/button/script.js';
			return $excludes;
		}

		// exclude js, Siteground SG Optimize
		public function sgo_javascript_exclude( $excluded ) {
			$excluded[] = 'safelayout-safelayout-button-view-script';
			return $excluded;
		}

		// exclude css, Siteground SG Optimize
		public function sgo_css_exclude( $excluded ) {
			$excluded[] = 'safelayout-safelayout-button-style';
			return $excluded;
		}

		// Register elementor widget front js & css file
		public function register_elementor_front() {
			wp_register_style(
				'safelayout-safelayout-button-style',
				SAFELAYOUT_BUTTONS_URL . 'build/button/style-index.css',
				array(),
				SAFELAYOUT_BUTTONS_VERSION,
			);
			wp_register_script(
				'safelayout-safelayout-button-view-script',
				SAFELAYOUT_BUTTONS_URL . 'build/button/script.js',
				array(),
				SAFELAYOUT_BUTTONS_VERSION,
				array(
					'in_footer' => true,
				)
			);
		}

		// deregister script.js from elementor editor
		public function deregister_elementor_script() {
			if ( array_key_exists( 'elementor-preview', $_GET ) ) {
				wp_deregister_script( 'safelayout-safelayout-button-view-script' );
			}
		}

		// Register elementor widget
		public function register_widget( $widgets_manager ) {
			require_once SAFELAYOUT_BUTTONS_PATH . 'elementor/class-safelayout-buttons-elementor-widget.php';
			$widgets_manager->register( new \Safelayout_buttons_elementor_widget() );
		}

		// Register elementor control
		public function register_control( $controls_manager ) {
			require_once SAFELAYOUT_BUTTONS_PATH . 'elementor/class-safelayout-buttons-elementor-control.php';
			$controls_manager->register( new \Safelayout_buttons_elementor_control() );
		}

		// Add js & css file for elementor editor
		public function elementor_enqueue( $controls_manager ) {
			$this->load_packs();
			$this->load_mce_assets();
		}

		// Add js & css file for elementor template
		public function after_elementor_enqueue() {
			wp_enqueue_style(
				'safelayout-elementor-template-style',
				SAFELAYOUT_BUTTONS_URL . 'elementor/templates/template.css',
				array( 'elementor-editor', ),
				SAFELAYOUT_BUTTONS_VERSION,
			);

			wp_enqueue_script(
				'safelayout-elementor-template-script',
				SAFELAYOUT_BUTTONS_URL . 'elementor/templates/template.js',
				array( 'elementor-editor', 'jquery-hover-intent', ),
				SAFELAYOUT_BUTTONS_VERSION,
				true
			);

			wp_enqueue_script(
				'safelayout-brilliant-buttons-template-array',
				SAFELAYOUT_BUTTONS_URL . 'elementor/templates/template-data.js',
				array(),
				SAFELAYOUT_BUTTONS_VERSION,
				true
			);

			$temp = 'SLBBBaseUrl = "' . SAFELAYOUT_BUTTONS_URL . '";';
			wp_add_inline_script(
				'safelayout-brilliant-buttons-template-array',
				$temp,
				'before'
			);
		}

		// Add elementor template data
		public function print_template_views() {
			include_once ( SAFELAYOUT_BUTTONS_PATH . 'elementor/templates/template.php' );
		}

		// Load plugin textdomain
		public function load_textdomain() {
			load_plugin_textdomain( 'safelayout-brilliant-buttons', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
		}

		// Add svg to tinymce
		public function new_mce_options( $init ) {
			$ext = 'span[*],div[*],svg[*],a[*],circle[*],clippath[*],defs[*],ellipse[*],feblend[*],fecolormatrix[*],fecomponenttransfer[*],fecomposite[*],feconvolvematrix[*],fediffuselighting[*],fedisplacementmap[*],fedistantlight[*],feflood[*],fefunca[*],fefuncb[*],fefuncg[*],fefuncr[*],fegaussianblur[*],feimage[*],femerge[*],femergenode[*],femorphology[*],feoffset[*],fepointlight[*],fespecularlighting[*],fespotlight[*],fetile[*],feturbulence[*],filter[*],g[*],mask[*],path[*],pattern[*],polygon[*],polyline[*],radialgradient[*],rect[*],stop[*],lineargradient[*],style[*],symbol[*],use[*],br[*],sl-bb-custom1359[*]';

			if ( isset( $init['extended_valid_elements'] ) ) { 
				$init['extended_valid_elements'] .= ',' . $ext;
			} else {
				$init['extended_valid_elements'] = $ext;
			}

			$s = SAFELAYOUT_BUTTONS_URL . 'build/button/';
			if ( isset( $init['content_css'] ) ) { 
				$init['content_css'] .= ',' . $s . 'style-index.css';
			} else {
				$init['content_css'] = $s . 'style-index.css';
			}
			$this->load_packs();
			$this->load_mce_assets();
			return $init;
		}

		// Loade assets for tinymce
		public function load_mce_assets() {
			$asset = include plugin_dir_path( __FILE__ ) . 'build/mce/index.asset.php';
	
			wp_enqueue_script(
				'safelayout-safelayout-mce-button-editor-script',
				SAFELAYOUT_BUTTONS_URL . 'build/mce/index.js',
				$asset['dependencies'],
				$asset['version'],
				array(
					'in_footer' => true,
				)
			);

			wp_enqueue_style(
				'safelayout-safelayout-button-editor-style',
				SAFELAYOUT_BUTTONS_URL . 'build/button/index.css',
				array_filter(
					$asset['dependencies'],
					function ( $style ) {
						return wp_style_is( $style, 'registered' );
					}
				),
				$asset['version'],
			);
	
			wp_enqueue_style(
				'safelayout-safelayout-button-style',
				SAFELAYOUT_BUTTONS_URL . 'build/button/style-index.css',
				array(),
				$asset['version'],
			);
			foreach ( $asset['dependencies'] as $dep ) {
				wp_enqueue_style( $dep );
			}
		}

		// Prevent tags from texturize
		public function mce_no_texturize_tags( $tags ) {
			$tags[] = 'sl-bb-custom1359';
			return $tags;
		}

		// Replace custom tag with style tag
		public function mce_the_content( $content ) {
			return str_replace( 'sl-bb-custom1359', 'style', $content );
		}

		// Add js & css file for frontend mce
		public function enqueue_mce() {
			$wp_post = get_post();

			if ( $wp_post instanceof WP_Post ) {
				$n0 = 'safelayout-bb-button-block';
				$n1 = 'data-safelayout-mce-button';
				if ( mb_strpos( (string) $wp_post->post_content, $n0 ) !== false || mb_strpos( (string) $wp_post->post_content, $n1 ) !== false ) {
					$this->enqueue_for_front();
				}
			}
		}

		// Add js & css file for frontend
		public function enqueue_for_front() {
			wp_enqueue_style(
				'safelayout-safelayout-button-style',
				SAFELAYOUT_BUTTONS_URL . 'build/button/style-index.css',
				array(),
				SAFELAYOUT_BUTTONS_VERSION,
			);
			wp_enqueue_script(
				'safelayout-safelayout-button-view-script',
				SAFELAYOUT_BUTTONS_URL . 'build/button/script.js',
				array(),
				SAFELAYOUT_BUTTONS_VERSION,
				array(
					'in_footer' => true,
				)
			);
		}

		// Add js plugin file to tinymce
		public function mce_plugins( $plugins ) {
			$plugins['safelayout_buttons'] = SAFELAYOUT_BUTTONS_URL . 'assets/js/plugin.js';
			return $plugins;
		}

		// Add a toolbar button to tinymce
		public function mce_buttons( $toolbarButtons ) {
			$toolbarButtons[] = 'safelayout_buttons';
			return $toolbarButtons;
		}

		// activated plugin
		public function activated_plugin( $plugin ) {
			if( $plugin == plugin_basename( __FILE__ ) ) {
				$rate = $this->get_rate_data();
			}
		}

		// Add settings link on plugin page
		public function plugin_action_links( $links ) {
			$settings_link = array(
				'<a href="' . admin_url( 'options-general.php?page=safelayout-brilliant-buttons' ) . '">' . esc_html__( 'Settings', 'safelayout-brilliant-buttons' ) . '</a>',
			);
			$links = array_merge( $links, $settings_link );
			return $links;
		}

		// Register button block
		public function register_block() {
			if ( ! function_exists( 'register_block_type' ) ) {
				// Gutenberg is not active.
				return;
			}
			register_block_type( __DIR__ . '/build/button' );
		}

		// Register patterns
		public function register_patterns() {
			$block_pattern_categories = array(
				'safelayout'   => array( 'label' => __( 'Safelayout', 'safelayout-brilliant-buttons' ) ),
				'button' => array( 'label' => __( 'Button', 'safelayout-brilliant-buttons' ) ),
			);
		
			foreach ( $block_pattern_categories as $name => $properties ) {
				if ( ! \WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
					register_block_pattern_category( $name, $properties );
				}
			}
	
			$block_patterns = array(
				array(
					'slug' => 'buttons-01',
					'file' => 'pattern001',
				),
				array(
					'slug' => 'buttons-02',
					'file' => 'pattern002',
				),
				array(
					'slug' => 'buttons-03',
					'file' => 'pattern003',
				),
				array(
					'slug' => 'buttons-04',
					'file' => 'pattern004',
				),
				array(
					'slug' => 'buttons-05',
					'file' => 'pattern005',
				),
				array(
					'slug' => 'buttons-06',
					'file' => 'pattern006',
				),
				array(
					'slug' => 'buttons-07',
					'file' => 'pattern007',
				),
				array(
					'slug' => 'buttons-08',
					'file' => 'pattern008',
				),
				array(
					'slug' => 'buttons-09',
					'file' => 'pattern009',
				),
			);
	
			foreach ( $block_patterns as $block_pattern ) {
				$pattern_file = SAFELAYOUT_BUTTONS_PATH . 'assets/patterns/' . $block_pattern['file'] . '.php';
		
				register_block_pattern(
					'safelayout/' . $block_pattern['slug'],
					require $pattern_file
				);
			}
		}

		// Return rate reminder data
		public function get_rate_data() {
			$rate = get_option( 'safelayout_buttons_options_rate' );
			if ( ! $rate ) {
				$rate = array(
					'time'	=> time(),
					'later'	=> time(),
				);
				update_option( 'safelayout_buttons_options_rate', $rate );
			}
			return $rate;
		}

		// Return buttons upgrade data
		public function get_upgrade_data() {
			$upgrade = get_option( 'safelayout_buttons_options_upgrade' );
			if ( ! $upgrade ) {
				$upgrade = time();
				update_option( 'safelayout_buttons_options_upgrade', $upgrade );
			}
			return $upgrade;
		}

		// Add rate reminder
		public function add_rate_reminder() {
			if ( is_super_admin() ) {
				$rate = $this->get_rate_data();
				$upgrade = $this->get_upgrade_data();
				if ( $upgrade < strtotime( '-9 day' ) ) {
					add_action( 'admin_notices', array( $this, 'show_upgrade_message' ), 0 );
					add_action( 'wp_ajax_slbb_buttons_upgrade', array( $this, 'buttons_upgrade_ajax_handler' ) );
					add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts_for_rate_reminder' ) );
				} else if ( $upgrade < strtotime( '-1 day' ) && $rate['later'] != 0 && $rate['later'] < strtotime( '-3 day' ) ) {
					add_action( 'admin_notices', array( $this, 'show_rate_reminder' ), 0 );
					add_action( 'wp_ajax_slbb_buttons_rate_reminder', array( $this, 'buttons_rate_reminder_ajax_handler' ) );
					add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts_for_rate_reminder' ) );
				}
			}
		}

		// ajax handlers for rate reminder
		public function buttons_rate_reminder_ajax_handler() {
			check_ajax_referer( 'slbb_buttons_ajax' );
			$type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
			$rate = $this->get_rate_data();
			if ( $type === 'sl-bb-rate-later' ) {
				$rate['later'] = time();
			} else {
				$rate['later'] = 0;
			}
			update_option( 'safelayout_buttons_options_rate', $rate );

			wp_die();
		}

		// Show rate reminder
		public function show_rate_reminder() {
			global $current_user;
			?>
			<div id="sl-bb-rate-reminder" class="notice notice-success is-dismissible">
				<img alt="safelayout brilliant buttons" src="<?php echo esc_url( SAFELAYOUT_BUTTONS_URL . 'assets/image/icon-128x128.gif' ); ?>">
				<div class="sl-bb-msg-container">
					<p>
						<?php
						printf(
							/* translators: 1: current user name, 2: Safelayout Brilliant Buttons, 3: give it a 5-star rating on WordPress.org, 4: We really appreciate your support! */
							esc_html__(
								'Howdy, %1$s! Thank you for using %2$s! Could you please do us a BIG favor and %3$s? Just to help us spread the word and boost our motivation.%4$s',
								'safelayout-brilliant-buttons'
							),
							'<strong>' . esc_html( $current_user->display_name ) . '</strong>',
							'<strong>' . esc_html__( 'Safelayout Brilliant Buttons', 'safelayout-brilliant-buttons' ) . '</strong>',
							'<strong>' . esc_html__( 'give it a 5-star rating on WordPress.org', 'safelayout-brilliant-buttons' ) . '</strong>',
							'<br>' . esc_html__( 'We really appreciate your support!', 'safelayout-brilliant-buttons' ) . '<strong> -Safelayout-</strong>'
						);
						?>
					</p>
					<div class="sl-bb-rate-reminder-footer">
						<a id="sl-bb-rate-ok" class="button" href="https://wordpress.org/support/plugin/safelayout-brilliant-buttons/reviews/?filter=5" target="_blank">
							<?php esc_html_e( 'Yes, I will help ★★★★★', 'safelayout-brilliant-buttons' ); ?>
						</a>
						<a id="sl-bb-rate-later" class="button"><span class="dashicons dashicons-calendar"></span><?php esc_html_e( 'Remind me later', 'safelayout-brilliant-buttons' ); ?></a>
						<a id="sl-bb-rate-already" class="button"><span class="dashicons dashicons-smiley"></span><?php esc_html_e( 'I already did', 'safelayout-brilliant-buttons' ); ?></a>
					</div>
				</div>
			</div>
			<?php
		}

		// ajax handlers for upgrade message
		public function buttons_upgrade_ajax_handler() {
			check_ajax_referer( 'slbb_buttons_ajax' );
			update_option( 'safelayout_buttons_options_upgrade', time() );
			wp_die();
		}

		// Show upgrade message
		public function show_upgrade_message() {
			global $current_user;
			?>
			<div id="sl-bb-upgrade-reminder" class="notice notice-success">
				<div class="sl-bb-msg-container" style="width: initial;">
					<img alt="safelayout brilliant buttons" src="<?php echo esc_url( SAFELAYOUT_BUTTONS_URL . 'assets/image/safelayout-brilliant-buttons-pro-note.png?ver=' . SAFELAYOUT_BUTTONS_VERSION ); ?>"  style="max-width: 100%;height:auto;">
					<p>
						<?php
						printf(
							/* translators: 1: current user name, 2: Safelayout Brilliant Buttons, 3: upgrading to the PRO version, 4: support the developer, 5: We really appreciate your support! */
							esc_html__(
								'Howdy, %1$s! Thank you for using %2$s! Please consider %3$s, get full features and %4$s.%5$s',
								'safelayout-brilliant-buttons'
							),
							'<strong>' . esc_html( $current_user->display_name ) . '</strong>',
							'<strong>' . esc_html__( 'Safelayout Brilliant Buttons', 'safelayout-brilliant-buttons' ) . '</strong>',
							'<strong>' . esc_html__( 'upgrading to the PRO version', 'safelayout-brilliant-buttons' ) . '</strong>',
							'<strong>' . esc_html__( 'support the developer', 'safelayout-brilliant-buttons' ) . '</strong>',
							'<br>' . esc_html__( 'We really appreciate your support!', 'safelayout-brilliant-buttons' ) . '<strong> -Safelayout-</strong>'
						);
						?>
					</p>
					<div class="sl-bb-upgrade-reminder-footer">
						<a id="sl-bb-upgrade" class="button" href="https://safelayout.com/safelayout-brilliant-buttons-pro/" target="_blank">
							<span class="dashicons dashicons-smiley"></span><?php esc_html_e( 'Upgrade to Pro', 'safelayout-brilliant-buttons' ); ?>
						</a>
						<a id="sl-bb-upgrade-later" class="button">
							<span class="dashicons dashicons-no-alt"></span><?php esc_html_e( 'No Thanks', 'safelayout-brilliant-buttons' ); ?>
						</a> 
					</div>
				</div>
			</div>
			<?php
		}

		// allow feedback host
		public function allow_buttons_feedback_host( $allow, $host, $url ) {
			return ( false !== strpos( $host, 'safelayout' ) ) ? true : $allow;
		}

		// Add css and js file for rate reminder
		public function enqueue_scripts_for_rate_reminder( $hook ) {
			$this->enqueue_scripts_for_feedback_and_rate();
		}

		// Add css and js file for feedback
		public function enqueue_scripts_for_feedback( $hook ) {
			if ( $hook != 'plugins.php' ) {
				return;
			}
			$this->enqueue_scripts_for_feedback_and_rate();
		}

		// Add css and js file for feedback & rate reminder
		public function enqueue_scripts_for_feedback_and_rate() {
			wp_enqueue_script(
				'safelayout-brilliant-buttons-script-admin-feedback',
				SAFELAYOUT_BUTTONS_URL . 'assets/js/safelayout-brilliant-buttons-admin-feedback.min.js',
				array( 'jquery' ),
				SAFELAYOUT_BUTTONS_VERSION,
				true
			);
			$temp_obj = array(
				'ajax_url'	=> admin_url( 'admin-ajax.php' ),
				'nonce'		=> wp_create_nonce( 'slbb_buttons_ajax' ),
			);
			wp_localize_script( 'safelayout-brilliant-buttons-script-admin-feedback', 'slbbButtonsAjax', $temp_obj );
			wp_enqueue_style(
				'safelayout-brilliant-buttons-style-admin-feedback',
				SAFELAYOUT_BUTTONS_URL . 'assets/css/safelayout-brilliant-buttons-admin-feedback.min.css',
				array(),
				SAFELAYOUT_BUTTONS_VERSION
			);
		}

		// ajax handlers for feedback
		public function buttons_feedback_ajax_handler() {
			check_ajax_referer( 'slbb_buttons_ajax' );
			$type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
			$text = sanitize_text_field( wp_unslash( $_POST['text'] ) );
			$apiUrl = 'https://safelayout.com/feedback/feedback.php';
			$rate = $this->get_rate_data();

			$data = array (
				'php'		=> phpversion(),
				'wordpress'	=> get_bloginfo( 'version' ),
				'version'	=> SAFELAYOUT_BUTTONS_VERSION,
				'time'		=> $rate['time'],
				'type'		=> $type,
				'text'		=> $text,
				'plugin'	=> 'buttons',
			);
			$arg = array (
				'body'			=> $data,
				'timeout'		=> 30,
				'sslverify'		=> false,
				'httpversion'	=> 1.1,
			);

			$ret = wp_safe_remote_post( $apiUrl, $arg );
			if ( is_wp_error( $ret ) ) {
				$apiUrl = 'http://' . substr( $apiUrl, 8 );
				$ret = wp_remote_post( $apiUrl, $arg );
			}
			var_dump( $ret );

			wp_die();
		}

		// Add html code for feedback
		public function add_code_for_feedback( $hook ) {
			?>
			<div id="sl-bb-feedback-modal">
				<div class="sl-bb-feedback-window">
					<div class="sl-bb-feedback-header"><?php esc_html_e( 'Quick Feedback', 'safelayout-brilliant-buttons' ); ?></div>
					<div class="sl-bb-feedback-body">
						<div class="sl-bb-feedback-title">
							<?php esc_html_e( 'If you have a moment, please share why you are deactivating', 'safelayout-brilliant-buttons' ); ?>
							<span class="dashicons dashicons-smiley"></span>
						</div>
						<div class="sl-bb-feedback-item">
							<input type="radio" name="sl-bb-feedback-radio" value="temporary deactivation" id="sl-bb-feedback-item1">
							<label for="sl-bb-feedback-item1"><?php esc_html_e( "It's a temporary deactivation", 'safelayout-brilliant-buttons' ); ?></label>
						</div>
						<div class="sl-bb-feedback-item">
							<input type="radio" name="sl-bb-feedback-radio" value="site broken" id="sl-bb-feedback-item2">
							<label for="sl-bb-feedback-item2"><?php esc_html_e( 'The plugin broke my site', 'safelayout-brilliant-buttons' ); ?></label><br>
							<textarea rows="2" id="sl-bb-feedback-item2-text" placeholder="<?php esc_html_e( 'Please explain the problem.', 'safelayout-brilliant-buttons' ); ?>"></textarea>
						</div>
						<div class="sl-bb-feedback-item">
							<input type="radio" name="sl-bb-feedback-radio" value="better plugin" id="sl-bb-feedback-item5">
							<label for="sl-bb-feedback-item5"><?php esc_html_e( 'I found a better plugin', 'safelayout-brilliant-buttons' ); ?></label><br>
							<input type="text" id="sl-bb-feedback-item5-text" placeholder="<?php esc_html_e( "What's the plugin name?", 'safelayout-brilliant-buttons' ); ?>">
						</div>
						<div class="sl-bb-feedback-item">
							<input type="radio" name="sl-bb-feedback-radio" value="Other" id="sl-bb-feedback-item6">
							<label for="sl-bb-feedback-item6"><?php esc_html_e( 'Other', 'safelayout-brilliant-buttons' ); ?></label><br>
							<textarea rows="2" id="sl-bb-feedback-item6-text" placeholder="<?php esc_html_e( 'Please share the reason.', 'safelayout-brilliant-buttons' ); ?>"></textarea>
						</div>
					</div>
					<div class="sl-bb-feedback-footer">
						<a id="sl-bb-feedback-submit" class="button"><?php esc_html_e( 'Submit & Deactivate', 'safelayout-brilliant-buttons' ); ?></a>
						<a id="sl-bb-feedback-skip" class="button"><?php esc_html_e( 'Skip & Deactivate', 'safelayout-brilliant-buttons' ); ?></a> 
					</div>
					<div id="sl-bb-feedback-loader"><div id="sl-bb-dots-rate" class="sl-bb-spin-rate"><div><span></span><span></span><span></span><span></span></div>
					<div id="sl-bb-feedback-loader-msg"><?php esc_html_e( 'Wait ...', 'safelayout-brilliant-buttons' ); ?></div></div></div>
					<div id="sl-bb-feedback-loader-msg-tr"><?php esc_html_e( 'Redirecting ...', 'safelayout-brilliant-buttons' ); ?></div>
				</div>
			</div>
			<?php
		}

		// Load icon packs
		public function load_packs() {
			$packs = $this->get_packs();
			$first = '';
			foreach ( $packs['icons'] as $icon ) {
				if ( $icon['active'] === 'yes' ) {
					$path = SAFELAYOUT_BUTTONS_URL . 'packs/' . $icon['file_name'] . '.js';
					if ( $first === '' ) {
						$first = $icon['file_name'];
					}
					wp_enqueue_script(
						'safelayout-pack-' . $icon['file_name'] . '-script',
						$path,
						array(),
						SAFELAYOUT_BUTTONS_VERSION,
						false
					);
				}
			}

			if ( ! $this->icons_list_key ) {
				$this->icons_list_key = true;
				$temp = "SLBBmceButtons = {};if (!(typeof SLEIiconArray !== 'undefined' && SLEIiconArray)) {SLEIiconArray = []}";
				wp_add_inline_script(
					'safelayout-pack-' . $first . '-script',
					$temp,
					'before'
				);
			}
		}

		// Set translations
		public function set_translations() {
			wp_set_script_translations(
				'safelayout-safelayout-button-editor-script',
				'safelayout-brilliant-buttons',
				plugin_dir_path( __FILE__ ) . 'languages'
			);
		}

		// Add block category
		public function safelayout_blocks_categories_add( $block_categories, $editor_context ) {
			$key = false;
			foreach ( $block_categories as $block_cat ) {
				if ( $block_cat['slug'] === 'blocks-safelayout-category' ) {
					$key = true;
					break;
				}
			}
			if ( ! $key ) {
				array_unshift(
					$block_categories,
					array(
						'slug'  => 'blocks-safelayout-category',
						'title' => __( 'Blocks By Safelayout', 'safelayout-brilliant-buttons' ),
						'icon'  => null,
					)
				);
			}
			return $block_categories;
		}

		// Add an admin menu for plugin
		public function admin_menu() {
			$this->options_page_hook = add_options_page(
				esc_html__( 'Safelayout Brilliant Buttons Options', 'safelayout-brilliant-buttons' ),
				esc_html__( 'Safelayout Buttons', 'safelayout-brilliant-buttons' ),
				'manage_options',
				'safelayout-brilliant-buttons',
				array( $this, 'admin_menu_page' )
			);
		}

		// Admin menu page
		public function admin_menu_page() {
			$packs = $this->get_packs();

			$active_tab = isset( $_GET['tab'] ) ? sanitize_text_field( wp_unslash( $_GET['tab'] ) ) : 'general';
			$general_class = 'nav-tab' . ( $active_tab == 'general' ? ' nav-tab-active' : '' );
			?>
			<div class="wrap">
				<h2><?php esc_html_e( 'Safelayout Brilliant Buttons Options', 'safelayout-brilliant-buttons' ); ?></h2>
				<?php settings_errors( 'safelayout-brilliant-buttons' ); ?>
				<h2 class="nav-tab-wrapper">
					<a href="?page=safelayout-brilliant-buttons&tab=general" class="<?php echo esc_attr( $general_class ); ?>"><?php esc_html_e( 'General', 'safelayout-brilliant-buttons' ); ?></a>
				</h2>
				<div id="sl-bb-packs-settings">
					<form method="post" action="options.php">
						<?php if( $active_tab == "general" ): ?>
							<?php settings_fields( 'safelayout_buttons_packs_group_1' ); ?>
							<input type="hidden" name="safelayout_icons_packs[validate-key]" value="true">
							<div>
								<table class="sl-bb-packs-table">
									<caption><?php esc_html_e( 'Safelayout Brilliant Buttons Installed Icon Packs', 'safelayout-brilliant-buttons' ); ?></caption>
									<thead>
										<tr>
											<th><?php esc_html_e( 'No.', 'safelayout-brilliant-buttons' ); ?></th>
											<th><?php esc_html_e( 'Pack Name', 'safelayout-brilliant-buttons' ); ?></th>
											<th><?php esc_html_e( 'Pack Status', 'safelayout-brilliant-buttons' ); ?></th>
										</tr>
									</thead>
									<tbody>
										<?php 
											foreach ( $packs['icons'] as $index => $pack ) {
												echo '<tr><td>' . esc_html( $index + 1 ) . '</td><td>' . esc_html( $pack['name'] ) .
													'</td><td><input type="checkbox" name="safelayout_icons_packs[safelayout-' .
													esc_html( $pack['file_name'] ) . ']" value="yes" ' .
													checked( esc_attr( $pack['active'] ), 'yes', false ) . ' id="safelayout-' .
													esc_html( $pack['file_name'] ) . '"><label for="safelayout-' . esc_html( $pack['file_name'] ) .
													'">' . esc_html__( 'Active', 'safelayout-brilliant-buttons' ) . '</label></td></tr>';
											}
										?>
									</tbody>
								</table>
							</div>
							<div style="height: 50px;">
								<?php submit_button( esc_html__( 'Save Changes', 'safelayout-brilliant-buttons' ), 'primary', 'submit', false ); ?>
							</div>
						<?php endif; ?>
					</form>
				</div>
			</div>
			<?php
		}

		// Add settings fields
		public function add_settings_fields() {
			register_setting(
				'safelayout_buttons_packs_group_1',
				'safelayout_icons_packs',
				array( $this, 'option_sanitize_packs' )
			);
		}

		// Add css file for settings page
		public function enqueue_scripts( $hook ) {
			if ( ! $hook || $hook != $this->options_page_hook ) {
				return;
			}
			wp_enqueue_style(
				'safelayout-brilliant-buttons-style-admin',
				SAFELAYOUT_BUTTONS_URL . 'assets/css/safelayout-brilliant-buttons-admin.min.css',
				array(),
				SAFELAYOUT_BUTTONS_VERSION
			);
			$this->load_packs();
			$this->load_mce_assets();
		}

		// Sanitize options
		public function option_sanitize_packs( $input ) {
			if ( ! isset( $input["validate-key"] ) ) {
				return $input;
			}
			$packs = $this->get_packs();
			$packs['version'] = SAFELAYOUT_BUTTONS_VERSION;
			$key = false;
			
			foreach ( $packs['icons'] as $index => $pack ) {
				$id = 'safelayout-' . esc_html( $pack['file_name'] );
				if ( isset( $input[ $id ] ) ) {
					$packs['icons'][$index]['active'] = 'yes';
					$key = true;
				} else {
					$packs['icons'][$index]['active'] = 'no';
				}
			}
			if ( $key ) {
				return $packs;
			} else {
				return $this->get_packs();
			}
		}

		// Return default packs
		public function get_default_packs() {
			$default = array(
				'version'	=> SAFELAYOUT_BUTTONS_VERSION,
				'icons'		=> [
					array( 'name' => 'Themeisle',					'active' => 'yes', 'file_name' => 'themeisle-icons' ),
					array( 'name' => 'Wordpress Dashicons',			'active' => 'yes', 'file_name' => 'wordpress-dashicons-icons' ),
					array( 'name' => 'Wordpress',					'active' => 'yes', 'file_name' => 'wordpress-icons' ),
				],
			);
			return $default;
		}

		// Return packs
		public function get_packs() {
			$packs = get_option( 'safelayout_icons_packs' );
			if ( ! $packs ) {
				$packs = $this->get_default_packs();
				update_option( 'safelayout_icons_packs', $packs );
			}
			return $packs;
		}

		// get wp_kses allowed html tags
		public static function allowed_html_for_kses() {
			return Safelayout_brilliant_buttons::allowed_html( array(), 'post' );
		}

		// Add allowed html tags
		public static function allowed_html( $tags, $context ) {
			if ( 'post' === $context ) {
				$tags['div'] = array(
					'class' => true,
					'id' => true,
					'style' => true,
					'sldatabutton' => true,
					'aria-label' => true,
					'title' => true,
					'data-*' => true,
				);

				$tags['a'] = array(
					'id' => true,
					'style' => true,
					'href' => true,
					'target' => true,
					'rel' => true,
					'aria-label' => true,
					'title' => true,
					'class' => true,
					'data-*' => true,
				);

				$tags['span'] = array(
					'id' => true,
					'class' => true,
					'style' => true,
					'sldatabutton' => true,
					'contenteditable' => true,
					'aria-label' => true,
					'title' => true,
					'data-*' => true,
				);

				$tags['br'] = array();

				$tags['style'] = array(
					'id' => true,
					'type' => true,
					'data-*' => true,
				);

				$tags['sl-bb-custom1359'] = array(
					'id' => true,
					'type' => true,
					'data-*' => true,
				);

				$tags['svg'] = array(
					'id' => true,
					'class' => true,
					'style' => true,
					'viewbox' => true,
					'filter' => true,
					'focusable' => true,
					'xmlns' => true,
					'preserveaspectratio' => true,
					'aria-hidden' => true,
					'data-*' => true,
					'role' => true,
					'height' => true,
					'width' => true,
				);

				$tags['defs'] = array(
					'id' => true,
					'key' => true,
				);

				$tags['lineargradient'] = array(
					'id' => true,
					'x1' => true,
					'y1' => true,
					'x2' => true,
					'y2' => true,
				);

				$tags['radialgradient'] = array(
					'id' => true,
					'cx' => true,
					'cy' => true,
					'r'	=> true,
					'fx' => true,
					'fy' => true,
				);

				$tags['stop'] = array(
					'stop-color' => true,
					'offset' => true,
					'stop-opacity' => true,
					'key' => true,
				);

				$tags['ellipse'] = array(
					'id' => true,
					'class' => true,
					'style' => true,
					'filter' => true,
					'cx' => true,
					'cy' => true,
					'rx' => true,
					'ry' => true,
					'fill' => true,
				);

				$tags['g'] = array(
					'id' => true,
					'class' => true,
					'style' => true,
					'filter' => true,
					'viewbox' => true,
					'fill' => true,
					'stroke' => true,
				);

				$tags['rect'] = array(
					'id' => true,
					'class' => true,
					'style' => true,
					'filter' => true,
					'x' => true,
					'y' => true,
					'width' => true,
					'height' => true,
					'rx' => true,
					'fill' => true,
					'stroke' => true,
					'stroke-width' => true,
					'key' => true,
				);

				$tags['path'] = array(
					'id' => true,
					'class' => true,
					'style' => true,
					'filter' => true,
					'd' => true,
					'fill' => true,
					'stroke' => true,
					'stroke-width' => true,
					'vector-effect' => true,
					'key' => true,
				);

				$tags['symbol'] = array(
					'id' => true,
					'class' => true,
					'style' => true,
					'filter' => true,
					'x' => true,
					'y' => true,
					'width' => true,
					'height' => true,
					'viewbox' => true,
				);

				$tags['use'] = array(
					'id' => true,
					'class' => true,
					'style' => true,
					'filter' => true,
					'viewbox' => true,
					'href' => true,
					'xlink:href' => true,
				);

				$tags['filter'] = array(
					'id' => true,
					'x' => true,
					'y' => true,
					'width' => true,
					'height' => true,
					'color-interpolation-filters' => true,
				);

				$tags['fegaussianblur'] = array(
					'stddeviation' => true,
				);

				$tags['fespecularlighting'] = array(
					'x' => true,
					'y' => true,
					'surfacescale' => true,
					'specularconstant' => true,
					'specularexponent' => true,
					'lighting-color' => true,
				);

				$tags['fespotlight'] = array(
					'x' => true,
					'y' => true,
					'z' => true,
					'pointsatx' => true,
					'pointsaty' => true,
					'pointsatz' => true,
					'specularexponent' => true,
					'limitingconeangle' => true,
				);

				$tags['fecomposite'] = array(
					'operator' => true,
					'in' => true,
					'in2' => true,
					'k1' => true,
					'k2' => true,
					'k3' => true,
					'k4' => true,
				);

				$tags['femerge'] = array(
					'result' => true,
				);

				$tags['femergenode'] = array(
					'in' => true,
				);

				$tags['fedistantlight'] = array(
					'azimuth' => true,
					'elevation' => true,
				);

				$tags['fepointlight'] = array(
					'x' => true,
					'y' => true,
					'z' => true,
				);

				$tags['fediffuselighting'] = array(
					'x' => true,
					'y' => true,
					'surfacescale' => true,
					'diffuseconstant' => true,
					'lighting-color' => true,
				);

				$tags['clippath'] = array(
					'id' => true,
					'clippathunits' => true,
				);
			}

			return $tags;
		}

		// Add allowed css style
		public function allowed_css( $styles ) {
			$styles[] = 'transform';
			$styles[] = 'display';
			$styles[] = 'text-shadow';
			$styles[] = 'user-select';
			return $styles;
		}

		//add icon block to core navigation
		public function add_button_block_to_core_blocks( $args, $block_type ) {
			if ( 'core/navigation' === $block_type ) {
				$args['allowed_blocks'] ??= [];
				$args['allowed_blocks'][] = 'safelayout/safelayout-button';
			}
			return $args;
		}

		// Add allowed css for css value contains \ ( & } = or comments
		public function attr_allow_css( $allow_css, $css_test_string ) {
			if ( strpos( $css_test_string, 'filter' ) === false &&
				strpos( $css_test_string, 'text-shadow' ) === false &&
				strpos( $css_test_string, 'box-shadow' ) === false &&
				strpos( $css_test_string, 'border' ) === false &&
				strpos( $css_test_string, '--sl' ) === false &&
				strpos( $css_test_string, 'transform' ) === false ) {
				return $allow_css;
			} else {
				return true;
			}
		}
	}
	new Safelayout_brilliant_buttons();
}