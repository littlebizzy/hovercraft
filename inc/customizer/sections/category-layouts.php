<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// category layouts section
$wp_customize->add_section( 'hovercraft_category_layouts', array(
    'title'      => 'Category Layouts',
    'priority'   => 34,
) );
	
// homepage hide main setting
$wp_customize->add_setting('hovercraft_homepage_hide_main', array(
    'default' => 0,
	'sanitize_callback' => 'hovercraft_sanitize_checkbox',
));

// homepage hide main control
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'hovercraft_homepage_hide_main',
        array(
            'label'     => __('Hide homepage main section', 'hovercraft'),
            'section'   => 'static_front_page',
            'settings'  => 'hovercraft_homepage_hide_main',
            'type'      => 'checkbox',
        )
    )
);

