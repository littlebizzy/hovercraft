<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// add remote font resource hints
function hovercraft_resource_hints( $urls, $relation_type ) {
	// add font preconnect hints
	if ( 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.googleapis.com',
			'crossorigin' => 'anonymous',
		);

		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin' => 'anonymous',
		);
	}

	// add font dns prefetch hints
	if ( 'dns-prefetch' === $relation_type ) {
		$urls[] = '//fonts.googleapis.com';
		$urls[] = '//fonts.gstatic.com';
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'hovercraft_resource_hints', 10, 2 );

// enqueue optional header font assets
function hovercraft_enqueue_header_assets() {
	// get material icons setting
	$hovercraft_material_icons_setting = get_theme_mod( 'hovercraft_material_icons', 'classic_only' );

	// get material icons options
	$hovercraft_material_icons_options = array(
		'classic_only' => array(
			'Material+Icons',
		),
		'classic_and_outlined' => array(
			'Material+Icons',
			'Material+Icons+Outlined',
		),
		'classic_and_outlined_and_two_toned' => array(
			'Material+Icons',
			'Material+Icons+Outlined',
			'Material+Icons+Two+Tone',
		),
	);

	// enqueue material icons
	if ( 'none' !== $hovercraft_material_icons_setting && isset( $hovercraft_material_icons_options[ $hovercraft_material_icons_setting ] ) ) {
		foreach ( $hovercraft_material_icons_options[ $hovercraft_material_icons_setting ] as $hovercraft_material_icons_family ) {
			$hovercraft_material_icons_handle = 'hovercraft_material_icons_' . sanitize_key( $hovercraft_material_icons_family );
			$hovercraft_material_icons_url = 'https://fonts.googleapis.com/icon?family=' . $hovercraft_material_icons_family . '&display=block';

			wp_enqueue_style( $hovercraft_material_icons_handle, esc_url_raw( $hovercraft_material_icons_url ), array(), HOVERCRAFT_VERSION );
		}
	}

	// get font awesome setting
	$hovercraft_font_awesome_setting = get_theme_mod( 'hovercraft_font_awesome', 'none' );

	// get font awesome options
	$hovercraft_font_awesome_options = array(
		'version_6' => array(
			'url' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css',
			'version' => '6.7.2',
		),
		'version_5' => array(
			'url' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css',
			'version' => '5.15.4',
		),
		'version_4' => array(
			'url' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
			'version' => '4.7.0',
		),
	);

	// enqueue font awesome
	if ( 'none' !== $hovercraft_font_awesome_setting && isset( $hovercraft_font_awesome_options[ $hovercraft_font_awesome_setting ] ) ) {
		wp_enqueue_style( 'hovercraft_font_awesome', esc_url_raw( $hovercraft_font_awesome_options[ $hovercraft_font_awesome_setting ]['url'] ), array(), $hovercraft_font_awesome_options[ $hovercraft_font_awesome_setting ]['version'] );
	}
}
add_action( 'wp_enqueue_scripts', 'hovercraft_enqueue_header_assets' );
