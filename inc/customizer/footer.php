<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// footer section
$wp_customize->add_section( 'hovercraft_footer', array(
    'title' => 'Footer',
    'priority' => 130,
    'description' => 'Allows you to customize how many footer columns',
) );

// footer columns setting
$wp_customize->add_setting( 'hovercraft_footer_columns', array(
    'default' => 'four_weighted',
    'type' => 'theme_mod',
    'sanitize_callback' => 'hovercraft_sanitize_radio',
) );

// footer columns control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_footer_columns',
    array(
        'label' => 'Footer Columns',
        'description' => 'Using this option you can change footer columns',
        'settings' => 'hovercraft_footer_columns',
        'priority' => 10,
        'section' => 'hovercraft_footer',
        'type' => 'radio',
        'choices' => array(
            'four_weighted' => 'Four Weighted',
            'four_equal' => 'Four Equal',
            'three_weighted' => 'Three Weighted',
            'three_equal' => 'Three Equal',
        ),
    )
) );

// footer callout padding setting
$wp_customize->add_setting( 'hovercraft_footer_callout_padding', array(
    'default' => '40',
    'sanitize_callback' => 'hovercraft_sanitize_float',
) );

// footer callout padding control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_footer_callout_padding',
    array(
        'label' => __( 'Footer Callout Padding', 'hovercraft' ),
        'description' => __( 'Specify Footer Callout widget padding in pixels?', 'hovercraft' ),
        'section' => 'hovercraft_footer',
        'settings' => 'hovercraft_footer_callout_padding',
        'type' => 'text',
    )
) );
