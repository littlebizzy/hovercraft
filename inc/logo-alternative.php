<?php

// add alternative logo setting to customizer
function hovercraft_logo_alternative( $wp_customize ) {
    $wp_customize->add_setting( 'hovercraft_logo_alternative', array(
        'sanitize_callback' => 'hovercraft_sanitize_image',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hovercraft_logo_alternative', array(
        'label' => 'Alternative Logo',
        'section' => 'title_tagline',
        'settings' => 'hovercraft_logo_alternative',
        'priority' => 8,
    ) ) );
}
add_action( 'customize_register', 'hovercraft_logo_alternative' );

// sanitize uploaded image file
function hovercraft_sanitize_image( $file, $setting ) {
    // allowed image mime types
    $mimes = array(
        'jpg|jpeg' => 'image/jpeg',
        'png' => 'image/png',
        'gif' => 'image/gif',
    );

    // check mime type of uploaded file
    $file_ext = wp_check_filetype( $file, $mimes );

    // return file if valid or fallback to default
    return ( $file_ext['ext'] ? $file : $setting->default );
}

// Ref: ChatGPT
