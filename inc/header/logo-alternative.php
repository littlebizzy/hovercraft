<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// add alternative logo setting to customizer
function hovercraft_logo_alternative( $wp_customize ) {
	$wp_customize->add_setting(
		'hovercraft_logo_alternative',
		array(
			'sanitize_callback' => 'hovercraft_sanitize_image',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'hovercraft_logo_alternative',
			array(
				'label' => esc_html__( 'Alternative Logo', 'hovercraft' ),
				'section' => 'title_tagline',
				'settings' => 'hovercraft_logo_alternative',
				'priority' => 8,
			)
		)
	);
}
add_action( 'customize_register', 'hovercraft_logo_alternative' );

// sanitize uploaded image file
function hovercraft_sanitize_image( $file, $setting ) {
	$mimes = array(
		'jpg|jpeg' => 'image/jpeg',
		'png' => 'image/png',
		'gif' => 'image/gif',
	);

	$file_ext = wp_check_filetype( $file, $mimes );

	if ( ! empty( $file_ext['ext'] ) ) {
		return $file;
	}

	return $setting->default;
}

