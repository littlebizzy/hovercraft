<?php

/** custom header */

function hovercraft_custom_header() {
    $args = array(
        // 'default-image' => get_template_directory_uri() . 'img/default-image.jpg',
        'width' => 1920,
        'height' => 1080,
        'flex-width' => true,
        'flex-height' => true
        );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'hovercraft_custom_header' );
