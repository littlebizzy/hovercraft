<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// woocommerce quantity buttons

if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

add_action( 'wp_enqueue_scripts', 'hovercraft_quantity_buttons' );
add_action( 'wp_head', 'hovercraft_quantity_buttons_css', 20 );

// enqueue quantity button assets
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

// restore quantity button sizing after add to cart button styles
function hovercraft_quantity_buttons_css() {
	if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
		return;
	}
	?>
<style id="hovercraft_quantity_buttons_css">
form.cart .quantity.buttons-added {
	display: inline-flex !important;
	align-items: center !important;
	width: auto !important;
	height: 42px !important;
	min-height: 42px !important;
}

form.cart .quantity button.quantity-button {
	width: 40px !important;
	min-width: 40px !important;
	max-width: 40px !important;
	height: 40px !important;
	min-height: 40px !important;
	max-height: 40px !important;
	line-height: 40px !important;
	padding: 0 !important;
	margin: 0 !important;
	font-size: 22px !important;
	display: flex !important;
	align-items: center !important;
	justify-content: center !important;
	flex: 0 0 40px !important;
}

form.cart .quantity input.qty {
	width: 60px !important;
	min-width: 60px !important;
	max-width: 60px !important;
	height: 40px !important;
	min-height: 40px !important;
	max-height: 40px !important;
	line-height: 40px !important;
	padding: 0 !important;
	margin: 0 !important;
	flex: 0 0 60px !important;
}
</style>
	<?php
}
