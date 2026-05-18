<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// woocommerce theme support

function hovercraft_add_woocommerce_theme_support() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'hovercraft_add_woocommerce_theme_support' );

// remove product page upsells
function hovercraft_remove_woocommerce_upsells() {
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
}
add_action( 'woocommerce_after_single_product_summary', 'hovercraft_remove_woocommerce_upsells', 1 );
