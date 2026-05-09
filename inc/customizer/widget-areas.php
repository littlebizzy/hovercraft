<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// widget areas section
$wp_customize->add_section( 'hovercraft_widget_layouts', array(
    'title' => 'Widget Areas',
    'priority' => 33,
) );

// home premain top columns setting
$wp_customize->add_setting( 'hovercraft_home_premain_top_columns', array(
    'default' => '1',
    'sanitize_callback' => 'hovercraft_sanitize_float',
) );

// home premain top columns control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_home_premain_top_columns',
    array(
        'label' => __( 'Home Premain Top Columns (Desktop)', 'hovercraft' ),
        'description' => __( 'How many widgets across should display in the Home Premain Top widget area?', 'hovercraft' ),
        'section' => 'hovercraft_widget_layouts',
        'settings' => 'hovercraft_home_premain_top_columns',
        'type' => 'select',
        'choices' => array(
            '1' => '1 Column',
            '2' => '2 Columns',
            '3' => '3 Columns',
            '4' => '4 Columns',
            '5' => '5 Columns',
            '6' => '6 Columns',
            '7' => '7 Columns',
            '8' => '8 Columns',
            '9' => '9 Columns',
            '10' => '10 Columns',
            '11' => '11 Columns',
            '12' => '12 Columns',
        ),
    )
) );

// home premain top text align setting
$wp_customize->add_setting( 'hovercraft_home_premain_top_align', array(
    'default' => 'center',
    'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// home premain top text align control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_home_premain_top_align',
    array(
        'label' => __( 'Home Premain Top Text Align', 'hovercraft' ),
        'description' => __( 'How should content be aligned in the Home Premain Top widget area?', 'hovercraft' ),
        'section' => 'hovercraft_widget_layouts',
        'settings' => 'hovercraft_home_premain_top_align',
        'type' => 'select',
        'choices' => array(
            'center' => 'Center',
            'left' => 'Left',
        ),
    )
) );

// home premain bottom columns setting
$wp_customize->add_setting( 'hovercraft_home_premain_bottom_columns', array(
    'default' => '1',
    'sanitize_callback' => 'hovercraft_sanitize_float',
) );

// home premain bottom columns control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_home_premain_bottom_columns',
    array(
        'label' => __( 'Home Premain Bottom Columns (Desktop)', 'hovercraft' ),
        'description' => __( 'How many widgets across should display in the Home Premain Bottom widget area?', 'hovercraft' ),
        'section' => 'hovercraft_widget_layouts',
        'settings' => 'hovercraft_home_premain_bottom_columns',
        'type' => 'select',
        'choices' => array(
            '1' => '1 Column',
            '2' => '2 Columns',
            '3' => '3 Columns',
            '4' => '4 Columns',
            '5' => '5 Columns',
            '6' => '6 Columns',
            '7' => '7 Columns',
            '8' => '8 Columns',
            '9' => '9 Columns',
            '10' => '10 Columns',
            '11' => '11 Columns',
            '12' => '12 Columns',
        ),
    )
) );

// home premain bottom text align setting
$wp_customize->add_setting( 'hovercraft_home_premain_bottom_align', array(
    'default' => 'center',
    'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// home premain bottom text align control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_home_premain_bottom_align',
    array(
        'label' => __( 'Home Premain Bottom Text Align', 'hovercraft' ),
        'description' => __( 'How should content be aligned in the Home Premain Bottom widget area?', 'hovercraft' ),
        'section' => 'hovercraft_widget_layouts',
        'settings' => 'hovercraft_home_premain_bottom_align',
        'type' => 'select',
        'choices' => array(
            'center' => 'Center',
            'left' => 'Left',
        ),
    )
) );

// home postmain top columns setting
$wp_customize->add_setting( 'hovercraft_home_postmain_top_columns', array(
    'default' => '1',
    'sanitize_callback' => 'hovercraft_sanitize_float',
) );

// home postmain top columns control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_home_postmain_top_columns',
    array(
        'label' => __( 'Home Postmain Top Columns (Desktop)', 'hovercraft' ),
        'description' => __( 'How many widgets across should display in the Home Postmain Top widget area?', 'hovercraft' ),
        'section' => 'hovercraft_widget_layouts',
        'settings' => 'hovercraft_home_postmain_top_columns',
        'type' => 'select',
        'choices' => array(
            '1' => '1 Column',
            '2' => '2 Columns',
            '3' => '3 Columns',
            '4' => '4 Columns',
            '5' => '5 Columns',
            '6' => '6 Columns',
            '7' => '7 Columns',
            '8' => '8 Columns',
            '9' => '9 Columns',
            '10' => '10 Columns',
            '11' => '11 Columns',
            '12' => '12 Columns',
        ),
    )
) );

// home postmain top text align setting
$wp_customize->add_setting( 'hovercraft_home_postmain_top_align', array(
    'default' => 'center',
    'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// home postmain top text align control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_home_postmain_top_align',
    array(
        'label' => __( 'Home Postmain Top Text Align', 'hovercraft' ),
        'description' => __( 'How should content be aligned in the Home Postmain Top widget area?', 'hovercraft' ),
        'section' => 'hovercraft_widget_layouts',
        'settings' => 'hovercraft_home_postmain_top_align',
        'type' => 'select',
        'choices' => array(
            'center' => 'Center',
            'left' => 'Left',
        ),
    )
) );

// home postmain bottom columns setting
$wp_customize->add_setting( 'hovercraft_home_postmain_bottom_columns', array(
    'default' => '1',
    'sanitize_callback' => 'hovercraft_sanitize_float',
) );

// home postmain bottom columns control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_home_postmain_bottom_columns',
    array(
        'label' => __( 'Home Postmain Bottom Columns (Desktop)', 'hovercraft' ),
        'description' => __( 'How many widgets across should display in the Home Postmain Bottom widget area?', 'hovercraft' ),
        'section' => 'hovercraft_widget_layouts',
        'settings' => 'hovercraft_home_postmain_bottom_columns',
        'type' => 'select',
        'choices' => array(
            '1' => '1 Column',
            '2' => '2 Columns',
            '3' => '3 Columns',
            '4' => '4 Columns',
            '5' => '5 Columns',
            '6' => '6 Columns',
            '7' => '7 Columns',
            '8' => '8 Columns',
            '9' => '9 Columns',
            '10' => '10 Columns',
            '11' => '11 Columns',
            '12' => '12 Columns',
        ),
    )
) );

// home postmain bottom text align setting
$wp_customize->add_setting( 'hovercraft_home_postmain_bottom_align', array(
    'default' => 'center',
    'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// home postmain bottom text align control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_home_postmain_bottom_align',
    array(
        'label' => __( 'Home Postmain Bottom Text Align', 'hovercraft' ),
        'description' => __( 'How should content be aligned in the Home Postmain Bottom widget area?', 'hovercraft' ),
        'section' => 'hovercraft_widget_layouts',
        'settings' => 'hovercraft_home_postmain_bottom_align',
        'type' => 'select',
        'choices' => array(
            'center' => 'Center',
            'left' => 'Left',
        ),
    )
) );

// prefooter top columns setting
$wp_customize->add_setting( 'hovercraft_prefooter_top_columns', array(
    'default' => '1',
    'sanitize_callback' => 'hovercraft_sanitize_float',
) );

// prefooter top columns control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_prefooter_top_columns',
    array(
        'label' => __( 'Prefooter Top Columns (Desktop)', 'hovercraft' ),
        'description' => __( 'How many widgets across should display in the Prefooter Top widget area?', 'hovercraft' ),
        'section' => 'hovercraft_widget_layouts',
        'settings' => 'hovercraft_prefooter_top_columns',
        'type' => 'select',
        'choices' => array(
            '1' => '1 Column',
            '2' => '2 Columns',
            '3' => '3 Columns',
            '4' => '4 Columns',
            '5' => '5 Columns',
            '6' => '6 Columns',
            '7' => '7 Columns',
            '8' => '8 Columns',
            '9' => '9 Columns',
            '10' => '10 Columns',
            '11' => '11 Columns',
            '12' => '12 Columns',
        ),
    )
) );

// prefooter top text align setting
$wp_customize->add_setting( 'hovercraft_prefooter_top_align', array(
    'default' => 'left',
    'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// prefooter top text align control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_prefooter_top_align',
    array(
        'label' => __( 'Prefooter Top Text Align', 'hovercraft' ),
        'description' => __( 'How should content be aligned in the Prefooter Top widget area?', 'hovercraft' ),
        'section' => 'hovercraft_widget_layouts',
        'settings' => 'hovercraft_prefooter_top_align',
        'type' => 'select',
        'choices' => array(
            'center' => 'Center',
            'left' => 'Left',
        ),
    )
) );

// prefooter bottom columns setting
$wp_customize->add_setting( 'hovercraft_prefooter_bottom_columns', array(
    'default' => '1',
    'sanitize_callback' => 'hovercraft_sanitize_float',
) );

// prefooter bottom columns control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_prefooter_bottom_columns',
    array(
        'label' => __( 'Prefooter Bottom Columns (Desktop)', 'hovercraft' ),
        'description' => __( 'How many widgets across should display in the Prefooter Bottom widget area?', 'hovercraft' ),
        'section' => 'hovercraft_widget_layouts',
        'settings' => 'hovercraft_prefooter_bottom_columns',
        'type' => 'select',
        'choices' => array(
            '1' => '1 Column',
            '2' => '2 Columns',
            '3' => '3 Columns',
            '4' => '4 Columns',
            '5' => '5 Columns',
            '6' => '6 Columns',
            '7' => '7 Columns',
            '8' => '8 Columns',
            '9' => '9 Columns',
            '10' => '10 Columns',
            '11' => '11 Columns',
            '12' => '12 Columns',
        ),
    )
) );

// prefooter bottom text align setting
$wp_customize->add_setting( 'hovercraft_prefooter_bottom_align', array(
    'default' => 'left',
    'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// prefooter bottom text align control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_prefooter_bottom_align',
    array(
        'label' => __( 'Prefooter Bottom Text Align', 'hovercraft' ),
        'description' => __( 'How should content be aligned in the Prefooter Bottom widget area?', 'hovercraft' ),
        'section' => 'hovercraft_widget_layouts',
        'settings' => 'hovercraft_prefooter_bottom_align',
        'type' => 'select',
        'choices' => array(
            'center' => 'Center',
            'left' => 'Left',
        ),
    )
) );

// postcolumns top text align setting
$wp_customize->add_setting( 'hovercraft_postcolumns_top_align', array(
    'default' => 'left',
    'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// postcolumns top text align control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_postcolumns_top_align',
    array(
        'label' => __( 'Postcolumns Top Text Align', 'hovercraft' ),
        'description' => __( 'How should content be aligned in the Postcolumns Top widget area?', 'hovercraft' ),
        'section' => 'hovercraft_widget_layouts',
        'settings' => 'hovercraft_postcolumns_top_align',
        'type' => 'select',
        'choices' => array(
            'center' => 'Center',
            'left' => 'Left',
        ),
    )
) );

// postcolumns bottom text align setting
$wp_customize->add_setting( 'hovercraft_postcolumns_bottom_align', array(
    'default' => 'left',
    'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// postcolumns bottom text align control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'hovercraft_postcolumns_bottom_align',
    array(
        'label' => __( 'Postcolumns Bottom Text Align', 'hovercraft' ),
        'description' => __( 'How should content be aligned in the Postcolumns Bottom widget area?', 'hovercraft' ),
        'section' => 'hovercraft_widget_layouts',
        'settings' => 'hovercraft_postcolumns_bottom_align',
        'type' => 'select',
        'choices' => array(
            'center' => 'Center',
            'left' => 'Left',
        ),
    )
) );
