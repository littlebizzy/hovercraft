<?php

// WooCommerce support
//// add_theme_support('woocommerce');
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
add_action( 'woocommerce_before_main_content', 'hovercraft_main_start', 10 );
add_action( 'woocommerce_after_main_content', 'hovercraft_main_end', 10 );

function hovercraft_main_start() {
    echo '<div id="main">';
}

function hovercraft_main_end() {
    echo '</div>';
}
