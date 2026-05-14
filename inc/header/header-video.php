<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// loads header header video logic

function hovercraft_video( $wp_customize ) {
	$wp_customize->add_setting(
		'hovercraft_video',
		array(
			'default' => '',
			'transport' => 'refresh',
			'sanitize_callback' => 'absint',
			'type' => 'theme_mod',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'video_upload',
			array(
				'label' => esc_html__( 'Background Video', 'hovercraft' ),
				'description' => esc_html__( 'Upload or select a background video for the site header.', 'hovercraft' ),
				'section' => 'header_image',
				'mime_type' => 'video',
				'settings' => 'hovercraft_video',
				'priority' => 8,
				'button_labels' => array(
					'select' => esc_html__( 'Select File', 'hovercraft' ),
					'change' => esc_html__( 'Change File', 'hovercraft' ),
					'default' => esc_html__( 'Default', 'hovercraft' ),
					'remove' => esc_html__( 'Remove', 'hovercraft' ),
					'placeholder' => esc_html__( 'No file selected', 'hovercraft' ),
					'frame_title' => esc_html__( 'Select File', 'hovercraft' ),
					'frame_button' => esc_html__( 'Choose File', 'hovercraft' ),
				),
			)
		)
	);
}
add_action( 'customize_register', 'hovercraft_video' );
