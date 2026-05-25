<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// sidebar section
$wp_customize->add_section( 'hovercraft_sidebar', array(
	'title' => 'Sidebar',
	'priority' => 120,
) );

// sidebar status setting
$wp_customize->add_setting( 'hovercraft_sidebar_status', array(
	'default' => 'everywhere',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// sidebar status control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_sidebar_status',
	array(
		'label' => __( 'Sidebar Appears', 'hovercraft' ),
		'description' => __( 'On which pages should the Sidebar element be displayed (Note: when enabled, this forces the Main Content width to be narrow)?', 'hovercraft' ),
		'section' => 'hovercraft_sidebar',
		'settings' => 'hovercraft_sidebar_status',
		'type' => 'select',
		'choices' => array(
		'none' => 'None (Disabled)',
		'everywhere' => 'Everywhere Possible',
		'posts_only' => 'Posts Only',
		),
	)
) );

// primary width setting
$wp_customize->add_setting( 'hovercraft_primary_width', array(
	'default' => 'narrow_centered',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// primary width control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_primary_width',
	array(
		'label' => __( 'Main Content Width (Desktop)', 'hovercraft' ),
		'description' => __( 'If Sidebar disabled, what should be the default width of the Main Content section?', 'hovercraft' ),
		'section' => 'hovercraft_sidebar',
		'settings' => 'hovercraft_primary_width',
		'type' => 'select',
		'choices' => array(
		'narrow_centered' => 'Narrow Centered (768px)',
		'wide' => 'Wide (1200px)',
		),
	)
) );

// sidebar padding setting
$wp_customize->add_setting( 'hovercraft_sidebar_padding', array(
	'default' => 0,
	'sanitize_callback' => 'hovercraft_sanitize_checkbox',
) );

// sidebar padding control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_sidebar_padding',
	array(
		'label' => __( 'Enable sidebar padding', 'hovercraft' ),
		'section' => 'hovercraft_sidebar',
		'settings' => 'hovercraft_sidebar_padding',
		'type' => 'checkbox',
	)
) );
