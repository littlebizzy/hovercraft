<?php

/** alternative logo */

function hovercraft_logo_alternative( $wp_customize ) {
    $wp_customize->add_setting( 'hovercraft_logo_alternative' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hovercraft_logo_alternative', array( 
        'label' => 'Alternative Logo',
        'section' => 'title_tagline',
        'settings' => 'hovercraft_logo_alternative',
        'priority' => 8 // display just below the custom-logo
        ) ) );
}
add_action( 'customize_register', 'hovercraft_logo_alternative' );
