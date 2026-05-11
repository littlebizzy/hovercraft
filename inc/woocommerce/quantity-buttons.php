<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// only run if woocommerce is active
if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

// enqueue quantity buttons script in footer with cache busting
add_action( 'wp_enqueue_scripts', 'hovercraft_quantity_buttons' );

function hovercraft_quantity_buttons() {
	if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
		return;
	}

	$script_path = get_template_directory() . '/assets/js/quantity-buttons.js';
	$script_version = HOVERCRAFT_VERSION;

	if ( file_exists( $script_path ) ) {
		$script_version = filemtime( $script_path );
	}

	wp_enqueue_script(
		'hovercraft_quantity_buttons',
		esc_url_raw( get_template_directory_uri() . '/assets/js/quantity-buttons.js' ),
		array(),
		$script_version,
		true
	);
}
