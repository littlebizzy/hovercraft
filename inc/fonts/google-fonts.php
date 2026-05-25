<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// add one google font family
function hovercraft_add_google_font_family( &$font_families, $font_family, $limit = 0 ) {
	$font_family = hovercraft_normalize_font_family( $font_family );

	if ( empty( $font_family ) || in_array( $font_family, $font_families, true ) ) {
		return;
	}

	if ( ! empty( $limit ) && count( $font_families ) >= $limit ) {
		return;
	}

	$font_families[] = $font_family;
}

// collect selected google font families
function hovercraft_get_google_font_families() {
	$font_families = array();
	$font_family_limit = 3;
	$first_font_family = hovercraft_normalize_font_family( get_theme_mod( 'hovercraft_first_font_family', 'noto_sans' ) );

	if ( empty( $first_font_family ) ) {
		$first_font_family = 'noto_sans';
	}

	hovercraft_add_google_font_family( $font_families, $first_font_family, $font_family_limit );
	hovercraft_add_google_font_family( $font_families, get_theme_mod( 'hovercraft_second_font_family', '' ), $font_family_limit );
	hovercraft_add_google_font_family( $font_families, get_theme_mod( 'hovercraft_third_font_family', '' ), $font_family_limit );

	$multilingual_font_family = hovercraft_normalize_font_family( get_theme_mod( 'hovercraft_multilingual_font_family', '' ) );

	if ( ! empty( $multilingual_font_family ) && ! in_array( $multilingual_font_family, $font_families, true ) ) {
		$font_families[] = $multilingual_font_family;
	}

	return $font_families;
}

// enqueue selected google fonts
function hovercraft_enqueue_google_fonts() {
	$font_variations = 'ital,wght@0,400;0,600;0,700;1,400;1,600;1,700';
	$google_font_families = array();

	foreach ( hovercraft_get_google_font_families() as $font_family ) {
		$font_family_label = str_replace( ' ', '+', hovercraft_format_font_family_label( $font_family ) );
		$google_font_families[] = 'family=' . $font_family_label . ':' . $font_variations;
	}

	if ( empty( $google_font_families ) ) {
		return;
	}

	$google_fonts_url = 'https://fonts.googleapis.com/css2?' . implode( '&', $google_font_families ) . '&display=swap';

	wp_enqueue_style( 'hovercraft_google_fonts', esc_url_raw( $google_fonts_url ), array(), HOVERCRAFT_VERSION, 'all' );
}

// load google fonts on the frontend
add_action( 'wp_enqueue_scripts', 'hovercraft_enqueue_google_fonts' );