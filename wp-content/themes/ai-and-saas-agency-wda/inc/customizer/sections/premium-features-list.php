<?php

    $wp_customize->register_section_type( 'Wpdevart_Premium_Features_List' );


	##################------ Premium Features Sections ------##################

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_ai_and_saas_agency_wda_theme_general_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'ai-and-saas-agency-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-ai-saas-agency-theme')),
				'premium_features_list' => array(
					esc_html__( '+40 Other Popular Fonts', 'ai-and-saas-agency-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'ai-and-saas-agency-wda' ),
					esc_html__( 'Preloader', 'ai-and-saas-agency-wda' ),
                    esc_html__( 'Button Animation', 'ai-and-saas-agency-wda' ),
                    esc_html__( '+13 Beautiful Patterns', 'ai-and-saas-agency-wda' ),
					esc_html__( 'Customizable Search Overlay', 'ai-and-saas-agency-wda' ),
					esc_html__( 'Back To Top Button', 'ai-and-saas-agency-wda' ),
					esc_html__( '... and Other Premium Features', 'ai-and-saas-agency-wda' ),
				),
				'panel'         => 'wpdevart_ai_and_saas_agency_wda_general_settings_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_ai_and_saas_agency_wda_theme_header_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'ai-and-saas-agency-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-ai-saas-agency-theme')),
				'premium_features_list' => array(
					esc_html__( 'Sticky Header Feature', 'ai-and-saas-agency-wda' ),
					esc_html__( 'Sticky Header Feature for Mobile', 'ai-and-saas-agency-wda' ),
                    esc_html__( 'Logo Animations', 'ai-and-saas-agency-wda' ),
					esc_html__( 'Search Button Animations', 'ai-and-saas-agency-wda' ),
                    esc_html__( 'Woo Cart Animations', 'ai-and-saas-agency-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'ai-and-saas-agency-wda' ),
					esc_html__( '... and Other Premium Features', 'ai-and-saas-agency-wda' ),
				),
				'panel'         => 'wpdevart_ai_and_saas_agency_wda_header_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_ai_and_saas_agency_wda_theme_single_post_page_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'ai-and-saas-agency-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-ai-saas-agency-theme')),
				'premium_features_list' => array(
					esc_html__( '+13 Beautiful Patterns', 'ai-and-saas-agency-wda' ),
                    esc_html__( 'Post/Page Title Animations', 'ai-and-saas-agency-wda' ),
					esc_html__( 'Post/Page Banner Animations', 'ai-and-saas-agency-wda' ),
                    esc_html__( '4 Animated Banner Elements', 'ai-and-saas-agency-wda' ),
					esc_html__( 'Animated Elements Colors', 'ai-and-saas-agency-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'ai-and-saas-agency-wda' ),
					esc_html__( '... and Other Premium Features', 'ai-and-saas-agency-wda' ),
				),
				'panel'         => 'wpdevart_ai_and_saas_agency_wda_single_post_page_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_ai_and_saas_agency_wda_theme_blog_archive_search_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'ai-and-saas-agency-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-ai-saas-agency-theme')),
				'premium_features_list' => array(
					esc_html__( 'Images Hover Effects', 'ai-and-saas-agency-wda' ),
					esc_html__( 'Archive/Search Page Title Animations', 'ai-and-saas-agency-wda' ),
                    esc_html__( 'Archive/Search Page Banner Animations', 'ai-and-saas-agency-wda' ),
					esc_html__( '4 Animated Elements', 'ai-and-saas-agency-wda' ),
                    esc_html__( 'Animated Elements Colors', 'ai-and-saas-agency-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'ai-and-saas-agency-wda' ),
					esc_html__( '... and Other Premium Features', 'ai-and-saas-agency-wda' ),
				),
				'panel'         => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_panel',
				'priority'      => 7777,
			)
		)
	);

    $wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_ai_and_saas_agency_wda_theme_custom_homepage_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'ai-and-saas-agency-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-ai-saas-agency-theme')),
				'premium_features_list' => array(
                    esc_html__( '+7 Beautiful Banner Themes', 'ai-and-saas-agency-wda' ),
                    esc_html__( 'Homepage Sections Positions', 'ai-and-saas-agency-wda' ),
					esc_html__( 'WooCommerce Section', 'ai-and-saas-agency-wda' ),
					esc_html__( 'Sales Section', 'ai-and-saas-agency-wda' ),
                    esc_html__( 'Benefits of Ordering Section', 'ai-and-saas-agency-wda' ),
                    esc_html__( 'Our Partners Section', 'ai-and-saas-agency-wda' ),
                    esc_html__( 'Shop by Category Section', 'ai-and-saas-agency-wda' ),
					esc_html__( 'Achievements Section', 'ai-and-saas-agency-wda' ),
					esc_html__( 'Advantages Section', 'ai-and-saas-agency-wda' ),
					esc_html__( 'Services Section', 'ai-and-saas-agency-wda' ),
					esc_html__( 'Team Members Section', 'ai-and-saas-agency-wda' ),
					esc_html__( '... and Other Sections', 'ai-and-saas-agency-wda' ),
					esc_html__( 'Sections Description Color', 'ai-and-saas-agency-wda' ),
					esc_html__( 'Sections Title Lines Color', 'ai-and-saas-agency-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'ai-and-saas-agency-wda' ),
					esc_html__( '... and Other Premium Features', 'ai-and-saas-agency-wda' ),
				),
				'panel'         => 'wpdevart_ai_and_saas_agency_wda_custom_homepage_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_ai_and_saas_agency_wda_theme_woo_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'ai-and-saas-agency-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-ai-saas-agency-theme')),
				'premium_features_list' => array(
                    esc_html__( 'WooCommerce Search Bar Section', 'ai-and-saas-agency-wda' ),
                    esc_html__( 'Customizable Category List and Search Bar', 'ai-and-saas-agency-wda' ),
					esc_html__( 'WooCommerce Shop/Category Structure', 'ai-and-saas-agency-wda' ),
					esc_html__( 'WooCommerce Premium Sections', 'ai-and-saas-agency-wda' ),
					esc_html__( 'WooCommerce Breadcrumbs', 'ai-and-saas-agency-wda' ),
					esc_html__( 'WooCommerce Header Cart Design', 'ai-and-saas-agency-wda' ),
                    esc_html__( 'WooCommerce Button Animation', 'ai-and-saas-agency-wda' ),
					esc_html__( 'WooCommerce Sidebar Options', 'ai-and-saas-agency-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'ai-and-saas-agency-wda' ),
					esc_html__( '... and Other Premium Features', 'ai-and-saas-agency-wda' ),
				),
				'panel'         => 'wpdevart_ai_and_saas_agency_wda_woocommerce_settings_panel',
				'priority'      => 7777,
			)
		)
	);
        
    ##################------ Premium Features Controls------##################

    $wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_logo_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_text_sanitization',
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_logo_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ai-and-saas-agency-wda' ),
        'section' => 'title_tagline',
        'priority' => 50,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Logo Animation', 'ai-and-saas-agency-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Text Logo Font-size', 'ai-and-saas-agency-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Text Logo Font Weight', 'ai-and-saas-agency-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Site Description Color', 'ai-and-saas-agency-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( 'Site Description Font-size', 'ai-and-saas-agency-wda' )
            ),
            'feature6' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ai-and-saas-agency-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_font_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_font_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_fonts_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+40 Other Popular Fonts', 'ai-and-saas-agency-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ai-and-saas-agency-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_primary_button_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_primary_button_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_primary_button_settings',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Button Animation', 'ai-and-saas-agency-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ai-and-saas-agency-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_header_general_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_header_general_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_header_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Sticky Header Feature', 'ai-and-saas-agency-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Sticky Header Feature for Mobile', 'ai-and-saas-agency-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Animations for Header Elements', 'ai-and-saas-agency-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ai-and-saas-agency-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_top_header_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_top_header_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_top_header_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Address Section', 'ai-and-saas-agency-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Phone/Email/Address Icon Color', 'ai-and-saas-agency-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Animations for Top Header Elements', 'ai-and-saas-agency-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ai-and-saas-agency-wda' )
            ),
        )
    )
    ) );
    
    $wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_header_menu_search_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_header_menu_search_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_header_menu_search_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Search Button Animations', 'ai-and-saas-agency-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ai-and-saas-agency-wda' )
            ),
        )
    )
    ) );

	if ( class_exists( 'WooCommerce' ) ) {
    $wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_woo_primary_button_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_woo_primary_button_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ai-and-saas-agency-wda' ),
        'section' => 'woocommerce_primary_button_colors_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'WooCommerce Button Animation', 'ai-and-saas-agency-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ai-and-saas-agency-wda' )
            ),
        )
    )
    ) );
    };

    $wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_single_post_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_single_post_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_single_post_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+13 Beautiful Patterns', 'ai-and-saas-agency-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Title Animations', 'ai-and-saas-agency-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Banner Animations', 'ai-and-saas-agency-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( '4 Animated Elements', 'ai-and-saas-agency-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'ai-and-saas-agency-wda' )
            ),
            'feature6' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ai-and-saas-agency-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_single_page_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_single_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_single_page_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+13 Beautiful Patterns', 'ai-and-saas-agency-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Title Animations', 'ai-and-saas-agency-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Banner Animations', 'ai-and-saas-agency-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( '4 Animated Elements', 'ai-and-saas-agency-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'ai-and-saas-agency-wda' )
            ),
            'feature6' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ai-and-saas-agency-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_blog_archive_page_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_blog_archive_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_blog_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Title Animations', 'ai-and-saas-agency-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Banner Animations', 'ai-and-saas-agency-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( '4 Animated Elements', 'ai-and-saas-agency-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'ai-and-saas-agency-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ai-and-saas-agency-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_search_page_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_search_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_search_page_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Title Animations', 'ai-and-saas-agency-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Banner Animations', 'ai-and-saas-agency-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( '4 Animated Elements', 'ai-and-saas-agency-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'ai-and-saas-agency-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ai-and-saas-agency-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_blog_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_blog_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_general_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Images Hover Effects', 'ai-and-saas-agency-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Ordering of Metas', 'ai-and-saas-agency-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ai-and-saas-agency-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_custom_homepage_banner_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_custom_homepage_banner_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_custom_homepage_banner_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+7 Beautiful Banner Themes', 'ai-and-saas-agency-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ai-and-saas-agency-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_footer_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_footer_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_footer_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+4 Beautiful Footer Themes', 'ai-and-saas-agency-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Copyright Section Image', 'ai-and-saas-agency-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( '... and Other Premium Features', 'ai-and-saas-agency-wda' )
            ),
        )
    )
    ) );