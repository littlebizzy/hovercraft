<?php

// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// exit if woocommerce is inactive
if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

// disable checkout coupon form
function hovercraft_disable_woocommerce_checkout_coupon_form() {
	remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
}
add_action( 'wp', 'hovercraft_disable_woocommerce_checkout_coupon_form' );
