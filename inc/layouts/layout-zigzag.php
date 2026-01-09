<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
 * register zigzag customizer section
 */
function hovercraft_customize_register_zigzag( $wp_customize ) {

	$wp_customize->add_section(
		'hovercraft_layout_zigzag',
		array(
			'title'       => 'ZigZag Section',
			'description' => 'configure zigzag layout section',
			'priority'    => 160,
		)
	);

	// enable toggle
	$wp_customize->add_setting(
		'hovercraft_zigzag_enabled',
		array(
			'default'           => false,
			'sanitize_callback' => 'hovercraft_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'hovercraft_zigzag_enabled',
		array(
			'type'    => 'checkbox',
			'label'   => 'enable zigzag section',
			'section' => 'hovercraft_layout_zigzag',
		)
	);

	// rows setting
	$wp_customize->add_setting(
		'hovercraft_zigzag_rows',
		array(
			'default'           => array(),
			'sanitize_callback' => 'hovercraft_sanitize_zigzag_rows',
		)
	);

	$wp_customize->add_control(
		new HoverCraft_ZigZag_Repeater_Control(
			$wp_customize,
			'hovercraft_zigzag_rows',
			array(
				'label'   => 'zigzag rows',
				'section' => 'hovercraft_layout_zigzag',
			)
		)
	);
}
add_action( 'customize_register', 'hovercraft_customize_register_zigzag' );

// Ref: ChatGPT
