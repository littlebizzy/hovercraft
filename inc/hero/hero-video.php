<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// sanitize full hero video attachment
function hovercraft_sanitize_full_hero_video( $attachment_id ) {
	$attachment_id = absint( $attachment_id );

	if ( empty( $attachment_id ) ) {
		return 0;
	}

	if ( 'video/mp4' !== get_post_mime_type( $attachment_id ) ) {
		return 0;
	}

	return $attachment_id;
}

// register full hero video control
function hovercraft_register_full_hero_video_control( $wp_customize ) {
	$wp_customize->add_setting( 'hovercraft_video', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'hovercraft_sanitize_full_hero_video',
		'type' => 'theme_mod',
	) );

	$wp_customize->add_control( new WP_Customize_Media_Control(
		$wp_customize,
		'hovercraft_video',
		array(
			'label' => esc_html__( 'Full Hero Video', 'hovercraft' ),
			'description' => esc_html__( 'Upload or select an MP4 background video used only by Full Hero layouts.', 'hovercraft' ),
			'section' => 'header_image',
			'mime_type' => 'video/mp4',
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
add_action( 'customize_register', 'hovercraft_register_full_hero_video_control' );
