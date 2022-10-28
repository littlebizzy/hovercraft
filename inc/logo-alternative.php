<?php

function hovercraft_logo_transparent($wp_customize) {
// add a setting 
    $wp_customize->add_setting('hovercraft_logo_transparent');
// Add a control to upload the hover logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hovercraft_logo_transparent', array(
        'label' => 'Alternative Logo',
        'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
        'settings' => 'hovercraft_logo_transparent',
        'priority' => 8 // show it just below the custom-logo
    )));
}

add_action('customize_register', 'hovercraft_logo_transparent');
