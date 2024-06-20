<?php

function hovercraft_accordion_menu() {
    wp_enqueue_script(
        'accordion_menu', // unique name 
        get_template_directory_uri().'/assets/js/accordion-menu.js', // location
        array('jquery'), // dependencies
        '', 
        true
    );
}

add_action( 'wp_enqueue_scripts', 'hovercraft_accordion_menu' );

// https://wpmudev.com/blog/adding-jquery-scripts-wordpress/
// https://codepen.io/keithchis/pen/GpdbLm
