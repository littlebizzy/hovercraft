<?php

// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// move checkout coupon form below checkout form
function hovercraft_move_woocommerce_checkout_coupon_form() {
	remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
	add_action( 'woocommerce_after_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
}
add_action( 'wp', 'hovercraft_move_woocommerce_checkout_coupon_form' );
