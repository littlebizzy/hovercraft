<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// checkout rhythm overrides
function hovercraft_woocommerce_checkout_rhythm() {
	if ( ! function_exists( 'is_checkout' ) || ! is_checkout() ) {
		return;
	}

	$checkout_rhythm_css = '
body.woocommerce-checkout #payment ul.payment_methods li {
	padding: 12px;
}

body.woocommerce-checkout #payment .payment_box {
	padding: 12px;
	margin: 12px 0 0;
}

body.woocommerce-checkout #payment .wc-stripe-upe-element, body.woocommerce-checkout #payment .StripeElement {
	padding: 8px 12px;
}

.woocommerce-checkout-payment .woocommerce-SavedPaymentMethods-saveNew {
	margin: 12px 0 0;
}

body.woocommerce-checkout #payment .place-order {
	margin: 16px 0 0;
	padding: 16px 0 0;
}

.woocommerce-checkout-payment .place-order .woocommerce-terms-and-conditions-wrapper {
	margin: 0 0 12px;
}

.woocommerce-checkout #place_order {
	padding: 12px 24px;
}
';

	wp_add_inline_style( 'hovercraft', $checkout_rhythm_css );
}
add_action( 'wp_enqueue_scripts', 'hovercraft_woocommerce_checkout_rhythm', 40 );
