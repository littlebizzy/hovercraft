<?php
// only run if woocommerce is active
if ( ! class_exists( 'WooCommerce' ) ) {
    return;
}

// enqueue quantity buttons script in footer with cache busting
add_action( 'wp_enqueue_scripts', function () {

    // enqueue the quantity buttons js file
    wp_enqueue_script(
        'hovercraft-quantity-buttons',
        get_template_directory_uri() . '/assets/js/quantity-buttons.js',
        array(),
        filemtime( get_template_directory() . '/assets/js/quantity-buttons.js' ),
        true
    );

});
