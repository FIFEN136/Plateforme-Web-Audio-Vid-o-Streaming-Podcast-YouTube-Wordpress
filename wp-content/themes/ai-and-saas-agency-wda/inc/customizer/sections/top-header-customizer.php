<?php
    $wp_customize->add_section('wpdevart_ai_and_saas_agency_wda_top_header_section',array(
		'title'	=> esc_html__('Top Header','ai-and-saas-agency-wda'),
		'priority'		=> 23
	));
	$wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_enable_top_header',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_enable_top_header',
        array(
        'label' => esc_html__( 'Hide Top Header', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_top_header_section'
        )
    ) );
	$wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_top_header_layout',
	array(
		'default' => esc_html('phoneleft'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_top_header_layout',
	array(
		'label' => esc_html__( 'Top header layout', 'ai-and-saas-agency-wda' ),
		'description' => esc_html__( 'Select the position of the top header elements', 'ai-and-saas-agency-wda' ),
		'section' => 'wpdevart_ai_and_saas_agency_wda_top_header_section',
		'choices' => array(
		'phoneleft' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/email-left.png',
			'name' => esc_html__( 'Phone and email on the left side', 'ai-and-saas-agency-wda' )
		),
		'phonesocialcenter' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/email-social-center.png',
			'name' => esc_html__( 'Center', 'ai-and-saas-agency-wda' )
		),
		'phoneright' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/email-right.png',
			'name' => esc_html__( 'Phone and email on the right side', 'ai-and-saas-agency-wda' )
		)
		)
	)
	) );
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_top_header_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_top_header_bg_color', esc_html('#040304')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_top_header_bg_color', array(
        'label' => esc_html__('Top header background color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_top_header_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_top_header_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_top_header_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ai_and_saas_agency_wda_top_header_gradient_type',array(
			'label'	=> esc_html__('Gradient type','ai-and-saas-agency-wda'),
			'section'	=> 'wpdevart_ai_and_saas_agency_wda_top_header_section',
			'setting'	=> 'wpdevart_ai_and_saas_agency_wda_top_header_gradient_type',
			'type' => 'select',
			'choices' => array(
				'to right' => esc_html__('To right','ai-and-saas-agency-wda'),
				'to left' => esc_html__('To left','ai-and-saas-agency-wda'),
				'to bottom' => esc_html__('To bottom','ai-and-saas-agency-wda'),
				'to top' => esc_html__('To top','ai-and-saas-agency-wda'),
				'to bottom right' => esc_html__('To bottom right','ai-and-saas-agency-wda'),
				'to bottom left' => esc_html__('To bottom left','ai-and-saas-agency-wda'),
				'to top right' => esc_html__('To top right','ai-and-saas-agency-wda'),
				'to top left' => esc_html__('To top left','ai-and-saas-agency-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_top_header_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_top_header_bg_gradient_color', esc_html('#040304')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_top_header_bg_gradient_color', array(
        'label' => esc_html__('Top header gradient color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_top_header_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_top_header_bg_gradient_color'
    )));
	$wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_enable_top_header_border',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_enable_top_header_border',
        array(
        'label' => esc_html__( 'Hide top header border', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_top_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_top_header_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_top_header_border_color', esc_html('#383838')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_top_header_border_color', array(
        'label' => esc_html__('Top header border color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_top_header_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_top_header_border_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_top_header_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_top_header_text_color', esc_html('#d5d5d5')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_top_header_text_color', array(
        'label' => esc_html__('Top header text color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_top_header_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_top_header_text_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_top_header_phone_email_address_icons_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_top_header_phone_email_address_icons_color', esc_html('#5335fb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_top_header_phone_email_address_icons_color', array(
        'label' => esc_html__('Phone/Email/Address icon color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_top_header_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_top_header_phone_email_address_icons_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_top_header_phone_number',array(
		'default'	=> esc_html('(555) 555-1234'),
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_ai_and_saas_agency_wda_top_header_phone_number',
            array(
                'label'    => esc_html__('Phone Number','ai-and-saas-agency-wda'),
                'section'  => 'wpdevart_ai_and_saas_agency_wda_top_header_section',
                'settings' => 'wpdevart_ai_and_saas_agency_wda_top_header_phone_number',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_top_header_email', array(
			'default'	=> esc_html('info@example.com'),
			'sanitize_callback' => 'sanitize_email'
		)
	);
	$wp_customize->add_control('wpdevart_ai_and_saas_agency_wda_top_header_email', array(
			'label' => esc_html__( 'Email', 'ai-and-saas-agency-wda' ),
			'section' => 'wpdevart_ai_and_saas_agency_wda_top_header_section',
			'settings' => 'wpdevart_ai_and_saas_agency_wda_top_header_email',
			'type' => 'email'
		)
	);
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_top_header_social_icons_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_top_header_social_icons_color', esc_html('#5335fb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_top_header_social_icons_color', array(
        'label' => esc_html__('Social icons color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_top_header_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_top_header_social_icons_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_top_header_social_icons_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_top_header_social_icons_bg_color', esc_html('#040304')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_top_header_social_icons_bg_color', array(
        'label' => esc_html__('Social icons background color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_top_header_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_top_header_social_icons_bg_color'
    )));
    $wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_top_header_disable_twitter',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_top_header_disable_twitter',
        array(
        'label' => esc_html__( 'Hide Twitter icon', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_top_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_top_header_twitter_url',array(
		'default'	=> esc_url('https://twitter.com'),
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_url_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ai_and_saas_agency_wda_top_header_twitter_url',array(
			'label'	=> esc_html__('Twitter page URL','ai-and-saas-agency-wda'),
			'section'	=> 'wpdevart_ai_and_saas_agency_wda_top_header_section',
			'setting'	=> 'wpdevart_ai_and_saas_agency_wda_top_header_twitter_url'
	));	

    $wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_top_header_disable_facebook',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_top_header_disable_facebook',
        array(
        'label' => esc_html__( 'Hide Facebook icon', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_top_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_top_header_facebook_url',array(
		'default'	=> esc_url('https://www.facebook.com/'),
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_url_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ai_and_saas_agency_wda_top_header_facebook_url',array(
			'label'	=> esc_html__('Facebook page URL','ai-and-saas-agency-wda'),
			'section'	=> 'wpdevart_ai_and_saas_agency_wda_top_header_section',
			'setting'	=> 'wpdevart_ai_and_saas_agency_wda_top_header_facebook_url'
	));	

	$wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_top_header_disable_linkedin',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_top_header_disable_linkedin',
        array(
        'label' => esc_html__( 'Hide Linkedin icon', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_top_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_top_header_linkedin_url',array(
		'default'	=> esc_url('https://www.linkedin.com'),
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_url_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ai_and_saas_agency_wda_top_header_linkedin_url',array(
			'label'	=> esc_html__('Linkedin page URL','ai-and-saas-agency-wda'),
			'section'	=> 'wpdevart_ai_and_saas_agency_wda_top_header_section',
			'setting'	=> 'wpdevart_ai_and_saas_agency_wda_top_header_linkedin_url'
	));	

	$wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_top_header_disable_youtube',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_top_header_disable_youtube',
        array(
        'label' => esc_html__( 'Hide YouTube icon', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_top_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_top_header_youtube_url',array(
		'default'	=> esc_url('https://www.youtube.com/'),
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_url_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ai_and_saas_agency_wda_top_header_youtube_url',array(
			'label'	=> esc_html__('YouTube page URL','ai-and-saas-agency-wda'),
			'section'	=> 'wpdevart_ai_and_saas_agency_wda_top_header_section',
			'setting'	=> 'wpdevart_ai_and_saas_agency_wda_top_header_youtube_url'
	));	

	$wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_top_header_disable_instagram',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_top_header_disable_instagram',
        array(
        'label' => esc_html__( 'Hide Instagram icon', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_top_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_top_header_instagram_url',array(
		'default'	=> esc_url('https://www.instagram.com/'),
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_url_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ai_and_saas_agency_wda_top_header_instagram_url',array(
			'label'	=> esc_html__('Instagram page URL','ai-and-saas-agency-wda'),
			'section'	=> 'wpdevart_ai_and_saas_agency_wda_top_header_section',
			'setting'	=> 'wpdevart_ai_and_saas_agency_wda_top_header_instagram_url'
	));

	$wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_top_header_disable_tiktok',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_top_header_disable_tiktok',
        array(
        'label' => esc_html__( 'Hide TikTok icon', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_top_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_top_header_tiktok_url',array(
		'default'	=> esc_url('https://www.tiktok.com/'),
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_url_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ai_and_saas_agency_wda_top_header_tiktok_url',array(
			'label'	=> esc_html__('TikTok page URL','ai-and-saas-agency-wda'),
			'section'	=> 'wpdevart_ai_and_saas_agency_wda_top_header_section',
			'setting'	=> 'wpdevart_ai_and_saas_agency_wda_top_header_tiktok_url'
	));

	$wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_top_header_disable_pinterest',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_top_header_disable_pinterest',
        array(
        'label' => esc_html__( 'Hide Pinterest icon', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_top_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_top_header_pinterest_url',array(
		'default'	=> esc_url('https://www.pinterest.com/'),
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_url_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ai_and_saas_agency_wda_top_header_pinterest_url',array(
			'label'	=> esc_html__('Pinterest page URL','ai-and-saas-agency-wda'),
			'section'	=> 'wpdevart_ai_and_saas_agency_wda_top_header_section',
			'setting'	=> 'wpdevart_ai_and_saas_agency_wda_top_header_pinterest_url'
	));