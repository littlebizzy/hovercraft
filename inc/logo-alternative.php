<?php

/** alternative logo */

function hovercraft_logo_alternative( $wp_customize ) {
    // $wp_customize->add_setting( 'hovercraft_logo_alternative' );
    $wp_customize->add_setting('hovercraft_logo_alternative', array(
	'sanitize_callback' => 'hovercraft_sanitize_image',
    )
);
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hovercraft_logo_alternative', array( 
        'label' => 'Alternative Logo',
        'section' => 'title_tagline',
        'settings' => 'hovercraft_logo_alternative',
        'priority' => 8 // display just below the custom-logo
        ) ) );
}
add_action( 'customize_register', 'hovercraft_logo_alternative' );

// sanitize image function
function hovercraft_sanitize_image( $file, $setting ) {
    //allowed file types
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
		'gif'          => 'image/gif',
		'png'          => 'image/png',
		'bmp'          => 'image/bmp',
		'tif|tiff'     => 'image/tiff',
		'ico'          => 'image/x-icon',
        );
              
    //check file type from file name
    $file_ext = wp_check_filetype( $file, $mimes );
              
    //if file has a valid mime type return it, otherwise return default
    return ( $file_ext['ext'] ? $file : $setting->default );
}
