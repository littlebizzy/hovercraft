<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// loads menus overlay menu logic

function hovercraft_overlay_menu() {
	wp_enqueue_script(
		'hovercraft_overlay_menu',
		esc_url_raw( get_template_directory_uri() . '/assets/js/overlay-menu.js' ),
		array( 'jquery' ),
		HOVERCRAFT_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'hovercraft_overlay_menu' );

