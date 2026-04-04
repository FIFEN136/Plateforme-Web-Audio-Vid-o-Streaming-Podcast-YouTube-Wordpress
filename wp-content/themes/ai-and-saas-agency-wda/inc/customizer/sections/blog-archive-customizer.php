<?php 
	$wp_customize->add_panel( 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_panel', 
	array(
		'title'	=> esc_html__('Blog/Archive/Search','ai-and-saas-agency-wda'),			
		'description'	=> esc_html__('Blog/Archive/Search pages settings','ai-and-saas-agency-wda'),		
		'priority'		=> 27
	) 
	);

	##################------ Blog/Archive Page ------##################

	$wp_customize->add_section('wpdevart_ai_and_saas_agency_wda_blog_section',array(
		'title'	=> esc_html__('Blog/Archive Page','ai-and-saas-agency-wda'),
		'priority'		=> null,
		'panel'         => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_panel'
	));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_archive_banner_width',array(
		'default'	=> esc_html('narrow'),
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ai_and_saas_agency_wda_archive_banner_width',array(
			'label'	=> esc_html__('Blog/Archive banner width','ai-and-saas-agency-wda'),
			'section'	=> 'wpdevart_ai_and_saas_agency_wda_blog_section',
			'setting'	=> 'wpdevart_ai_and_saas_agency_wda_archive_banner_width',
			'type' => 'select',
			'choices' => array(
				'narrow' => esc_html__('Narrow','ai-and-saas-agency-wda'),
				'wide' => esc_html__('Wide','ai-and-saas-agency-wda')
				)
	));	
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_archive_banner_title_alignment',array(
		'default'	=> esc_html('center'),
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ai_and_saas_agency_wda_archive_banner_title_alignment',array(
			'label'	=> esc_html__('Blog/Archive title alignment','ai-and-saas-agency-wda'),
			'section'	=> 'wpdevart_ai_and_saas_agency_wda_blog_section',
			'setting'	=> 'wpdevart_ai_and_saas_agency_wda_archive_banner_title_alignment',
			'type' => 'select',
			'choices' => array(
				'left' => esc_html__('Left','ai-and-saas-agency-wda'),
				'center' => esc_html__('Center','ai-and-saas-agency-wda'),
				'right' => esc_html__('Right','ai-and-saas-agency-wda')
				)
	));	
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_archive_banner_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_archive_banner_bg_color', esc_html('#040304')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_archive_banner_bg_color', array(
        'label' => esc_html__('Blog/Archive banner background color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_blog_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_archive_banner_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_archive_banner_bg_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ai_and_saas_agency_wda_archive_banner_bg_gradient_type',array(
			'label'	=> esc_html__('Archive pages banner gradient type','ai-and-saas-agency-wda'),
			'section'	=> 'wpdevart_ai_and_saas_agency_wda_blog_section',
			'setting'	=> 'wpdevart_ai_and_saas_agency_wda_archive_banner_bg_gradient_type',
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
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_archive_banner_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_archive_banner_bg_gradient_color', esc_html('#040304')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_archive_banner_bg_gradient_color', array(
        'label' => esc_html__('Archive pages banner gradient color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_blog_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_archive_banner_bg_gradient_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_archive_banner_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_archive_banner_title_color', esc_html('#f5f5f5')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_archive_banner_title_color', array(
        'label' => esc_html__('Blog/Archive title color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_blog_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_archive_banner_title_color'
    )));
    $wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_blog_archive_page_layout',
	array(
		'default' => esc_html('sidebarright'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_blog_archive_page_layout',
	array(
		'label' => esc_html__( 'Blog/Archive Page Layout', 'ai-and-saas-agency-wda' ),
		'description' => esc_html__( 'Choose the blog/archive page layout.', 'ai-and-saas-agency-wda' ),
		'section' => 'wpdevart_ai_and_saas_agency_wda_blog_section',
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

	##################------ Search Page ------##################

	$wp_customize->add_section('wpdevart_ai_and_saas_agency_wda_search_page_section',array(
		'title'	=> esc_html__('Search Page','ai-and-saas-agency-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_panel'
	));


	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_search_banner_width',array(
		'default'	=> esc_html('narrow'),
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ai_and_saas_agency_wda_search_banner_width',array(
			'label'	=> esc_html__('Search page banner width','ai-and-saas-agency-wda'),
			'section'	=> 'wpdevart_ai_and_saas_agency_wda_search_page_section',
			'setting'	=> 'wpdevart_ai_and_saas_agency_wda_search_banner_width',
			'type' => 'select',
			'choices' => array(
				'narrow' => esc_html__('Narrow','ai-and-saas-agency-wda'),
				'wide' => esc_html__('Wide','ai-and-saas-agency-wda')
				)
	));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_search_banner_title_alignment',array(
		'default'	=> esc_html('center'),
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ai_and_saas_agency_wda_search_banner_title_alignment',array(
			'label'	=> esc_html__('Search page title alignment','ai-and-saas-agency-wda'),
			'section'	=> 'wpdevart_ai_and_saas_agency_wda_search_page_section',
			'setting'	=> 'wpdevart_ai_and_saas_agency_wda_search_banner_title_alignment',
			'type' => 'select',
			'choices' => array(
				'left' => esc_html__('Left','ai-and-saas-agency-wda'),
				'center' => esc_html__('Center','ai-and-saas-agency-wda'),
				'right' => esc_html__('Right','ai-and-saas-agency-wda')
				)
	));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_search_banner_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_search_banner_bg_color', esc_html('#040304')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_search_banner_bg_color', array(
		'label' => esc_html__('Search page banner background color','ai-and-saas-agency-wda'),
		'section' => 'wpdevart_ai_and_saas_agency_wda_search_page_section',
		'settings' => 'wpdevart_ai_and_saas_agency_wda_search_banner_bg_color'
	)));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_search_banner_bg_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ai_and_saas_agency_wda_search_banner_bg_gradient_type',array(
			'label'	=> esc_html__('Search page banner gradient type','ai-and-saas-agency-wda'),
			'section'	=> 'wpdevart_ai_and_saas_agency_wda_search_page_section',
			'setting'	=> 'wpdevart_ai_and_saas_agency_wda_search_banner_bg_gradient_type',
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
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_search_banner_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_search_banner_bg_gradient_color', esc_html('#040304')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_search_banner_bg_gradient_color', array(
        'label' => esc_html__('Search page banner gradient color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_search_page_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_search_banner_bg_gradient_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_search_banner_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_search_banner_title_color', esc_html('#f5f5f5')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_search_banner_title_color', array(
		'label' => esc_html__('Search page title color','ai-and-saas-agency-wda'),
		'section' => 'wpdevart_ai_and_saas_agency_wda_search_page_section',
		'settings' => 'wpdevart_ai_and_saas_agency_wda_search_banner_title_color'
	)));	
	$wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_search_page_layout',
	array(
		'default' => esc_html('sidebarright'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_search_page_layout',
	array(
		'label' => esc_html__( 'Search Page Layout', 'ai-and-saas-agency-wda' ),
		'description' => esc_html__( 'Choose the search page layout.', 'ai-and-saas-agency-wda' ),
		'section' => 'wpdevart_ai_and_saas_agency_wda_search_page_section',
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
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_search_page_button_style',array(
		'default'	=> esc_html('wpdevart_ai_and_saas_agency_wda_primary_button_slide primary_btn_slide_right'),
		'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_ai_and_saas_agency_wda_search_page_button_style',array(
			'label'	=> esc_html__('Search button color','ai-and-saas-agency-wda'),
			'section'	=> 'wpdevart_ai_and_saas_agency_wda_search_page_section',
			'setting'	=> 'wpdevart_ai_and_saas_agency_wda_search_page_button_style',
			'type' => 'select',
			'choices' => array(
				'wpdevart_ai_and_saas_agency_wda_primary_button_slide primary_btn_slide_right' => esc_html__('Custom Primary', 'ai-and-saas-agency-wda'),
				'wpdevart_ai_and_saas_agency_wda_secondary_button_slide secondary_btn_slide_right' => esc_html__('Custom Secondary', 'ai-and-saas-agency-wda'),
				'wpdevart_ai_and_saas_agency_wda_first_button_slide first_btn_slide_right' => esc_html__('WpDevArt Color', 'ai-and-saas-agency-wda'),
				'wpdevart_ai_and_saas_agency_wda_second_button_slide second_btn_slide_right' => esc_html__('Grapefruit Red', 'ai-and-saas-agency-wda'),
				'wpdevart_ai_and_saas_agency_wda_third_button_slide third_btn_slide_right' => esc_html__('Blue', 'ai-and-saas-agency-wda'),
				'wpdevart_ai_and_saas_agency_wda_fourth_button_slide fourth_btn_slide_right' => esc_html__('Dark', 'ai-and-saas-agency-wda'),
				'wpdevart_ai_and_saas_agency_wda_fifth_button_slide fifth_btn_slide_right' => esc_html__('Green', 'ai-and-saas-agency-wda'),
				'wpdevart_ai_and_saas_agency_wda_sixth_button_slide sixth_btn_slide_right' => esc_html__('Yellow', 'ai-and-saas-agency-wda'),
				'wpdevart_ai_and_saas_agency_wda_seventh_button_slide seventh_btn_slide_right' => esc_html__('Custom Green', 'ai-and-saas-agency-wda'),
				'wpdevart_ai_and_saas_agency_wda_eighth_button_slide eighth_btn_slide_right' => esc_html__('White', 'ai-and-saas-agency-wda'),
				)
	));

	##################------ General ------##################
	
	$wp_customize->add_section('wpdevart_ai_and_saas_agency_wda_blog_archive_search_general_section',array(
		'title'	=> esc_html__('General','ai-and-saas-agency-wda'),
		'description'	=> esc_html__('This is the global options page for the Blog/Archive/Search posts lists.','ai-and-saas-agency-wda'),
		'priority'		=> null,
		'panel'         => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_panel'
	));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_blog_settings_posts_list_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_blog_settings_posts_list_bg_color', esc_html('#040303')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_blog_settings_posts_list_bg_color', array(
        'label' => esc_html__('Summary/Post/Page block background color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_blog_settings_posts_list_bg_color'
    )));
	$wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_blog_archive_display_default_featured_image',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_blog_archive_display_default_featured_image',
        array(
        'label' => esc_html__( 'Enable Default Featured Image', 'ai-and-saas-agency-wda' ),
		'description' => esc_html__( 'Display the default featured image for posts that do not have a selected featured image.', 'ai-and-saas-agency-wda' ),
        'section' => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_general_section'
        )
    ) );
	$wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_blog_settings_title_font_size',
    array(
       'default' => esc_html('22'),
       'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_blog_settings_title_font_size',
		array(
		'label' => esc_html__( 'Title font-size (px)', 'ai-and-saas-agency-wda' ),
		'section' => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_general_section',
		'input_attrs' => array(
			'min' => esc_html('15'),
			'max' => esc_html('50'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_blog_settings_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_blog_settings_title_color', esc_html('#7761f1')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_blog_settings_title_color', array(
        'label' => esc_html__('Title color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_blog_settings_title_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_blog_settings_title_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_blog_settings_title_hover_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_blog_settings_title_hover_color', array(
        'label' => esc_html__('Title hover color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_blog_settings_title_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_blog_settings_title_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_blog_settings_title_border_color', esc_html('#403011')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_blog_settings_title_border_color', array(
        'label' => esc_html__('Title border color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_blog_settings_title_border_color'
    )));
	$wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_blog_settings_metas_font_size',
    array(
       'default' => esc_html('12'),
       'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_blog_settings_metas_font_size',
		array(
		'label' => esc_html__( 'Entry metas font-size (px)', 'ai-and-saas-agency-wda' ),
		'section' => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_general_section',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('30'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_blog_settings_metas_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_blog_settings_metas_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_blog_settings_metas_color', array(
        'label' => esc_html__('Color of the metas','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_blog_settings_metas_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_blog_settings_metas_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_blog_settings_metas_hover_color', esc_html('#5233ff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_blog_settings_metas_hover_color', array(
        'label' => esc_html__('Entry metas hover color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_blog_settings_metas_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_blog_settings_meta_icons_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_blog_settings_meta_icons_color', esc_html('#5233ff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_blog_settings_meta_icons_color', array(
        'label' => esc_html__('Icons color of the metas','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_blog_settings_meta_icons_color'
    )));
	$wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_blog_settings_content_text_font_size',
    array(
       'default' => esc_html('15'),
       'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_blog_settings_content_text_font_size',
		array(
		'label' => esc_html__( 'Content font-size (px)', 'ai-and-saas-agency-wda' ),
		'section' => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_general_section',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('40'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_blog_settings_content_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_blog_settings_content_text_color', esc_html('#d5d5d5')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_blog_settings_content_text_color', array(
        'label' => esc_html__('Content text color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_blog_settings_content_text_color'
    )));
	$wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_blog_settings_category_text_font_size',
    array(
       'default' => esc_html('13'),
       'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_blog_settings_category_text_font_size',
		array(
		'label' => esc_html__( 'Category font-size (px)', 'ai-and-saas-agency-wda' ),
		'section' => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_general_section',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('40'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_blog_settings_category_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_blog_settings_category_bg_color', esc_html('#040303')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_blog_settings_category_bg_color', array(
        'label' => esc_html__('Categories background color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_blog_settings_category_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_blog_settings_category_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_blog_settings_category_border_color', esc_html('#7761f1')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_blog_settings_category_border_color', array(
        'label' => esc_html__('Categories border color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_blog_settings_category_border_color'
    )));	
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_blog_settings_category_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_blog_settings_category_text_color', esc_html('#7761f1')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_blog_settings_category_text_color', array(
        'label' => esc_html__('Categories text color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_blog_settings_category_text_color'
    )));	
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_blog_settings_category_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_blog_settings_category_bg_hover_color', esc_html('#040303')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_blog_settings_category_bg_hover_color', array(
        'label' => esc_html__('Categories background hover color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_blog_settings_category_bg_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_blog_settings_category_border_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_blog_settings_category_border_hover_color', esc_html('#ebebeb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_blog_settings_category_border_hover_color', array(
        'label' => esc_html__('Categories border hover color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_blog_settings_category_border_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_blog_settings_category_text_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_blog_settings_category_text_hover_color', esc_html('#ebebeb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_blog_settings_category_text_hover_color', array(
        'label' => esc_html__('Categories text hover color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_general_section',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_blog_settings_category_text_hover_color'
    )));

	##################------ Pagination ------##################

	$wp_customize->add_section('wpdevart_ai_and_saas_agency_wda_pagination_settings',array(
		'title'	=> esc_html__('Pagination','ai-and-saas-agency-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_ai_and_saas_agency_wda_blog_archive_search_panel'
	));

	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_pagination_buttons_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_pagination_buttons_bg_color', esc_html('#040303')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_pagination_buttons_bg_color', array(
        'label' => esc_html__('Buttons background color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_pagination_settings',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_pagination_buttons_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_pagination_buttons_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_pagination_buttons_border_color', esc_html('#7761f1')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_pagination_buttons_border_color', array(
        'label' => esc_html__('Buttons border color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_pagination_settings',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_pagination_buttons_border_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_pagination_buttons_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_pagination_buttons_link_color', esc_html('#7761f1')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_pagination_buttons_link_color', array(
        'label' => esc_html__('Text color of active buttons','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_pagination_settings',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_pagination_buttons_link_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_pagination_buttons_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_pagination_buttons_text_color', esc_html('#8b82bb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_pagination_buttons_text_color', array(
        'label' => esc_html__('Text color of inactive buttons','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_pagination_settings',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_pagination_buttons_text_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_pagination_buttons_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_pagination_buttons_bg_hover_color', esc_html('#040303')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_pagination_buttons_bg_hover_color', array(
        'label' => esc_html__('Buttons background hover color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_pagination_settings',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_pagination_buttons_bg_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_pagination_buttons_border_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_pagination_buttons_border_hover_color', esc_html('#ebebeb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_pagination_buttons_border_hover_color', array(
        'label' => esc_html__('Buttons border hover color','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_pagination_settings',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_pagination_buttons_border_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_pagination_buttons_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_pagination_buttons_link_hover_color', esc_html('#ebebeb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_pagination_buttons_link_hover_color', array(
        'label' => esc_html__('Text color of active buttons on hover','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_pagination_settings',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_pagination_buttons_link_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_pagination_buttons_text_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_pagination_buttons_text_hover_color', esc_html('#8b82bb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_pagination_buttons_text_hover_color', array(
        'label' => esc_html__('Text color of inactive buttons on hover','ai-and-saas-agency-wda'),
        'section' => 'wpdevart_ai_and_saas_agency_wda_pagination_settings',
        'settings' => 'wpdevart_ai_and_saas_agency_wda_pagination_buttons_text_hover_color'
    )));