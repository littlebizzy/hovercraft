<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function hovercraft_should_show_posthero( $hero_type ) {
	// skip inactive posthero widget area
	if ( ! is_active_sidebar( 'hovercraft_posthero' ) ) {
		return false;
	}

	// get posthero display setting
	$hovercraft_posthero_display = get_theme_mod( 'hovercraft_posthero_widget_display', '' );

	// get allowed posthero display options
	$hovercraft_posthero_display_options = array(
		'full' => array(
			'full_hero_only',
			'full_and_half_hero',
			'full_and_half_and_mini_hero',
		),
		'half' => array(
			'full_and_half_hero',
			'full_and_half_and_mini_hero',
		),
		'mini' => array(
			'full_and_half_and_mini_hero',
		),
	);

	// skip unknown hero type
	if ( ! isset( $hovercraft_posthero_display_options[ $hero_type ] ) ) {
		return false;
	}

	// check posthero display setting
	return in_array( $hovercraft_posthero_display, $hovercraft_posthero_display_options[ $hero_type ], true );
}
