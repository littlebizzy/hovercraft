<?php

function hovercraft_title_tag() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'hovercraft_title_tag' );

// remove bbpress title modification if active
if ( class_exists( 'bbPress' ) ) {
    remove_filter( 'wp_title', 'bbp_title', 10, 3 );
    remove_filter( 'document_title_parts', 'bbp_filter_document_title', 10, 1 );
}

// Ref: ChatGPT
// Ref: https://wordpress.stackexchange.com/questions/176940/add-theme-support-title-tag-in-conflict-with-custom-titles-function
// Ref: https://www.usablewp.com/learn-wordpress/home-page/how-to-add-theme-support-for-the-title-tag/
