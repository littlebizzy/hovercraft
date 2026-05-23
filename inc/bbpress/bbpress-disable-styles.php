<?php

// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// disable bbpress default styles
function hovercraft_disable_bbpress_default_styles() {
	wp_dequeue_style( 'bbp-default' );
	wp_deregister_style( 'bbp-default' );
}
add_action( 'wp_enqueue_scripts', 'hovercraft_disable_bbpress_default_styles', 100 );
