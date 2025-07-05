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


function hovercraft_accordion_menu_toggle($item_output, $item, $depth, $args) {
    if (
        isset($args->theme_location) &&
        $args->theme_location === 'mobile-menu' &&
        in_array('menu-item-has-children', $item->classes, true)
    ) {
        $arrow = '<a href="#" class="menu-toggle"></a>';
        $item_output = str_replace('</a>', '</a>' . $arrow, $item_output);
    }
    return $item_output;
}

add_filter('walker_nav_menu_start_el', 'hovercraft_accordion_menu_toggle', 10, 4);

// Ref: ChatGPT
// Ref: https://wordpress.stackexchange.com/questions/345410/adding-toggle-able-element-after-menu-item
