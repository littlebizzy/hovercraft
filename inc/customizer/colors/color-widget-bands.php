<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// add widget band color control
function hovercraft_add_widget_band_color_control( $wp_customize, $setting_id, $label, $default ) {
	$wp_customize->add_setting( $setting_id, array(
		'default' => $default,
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		$setting_id,
		array(
			'label' => $label,
			'section' => 'colors',
			'settings' => $setting_id,
		)
	) );
}

// add widget band color divider
function hovercraft_add_widget_band_color_divider( $wp_customize, $setting_id ) {
	$wp_customize->add_setting( $setting_id, array(
		'sanitize_callback' => '__return_null',
	) );

	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		$setting_id,
		array(
			'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
			'type' => 'hidden',
			'section' => 'colors',
			'settings' => $setting_id,
		)
	) );
}

// widget band color controls
$hovercraft_widget_band_color_controls = array(
	array(
		'divider' => 'hovercraft_divider_premain_top_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_premain_top_background_color',
				'label' => 'Home Premain Top Background Color',
				'default' => '#eceff1',
			),
			array(
				'id' => 'hovercraft_premain_top_text_color',
				'label' => 'Home Premain Top Text Color',
				'default' => '#263238',
			),
			array(
				'id' => 'hovercraft_premain_top_link_color',
				'label' => 'Home Premain Top Link Color',
				'default' => '#5C6BC0',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_premain_bottom_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_premain_bottom_background_color',
				'label' => 'Home Premain Bottom Background Color',
				'default' => '#eceff1',
			),
			array(
				'id' => 'hovercraft_premain_bottom_text_color',
				'label' => 'Home Premain Bottom Text Color',
				'default' => '#263238',
			),
			array(
				'id' => 'hovercraft_premain_bottom_link_color',
				'label' => 'Home Premain Bottom Link Color',
				'default' => '#5C6BC0',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_postcolumns_top_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_postcolumns_top_background_color',
				'label' => 'Postcolumns Top Background Color',
				'default' => '#eceff1',
			),
			array(
				'id' => 'hovercraft_postcolumns_top_text_color',
				'label' => 'Postcolumns Top Text Color',
				'default' => '#263238',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_postcolumns_bottom_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_postcolumns_bottom_background_color',
				'label' => 'Postcolumns Bottom Background Color',
				'default' => '#eceff1',
			),
			array(
				'id' => 'hovercraft_postcolumns_bottom_text_color',
				'label' => 'Postcolumns Bottom Text Color',
				'default' => '#263238',
			),
		),
	),
);

// register widget band color controls
foreach ( $hovercraft_widget_band_color_controls as $hovercraft_widget_band_color_control_group ) {
	hovercraft_add_widget_band_color_divider( $wp_customize, $hovercraft_widget_band_color_control_group['divider'] );

	foreach ( $hovercraft_widget_band_color_control_group['controls'] as $hovercraft_widget_band_color_control ) {
		hovercraft_add_widget_band_color_control(
			$wp_customize,
			$hovercraft_widget_band_color_control['id'],
			$hovercraft_widget_band_color_control['label'],
			$hovercraft_widget_band_color_control['default']
		);
	}
}
