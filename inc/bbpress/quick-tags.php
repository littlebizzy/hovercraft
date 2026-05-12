<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_footer', 'hovercraft_swap_js_body_tags' );

function hovercraft_swap_js_body_tags() {
	remove_action( 'wp_footer', 'hovercraft_swap_js_body_tags' );
	echo "<script>document.body.className = document.body.className.replace('no-js','js');</script>\n";
}
