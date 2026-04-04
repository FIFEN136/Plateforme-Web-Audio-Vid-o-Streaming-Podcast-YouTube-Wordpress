<?php

##################------ Pro Button Section ------##################
	$wp_customize->register_section_type( 'wpdevart_ai_and_saas_agency_wda_Section_Premium' );

	$wp_customize->add_section(
		new wpdevart_ai_and_saas_agency_wda_Section_Premium(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__('AI and SaaS Agency WDA','ai-and-saas-agency-wda'),
				'pro_text' => esc_html__('Premium','ai-and-saas-agency-wda'),
				'pro_url'  => apply_filters( 'parent_wpdevart_ai_and_saas_agency_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-ai-saas-agency-theme')),
				'priority'  => 10,
			)
		)
	);