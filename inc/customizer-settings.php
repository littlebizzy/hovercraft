<?php

function hovercraft_customizer($wp_customize) {
	
$wp_customize->get_section('header_image')->title = __( 'Header Media' );

// hovercraft general options
$wp_customize->add_section( 'hovercraft_general' , array(
    'title'      => 'General Options',
    'priority'   => 30,
) );

// back to top setting
$wp_customize->add_setting('hovercraft_back_to_top', array(
    'default'    => '0'
));

// back to top control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'hovercraft_back_to_top',
        array(
            'label'     => __('Enable back to top button', 'hovercraft'),
            'section'   => 'hovercraft_general',
            'settings'  => 'hovercraft_back_to_top',
            'type'      => 'checkbox',
        )
    )
);
	
}

add_action('customize_register', 'hovercraft_customizer');
