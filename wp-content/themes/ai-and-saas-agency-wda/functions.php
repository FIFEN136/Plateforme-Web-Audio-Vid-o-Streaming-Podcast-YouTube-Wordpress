<?php

    function wpdevart_ai_and_saas_agency_wda_files() {
        wp_enqueue_style('wpdevart_ai_and_saas_agency_wda_styles', get_template_directory_uri() . '/assets/css/front-end/index.css');
        wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/icons/font-awesome/css/fontawesome.min.css');
		wp_enqueue_style('wpdevart-block-patterns-frontend', get_template_directory_uri().'/inc/block-patterns/css/block-frontend.css');
        wp_enqueue_style( 'wpdevart-theme-fonts', wpdevart_ai_and_saas_agency_wda_enqueue_fonts_url(), array(), null );
        wp_enqueue_script('wpdevart-js', get_template_directory_uri() . '/assets/js/front-end/index.js', array('jquery'), '1.0', true);
        wp_enqueue_script('wpdevart-search-js', get_template_directory_uri() . '/assets/js/front-end/search.js', array('jquery'), '1.0', true);
    }

    add_action('wp_enqueue_scripts', 'wpdevart_ai_and_saas_agency_wda_files');
	
	function wpdevart_ai_and_saas_agency_wda_admin_scripts() {
		wp_enqueue_style('wpdevart-block-patterns-editor', get_template_directory_uri().'/inc/block-patterns/css/block-editor.css');
	}
	
	add_action( 'enqueue_block_editor_assets', 'wpdevart_ai_and_saas_agency_wda_admin_scripts' );

    function wpdevart_ai_and_saas_agency_wda_theme_features() {
        register_nav_menu('primary_menu', esc_html__( 'Primary Menu', 'ai-and-saas-agency-wda'));
        load_theme_textdomain( 'ai-and-saas-agency-wda', get_template_directory() . '/languages' ); 
        add_theme_support( 'custom-logo' );
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('wp-block-styles');
        add_theme_support('widgets');
        add_theme_support('widgets-block-editor');
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( "responsive-embeds" );
        add_theme_support( "align-wide" );
        add_editor_style( 'editor-style.css' );
        add_theme_support('woocommerce');
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
    }

    add_action('after_setup_theme', 'wpdevart_ai_and_saas_agency_wda_theme_features');

    ##################------ INCLUDING CUSTOM CSS ------##################
    
    require( get_template_directory() . '/assets/css/admin/wpdevart-theme-styles.php' );
    
    ##################------ INCLUDING DEFAULT OPTIONS ------##################

    require( get_template_directory() . '/inc/admin/wpdevart-add-default-options.php' );
	
    ##################------ INCLUDING BREADCRUMBS ------##################

    require( get_template_directory() . '/inc/front-end/wpdevart-breadcrumbs.php' );

    ##################------ INCLUDING CUSTOMIZER ------##################

    require( get_template_directory() . '/inc/customizer/customizer.php' );

    ##################------ INCLUDING FONTS ------##################

    require( get_template_directory() . '/inc/front-end/wpdevart-fonts.php' );

    ##################------ INCLUDING MENU FILE ------##################

    require( get_template_directory() . '/inc/front-end/walker.php' );
	
	##################------ INCLUDING BLOCK PATTERNS ------##################

	require get_template_directory() . '/inc/block-patterns/block-patterns.php';

    ##################------ INCLUDING GETTING STARTED NOTICE ------##################

    require( get_template_directory() . '/inc/getting-started/getting-started.php' );

    ##################------ INCLUDING THEME PAGE ------##################

    require( get_template_directory() . '/inc/getting-started/theme-page.php' );

    ##################------ INCLUDING WOOCOMMERCE ------##################

    if ( class_exists( 'WooCommerce' ) ) {
        require( get_template_directory() . '/inc/front-end/woocommerce-wpdevart.php' );
    }
  
    ##################------ Logo ------##################

    function wpdevart_ai_and_saas_agency_wda_custom_logo_setup() {
        $defaults = array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true, 
        );
        add_theme_support( 'custom-logo', $defaults );
    }
    add_action( 'after_setup_theme', 'wpdevart_ai_and_saas_agency_wda_custom_logo_setup' );

    ##################------ REGISTERING WIDGETS ------##################

    function wpdevart_ai_and_saas_agency_wda_widgets_init() {
        $defaults = array(
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'wpdevart_ai_and_saas_agency_wda_blog_sidebar',
            'name'        => esc_html__( 'Blog Sidebar', 'ai-and-saas-agency-wda'),
            'description' => esc_html__( 'Default sidebar for blog/archive and post/page.', 'ai-and-saas-agency-wda'),
        ) ) );	
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'wpdevart_ai_and_saas_agency_wda_footer_large_widget',
            'name'        => esc_html__( 'Footer Large Widget', 'ai-and-saas-agency-wda'),
            'description' => esc_html__( 'Large footer widget.', 'ai-and-saas-agency-wda'),
        ) ) );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'wpdevart_ai_and_saas_agency_wda_footer_widget_01',
            'name'        => esc_html__( 'Footer Widget 1', 'ai-and-saas-agency-wda'),
            'description' => esc_html__( 'A regular footer widget.', 'ai-and-saas-agency-wda'),
        ) ) );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'wpdevart_ai_and_saas_agency_wda_footer_widget_02',
            'name'        => esc_html__( 'Footer Widget 2', 'ai-and-saas-agency-wda'),
            'description' => esc_html__( 'A regular footer widget.', 'ai-and-saas-agency-wda'),
        ) ) );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'wpdevart_ai_and_saas_agency_wda_footer_widget_03',
            'name'        => esc_html__( 'Footer Widget 3', 'ai-and-saas-agency-wda'),
            'description' => esc_html__( 'A regular footer widget.', 'ai-and-saas-agency-wda'),
        ) ) );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'wpdevart_ai_and_saas_agency_wda_footer_widget_04',
            'name'        => esc_html__( 'Footer Widget 4', 'ai-and-saas-agency-wda'),
            'description' => esc_html__( 'A regular footer widget.', 'ai-and-saas-agency-wda'),
        ) ) );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'wpdevart_ai_and_saas_agency_wda_woocommerce_sidebar',
            'name'        => esc_html__( 'WooCommerce Sidebar', 'ai-and-saas-agency-wda'),
            'description' => esc_html__( 'Sidebar for WooCommerce store pages.', 'ai-and-saas-agency-wda'),
        ) ) );        
    }
    add_action( 'widgets_init', 'wpdevart_ai_and_saas_agency_wda_widgets_init' );