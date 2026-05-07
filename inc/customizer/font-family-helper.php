<?php
function hovercraft_format_font_family_label( $font_family ) {
    return ucwords( str_replace( '_', ' ', sanitize_key( $font_family ) ) );
}

function hovercraft_add_available_font( &$font_families, $font_family ) {
    $font_family = sanitize_key( $font_family );

    if ( empty( $font_family ) || 'none' === $font_family ) {
        return;
    }

    $font_families[ $font_family ] = hovercraft_format_font_family_label( $font_family );
}

function hovercraft_available_fonts() {
    $font_families = array(
        '' => __( 'Default (unspecified)', 'hovercraft' ),
    );

    hovercraft_add_available_font( $font_families, get_theme_mod( 'hovercraft_first_font_family', 'noto_sans' ) );
    hovercraft_add_available_font( $font_families, get_theme_mod( 'hovercraft_second_font_family', '' ) );
    hovercraft_add_available_font( $font_families, get_theme_mod( 'hovercraft_third_font_family', '' ) );
    hovercraft_add_available_font( $font_families, get_theme_mod( 'hovercraft_multilingual_font_family', '' ) );

    return $font_families;
}

// Ref: ChatGPT
