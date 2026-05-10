<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// seo section
$wp_customize->add_section( 'hovercraft_seo', array(
	'title' => 'SEO',
	'priority' => 32,
) );

// homepage html title setting
$wp_customize->add_setting( 'hovercraft_homepage_html_title', array(
	'default' => 'site_name_site_tagline',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// homepage html title control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_homepage_html_title',
	array(
		'label' => __( 'Homepage HTML Title', 'hovercraft' ),
		'description' => __( 'How should the homepage HTML title tag be generated? Note: Page Title options only work if homepage set to use static page.', 'hovercraft' ),
		'section' => 'hovercraft_seo',
		'settings' => 'hovercraft_homepage_html_title',
		'type' => 'select',
		'choices' => array(
		'site_name_site_tagline' => 'Site Title | Tagline',
		'site_name_dash_site_tagline' => 'Site Title - Tagline',
		'site_name_only' => 'Site Title Only',
		'site_name_page_title' => 'Site Title | Page Title',
		'site_name_dash_page_title' => 'Site Title - Page Title',
		'page_title_only' => 'Page Title Only',
		),
	)
) );

// faq noindex setting
$wp_customize->add_setting( 'hovercraft_faq_posts_noindex', array(
	'default' => 'noindex',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// faq noindex control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_faq_posts_noindex',
	array(
		'label' => __( 'Noindex FAQ Posts', 'hovercraft' ),
		'description' => __( 'Do you want to noindex the FAQ posts? Note: We recommend keep noindex enabled for FAQ posts if you are displaying all FAQ post text on the FAQ category page.', 'hovercraft' ),
		'section' => 'hovercraft_seo',
		'settings' => 'hovercraft_faq_posts_noindex',
		'type' => 'select',
		'choices' => array(
		'noindex' => 'Noindex',
		'disable_noindex' => 'Do Not Noindex',
		),
	)
) );
