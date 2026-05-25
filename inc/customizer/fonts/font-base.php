<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// default font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_default_desktop_font_size', array(
	'default'    => '16',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// default font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_default_desktop_font_size',
	array(
		'label'     => __( 'Default Font Size (Desktop)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the default on desktop devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_default_desktop_font_size',
		'type' => 'text',
	)
) );

// default font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_default_mobile_font_size', array(
	'default'    => '16',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// default font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_default_mobile_font_size',
	array(
		'label'     => __( 'Default Font Size (Mobile)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the default on mobile devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_default_mobile_font_size',
		'type' => 'text',
	)
) );

// add setting for site name font family
$wp_customize->add_setting( 'hovercraft_site_name_font', array(
	'default'    => '',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// add control for site name font family
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_site_name_font',
	array(
		'label'       => __( 'Site Name Font Family', 'hovercraft' ),
		'description' => __( 'Which Google Fonts family should be used for the site name in the header? Note: Display must be enabled under the Site Identity section.', 'hovercraft' ),
		'section'     => 'hovercraft_fonts',
		'settings'    => 'hovercraft_site_name_font',
		'type'        => 'select',
		'choices'     => $hovercraft_available_fonts,
	)
) );

// site name text transform setting
$wp_customize->add_setting( 'hovercraft_site_name_text_transform', array(
	'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// site name text transform control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_site_name_text_transform',
	array(
		'label'     => __( 'Site Name Text Transform', 'hovercraft' ),
		'description' => __( 'Specify text transform for Site Name element?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_site_name_text_transform',
		'type' => 'select',
		'choices' => array(
		'none' => 'Default (None)',
		'uppercase' => 'Uppercase',
		'lowercase' => 'Lowercase',
		'capitalize' => 'Capitalize',
	)
		)
) );

// site name font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_site_name_desktop_font_size', array(
	'default'    => '36',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// site name font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_site_name_desktop_font_size',
	array(
		'label'     => __( 'Site Name Font Size (Desktop)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the site name on desktop devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_site_name_desktop_font_size',
		'type' => 'text',
	)
) );

// site name font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_site_name_mobile_font_size', array(
	'default'    => '24',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// site name font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_site_name_mobile_font_size',
	array(
		'label'     => __( 'Site Name Font Size (Mobile)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the site name on mobile devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_site_name_mobile_font_size',
		'type' => 'text',
	)
) );

// site name font weight setting
$wp_customize->add_setting( 'hovercraft_site_name_font_weight', array(
	'default'    => '700',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// site name font weight control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_site_name_font_weight',
	array(
		'label'     => __( 'Site Name Font Weight', 'hovercraft' ),
		'description' => __( 'Specify font weight to use for the site name? Note: Ensure your chosen font family supports the font weight that you choose.', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_site_name_font_weight',
		'type'      => 'select',
		'choices' => array(
		'700' => '700',
		'600' => '600',
		'400' => '400',
	)
		)
) );
