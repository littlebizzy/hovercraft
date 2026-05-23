<?php

// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// exit if bbpress is inactive
if ( ! function_exists( 'bbpress' ) ) {
	return;
}

// fix frontend quicktags on bbpress screens
function hovercraft_fix_bbpress_quicktags_body_class() {
	// exit if this is not a bbpress screen
	if ( ! function_exists( 'is_bbpress' ) || ! is_bbpress() ) {
		return;
	}

	wp_print_inline_script_tag( "document.body.classList.remove('no-js');document.body.classList.add('js');" );
}
add_action( 'wp_footer', 'hovercraft_fix_bbpress_quicktags_body_class', 1 );
