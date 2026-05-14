<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// loads menus offcanvas menu logic

function hovercraft_offcanvas_menu() {
	wp_enqueue_script(
		'hovercraft_offcanvas_menu',
		esc_url_raw( get_template_directory_uri() . '/assets/js/offcanvas-menu.js' ),
		array( 'jquery' ),
		HOVERCRAFT_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'hovercraft_offcanvas_menu' );

