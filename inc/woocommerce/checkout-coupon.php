<?php

// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// disable checkout coupon form
function hovercraft_disable_woocommerce_checkout_coupon_form() {
	remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
}
add_action( 'wp', 'hovercraft_disable_woocommerce_checkout_coupon_form' );

// rename checkout order heading
function hovercraft_rename_woocommerce_checkout_order_heading( $translated_text, $text, $domain ) {
	if ( is_checkout() && ! is_order_received_page() && $domain === 'woocommerce' && $text === 'Your order' ) {
		return __( 'Order Summary', 'hovercraft' );
	}

	return $translated_text;
}
add_filter( 'gettext', 'hovercraft_rename_woocommerce_checkout_order_heading', 20, 3 );
