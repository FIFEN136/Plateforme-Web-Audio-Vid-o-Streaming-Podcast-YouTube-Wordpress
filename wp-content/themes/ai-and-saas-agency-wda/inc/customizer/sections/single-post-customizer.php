<?php 
	$wp_customize->add_panel( 'wpdevart_ai_and_saas_agency_wda_single_post_page_panel', 
	array(
		'title'	=> esc_html__('Single Post/Page','ai-and-saas-agency-wda'),			
		'description'	=> esc_html__('Single Post/Page settings','ai-and-saas-agency-wda'),		
		'priority'		=> 25
	) 
	);

	##################------ Single Post ------##################

	$wp_customize->add_section('wpdevart_ai_and_saas_agency_wda_single_post_section',array(
		'title'	=> esc_html__('Single Post','ai-and-saas-agency-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_ai_and_saas_agency_wda_single_post_page_panel'
	));

	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_single_post_banner_width',array(
		'default'	=> esc_html('narrow'),
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ai_and_saas_agency_wda_single_post_banner_width',array(
			'label'	=> esc_html__('Single post banner width','ai-and-saas-agency-wda'),
			'section'	=> 'wpdevart_ai_and_saas_agency_wda_single_post_section',
			'setting'	=> 'wpdevart_ai_and_saas_agency_wda_single_post_banner_width',
			'type' => 'select',
			'choices' => array(
				'narrow' => esc_html__('Narrow','ai-and-saas-agency-wda'),
				'wide' => esc_html__('Wide','ai-and-saas-agency-wda')
				)
	));	
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_single_post_title_alignment',array(
		'default'	=> esc_html('center'),
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ai_and_saas_agency_wda_single_post_title_alignment',array(
			'label'	=> esc_html__('Position of elements','ai-and-saas-agency-wda'),
			'section'	=> 'wpdevart_ai_and_saas_agency_wda_single_post_section',
			'setting'	=> 'wpdevart_ai_and_saas_agency_wda_single_post_title_alignment',
			'type' => 'select',
			'choices' => array(
				'left' => esc_html__('Left','ai-and-saas-agency-wda'),
				'center' => esc_html__('Center','ai-and-saas-agency-wda'),
				'right' => esc_html__('Right','ai-and-saas-agency-wda')
				)
	));	
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_single_post_banner_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_single_post_banner_bg_color', esc_html('#040304')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_single_post_banner_bg_color', array(
        'label' => esc_html__('Single post banner BG color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_single_post_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_single_post_banner_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_single_post_banner_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ai_and_saas_agency_wda_single_post_banner_gradient_type',array(
			'label'	=> esc_html__('Single post banner gradient type','ai-and-saas-agency-wda'),
			'section'	=> 'wpdevart_ai_and_saas_agency_wda_single_post_section',
			'setting'	=> 'wpdevart_ai_and_saas_agency_wda_single_post_banner_gradient_type',
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
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_single_post_banner_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_single_post_banner_gradient_color', esc_html('#040304')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_single_post_banner_gradient_color', array(
        'label' => esc_html__('Single post banner gradient color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_single_post_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_single_post_banner_gradient_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_single_post_banner_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_single_post_banner_title_color', esc_html('#f5f5f5')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_single_post_banner_title_color', array(
        'label' => esc_html__('Banner/Single Post title color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_single_post_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_single_post_banner_title_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_single_post_banner_entry_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_single_post_banner_entry_text_color', esc_html('#d5d5d5')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_single_post_banner_entry_text_color', array(
        'label' => esc_html__('Banner text color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_single_post_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_single_post_banner_entry_text_color'
    )));
	$wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_post_banner_author_display',
    array(
       'default' => esc_html('1'),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_post_banner_author_display',
        array(
        'label' => esc_html__( 'Show author/date/comment line', 'ai-and-saas-agency-wda' ),
		'description' => esc_html__( 'Enable this option if you need to hide the author/date/comment line.', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_single_post_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_single_post_banner_entry_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_single_post_banner_entry_link_color', esc_html('#7761f1')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_single_post_banner_entry_link_color', array(
        'label' => esc_html__('Banner link color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_single_post_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_single_post_banner_entry_link_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_single_post_banner_entry_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_single_post_banner_entry_link_hover_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_single_post_banner_entry_link_hover_color', array(
        'label' => esc_html__('Banner link hover color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_single_post_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_single_post_banner_entry_link_hover_color'
    )));
    $wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_single_post_layout',
	array(
		'default' => esc_html('sidebarright'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_single_post_layout',
	array(
		'label' => esc_html__( 'Single Post Layout', 'ai-and-saas-agency-wda' ),
		'description' => esc_html__( 'Choose the single post layout.', 'ai-and-saas-agency-wda' ),
		'section' => 'wpdevart_ai_and_saas_agency_wda_single_post_section',
		'choices' => array(
		'sidebarleft' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-left.png',
			'name' => esc_html__( 'Left Sidebar', 'ai-and-saas-agency-wda' )
		),
		'sidebarnone' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-none.png',
			'name' => esc_html__( 'No Sidebar', 'ai-and-saas-agency-wda' )
		),
		'sidebarright' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-right.png',
			'name' => esc_html__( 'Right Sidebar', 'ai-and-saas-agency-wda' )
		)
		)
	)
	) );

	##################------ Single Page ------##################

	$wp_customize->add_section('wpdevart_ai_and_saas_agency_wda_single_page_section',array(
		'title'	=> esc_html__('Single Page','ai-and-saas-agency-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_ai_and_saas_agency_wda_single_post_page_panel'
	));

	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_single_page_banner_width',array(
		'default'	=> esc_html('narrow'),
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ai_and_saas_agency_wda_single_page_banner_width',array(
			'label'	=> esc_html__('Single page banner width','ai-and-saas-agency-wda'),
			'section'	=> 'wpdevart_ai_and_saas_agency_wda_single_page_section',
			'setting'	=> 'wpdevart_ai_and_saas_agency_wda_single_page_banner_width',
			'type' => 'select',
			'choices' => array(
				'narrow' => esc_html__('Narrow','ai-and-saas-agency-wda'),
				'wide' => esc_html__('Wide','ai-and-saas-agency-wda')
				)
	));	
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_single_page_title_alignment',array(
		'default'	=> esc_html('center'),
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ai_and_saas_agency_wda_single_page_title_alignment',array(
			'label'	=> esc_html__('Position of elements','ai-and-saas-agency-wda'),
			'section'	=> 'wpdevart_ai_and_saas_agency_wda_single_page_section',
			'setting'	=> 'wpdevart_ai_and_saas_agency_wda_single_page_title_alignment',
			'type' => 'select',
			'choices' => array(
				'left' => esc_html__('Left','ai-and-saas-agency-wda'),
				'center' => esc_html__('Center','ai-and-saas-agency-wda'),
				'right' => esc_html__('Right','ai-and-saas-agency-wda')
				)
	));	
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_single_page_banner_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_single_page_banner_bg_color', esc_html('#040304')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_single_page_banner_bg_color', array(
        'label' => esc_html__('Single page banner BG color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_single_page_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_single_page_banner_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_single_page_banner_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ai_and_saas_agency_wda_single_page_banner_gradient_type',array(
			'label'	=> esc_html__('Single page banner gradient type','ai-and-saas-agency-wda'),
			'section'	=> 'wpdevart_ai_and_saas_agency_wda_single_page_section',
			'setting'	=> 'wpdevart_ai_and_saas_agency_wda_single_page_banner_gradient_type',
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
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_single_page_banner_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_single_page_banner_gradient_color', esc_html('#040304')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_single_page_banner_gradient_color', array(
        'label' => esc_html__('Single page banner gradient color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_single_page_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_single_page_banner_gradient_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_single_page_banner_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_single_page_banner_title_color', esc_html('#f5f5f5')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_single_page_banner_title_color', array(
        'label' => esc_html__('Banner/Single page title color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_single_page_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_single_page_banner_title_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_single_page_banner_entry_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_single_page_banner_entry_text_color', esc_html('#d5d5d5')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_single_page_banner_entry_text_color', array(
        'label' => esc_html__('Banner text color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_single_page_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_single_page_banner_entry_text_color'
    )));
	$wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_page_banner_author_display',
    array(
       'default' => esc_html('1'),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_page_banner_author_display',
        array(
        'label' => esc_html__( 'Show author/date/comment line', 'ai-and-saas-agency-wda' ),
		'description' => esc_html__( 'Enable this option if you need to hide the author/date/comment line.', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_single_page_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_single_page_banner_entry_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_single_page_banner_entry_link_color', esc_html('#7761f1')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_single_page_banner_entry_link_color', array(
        'label' => esc_html__('Banner link color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_single_page_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_single_page_banner_entry_link_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_single_page_banner_entry_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_single_page_banner_entry_link_hover_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_single_page_banner_entry_link_hover_color', array(
        'label' => esc_html__('Banner link hover color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_single_page_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_single_page_banner_entry_link_hover_color'
    )));
    $wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_single_page_layout',
	array(
		'default' => esc_html('sidebarnone'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_single_page_layout',
	array(
		'label' => esc_html__( 'Single Page Layout', 'ai-and-saas-agency-wda' ),
		'description' => esc_html__( 'Choose the single page layout.', 'ai-and-saas-agency-wda' ),
		'section' => 'wpdevart_ai_and_saas_agency_wda_single_page_section',
		'choices' => array(
		'sidebarleft' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-left.png',
			'name' => esc_html__( 'Left Sidebar', 'ai-and-saas-agency-wda' )
		),
		'sidebarnone' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-none.png',
			'name' => esc_html__( 'No Sidebar', 'ai-and-saas-agency-wda' )
		),
		'sidebarright' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-right.png',
			'name' => esc_html__( 'Right Sidebar', 'ai-and-saas-agency-wda' )
		)
		)
	)
	) );

	##################------ Breadcrumbs ------##################

	$wp_customize->add_section('wpdevart_ai_and_saas_agency_wda_breadcrumbs_section',array(
		'title'	=> esc_html__('Breadcrumbs','ai-and-saas-agency-wda'),
		'description'	=> esc_html__('This section is for single posts and pages only. If you want to enable/edit WooCommerce breadcrumbs, you can do so from the WooCommerce WpDevArt section.','ai-and-saas-agency-wda'),	
		'priority'		=> null,
		'panel'         => 'wpdevart_ai_and_saas_agency_wda_single_post_page_panel'
	));

	$wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_post_breadcrumbs_display_option',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_post_breadcrumbs_display_option',
        array(
        'label' => esc_html__( 'Enable Post Breadcrumbs', 'ai-and-saas-agency-wda' ),
		'description' => esc_html__( 'Check the option if you need to display the breadcrumbs for the single post.', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_breadcrumbs_section'
        )
    ) );
	$wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_page_breadcrumbs_display_option',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_page_breadcrumbs_display_option',
        array(
        'label' => esc_html__( 'Enable Page Breadcrumbs', 'ai-and-saas-agency-wda' ),
		'description' => esc_html__( 'Check the option if you need to display the breadcrumbs for the single page.', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_breadcrumbs_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_page_breadcrumbs_home_text',array(
		'default'	=> esc_html('Home'),'ai-and-saas-agency-wda',
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_ai_and_saas_agency_wda_page_breadcrumbs_home_text',
            array(
                'label'    => esc_html__('Breadcrumb Home Text','ai-and-saas-agency-wda'),
                'section'  => 'wpdevart_ai_and_saas_agency_wda_breadcrumbs_section',
                'settings' => 'wpdevart_ai_and_saas_agency_wda_page_breadcrumbs_home_text',
                'type'     => 'text'
            )
        )
    );

	##################------ Comments ------##################

	$wp_customize->add_section('wpdevart_ai_and_saas_agency_wda_comments_settings',array(
		'title'	=> esc_html__('Comments Box','ai-and-saas-agency-wda'),
		'description'	=> esc_html__('The Comment Box is a block of user responses. Other comments section settings can be managed on the General settings page (for example, the Post Comment button can be controlled in the Primary Button section, or the text colors for Comment*, Name*, Email*, or Website can be controlled in the Colors section).','ai-and-saas-agency-wda'),	
		'priority'		=> null,
		'panel'         => 'wpdevart_ai_and_saas_agency_wda_single_post_page_panel'
	));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_comments_reply_box_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_comments_reply_box_bg_color', esc_html('#040303')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_comments_reply_box_bg_color', array(
        'label' => esc_html__('Comments reply box background color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_comments_settings',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_comments_reply_box_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_comments_reply_box_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_comments_reply_box_text_color', esc_html('#d5d5d5')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_comments_reply_box_text_color', array(
        'label' => esc_html__('Comments reply box text color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_comments_settings',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_comments_reply_box_text_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_comments_reply_box_heading_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_comments_reply_box_heading_color', esc_html('#7761f1')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_comments_reply_box_heading_color', array(
        'label' => esc_html__('Comments reply box heading color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_comments_settings',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_comments_reply_box_heading_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_comments_reply_box_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_comments_reply_box_link_color', esc_html('#7761f1')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_comments_reply_box_link_color', array(
        'label' => esc_html__('Comments reply box link color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_comments_settings',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_comments_reply_box_link_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_comments_reply_box_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_comments_reply_box_link_hover_color', esc_html('#ebebeb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_comments_reply_box_link_hover_color', array(
        'label' => esc_html__('Comments reply box link hover color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_comments_settings',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_comments_reply_box_link_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_comments_reply_button_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_comments_reply_button_bg_color', esc_html('#040303')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_comments_reply_button_bg_color', array(
        'label' => esc_html__('Comments reply button bg color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_comments_settings',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_comments_reply_button_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_comments_reply_button_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_comments_reply_button_border_color', esc_html('#7761f1')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_comments_reply_button_border_color', array(
        'label' => esc_html__('Comments reply button border color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_comments_settings',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_comments_reply_button_border_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_comments_reply_button_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_comments_reply_button_link_color', esc_html('#7761f1')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_comments_reply_button_link_color', array(
        'label' => esc_html__('Comments reply button link color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_comments_settings',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_comments_reply_button_link_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_comments_reply_button_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_comments_reply_button_bg_hover_color', esc_html('#040303')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_comments_reply_button_bg_hover_color', array(
        'label' => esc_html__('Comments reply button bg hover color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_comments_settings',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_comments_reply_button_bg_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_comments_reply_button_border_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_comments_reply_button_border_hover_color', esc_html('#ebebeb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_comments_reply_button_border_hover_color', array(
        'label' => esc_html__('Comments reply button border hover color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_comments_settings',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_comments_reply_button_border_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_comments_reply_button_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_comments_reply_button_link_hover_color', esc_html('#ebebeb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_comments_reply_button_link_hover_color', array(
        'label' => esc_html__('Comments reply button link hover color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_comments_settings',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_comments_reply_button_link_hover_color'
    )));