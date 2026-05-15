<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// add heading font control
function hovercraft_add_heading_font_control( $wp_customize, $setting_id, $label, $description, $default, $sanitize_callback, $type, $choices = array() ) {
	$wp_customize->add_setting( $setting_id, array(
		'default' => $default,
		'sanitize_callback' => $sanitize_callback,
	) );

	$control_args = array(
		'label' => $label,
		'description' => $description,
		'section' => 'hovercraft_fonts',
		'settings' => $setting_id,
		'type' => $type,
	);

	if ( ! empty( $choices ) ) {
		$control_args['choices'] = $choices;
	}

	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		$setting_id,
		$control_args
	) );
}

// heading font weight choices
$hovercraft_heading_font_weight_choices = array(
	'700' => '700',
	'600' => '600',
	'400' => '400',
);

// heading divider choices
$hovercraft_h1_divider_choices = array(
	'none' => 'None (Hidden)',
	'everywhere_possible' => 'Everywhere Possible',
	'everywhere_except_heros' => 'Everywhere Except Heros',
);

$hovercraft_h2_divider_choices = array(
	'none' => 'None (Hidden)',
	'everywhere_possible' => 'Everywhere Possible',
);

// heading font controls
$hovercraft_heading_font_controls = array(
	array(
		'tag' => 'H1',
		'prefix' => 'h1',
		'desktop_size' => '48',
		'mobile_size' => '36',
		'font_weight' => '700',
		'family_description' => 'Which Google Fonts family should be used for all H1 titles site-wide?',
		'desktop_description' => 'Specify font size to use, in pixels, for the H1 titles on desktop devices?',
		'mobile_description' => 'Specify font size to use, in pixels, for the H1 titles on mobile devices?',
		'weight_description' => 'Specify font weight to use for the H1 titles? Note: Ensure your chosen font family supports the font weight that you choose.',
		'divider' => array(
			'id' => 'hovercraft_h1_divider_display',
			'label' => __( 'H1 Divider Display', 'hovercraft' ),
			'description' => __( 'Choose if you want to display a divider (line) below the H1 elements?', 'hovercraft' ),
			'choices' => $hovercraft_h1_divider_choices,
		),
	),
	array(
		'tag' => 'H2',
		'prefix' => 'h2',
		'desktop_size' => '36',
		'mobile_size' => '30',
		'font_weight' => '700',
		'family_description' => 'Which Google Fonts family should be used for all h2 titles site-wide?',
		'desktop_description' => 'Specify font size to use, in pixels, for the h2 titles on desktop devices?',
		'mobile_description' => 'Specify font size to use, in pixels, for the h2 titles on mobile devices?',
		'weight_description' => 'Specify font weight to use for the h2 titles? Note: Ensure your chosen font family supports the font weight that you choose.',
		'divider' => array(
			'id' => 'hovercraft_h2_divider_display',
			'label' => __( 'H2 Divider Display', 'hovercraft' ),
			'description' => __( 'Choose if you want to display a divider (line) below the H2 elements?', 'hovercraft' ),
			'choices' => $hovercraft_h2_divider_choices,
		),
	),
	array(
		'tag' => 'H3',
		'prefix' => 'h3',
		'desktop_size' => '24',
		'mobile_size' => '24',
		'font_weight' => '700',
		'family_description' => 'Which Google Fonts family should be used for all h3 titles site-wide?',
		'desktop_description' => 'Specify font size to use, in pixels, for the h3 titles on desktop devices?',
		'mobile_description' => 'Specify font size to use, in pixels, for the h3 titles on mobile devices?',
		'weight_description' => 'Specify font weight to use for the h3 titles? Note: Ensure your chosen font family supports the font weight that you choose.',
	),
	array(
		'tag' => 'H4',
		'prefix' => 'h4',
		'desktop_size' => '20',
		'mobile_size' => '20',
		'font_weight' => '700',
		'family_description' => 'Which Google Fonts family should be used for all h4 titles site-wide?',
		'desktop_description' => 'Specify font size to use, in pixels, for the h4 titles on desktop devices?',
		'mobile_description' => 'Specify font size to use, in pixels, for the h4 titles on mobile devices?',
		'weight_description' => 'Specify font weight to use for the h4 titles? Note: Ensure your chosen font family supports the font weight that you choose.',
	),
	array(
		'tag' => 'H5',
		'prefix' => 'h5',
		'desktop_size' => '18',
		'mobile_size' => '18',
		'font_weight' => '700',
		'family_description' => 'Which Google Fonts family should be used for all h5 titles site-wide?',
		'desktop_description' => 'Specify font size to use, in pixels, for the h5 titles on desktop devices?',
		'mobile_description' => 'Specify font size to use, in pixels, for the h5 titles on mobile devices?',
		'weight_description' => 'Specify font weight to use for the h5 titles? Note: Ensure your chosen font family supports the font weight that you choose.',
	),
);

// register heading font controls
foreach ( $hovercraft_heading_font_controls as $hovercraft_heading_font_control ) {
	$tag = $hovercraft_heading_font_control['tag'];
	$prefix = $hovercraft_heading_font_control['prefix'];

	hovercraft_add_heading_font_control(
		$wp_customize,
		'hovercraft_' . $prefix . '_font',
		__( $tag . ' Font Family', 'hovercraft' ),
		__( $hovercraft_heading_font_control['family_description'], 'hovercraft' ),
		'',
		'hovercraft_sanitize_select',
		'select',
		$hovercraft_available_fonts
	);

	hovercraft_add_heading_font_control(
		$wp_customize,
		'hovercraft_' . $prefix . '_desktop_font_size',
		__( $tag . ' Font Size (Desktop)', 'hovercraft' ),
		__( $hovercraft_heading_font_control['desktop_description'], 'hovercraft' ),
		$hovercraft_heading_font_control['desktop_size'],
		'hovercraft_sanitize_float',
		'text'
	);

	hovercraft_add_heading_font_control(
		$wp_customize,
		'hovercraft_' . $prefix . '_mobile_font_size',
		__( $tag . ' Font Size (Mobile)', 'hovercraft' ),
		__( $hovercraft_heading_font_control['mobile_description'], 'hovercraft' ),
		$hovercraft_heading_font_control['mobile_size'],
		'hovercraft_sanitize_float',
		'text'
	);

	hovercraft_add_heading_font_control(
		$wp_customize,
		'hovercraft_' . $prefix . '_font_weight',
		__( $tag . ' Font Weight', 'hovercraft' ),
		__( $hovercraft_heading_font_control['weight_description'], 'hovercraft' ),
		$hovercraft_heading_font_control['font_weight'],
		'hovercraft_sanitize_float',
		'select',
		$hovercraft_heading_font_weight_choices
	);

	if ( isset( $hovercraft_heading_font_control['divider'] ) ) {
		hovercraft_add_heading_font_control(
			$wp_customize,
			$hovercraft_heading_font_control['divider']['id'],
			$hovercraft_heading_font_control['divider']['label'],
			$hovercraft_heading_font_control['divider']['description'],
			'none',
			'hovercraft_sanitize_select',
			'select',
			$hovercraft_heading_font_control['divider']['choices']
		);
	}
}
