<?php

function hovercraft_google_fonts() {

    // get the first font family from theme mod and format it for google fonts
    $first_font_family = get_theme_mod( 'hovercraft_first_font_family', 'noto_sans' );
    $first_font_family_clean = str_replace( '_', '+', $first_font_family );
    $first_font_family_almost = ucfirst( $first_font_family_clean );
    $first_font_family_final = ucwords( $first_font_family_almost, '+' );

    // get the second font family from theme mod and format it for google fonts
    $second_font_family = get_theme_mod( 'hovercraft_second_font_family', 'open_sans' );
    $second_font_family_clean = str_replace( '_', '+', $second_font_family );
    $second_font_family_almost = ucfirst( $second_font_family_clean );
    $second_font_family_final = ucwords( $second_font_family_almost, '+' );

    // get the third font family from theme mod and format it for google fonts
    $third_font_family = get_theme_mod( 'hovercraft_third_font_family', 'roboto' );
    $third_font_family_clean = str_replace( '_', '+', $third_font_family );
    $third_font_family_almost = ucfirst( $third_font_family_clean );
    $third_font_family_final = ucwords( $third_font_family_almost, '+' );

    // initialize an array to hold google fonts query parts
    $google_fonts = array();

    // add each font family to the array only if not 'none'
    if ( $first_font_family !== 'none' ) {
        $google_fonts[] = "family={$first_font_family_final}:ital,wght@0,400;0,600;0,700;1,400";
    }

    if ( $second_font_family !== 'none' ) {
        $google_fonts[] = "family={$second_font_family_final}:ital,wght@0,400;0,600;0,700;1,400";
    }

    if ( $third_font_family !== 'none' ) {
        $google_fonts[] = "family={$third_font_family_final}:ital,wght@0,400;0,600;0,700;1,400";
    }

    // enqueue the google fonts stylesheet if any font families are set
    if ( ! empty( $google_fonts ) ) {
        $google_fonts_url = 'https://fonts.googleapis.com/css2?' . implode( '&', $google_fonts ) . '&display=swap';
        wp_enqueue_style( 'google-fonts', $google_fonts_url, array(), null, 'all' );
    }
}

add_action( 'wp_enqueue_scripts', 'hovercraft_google_fonts' );

// Ref: ChatGPT
// Ref: https://wordpress.org/support/topic/new-google-fonts-url-incompatible-with-wp_enqueue_style/
// Ref: https://wordpress.stackexchange.com/questions/77227/enqueue-google-web-fonts-without-messing-up-symbols-in-url
