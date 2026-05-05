<?php

// check if posthero should display
function hovercraft_should_show_posthero( $hero_type ) {
    if ( ! is_active_sidebar( 'hovercraft_posthero' ) ) {
        return false;
    }

    $posthero_display = get_theme_mod( 'hovercraft_posthero_widget_display' );

    $allowed_display_options = array(
        'full' => array(
            'full_hero_only',
            'full_and_half_hero',
            'full_and_half_and_mini_hero',
        ),
        'half' => array(
            'full_and_half_hero',
            'full_and_half_and_mini_hero',
        ),
        'mini' => array(
            'full_and_half_and_mini_hero',
        ),
    );

    if ( ! isset( $allowed_display_options[ $hero_type ] ) ) {
        return false;
    }

    return in_array( $posthero_display, $allowed_display_options[ $hero_type ], true );
}
