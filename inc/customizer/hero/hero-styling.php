<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// hero styling section
$wp_customize->add_section( 'hovercraft_hero_styling', array(
	'title' => 'Hero Options',
	'priority' => 87,
) );

// full hero background position setting
$wp_customize->add_setting( 'hovercraft_full_hero_background_position', array(
	'default' => 'center_center',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// full hero background position control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_full_hero_background_position',
	array(
		'label' => __( 'Full Hero Background Position', 'hovercraft' ),
		'description' => __( 'Background position of the hero image?', 'hovercraft' ),
		'section' => 'hovercraft_hero_styling',
		'settings' => 'hovercraft_full_hero_background_position',
		'type' => 'select',
		'choices' => array(
		'left_top' => 'Left Top',
		'left_center' => 'Left Center',
		'left_bottom' => 'Left Bottom',
		'right_top' => 'Right Top',
		'right_center' => 'Right Center',
		'right_bottom' => 'Right Bottom',
		'center_top' => 'Center Top',
		'center_center' => 'Center Center',
		'center_bottom' => 'Center Bottom',
		),
	)
) );

// half hero background position setting
$wp_customize->add_setting( 'hovercraft_half_hero_background_position', array(
	'default' => 'center_center',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// half hero background position control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_half_hero_background_position',
	array(
		'label' => __( 'Half Hero Background Position', 'hovercraft' ),
		'description' => __( 'Background position of the hero image?', 'hovercraft' ),
		'section' => 'hovercraft_hero_styling',
		'settings' => 'hovercraft_half_hero_background_position',
		'type' => 'select',
		'choices' => array(
		'left_top' => 'Left Top',
		'left_center' => 'Left Center',
		'left_bottom' => 'Left Bottom',
		'right_top' => 'Right Top',
		'right_center' => 'Right Center',
		'right_bottom' => 'Right Bottom',
		'center_top' => 'Center Top',
		'center_center' => 'Center Center',
		'center_bottom' => 'Center Bottom',
		),
	)
) );

// mini hero background position setting
$wp_customize->add_setting( 'hovercraft_mini_hero_background_position', array(
	'default' => 'center_center',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// mini hero background position control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_mini_hero_background_position',
	array(
		'label' => __( 'Mini Hero Background Position', 'hovercraft' ),
		'description' => __( 'Background position of the hero image?', 'hovercraft' ),
		'section' => 'hovercraft_hero_styling',
		'settings' => 'hovercraft_mini_hero_background_position',
		'type' => 'select',
		'choices' => array(
		'left_top' => 'Left Top',
		'left_center' => 'Left Center',
		'left_bottom' => 'Left Bottom',
		'right_top' => 'Right Top',
		'right_center' => 'Right Center',
		'right_bottom' => 'Right Bottom',
		'center_top' => 'Center Top',
		'center_center' => 'Center Center',
		'center_bottom' => 'Center Bottom',
		),
	)
) );

// desktop hero content width setting
$wp_customize->add_setting( 'hovercraft_hero_content_width_desktop', array(
	'default' => '900px',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// desktop hero content width control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_hero_content_width_desktop',
	array(
		'label' => __( 'Full Hero Content Width', 'hovercraft' ),
		'description' => __( 'Width of hero content on desktop.', 'hovercraft' ),
		'section' => 'hovercraft_hero_styling',
		'settings' => 'hovercraft_hero_content_width_desktop',
		'type' => 'select',
		'choices' => array(
		'600px' => '600px',
		'900px' => '900px',
		'1200px' => 'Full width (1200px)',
		),
	)
) );

// desktop mini hero vertical padding setting
$wp_customize->add_setting( 'hovercraft_mini_hero_vertical_padding', array(
	'default' => '80',
	'sanitize_callback' => 'hovercraft_sanitize_float',
) );

// desktop mini hero vertical padding control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_mini_hero_vertical_padding',
	array(
		'label' => __( 'Mini Hero Padding (Desktop)', 'hovercraft' ),
		'description' => __( 'Specify mini hero vertical padding in pixels?', 'hovercraft' ),
		'section' => 'hovercraft_hero_styling',
		'settings' => 'hovercraft_mini_hero_vertical_padding',
		'type' => 'text',
	)
) );

// mobile mini hero vertical padding setting
$wp_customize->add_setting( 'hovercraft_mini_hero_mobile_vertical_padding', array(
	'default' => '60',
	'sanitize_callback' => 'absint',
) );

// mobile mini hero vertical padding control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_mini_hero_mobile_vertical_padding',
	array(
		'label' => __( 'Mini Hero Padding (Mobile)', 'hovercraft' ),
		'description' => __( 'Specify mini hero vertical padding on mobile in pixels.', 'hovercraft' ),
		'section' => 'hovercraft_hero_styling',
		'settings' => 'hovercraft_mini_hero_mobile_vertical_padding',
		'type' => 'number',
	)
) );

// hero gradient angle setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_angle', array(
	'default' => '60deg',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// hero gradient angle control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_hero_gradient_angle',
	array(
		'label' => __( 'Gradient angle', 'hovercraft' ),
		'description' => __( 'Choose the angle of the hero gradient.', 'hovercraft' ),
		'section' => 'hovercraft_hero_styling',
		'settings' => 'hovercraft_hero_gradient_angle',
		'type' => 'select',
		'choices' => array(
		'0deg' => '0 Degrees',
		'45deg' => '45 Degrees',
		'60deg' => '60 Degrees',
		'90deg' => '90 Degrees',
		'120deg' => '120 Degrees',
		'135deg' => '135 Degrees',
		'180deg' => '180 Degrees',
		'225deg' => '225 Degrees',
		'270deg' => '270 Degrees',
		'315deg' => '315 Degrees',
		),
	)
) );

// hero gradient status setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_status', array(
	'default' => 'all_hero_instances',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// hero gradient status control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_hero_gradient_status',
	array(
		'label' => __( 'Hero Gradient Status', 'hovercraft' ),
		'description' => __( 'Which pages should use the hero CSS gradient?', 'hovercraft' ),
		'section' => 'hovercraft_hero_styling',
		'settings' => 'hovercraft_hero_gradient_status',
		'type' => 'select',
		'choices' => array(
		'all_hero_instances' => 'All Hero Instances',
		'homepage_only' => 'Homepage Hero Only',
		'none' => 'None (Disabled)',
		),
	)
) );

// hero gradient tones setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_tones', array(
	'default' => 'two_tones',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// hero gradient tones control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_hero_gradient_tones',
	array(
		'label' => __( 'Hero Gradient Tones', 'hovercraft' ),
		'description' => __( 'How many color tones should generate the CSS gradient?', 'hovercraft' ),
		'section' => 'hovercraft_hero_styling',
		'settings' => 'hovercraft_hero_gradient_tones',
		'type' => 'select',
		'choices' => array(
		'two_tones' => '2 Tones',
		'three_tones' => '3 Tones',
		),
	)
) );

// full hero header background transparency setting
$wp_customize->add_setting( 'hovercraft_full_hero_header_background_transparency', array(
	'default' => '0.20',
	'sanitize_callback' => 'hovercraft_sanitize_float',
) );

// full hero header background transparency control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_full_hero_header_background_transparency',
	array(
		'label' => __( 'Full Hero Header Background Transparency', 'hovercraft' ),
		'description' => __( 'Transparency of the Full Hero header background color.', 'hovercraft' ),
		'section' => 'hovercraft_hero_styling',
		'settings' => 'hovercraft_full_hero_header_background_transparency',
		'type' => 'select',
		'choices' => array(
		'0.0' => '0.00',
		'0.10' => '0.10',
		'0.15' => '0.15',
		'0.20' => '0.20',
		'0.25' => '0.25',
		'0.30' => '0.30',
		'0.35' => '0.35',
		'0.40' => '0.40',
		'0.45' => '0.45',
		'0.50' => '0.50',
		'0.55' => '0.55',
		'0.60' => '0.60',
		'0.65' => '0.65',
		'0.70' => '0.70',
		'0.75' => '0.75',
		'0.80' => '0.80',
		'0.85' => '0.85',
		'0.90' => '0.90',
		'0.95' => '0.95',
		'1.0' => '1.00',
		),
	)
) );

// hero gradient start color transparency setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_start_color_transparency', array(
	'default' => '0.50',
	'sanitize_callback' => 'hovercraft_sanitize_float',
) );

// hero gradient start color transparency control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_hero_gradient_start_color_transparency',
	array(
		'label' => __( 'Start Color Transparency', 'hovercraft' ),
		'description' => __( 'Transparency of the start color.', 'hovercraft' ),
		'section' => 'hovercraft_hero_styling',
		'settings' => 'hovercraft_hero_gradient_start_color_transparency',
		'type' => 'select',
		'choices' => array(
		'0.0' => '0.00',
		'0.10' => '0.10',
		'0.15' => '0.15',
		'0.20' => '0.20',
		'0.25' => '0.25',
		'0.30' => '0.30',
		'0.35' => '0.35',
		'0.40' => '0.40',
		'0.45' => '0.45',
		'0.50' => '0.50',
		'0.55' => '0.55',
		'0.60' => '0.60',
		'0.65' => '0.65',
		'0.70' => '0.70',
		'0.75' => '0.75',
		'0.80' => '0.80',
		'0.85' => '0.85',
		'0.90' => '0.90',
		'0.95' => '0.95',
		'1.0' => '1.00',
		),
	)
) );

// hero gradient mid color transparency setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_mid_color_transparency', array(
	'default' => '0.50',
	'sanitize_callback' => 'hovercraft_sanitize_float',
) );

// hero gradient mid color transparency control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_hero_gradient_mid_color_transparency',
	array(
		'label' => __( 'Mid Color Transparency', 'hovercraft' ),
		'description' => __( 'Transparency of the mid color.', 'hovercraft' ),
		'section' => 'hovercraft_hero_styling',
		'settings' => 'hovercraft_hero_gradient_mid_color_transparency',
		'type' => 'select',
		'choices' => array(
		'0.0' => '0.00',
		'0.10' => '0.10',
		'0.15' => '0.15',
		'0.20' => '0.20',
		'0.25' => '0.25',
		'0.30' => '0.30',
		'0.35' => '0.35',
		'0.40' => '0.40',
		'0.45' => '0.45',
		'0.50' => '0.50',
		'0.55' => '0.55',
		'0.60' => '0.60',
		'0.65' => '0.65',
		'0.70' => '0.70',
		'0.75' => '0.75',
		'0.80' => '0.80',
		'0.85' => '0.85',
		'0.90' => '0.90',
		'0.95' => '0.95',
		'1.0' => '1.00',
		),
	)
) );

// hero gradient stop color transparency setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_stop_color_transparency', array(
	'default' => '0.50',
	'sanitize_callback' => 'hovercraft_sanitize_float',
) );

// hero gradient stop color transparency control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_hero_gradient_stop_color_transparency',
	array(
		'label' => __( 'Stop Color Transparency', 'hovercraft' ),
		'description' => __( 'Transparency of the stop color.', 'hovercraft' ),
		'section' => 'hovercraft_hero_styling',
		'settings' => 'hovercraft_hero_gradient_stop_color_transparency',
		'type' => 'select',
		'choices' => array(
		'0.0' => '0.00',
		'0.10' => '0.10',
		'0.15' => '0.15',
		'0.20' => '0.20',
		'0.25' => '0.25',
		'0.30' => '0.30',
		'0.35' => '0.35',
		'0.40' => '0.40',
		'0.45' => '0.45',
		'0.50' => '0.50',
		'0.55' => '0.55',
		'0.60' => '0.60',
		'0.65' => '0.65',
		'0.70' => '0.70',
		'0.75' => '0.75',
		'0.80' => '0.80',
		'0.85' => '0.85',
		'0.90' => '0.90',
		'0.95' => '0.95',
		'1.0' => '1.00',
		),
	)
) );

// hero gradient start color length setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_start_color_length', array(
	'default' => '30',
	'sanitize_callback' => 'absint',
) );

// hero gradient start color length control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_hero_gradient_start_color_length',
	array(
		'label' => __( 'Start color length', 'hovercraft' ),
		'description' => __( 'Length of the start color.', 'hovercraft' ),
		'section' => 'hovercraft_hero_styling',
		'settings' => 'hovercraft_hero_gradient_start_color_length',
		'type' => 'select',
		'choices' => array(
		'0' => '0',
		'5' => '5',
		'10' => '10',
		'15' => '15',
		'20' => '20',
		'25' => '25',
		'30' => '30',
		'35' => '35',
		'40' => '40',
		'45' => '45',
		'50' => '50',
		'55' => '55',
		'60' => '60',
		'65' => '65',
		'70' => '70',
		'75' => '75',
		'80' => '80',
		'85' => '85',
		'90' => '90',
		'95' => '95',
		'100' => '100',
		),
	)
) );

// hero gradient mid color length setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_mid_color_length', array(
	'default' => '30',
	'sanitize_callback' => 'absint',
) );

// hero gradient mid color length control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_hero_gradient_mid_color_length',
	array(
		'label' => __( 'Mid color length', 'hovercraft' ),
		'description' => __( 'Length of the mid color.', 'hovercraft' ),
		'section' => 'hovercraft_hero_styling',
		'settings' => 'hovercraft_hero_gradient_mid_color_length',
		'type' => 'select',
		'choices' => array(
		'0' => '0',
		'5' => '5',
		'10' => '10',
		'15' => '15',
		'20' => '20',
		'25' => '25',
		'30' => '30',
		'35' => '35',
		'40' => '40',
		'45' => '45',
		'50' => '50',
		'55' => '55',
		'60' => '60',
		'65' => '65',
		'70' => '70',
		'75' => '75',
		'80' => '80',
		'85' => '85',
		'90' => '90',
		'95' => '95',
		'100' => '100',
		),
	)
) );

// hero gradient stop color length setting
$wp_customize->add_setting( 'hovercraft_hero_gradient_stop_color_length', array(
	'default' => '100',
	'sanitize_callback' => 'absint',
) );

// hero gradient stop color length control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_hero_gradient_stop_color_length',
	array(
		'label' => __( 'Stop color length', 'hovercraft' ),
		'description' => __( 'Length of the stop color.', 'hovercraft' ),
		'section' => 'hovercraft_hero_styling',
		'settings' => 'hovercraft_hero_gradient_stop_color_length',
		'type' => 'select',
		'choices' => array(
		'0' => '0',
		'5' => '5',
		'10' => '10',
		'15' => '15',
		'20' => '20',
		'25' => '25',
		'30' => '30',
		'35' => '35',
		'40' => '40',
		'45' => '45',
		'50' => '50',
		'55' => '55',
		'60' => '60',
		'65' => '65',
		'70' => '70',
		'75' => '75',
		'80' => '80',
		'85' => '85',
		'90' => '90',
		'95' => '95',
		'100' => '100',
		),
	)
) );
