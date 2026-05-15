<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// divider above offcanvas menu colors setting
$wp_customize->add_setting( 'hovercraft_divider_offcanvas_menu_colors', array(
	'sanitize_callback' => '__return_null',
) );

// divider above offcanvas menu colors control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_divider_offcanvas_menu_colors',
	array(
		'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
		'type' => 'hidden',
		'section' => 'colors',
		'settings' => 'hovercraft_divider_offcanvas_menu_colors',
	)
) );

// offcanvas menu background color setting
$wp_customize->add_setting( 'hovercraft_offcanvas_background_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// offcanvas menu background color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_offcanvas_background_color',
	array(
		'label' => 'Offcanvas Menu Background Color',
		'description' => 'Specify background color of the Offcanvas Menu element?',
		'section' => 'colors',
		'settings' => 'hovercraft_offcanvas_background_color',
	)
) );

// offcanvas toggle background color setting
$wp_customize->add_setting( 'hovercraft_offcanvas_toggle_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// offcanvas toggle background color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_offcanvas_toggle_background_color',
	array(
		'label' => 'Offcanvas Toggle Background Color',
		'description' => 'Specify background color of the Offcanvas Menu toggle elements?',
		'section' => 'colors',
		'settings' => 'hovercraft_offcanvas_toggle_background_color',
	)
) );

// divider above topbar colors setting
$wp_customize->add_setting( 'hovercraft_divider_topbar_colors', array(
	'sanitize_callback' => '__return_null',
) );

// divider above topbar colors control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_divider_topbar_colors',
	array(
		'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
		'type' => 'hidden',
		'section' => 'colors',
		'settings' => 'hovercraft_divider_topbar_colors',
	)
) );

// topbar background color setting
$wp_customize->add_setting( 'hovercraft_topbar_background_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// topbar background color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_topbar_background_color',
	array(
		'label' => 'Topbar Background Color',
		'description' => 'Specify background color of the Topbar element? Note: Choose a bold tone or black for best results, and avoid white or shades of gray, which may result in poor visibility or CSS conflicts.',
		'section' => 'colors',
		'settings' => 'hovercraft_topbar_background_color',
	)
) );

// topbar text color setting
$wp_customize->add_setting( 'hovercraft_topbar_text_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// topbar text color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_topbar_text_color',
	array(
		'label' => 'Topbar Text Color',
		'description' => 'Applies to any plain text inside the topbar.',
		'section' => 'colors',
		'settings' => 'hovercraft_topbar_text_color',
	)
) );

// topbar link color setting
$wp_customize->add_setting( 'hovercraft_topbar_link_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// topbar link color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_topbar_link_color',
	array(
		'label' => 'Topbar Link Color',
		'description' => 'Applies to any links inside the topbar.',
		'section' => 'colors',
		'settings' => 'hovercraft_topbar_link_color',
	)
) );

// divider above full hero colors setting
$wp_customize->add_setting( 'hovercraft_divider_full_hero_colors', array(
	'sanitize_callback' => '__return_null',
) );

// divider above full hero colors control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_divider_full_hero_colors',
	array(
		'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
		'type' => 'hidden',
		'section' => 'colors',
		'settings' => 'hovercraft_divider_full_hero_colors',
	)
) );

// full hero header background color setting
$wp_customize->add_setting( 'hovercraft_full_hero_header_background_color', array(
	'default' => '#37474f',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// full hero header background color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_full_hero_header_background_color',
	array(
		'label' => 'Full Hero Header Background Color',
		'section' => 'colors',
		'settings' => 'hovercraft_full_hero_header_background_color',
	)
) );

// divider above hero gradient colors setting
$wp_customize->add_setting( 'hovercraft_divider_hero_gradient_colors', array(
	'sanitize_callback' => '__return_null',
) );

// divider above hero gradient colors control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_divider_hero_gradient_colors',
	array(
		'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
		'type' => 'hidden',
		'section' => 'colors',
		'settings' => 'hovercraft_divider_hero_gradient_colors',
	)
) );

// hero gradient start color setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_start_color', array(
	'default' => '#37474f',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// hero gradient start color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_hero_gradient_start_color',
	array(
		'label' => 'Hero Gradient Start Color',
		'section' => 'colors',
		'settings' => 'hovercraft_hero_gradient_start_color',
	)
) );

// hero gradient mid color setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_mid_color', array(
	'default' => '#37474f',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// hero gradient mid color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_hero_gradient_mid_color',
	array(
		'label' => 'Hero Gradient Mid Color',
		'section' => 'colors',
		'settings' => 'hovercraft_hero_gradient_mid_color',
	)
) );

// hero gradient stop color setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_stop_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// hero gradient stop color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_hero_gradient_stop_color',
	array(
		'label' => 'Hero Gradient Stop Color',
		'section' => 'colors',
		'settings' => 'hovercraft_hero_gradient_stop_color',
	)
) );

// divider above half hero colors setting
$wp_customize->add_setting( 'hovercraft_divider_half_hero_colors', array(
	'sanitize_callback' => '__return_null',
) );

// divider above half hero colors control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_divider_half_hero_colors',
	array(
		'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
		'type' => 'hidden',
		'section' => 'colors',
		'settings' => 'hovercraft_divider_half_hero_colors',
	)
) );

// header half hero background color setting
$wp_customize->add_setting( 'hovercraft_header_half_hero_background_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// header half hero background color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_header_half_hero_background_color',
	array(
		'label' => 'Header (Half Hero) Background Color',
		'section' => 'colors',
		'settings' => 'hovercraft_header_half_hero_background_color',
	)
) );

// header half hero text color setting
$wp_customize->add_setting( 'hovercraft_header_half_hero_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// header half hero text color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_header_half_hero_text_color',
	array(
		'label' => 'Header (Half Hero) Text Color',
		'section' => 'colors',
		'settings' => 'hovercraft_header_half_hero_text_color',
	)
) );

// header half hero link color setting
$wp_customize->add_setting( 'hovercraft_header_half_hero_link_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// header half hero link color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_header_half_hero_link_color',
	array(
		'label' => 'Header (Half Hero) Link Color',
		'section' => 'colors',
		'settings' => 'hovercraft_header_half_hero_link_color',
	)
) );

// divider above mini hero colors setting
$wp_customize->add_setting( 'hovercraft_divider_mini_hero_colors', array(
	'sanitize_callback' => '__return_null',
) );

// divider above mini hero colors control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_divider_mini_hero_colors',
	array(
		'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
		'type' => 'hidden',
		'section' => 'colors',
		'settings' => 'hovercraft_divider_mini_hero_colors',
	)
) );

// header mini hero background color setting
$wp_customize->add_setting( 'hovercraft_header_mini_hero_background_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// header mini hero background color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_header_mini_hero_background_color',
	array(
		'label' => 'Header (Mini Hero) Background Color',
		'section' => 'colors',
		'settings' => 'hovercraft_header_mini_hero_background_color',
	)
) );

// header mini hero text color setting
$wp_customize->add_setting( 'hovercraft_mini_hero_header_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// header mini hero text color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_mini_hero_header_text_color',
	array(
		'label' => 'Header (Mini Hero) Text Color',
		'section' => 'colors',
		'settings' => 'hovercraft_mini_hero_header_text_color',
	)
) );

// header mini hero link color setting
$wp_customize->add_setting( 'hovercraft_mini_hero_header_link_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// header mini hero link color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_mini_hero_header_link_color',
	array(
		'label' => 'Header (Mini Hero) Link Color',
		'section' => 'colors',
		'settings' => 'hovercraft_mini_hero_header_link_color',
	)
) );

// divider above header basic colors setting
$wp_customize->add_setting( 'hovercraft_divider_header_basic_colors', array(
	'sanitize_callback' => '__return_null',
) );

// divider above header basic colors control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_divider_header_basic_colors',
	array(
		'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
		'type' => 'hidden',
		'section' => 'colors',
		'settings' => 'hovercraft_divider_header_basic_colors',
	)
) );

// header basic background color setting
$wp_customize->add_setting( 'hovercraft_header_basic_background_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// header basic background color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_header_basic_background_color',
	array(
		'label' => 'Header (Basic) Background Color',
		'section' => 'colors',
		'settings' => 'hovercraft_header_basic_background_color',
	)
) );

// header basic hero text color setting
$wp_customize->add_setting( 'hovercraft_basic_hero_header_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// header basic hero text color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_basic_hero_header_text_color',
	array(
		'label' => 'Header (Basic) Text Color',
		'section' => 'colors',
		'settings' => 'hovercraft_basic_hero_header_text_color',
	)
) );

// header basic hero link color setting
$wp_customize->add_setting( 'hovercraft_basic_hero_header_link_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// header basic hero link color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_basic_hero_header_link_color',
	array(
		'label' => 'Header (Basic) Link Color',
		'section' => 'colors',
		'settings' => 'hovercraft_basic_hero_header_link_color',
	)
) );
