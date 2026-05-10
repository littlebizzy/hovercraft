<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function hovercraft_normalize_font_family( $font_family ) {
	$font_family = sanitize_key( $font_family );

	if ( empty( $font_family ) || 'none' === $font_family ) {
		return '';
	}

	return $font_family;
}

function hovercraft_format_font_family_label( $font_family ) {
	$font_family = hovercraft_normalize_font_family( $font_family );

	if ( empty( $font_family ) ) {
		return '';
	}

	return ucwords( str_replace( '_', ' ', $font_family ) );
}

function hovercraft_get_loaded_font_families() {
	$font_families = array();
	$first_font_family = hovercraft_normalize_font_family( get_theme_mod( 'hovercraft_first_font_family', 'noto_sans' ) );

	if ( empty( $first_font_family ) ) {
		$first_font_family = 'noto_sans';
	}

	hovercraft_add_available_font( $font_families, $first_font_family );
	hovercraft_add_available_font( $font_families, get_theme_mod( 'hovercraft_second_font_family', '' ) );
	hovercraft_add_available_font( $font_families, get_theme_mod( 'hovercraft_third_font_family', '' ) );
	hovercraft_add_available_font( $font_families, get_theme_mod( 'hovercraft_multilingual_font_family', '' ) );

	return $font_families;
}

function hovercraft_validate_role_font_family( $font_family ) {
	$font_family = hovercraft_normalize_font_family( $font_family );

	if ( empty( $font_family ) ) {
		return '';
	}

	$loaded_font_families = hovercraft_get_loaded_font_families();

	if ( isset( $loaded_font_families[ $font_family ] ) ) {
		return $font_family;
	}

	return key( $loaded_font_families );
}

function hovercraft_format_css_font_family( $font_family, $fallback_font_family = '' ) {
	$font_family = hovercraft_validate_role_font_family( $font_family );

	if ( empty( $font_family ) ) {
		$font_family = hovercraft_validate_role_font_family( $fallback_font_family );
	}

	if ( empty( $font_family ) ) {
		return 'sans-serif';
	}

	return '"' . esc_attr( hovercraft_format_font_family_label( $font_family ) ) . '", sans-serif';
}

function hovercraft_add_available_font( &$font_families, $font_family ) {
	$font_family = hovercraft_normalize_font_family( $font_family );

	if ( empty( $font_family ) ) {
		return;
	}

	$font_families[ $font_family ] = hovercraft_format_font_family_label( $font_family );
}

function hovercraft_available_fonts() {
	$font_families = array(
		'' => __( 'Default (first loaded font)', 'hovercraft' ),
	);

	return array_merge( $font_families, hovercraft_get_loaded_font_families() );
}

add_filter( 'theme_mod_hovercraft_default_font', 'hovercraft_validate_role_font_family' );
add_filter( 'theme_mod_hovercraft_site_name_font', 'hovercraft_validate_role_font_family' );
add_filter( 'theme_mod_hovercraft_main_menu_font', 'hovercraft_validate_role_font_family' );
add_filter( 'theme_mod_hovercraft_h1_font', 'hovercraft_validate_role_font_family' );
add_filter( 'theme_mod_hovercraft_h2_font', 'hovercraft_validate_role_font_family' );
add_filter( 'theme_mod_hovercraft_h3_font', 'hovercraft_validate_role_font_family' );
add_filter( 'theme_mod_hovercraft_h4_font', 'hovercraft_validate_role_font_family' );
add_filter( 'theme_mod_hovercraft_h5_font', 'hovercraft_validate_role_font_family' );

// Ref: ChatGPT
