<?php

function hovercraft_normalize_google_font_family( $font_family ) {
    $font_family = sanitize_key( $font_family );

    if ( empty( $font_family ) || 'none' === $font_family ) {
        return '';
    }

    return $font_family;
}

function hovercraft_add_google_font_family( &$font_families, $font_family, $limit = 0 ) {
    $font_family = hovercraft_normalize_google_font_family( $font_family );

    if ( empty( $font_family ) || in_array( $font_family, $font_families, true ) ) {
        return;
    }

    if ( ! empty( $limit ) && count( $font_families ) >= $limit ) {
        return;
    }

    $font_families[] = $font_family;
}

function hovercraft_get_google_font_families() {
    $font_families = array();
    $first_font_family = hovercraft_normalize_google_font_family( get_theme_mod( 'hovercraft_first_font_family', 'noto_sans' ) );

    if ( empty( $first_font_family ) ) {
        $first_font_family = 'noto_sans';
    }

    hovercraft_add_google_font_family( $font_families, $first_font_family, 3 );
    hovercraft_add_google_font_family( $font_families, get_theme_mod( 'hovercraft_second_font_family', '' ), 3 );
    hovercraft_add_google_font_family( $font_families, get_theme_mod( 'hovercraft_third_font_family', '' ), 3 );

    $multilingual_font_family = hovercraft_normalize_google_font_family( get_theme_mod( 'hovercraft_multilingual_font_family', '' ) );

    if ( ! empty( $multilingual_font_family ) && ! in_array( $multilingual_font_family, $font_families, true ) ) {
        $font_families[] = $multilingual_font_family;
    }

    return $font_families;
}

function hovercraft_enqueue_google_fonts() {
    $font_variations = 'ital,wght@0,400;0,600;0,700;1,400;1,600;1,700';
    $google_fonts = array();

    foreach ( hovercraft_get_google_font_families() as $font_family ) {
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
