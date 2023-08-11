<?php

function hovercraft_full_screen_search() {
    wp_enqueue_script(
        'hovercraft_full_screen_search', // unique name 
        get_template_directory_uri().'/assets/js/full-screen-search.js', // location
        array('jquery'), // dependencies
        '', 
        true
    );
}

add_action( 'wp_enqueue_scripts', 'hovercraft_full_screen_search' );
