<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

    // first font family setting
    $wp_customize->add_setting( 'hovercraft_first_font_family', array(
        'default'           => 'noto_sans',
        'sanitize_callback' => 'hovercraft_sanitize_select',
    ) );

    // first font family control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_first_font_family',
        array(
            'label'       => __( 'First Google Fonts Family', 'hovercraft' ),
            'description' => __( 'This will load the chosen Google Fonts family, thus powering font options below. Note: Only font weights 400, 600, and 700 are loaded.', 'hovercraft' ),
            'section'     => 'hovercraft_fonts',
            'settings'    => 'hovercraft_first_font_family',
            'type'        => 'select',
            'choices'     => $hovercraft_google_fonts_array,
        )
    ) );

    // second font family setting
    $wp_customize->add_setting( 'hovercraft_second_font_family', array(
        'default'           => '',
        'sanitize_callback' => 'hovercraft_sanitize_select',
    ) );

    // second font family control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_second_font_family',
        array(
            'label'       => __( 'Second Google Fonts Family', 'hovercraft' ),
            'description' => __( 'This will load the chosen Google Fonts family, thus powering font options below. Note: Only font weights 400, 600, and 700 are loaded.', 'hovercraft' ),
            'section'     => 'hovercraft_fonts',
            'settings'    => 'hovercraft_second_font_family',
            'type'        => 'select',
            'choices'     => $hovercraft_google_fonts_array,
        )
    ) );

    // third font family setting
    $wp_customize->add_setting( 'hovercraft_third_font_family', array(
        'default'           => '',
        'sanitize_callback' => 'hovercraft_sanitize_select',
    ) );

    // third font family control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_third_font_family',
        array(
            'label'       => __( 'Third Google Fonts Family', 'hovercraft' ),
            'description' => __( 'This will load the chosen Google Fonts family, thus powering font options below. Note: Only font weights 400, 600, and 700 are loaded.', 'hovercraft' ),
            'section'     => 'hovercraft_fonts',
            'settings'    => 'hovercraft_third_font_family',
            'type'        => 'select',
            'choices'     => $hovercraft_google_fonts_array,
        )
    ) );

    // multilingual font family setting
    $wp_customize->add_setting( 'hovercraft_multilingual_font_family', array(
        'default'           => '',
        'sanitize_callback' => 'hovercraft_sanitize_select',
    ) );

    // multilingual font family control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_multilingual_font_family',
        array(
            'label'       => __( 'Multilingual Google Fonts Family', 'hovercraft' ),
            'description' => __( 'This will load the chosen Google Fonts family, thus powering font options below. Note: Only font weights 400, 600, and 700 are loaded. Be sure the font you choose here matches your other font families above to avoid conflicts.', 'hovercraft' ),
            'section'     => 'hovercraft_fonts',
            'settings'    => 'hovercraft_multilingual_font_family',
            'type'        => 'select',
            'choices'     => $hovercraft_google_fonts_multilingual_array,
        )
    ) );

    // default font family setting
    $wp_customize->add_setting( 'hovercraft_default_font', array(
        'default'           => '',
        'sanitize_callback' => 'hovercraft_sanitize_select',
    ) );

    // default font family control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_default_font',
        array(
            'label'       => __( 'Default Font Family', 'hovercraft' ),
            'description' => __( 'Which Google Fonts family should be used for the default site-wide font?', 'hovercraft' ),
            'section'     => 'hovercraft_fonts',
            'settings'    => 'hovercraft_default_font',
            'type'        => 'select',
            'choices'     => $hovercraft_available_fonts,
        )
    ) );

