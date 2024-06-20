<?php

function hovercraft_offcanvas_menu() {
    wp_enqueue_script(
        'offcanvas_menu', // unique name 
        get_template_directory_uri().'/assets/js/offcanvas-menu.js', // location
        array('jquery'), // dependencies
        '', 
        true
    );
}

add_action( 'wp_enqueue_scripts', 'hovercraft_offcanvas_menu' );

// https://wpmudev.com/blog/adding-jquery-scripts-wordpress/
// https://codepen.io/keithchis/pen/GpdbLm
