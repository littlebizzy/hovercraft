<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// enqueue full screen search script
function hovercraft_full_screen_search() {
	wp_enqueue_script(
		'hovercraft_full_screen_search',
		esc_url_raw( get_template_directory_uri() . '/assets/js/full-screen-search.js' ),
		array( 'jquery' ),
		HOVERCRAFT_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'hovercraft_full_screen_search' );
