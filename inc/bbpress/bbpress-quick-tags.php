<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'bbpress' ) ) {
	return;
}

// enable frontend quicktags on bbpress screens
function hovercraft_enable_bbpress_quicktags_body_class() {
	if ( ! function_exists( 'is_bbpress' ) || ! is_bbpress() ) {
		return;
	}

	wp_print_inline_script_tag( "document.body.classList.remove('no-js');document.body.classList.add('js');" );
}
add_action( 'wp_footer', 'hovercraft_enable_bbpress_quicktags_body_class', 1 );
