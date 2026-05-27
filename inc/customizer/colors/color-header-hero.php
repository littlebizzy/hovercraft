<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// add header hero color divider
function hovercraft_add_header_hero_color_divider( $wp_customize, $setting_id ) {
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

// add header hero color control
function hovercraft_add_header_hero_color_control( $wp_customize, $setting_id, $label, $default, $description = '' ) {
	$wp_customize->add_setting( $setting_id, array(
		'default' => $default,
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$control_args = array(
		'label' => $label,
		'section' => 'colors',
		'settings' => $setting_id,
	);

	if ( $description !== '' ) {
		$control_args['description'] = $description;
	}

	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		$setting_id,
		$control_args
	) );
}

// header hero color controls
$hovercraft_header_hero_color_groups = array(
	array(
		'divider' => 'hovercraft_divider_offcanvas_menu_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_offcanvas_background_color',
				'label' => 'Offcanvas Menu Background Color',
				'default' => '#ffffff',
				'description' => 'Specify background color of the Offcanvas Menu element?',
			),
			array(
				'id' => 'hovercraft_offcanvas_toggle_background_color',
				'label' => 'Offcanvas Toggle Background Color',
				'default' => '#eceff1',
				'description' => 'Specify background color of the Offcanvas Menu toggle elements?',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_topbar_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_topbar_background_color',
				'label' => 'Topbar Background Color',
				'default' => '#263238',
				'description' => 'Specify background color of the Topbar element? Note: Choose a bold tone or black for best results, and avoid white or shades of gray, which may result in poor visibility or CSS conflicts.',
			),
			array(
				'id' => 'hovercraft_topbar_text_color',
				'label' => 'Topbar Text Color',
				'default' => '#ffffff',
				'description' => 'Applies to any plain text inside the topbar.',
			),
			array(
				'id' => 'hovercraft_topbar_link_color',
				'label' => 'Topbar Link Color',
				'default' => '#ffffff',
				'description' => 'Applies to any links inside the topbar.',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_full_hero_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_full_hero_header_background_color',
				'label' => 'Full Hero Header Background Color',
				'default' => '#37474f',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_hero_gradient_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_hero_gradient_start_color',
				'label' => 'Hero Gradient Start Color',
				'default' => '#37474f',
			),
			array(
				'id' => 'hovercraft_hero_gradient_mid_color',
				'label' => 'Hero Gradient Mid Color',
				'default' => '#37474f',
			),
			array(
				'id' => 'hovercraft_hero_gradient_stop_color',
				'label' => 'Hero Gradient Stop Color',
				'default' => '#ffffff',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_half_hero_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_header_half_hero_background_color',
				'label' => 'Header (Half Hero) Background Color',
				'default' => '#ffffff',
			),
			array(
				'id' => 'hovercraft_header_half_hero_text_color',
				'label' => 'Header (Half Hero) Text Color',
				'default' => '#263238',
			),
			array(
				'id' => 'hovercraft_header_half_hero_link_color',
				'label' => 'Header (Half Hero) Link Color',
				'default' => '#263238',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_mini_hero_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_header_mini_hero_background_color',
				'label' => 'Header (Mini Hero) Background Color',
				'default' => '#ffffff',
			),
			array(
				'id' => 'hovercraft_mini_hero_header_text_color',
				'label' => 'Header (Mini Hero) Text Color',
				'default' => '#263238',
			),
			array(
				'id' => 'hovercraft_mini_hero_header_link_color',
				'label' => 'Header (Mini Hero) Link Color',
				'default' => '#263238',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_header_basic_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_header_basic_background_color',
				'label' => 'Header (Basic) Background Color',
				'default' => '#ffffff',
			),
			array(
				'id' => 'hovercraft_basic_hero_header_text_color',
				'label' => 'Header (Basic) Text Color',
				'default' => '#263238',
			),
			array(
				'id' => 'hovercraft_basic_hero_header_link_color',
				'label' => 'Header (Basic) Link Color',
				'default' => '#263238',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_navbar_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_navbar_background_color',
				'label' => 'Navbar Background Color',
				'default' => '',
				'description' => 'Reserved for future use. Stacked navbar colors currently follow the active header layout automatically.',
			),
		),
	),
);

// register header hero color controls
foreach ( $hovercraft_header_hero_color_groups as $hovercraft_header_hero_color_group ) {
	hovercraft_add_header_hero_color_divider( $wp_customize, $hovercraft_header_hero_color_group['divider'] );

	foreach ( $hovercraft_header_hero_color_group['controls'] as $hovercraft_header_hero_color_control ) {
		$description = '';

		if ( isset( $hovercraft_header_hero_color_control['description'] ) ) {
			$description = $hovercraft_header_hero_color_control['description'];
		}

		hovercraft_add_header_hero_color_control(
			$wp_customize,
			$hovercraft_header_hero_color_control['id'],
			$hovercraft_header_hero_color_control['label'],
			$hovercraft_header_hero_color_control['default'],
			$description
		);
	}
}