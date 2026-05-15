<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// woocommerce wrappers

if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
add_action( 'woocommerce_before_main_content', 'hovercraft_main_start', 10 );
add_action( 'woocommerce_after_main_content', 'hovercraft_main_end', 10 );

// open woocommerce main wrapper
function hovercraft_main_start() {
	$show_sidebar = hovercraft_should_show_sidebar();

	echo '<div id="main">';
	echo '<div class="inner">';

	if ( $show_sidebar ) {
		echo '<div id="primary">';
	} else {
		echo '<div id="primary-wide">';
	}

	echo '<div id="content-wrapper">';
	echo '<div id="content-padded">';
}

// close woocommerce main wrapper
function hovercraft_main_end() {
	$show_sidebar = hovercraft_should_show_sidebar();

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
