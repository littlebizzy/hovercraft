<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// hover effects section
$wp_customize->add_section( 'hovercraft_effects', array(
	'title' => 'Hover Effects',
	'priority' => 107,
) );

// logo hover effect setting
$wp_customize->add_setting( 'hovercraft_logo_effect', array(
	'default' => 'default',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// logo hover effect control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_logo_effect',
	array(
		'label' => __( 'Logo effect', 'hovercraft' ),
		'description' => __( 'CSS hover effect for logos in the header', 'hovercraft' ),
		'section' => 'hovercraft_effects',
		'settings' => 'hovercraft_logo_effect',
		'type' => 'select',
		'choices' => array(
		'default' => 'Default',
		'cerulean' => 'Cerulean',
		'cosmo' => 'Cosmo',
		'cyborg' => 'cyborg',
		),
	)
) );

// main menu links hover effect setting
$wp_customize->add_setting( 'hovercraft_main_menu_links_effect', array(
	'default' => 'default',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// main menu links hover effect control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_main_menu_links_effect',
	array(
		'label' => __( 'Main menu links effect', 'hovercraft' ),
		'description' => __( 'CSS hover effect for main menu links in the header', 'hovercraft' ),
		'section' => 'hovercraft_effects',
		'settings' => 'hovercraft_main_menu_links_effect',
		'type' => 'select',
		'choices' => array(
		'default' => 'Default',
		'cerulean' => 'Cerulean',
		'cosmo' => 'Cosmo',
		'cyborg' => 'cyborg',
		),
	)
) );
