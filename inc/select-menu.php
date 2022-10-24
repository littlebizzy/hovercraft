<?php

function hovercraft_select_menu() {
    wp_enqueue_script(
        'hovercraft_select_menu', // unique name 
        get_template_directory_uri().'/assets/js/select-menu.js', // location
        array('jquery'), // dependencies
        '', 
        true
    );
}

add_action( 'wp_enqueue_scripts', 'hovercraft_select_menu' );
