<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// check sidebar display status
function hovercraft_should_show_sidebar() {
	$sidebar_status = get_theme_mod( 'hovercraft_sidebar_status', null );

	if ( $sidebar_status === null || $sidebar_status === '' ) {
		$sidebar_status = get_theme_mod( 'hovercraft_sidebar_appears', 'everywhere' );
	}

	if ( $sidebar_status === 'none' || $sidebar_status === '0' || $sidebar_status === 0 || $sidebar_status === false ) {
		return false;
	}

	if ( $sidebar_status === 'posts_only' && ! is_singular( 'post' ) ) {
		return false;
	}

	return true;
}
