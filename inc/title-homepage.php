<?php

function hovercraft_homepage_title( $title ) {
    if ( ! is_front_page() ) {
        return $title; // return original title if not on homepage
    }

    $hovercraft_homepage_html_title = get_theme_mod( 'hovercraft_homepage_html_title', 'site_name_site_tagline' );
    $blogname = get_option( 'blogname', '' );
    $blogdescription = get_option( 'blogdescription', '' );
    $id_frontpage = get_option( 'page_on_front', 0 );

    if ( $hovercraft_homepage_html_title === 'site_name_site_tagline' ) {
        if ( ! empty( $blogdescription ) ) {
            return $blogname . ' | ' . $blogdescription;
        }
        return $blogname;
    }

    if ( $hovercraft_homepage_html_title === 'site_name_dash_site_tagline' ) {
        if ( ! empty( $blogdescription ) ) {
            return $blogname . ' - ' . $blogdescription;
        }
        return $blogname;
    }

    if ( $hovercraft_homepage_html_title === 'site_name_only' ) {
        return $blogname;
    }

    if ( $hovercraft_homepage_html_title === 'site_name_page_title' && ! empty( $id_frontpage ) ) {
        return $blogname . ' | ' . get_the_title( $id_frontpage );
    }

    if ( $hovercraft_homepage_html_title === 'site_name_dash_page_title' && ! empty( $id_frontpage ) ) {
        return $blogname . ' - ' . get_the_title( $id_frontpage );
    }

    if ( $hovercraft_homepage_html_title === 'page_title_only' && ! empty( $id_frontpage ) ) {
        return get_the_title( $id_frontpage );
    }

    return $title; // default return
}

add_filter( 'pre_get_document_title', 'hovercraft_homepage_title', 10, 2 );

// Ref: ChatGPT
// Ref: https://wordpress.stackexchange.com/questions/176940/add-theme-support-title-tag-in-conflict-with-custom-titles-function
// Ref: https://wordpress.stackexchange.com/questions/305353/cant-change-the-title-tag-with-wp-title-filter
// Ref: https://stackoverflow.com/questions/29956708/is-there-any-reason-to-use-html-entities-over-the-characters-themselves
