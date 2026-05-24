<?php

// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// register header video control
function hovercraft_register_header_video_control( $wp_customize ) {
	$wp_customize->add_setting( 'hovercraft_video', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'absint',
		'type' => 'theme_mod',
	) );

	$wp_customize->add_control( new WP_Customize_Media_Control(
		$wp_customize,
		'hovercraft_video',
		array(
			'label' => esc_html__( 'Header Video', 'hovercraft' ),
			'description' => esc_html__( 'Upload or select a background video for the site header.', 'hovercraft' ),
			'section' => 'header_image',
			'mime_type' => 'video',
			'settings' => 'hovercraft_video',
			'priority' => 8,
			'button_labels' => array(
				'select' => esc_html__( 'Select Video', 'hovercraft' ),
				'change' => esc_html__( 'Change Video', 'hovercraft' ),
				'default' => esc_html__( 'Default', 'hovercraft' ),
				'remove' => esc_html__( 'Remove', 'hovercraft' ),
				'placeholder' => esc_html__( 'No video selected', 'hovercraft' ),
				'frame_title' => esc_html__( 'Select Video', 'hovercraft' ),
				'frame_button' => esc_html__( 'Select Video', 'hovercraft' ),
			),
		)
	) );
}
add_action( 'customize_register', 'hovercraft_register_header_video_control' );
