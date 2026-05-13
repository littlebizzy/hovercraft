<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'bbpress' ) ) {
	return;
}

// force frontend js body class so bbpress quicktags render correctly
add_action( 'wp_footer', 'hovercraft_swap_js_body_tags' );

function hovercraft_swap_js_body_tags() {
	remove_action( 'wp_footer', 'hovercraft_swap_js_body_tags' );
	wp_print_inline_script_tag( "document.body.className = document.body.className.replace('no-js','js');" );
}
