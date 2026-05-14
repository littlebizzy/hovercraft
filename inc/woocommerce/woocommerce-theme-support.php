<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// loads woocommerce woocommerce theme support logic

function hovercraft_add_woocommerce_theme_support() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'hovercraft_add_woocommerce_theme_support' );
