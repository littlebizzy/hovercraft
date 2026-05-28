<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// keep mini cart buttons limited to checkout
function hovercraft_reset_woocommerce_mini_cart_buttons() {
	if ( ! function_exists( 'woocommerce_widget_shopping_cart_proceed_to_checkout' ) ) {
		return;
	}

	remove_all_actions( 'woocommerce_widget_shopping_cart_buttons' );

	add_action( 'woocommerce_widget_shopping_cart_buttons', 'woocommerce_widget_shopping_cart_proceed_to_checkout', 20 );
}
add_action( 'wp_loaded', 'hovercraft_reset_woocommerce_mini_cart_buttons', 100 );
