<?php

/** default logo */

function hovercraft_logo() {
    $defaults = array(
    // 'height'      => 512,
    // 'width'       => 512,
    'flex-height' => false, // setting both flex-height and flex-width to false maintains aspect ratio
    'flex-width'  => false
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'hovercraft_logo' );
