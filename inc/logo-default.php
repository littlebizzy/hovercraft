<?php

/** default logo */

function hovercraft_logo() {
    $defaults = array(
    'height'      => 100,
    'width'       => 250,
    'flex-height' => true,
    'flex-width'  => true
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'hovercraft_logo' );
