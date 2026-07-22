<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// offcanvas menu assets

function hovercraft_offcanvas_menu() {
	if ( 'accordion' !== get_theme_mod( 'hovercraft_mobile_menu', 'accordion' ) ) {
		return;
	}

	wp_enqueue_script(
		'hovercraft_offcanvas_menu',
		esc_url_raw( get_template_directory_uri() . '/assets/js/offcanvas-menu.js' ),
		array(),
		HOVERCRAFT_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'hovercraft_offcanvas_menu' );
