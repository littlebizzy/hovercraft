<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// hidden category rules

add_action( 'pre_get_posts', 'hovercraft_hide_certain_categories' );

function hovercraft_hide_certain_categories( $wp_query ) {
	$excluded_categories = array();
	$portal_category = get_category_by_slug( get_theme_mod( 'hovercraft_portal_category', 'none' ) );
	$bullets_category = get_category_by_slug( get_theme_mod( 'hovercraft_bullets_category', 'none' ) );

	if ( ! empty( $portal_category->term_id ) ) {
		$excluded_categories[] = $portal_category->term_id;
	}

	if ( ! empty( $bullets_category->term_id ) ) {
		$excluded_categories[] = $bullets_category->term_id;
	}

	if ( empty( $excluded_categories ) ) {
		return;
	}

	if ( ! is_admin() && ! is_category( $excluded_categories ) ) {
		$wp_query->set( 'category__not_in', $excluded_categories );
	}
}
