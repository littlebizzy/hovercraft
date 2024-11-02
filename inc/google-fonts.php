<?php

function hovercraft_google_fonts() {

    // new font families
    $first_font_family = get_theme_mod( 'hovercraft_first_font_family', 'noto_sans' );
    $first_font_family_clean = str_replace( '_', '+', $first_font_family );
    $first_font_family_final = ( $first_font_family !== 'none' ) ? ucwords( $first_font_family_clean, '+' ) : '';

    $second_font_family = get_theme_mod( 'hovercraft_second_font_family', 'open_sans' );
    $second_font_family_clean = str_replace( '_', '+', $second_font_family );
    $second_font_family_final = ( $second_font_family !== 'none' ) ? ucwords( $second_font_family_clean, '+' ) : '';

    $third_font_family = get_theme_mod( 'hovercraft_third_font_family', 'roboto' );
    $third_font_family_clean = str_replace( '_', '+', $third_font_family );
    $third_font_family_final = ( $third_font_family !== 'none' ) ? ucwords( $third_font_family_clean, '+' ) : '';

    // build Google Fonts URL
    $google_fonts = array();

    if ( ! empty( $first_font_family_final ) ) {
        $google_fonts[] = "family={$first_font_family_final}:ital,wght@0,400;0,600;0,700;1,400";
    }

    if ( ! empty( $second_font_family_final ) ) {
        $google_fonts[] = "family={$second_font_family_final}:ital,wght@0,400;0,600;0,700;1,400";
    }

    if ( ! empty( $third_font_family_final ) ) {
        $google_fonts[] = "family={$third_font_family_final}:ital,wght@0,400;0,600;0,700;1,400";
    }

    if ( ! empty( $google_fonts ) ) {
        $google_fonts_url = 'https://fonts.googleapis.com/css2?' . implode( '&', $google_fonts ) . '&display=swap';
        wp_enqueue_style( 'google-fonts', $google_fonts_url, array(), null, 'all' );
    }
}

add_action( 'wp_enqueue_scripts', 'hovercraft_google_fonts' );

// Ref: ChatGPT
// Ref: https://wordpress.org/support/topic/new-google-fonts-url-incompatible-with-wp_enqueue_style/
// Ref: https://wordpress.stackexchange.com/questions/77227/enqueue-google-web-fonts-without-messing-up-symbols-in-url
