<?php

function hovercraft_title_tag() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'hovercraft_title_tag' );

// https://wordpress.stackexchange.com/questions/176940/add-theme-support-title-tag-in-conflict-with-custom-titles-function
// https://www.usablewp.com/learn-wordpress/home-page/how-to-add-theme-support-for-the-title-tag/
