<?php

// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// exit if woocommerce is inactive
if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

// rename checkout order heading
function hovercraft_rename_woocommerce_checkout_order_heading( $translated_text, $text, $domain ) {
	if ( is_checkout() && ! is_order_received_page() && $domain === 'woocommerce' && $text === 'Your order' ) {
		return __( 'Order Summary', 'hovercraft' );
	}

	return $translated_text;
}
add_filter( 'gettext', 'hovercraft_rename_woocommerce_checkout_order_heading', 20, 3 );
