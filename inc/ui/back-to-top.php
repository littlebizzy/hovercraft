<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function hovercraft_back_to_top() {
	wp_enqueue_script(
		'hovercraft_back_to_top',
		esc_url_raw( get_template_directory_uri() . '/assets/js/back-to-top.js' ),
		array( 'jquery' ),
		HOVERCRAFT_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'hovercraft_back_to_top' );
