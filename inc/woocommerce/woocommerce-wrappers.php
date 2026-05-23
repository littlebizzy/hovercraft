<?php

// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// exit if woocommerce is inactive
if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

// render woocommerce header
function hovercraft_render_woocommerce_header() {
	get_template_part( 'template-parts/header/header-basic' );
}

// open woocommerce main wrapper
function hovercraft_open_woocommerce_main_wrapper() {
	$show_sidebar = is_product() ? false : hovercraft_should_show_sidebar();

	echo '<div id="main">';
	echo '<div class="inner">';

	if ( $show_sidebar ) {
		echo '<div id="primary">';
	} else {
		echo '<div id="primary-wide">';
	}

	get_template_part( 'template-parts/misc/breadcrumbs' );

	echo '<div id="content-wrapper">';
	echo '<div id="content-padded">';
}

// close woocommerce main wrapper
function hovercraft_close_woocommerce_main_wrapper() {
	$show_sidebar = is_product() ? false : hovercraft_should_show_sidebar();

	echo '<div class="clear"></div>';
	echo '</div><!-- content-padded -->';
	echo '</div><!-- content-wrapper -->';
	echo '<div class="clear"></div>';
	echo '</div><!-- primary / primary-wide -->';

	if ( $show_sidebar ) {
		get_template_part( 'sidebar' );
	}

	echo '<div class="clear"></div>';
	echo '</div><!-- inner -->';
	echo '</div><!-- main -->';
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
add_action( 'woocommerce_before_main_content', 'hovercraft_render_woocommerce_header', 5 );
add_action( 'woocommerce_before_main_content', 'hovercraft_open_woocommerce_main_wrapper', 10 );
add_action( 'woocommerce_after_main_content', 'hovercraft_close_woocommerce_main_wrapper', 10 );
