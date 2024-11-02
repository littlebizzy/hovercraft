<?php

function hovercraft_google_fonts() {

    // get and format the first font family for google fonts
    $first_font_family = get_theme_mod( 'hovercraft_first_font_family', 'noto_sans' );
    $first_font_family_final = ucwords( ucfirst( str_replace( '_', '+', $first_font_family ) ), '+' );

    // get and format the second font family for google fonts
    $second_font_family = get_theme_mod( 'hovercraft_second_font_family', 'open_sans' );
    $second_font_family_final = ucwords( ucfirst( str_replace( '_', '+', $second_font_family ) ), '+' );

    // get and format the third font family for google fonts
    $third_font_family = get_theme_mod( 'hovercraft_third_font_family', 'roboto' );
    $third_font_family_final = ucwords( ucfirst( str_replace( '_', '+', $third_font_family ) ), '+' );

    // specify only the font variations 400, 600, and 700 for both regular and italic styles
    $font_variations = 'ital,wght@0,400;0,600;0,700;1,400;1,600;1,700';

    // initialize an array to hold google fonts query parts
    $google_fonts = array();

    // add each font family to the array only if it is not 'none', null, or empty
    if ( ! empty( $first_font_family ) && $first_font_family !== 'none' ) {
        $google_fonts[] = "family={$first_font_family_final}:$font_variations";
    }

    if ( ! empty( $second_font_family ) && $second_font_family !== 'none' ) {
        $google_fonts[] = "family={$second_font_family_final}:$font_variations";
    }

    if ( ! empty( $third_font_family ) && $third_font_family !== 'none' ) {
        $google_fonts[] = "family={$third_font_family_final}:$font_variations";
    }

    // enqueue the google fonts stylesheet if any font families are set
    if ( ! empty( $google_fonts ) ) {
        $google_fonts_url = esc_url( 'https://fonts.googleapis.com/css2?' . implode( '&', $google_fonts ) . '&display=swap' );
        wp_enqueue_style( 'google-fonts', $google_fonts_url, array(), null, 'all' );
    }
}

add_action( 'wp_enqueue_scripts', 'hovercraft_google_fonts' );
