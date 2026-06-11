<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// icons section
$wp_customize->add_section( 'hovercraft_icons', array(
	'title' => 'Icons',
	'priority' => 102,
) );

// material icons setting
$wp_customize->add_setting( 'hovercraft_material_icons', array(
	'default' => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// material icons control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_material_icons',
	array(
		'label' => __( 'Material Icons Library', 'hovercraft' ),
		'description' => __( 'Optionally load Material Icons for custom content. Core theme icons use local SVG files.', 'hovercraft' ),
		'section' => 'hovercraft_icons',
		'settings' => 'hovercraft_material_icons',
		'type' => 'select',
		'choices' => array(
		'none' => 'None',
		'classic_only' => 'Classic Only',
		'classic_and_outlined' => 'Classic and Outlined',
		'classic_and_outlined_and_two_toned' => 'Classic, Outlined, and Two-Toned',
		),
	)
) );

// font awesome setting
$wp_customize->add_setting( 'hovercraft_font_awesome', array(
	'default' => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// font awesome control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_font_awesome',
	array(
		'label' => __( 'Font Awesome Library', 'hovercraft' ),
		'description' => __( 'Optionally load Font Awesome for custom content or social brand icons. Core theme icons use local SVG files.', 'hovercraft' ),
		'section' => 'hovercraft_icons',
		'settings' => 'hovercraft_font_awesome',
		'type' => 'select',
		'choices' => array(
		'none' => 'None',
		'version_6' => 'Version 6',
		'version_5' => 'Version 5',
		'version_4' => 'Version 4',
		),
	)
) );
