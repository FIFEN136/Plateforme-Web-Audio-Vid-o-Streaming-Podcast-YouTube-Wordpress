<?php 
        $wp_customize->add_section('wpdevart_ai_and_saas_agency_wda_footer_section',array(
            'title'	=> esc_html__('Footer','ai-and-saas-agency-wda'),
            'priority'		=> 30
        ));
        $wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_footer_layout',
        array(
            'default' => esc_html('wpdevartfivewidgets'),
            'transport' => 'refresh',
            'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_text_sanitization'
        )
        );
        $wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_footer_layout',
        array(
            'label' => esc_html__( 'Footer layout', 'ai-and-saas-agency-wda' ),
            'description' => esc_html__( 'Select the layout of the footer', 'ai-and-saas-agency-wda' ),
            'section' => 'wpdevart_ai_and_saas_agency_wda_footer_section',
            'choices' => array(
            'wpdevartthreewidgetsleft' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-one.jpg',
                'name' => esc_html__( 'Large widget on the left', 'ai-and-saas-agency-wda' )
            ),
            'wpdevartthreewidgetscenter' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-two.jpg',
                'name' => esc_html__( 'Large widget in the center', 'ai-and-saas-agency-wda' )
            ),
            'wpdevartthreewidgetsright' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-three.jpg',
                'name' => esc_html__( 'Large widget on the right', 'ai-and-saas-agency-wda' )
            ),
            'wpdevartfourwidgets' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-four.jpg',
                'name' => esc_html__( 'Four widgets', 'ai-and-saas-agency-wda' )
            ),
            'wpdevartfourwidgetsalternative' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-five.jpg',
                'name' => esc_html__( 'Four widgets - alternative', 'ai-and-saas-agency-wda' )
            ),
            'wpdevartfivewidgets' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-six.jpg',
                'name' => esc_html__( 'Five widgets', 'ai-and-saas-agency-wda' )
            )
            )
        )
        ) );
        $wp_customize->add_setting( 'wpdevart_ai_and_saas_agency_wda_pre_footer_wave_display_option',
        array(
           'default' => esc_html('1'),
           'transport' => 'refresh',
           'sanitize_callback' => 'wpdevart_ai_and_saas_agency_wda_switch_sanitization'
        )
        );
        $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_ai_and_saas_agency_wda_pre_footer_wave_display_option',
            array(
            'label' => esc_html__( 'Display Wave before footer', 'ai-and-saas-agency-wda' ),
            'description' => esc_html__( 'Disable this option if you do not want to display the pre-footer background effect.', 'ai-and-saas-agency-wda' ),
            'section' => 'wpdevart_ai_and_saas_agency_wda_footer_section'
            )
        ) );
        $wp_customize->add_setting('wpdevart_ai_and_saas_agency_wda_footer_copyright_text',array(
            'default'	=> esc_html('Copyright ©2023. All rights reserved.'),
            'sanitize_callback'	=> 'wpdevart_ai_and_saas_agency_wda_text_sanitization'	
        ));
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'wpdevart_ai_and_saas_agency_wda_footer_copyright_text',
                array(
                    'label'    => esc_html__('Copyright text','ai-and-saas-agency-wda'),
                    'section'  => 'wpdevart_ai_and_saas_agency_wda_footer_section',
                    'settings' => 'wpdevart_ai_and_saas_agency_wda_footer_copyright_text',
                    'type'     => 'text'
                )
            )
        );