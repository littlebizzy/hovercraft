<?php

// select menu
// disabled // require get_template_directory() . '/inc/select-menu.php';

// back to top
// require get_template_directory() . '/inc/back-to-top.php';

// suggest git updater
require get_template_directory() . '/inc/git-updater.php';

// css generator
require get_template_directory() . '/inc/css-generator.php';

// widget areas
require get_template_directory() . '/inc/widget-areas.php';

// menu locations
require get_template_directory() . '/inc/menu-locations.php';

// featured images
require get_template_directory() . '/inc/featured-images.php';

// default logo
require get_template_directory() . '/inc/logo-default.php';

// alternative logo
require get_template_directory() . '/inc/logo-alternative.php';

// custom header
require get_template_directory() . '/inc/custom-header.php';

// customizer settings
require get_template_directory() . '/inc/customizer-settings.php';

// video uploader
require get_template_directory() . '/inc/header-video.php';

// widget titles
require get_template_directory() . '/inc/widget-titles.php';

// breadcrumbs
require get_template_directory() . '/inc/breadcrumbs.php';

// pagination
require get_template_directory() . '/inc/pagination.php';

// WooCommerce support
//// add_theme_support('woocommerce');
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'hovercraft_main_start', 10);
add_action('woocommerce_after_main_content', 'hovercraft_main_end', 10);

function hovercraft_main_start() {
    echo '<div id="main">';
}

function hovercraft_main_end() {
    echo '</div>';
}

// page excerpts
add_post_type_support( 'page', 'excerpt' );

// rss feeds meta
add_theme_support( 'automatic-feed-links' );

//Internationalization
function my_theme_load_theme_textdomain() {
    load_theme_textdomain( 'hovercraft', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'my_theme_load_theme_textdomain' );

