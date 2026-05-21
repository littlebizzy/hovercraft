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

// limit cart cross-sells
function hovercraft_limit_cart_cross_sells( $total ) {
	return 2;
}
add_filter( 'woocommerce_cross_sells_total', 'hovercraft_limit_cart_cross_sells' );

// set cart cross-sell columns
function hovercraft_cart_cross_sells_columns( $columns ) {
	return 2;
}
add_filter( 'woocommerce_cross_sells_columns', 'hovercraft_cart_cross_sells_columns' );

// rename additional information tab
function hovercraft_rename_woocommerce_additional_information_tab( $tabs ) {
	if ( isset( $tabs['additional_information'] ) ) {
		$tabs['additional_information']['title'] = __( 'Product Specs', 'hovercraft' );
	}

	return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'hovercraft_rename_woocommerce_additional_information_tab', 20 );

// rename additional information heading
function hovercraft_rename_woocommerce_additional_information_heading() {
	return __( 'Product Specs', 'hovercraft' );
}
add_filter( 'woocommerce_product_additional_information_heading', 'hovercraft_rename_woocommerce_additional_information_heading' );
