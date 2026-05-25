<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// check sidebar display status
function hovercraft_should_show_sidebar() {
	// get sidebar display setting
	$hovercraft_sidebar_status = get_theme_mod( 'hovercraft_sidebar_status', null );

	// get legacy sidebar display setting
	if ( null === $hovercraft_sidebar_status || '' === $hovercraft_sidebar_status ) {
		$hovercraft_sidebar_status = get_theme_mod( 'hovercraft_sidebar_appears', 'everywhere' );
	}

	// skip disabled sidebar
	if ( 'none' === $hovercraft_sidebar_status || '0' === $hovercraft_sidebar_status || 0 === $hovercraft_sidebar_status || false === $hovercraft_sidebar_status ) {
		return false;
	}

	// skip posts-only sidebar outside posts
	if ( 'posts_only' === $hovercraft_sidebar_status && ! is_singular( 'post' ) ) {
		return false;
	}

	return true;
}
