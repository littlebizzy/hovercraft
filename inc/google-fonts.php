<?php

function hovercraft_enqueue_google_fonts() {

    $first_font_family = sanitize_key( get_theme_mod( 'hovercraft_first_font_family', 'noto_sans' ) );

    if ( empty( $first_font_family ) || 'none' === $first_font_family ) {
        $first_font_family = 'noto_sans';
    }

    $font_families = array(
        $first_font_family,
        get_theme_mod( 'hovercraft_second_font_family', '' ),
        get_theme_mod( 'hovercraft_third_font_family', '' ),
        get_theme_mod( 'hovercraft_multilingual_font_family', '' ),
    );

    $font_variations = 'ital,wght@0,400;0,600;0,700;1,400;1,600;1,700';
    $google_fonts = array();

    foreach ( $font_families as $font_family ) {
        $font_family = sanitize_key( $font_family );

        if ( empty( $font_family ) || 'none' === $font_family ) {
            continue;
        }

        $font_family = ucwords( str_replace( '_', '+', $font_family ), '+' );
        $google_fonts[] = 'family=' . $font_family . ':' . $font_variations;
    }

    $google_fonts = array_unique( $google_fonts );

    if ( ! empty( $google_fonts ) ) {
        $google_fonts_url = 'https://fonts.googleapis.com/css2?' . implode( '&', $google_fonts ) . '&display=swap';
        wp_enqueue_style( 'hovercraft_google_fonts', esc_url_raw( $google_fonts_url ), array(), HOVERCRAFT_VERSION, 'all' );
    }
}

add_action( 'wp_enqueue_scripts', 'hovercraft_enqueue_google_fonts' );

// Ref: ChatGPT
// Ref: https://wordpress.org/support/topic/new-google-fonts-url-incompatible-with-wp_enqueue_style/
// Ref: https://wordpress.stackexchange.com/questions/77227/enqueue-google-web-fonts-without-messing-up-symbols-in-url
