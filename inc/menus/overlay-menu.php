<?php

function hovercraft_responsive_menu() {
    wp_enqueue_script(
        'responsive_menu', // unique name 
        get_template_directory_uri().'/assets/js/responsive-menu.js', // location
        array('jquery'), // dependencies
        '', 
        true
    );
}

add_action( 'wp_enqueue_scripts', 'hovercraft_responsive_menu' );

// https://wpmudev.com/blog/adding-jquery-scripts-wordpress/
