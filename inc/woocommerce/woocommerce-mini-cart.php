<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// keep mini cart buttons limited to checkout
function hovercraft_reset_woocommerce_mini_cart_buttons() {
	if ( function_exists( 'woocommerce_widget_shopping_cart_button_view_cart' ) ) {
		remove_action( 'woocommerce_widget_shopping_cart_buttons', 'woocommerce_widget_shopping_cart_button_view_cart', 10 );
	}
}
add_action( 'wp_loaded', 'hovercraft_reset_woocommerce_mini_cart_buttons', 100 );

// version woocommerce cart hash storage key
function hovercraft_woocommerce_cart_hash_key( $cart_hash_key ) {
	return $cart_hash_key . '_' . HOVERCRAFT_VERSION;
}
add_filter( 'woocommerce_cart_hash_key', 'hovercraft_woocommerce_cart_hash_key', 100 );

// version woocommerce cart fragment storage key
function hovercraft_woocommerce_cart_fragment_name( $cart_fragment_name ) {
	return $cart_fragment_name . '_' . HOVERCRAFT_VERSION;
}
add_filter( 'woocommerce_cart_fragment_name', 'hovercraft_woocommerce_cart_fragment_name', 100 );

// refresh mini cart fragment with theme template
function hovercraft_refresh_woocommerce_mini_cart_fragment( $fragments ) {
	if ( ! function_exists( 'woocommerce_mini_cart' ) ) {
		return $fragments;
	}

	ob_start();
	woocommerce_mini_cart();
	$mini_cart = ob_get_clean();

	$fragments['div.widget_shopping_cart_content'] = '<div class="widget_shopping_cart_content">' . $mini_cart . '</div>';

	return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'hovercraft_refresh_woocommerce_mini_cart_fragment', 100 );
