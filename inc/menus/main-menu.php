<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// main menu setup
function hovercraft_main_menu() {
	wp_enqueue_script(
		'hovercraft_main_menu',
		esc_url_raw( get_template_directory_uri() . '/assets/js/main-menu.js' ),
		array( 'jquery' ),
		HOVERCRAFT_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'hovercraft_main_menu' );