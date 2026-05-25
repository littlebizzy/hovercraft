<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// get header logo url
function hovercraft_get_header_logo_url() {
	$default_logo_url = wp_get_attachment_url( get_theme_mod( 'custom_logo' ) );
	$alternative_logo_url = get_theme_mod( 'hovercraft_logo_alternative' );
	$alternative_logo_location = get_theme_mod( 'hovercraft_logo_alternative_location', 'none' );
	$template_slug = get_page_template_slug();

	if ( ! is_string( $template_slug ) || '' === $template_slug ) {
		$template_slug = 'basic';
	}

	if ( ! $alternative_logo_url || 'none' === $alternative_logo_location ) {
		return $default_logo_url;
	}

	$logo_locations = array(
		'full_hero_only' => array( 'full-hero' ),
		'half_hero_only' => array( 'half-hero' ),
		'mini_hero_only' => array( 'mini-hero' ),
		'basic_header_only' => array( 'basic' ),
		'full_and_half_hero' => array( 'full-hero', 'half-hero' ),
		'full_and_mini_hero' => array( 'full-hero', 'mini-hero' ),
		'full_hero_and_basic_header' => array( 'full-hero', 'basic' ),
		'half_and_mini_hero' => array( 'half-hero', 'mini-hero' ),
		'half_hero_and_basic_header' => array( 'half-hero', 'basic' ),
		'mini_hero_and_basic_header' => array( 'mini-hero', 'basic' ),
		'full_and_half_and_mini_hero' => array( 'full-hero', 'half-hero', 'mini-hero' ),
		'full_and_half_hero_and_basic_header' => array( 'full-hero', 'half-hero', 'basic' ),
		'full_and_mini_hero_and_basic_header' => array( 'full-hero', 'mini-hero', 'basic' ),
		'half_and_mini_hero_and_basic_header' => array( 'half-hero', 'mini-hero', 'basic' ),
		'full_and_half_and_mini_hero_and_basic_header' => array( 'full-hero', 'half-hero', 'mini-hero', 'basic' ),
	);

	if ( ! isset( $logo_locations[ $alternative_logo_location ] ) ) {
		return $default_logo_url;
	}

	foreach ( $logo_locations[ $alternative_logo_location ] as $location_slug ) {
		if ( false !== strpos( $template_slug, $location_slug ) ) {
			return $alternative_logo_url;
		}
	}

	return $default_logo_url;
}

// add alternative logo setting
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

// sanitize image upload
function hovercraft_sanitize_image( $file, $setting ) {
	$image_mimes = array(
		'jpg|jpeg' => 'image/jpeg',
		'png' => 'image/png',
		'gif' => 'image/gif',
	);

	$file_type = wp_check_filetype( $file, $image_mimes );

	if ( ! empty( $file_type['ext'] ) ) {
		return $file;
	}

	return $setting->default;
}
