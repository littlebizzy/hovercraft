<?php

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

function hovercraft_format_css_font_family( $font_family, $fallback_font_family = '' ) {
	$font_family = hovercraft_normalize_font_family( $font_family );

	if ( empty( $font_family ) ) {
		$font_family = hovercraft_normalize_font_family( $fallback_font_family );
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
		'' => __( 'Default (unspecified)', 'hovercraft' ),
	);

	hovercraft_add_available_font( $font_families, get_theme_mod( 'hovercraft_first_font_family', 'noto_sans' ) );
	hovercraft_add_available_font( $font_families, get_theme_mod( 'hovercraft_second_font_family', '' ) );
	hovercraft_add_available_font( $font_families, get_theme_mod( 'hovercraft_third_font_family', '' ) );
	hovercraft_add_available_font( $font_families, get_theme_mod( 'hovercraft_multilingual_font_family', '' ) );
	hovercraft_add_available_font( $font_families, 'open_sans' );
	hovercraft_add_available_font( $font_families, 'roboto' );

	return $font_families;
}

// Ref: ChatGPT
