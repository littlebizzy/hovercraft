<?php

function hovercraft_back_to_top() {
    wp_enqueue_script(
        'hovercraft_back_to_top', // unique name 
        get_template_directory_uri().'/assets/js/back-to-top.js', // location
        array('jquery'), // dependencies
        '', 
        true
    );
}

add_action( 'wp_enqueue_scripts', 'hovercraft_back_to_top' );
