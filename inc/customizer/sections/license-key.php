<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// license key section
$wp_customize->add_section( 'hovercraft_license_key', array(
    'title' => 'License Key',
    'priority' => 999,
) );

// license key setting
$wp_customize->add_setting( 'hovercraft_license_key', array(
    'default' => '',
    'sanitize_callback' => 'hovercraft_sanitize_text',
) );

// license key control
$wp_customize->add_control( 'hovercraft_license_key', array(
    'label' => 'License Key',
    'section' => 'hovercraft_license_key',
    'type' => 'text',
    'input_attrs' => array(
        'autocomplete' => 'off',
        'spellcheck' => 'false',
    ),
) );
