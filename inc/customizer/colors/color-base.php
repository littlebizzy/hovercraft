<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// add base color divider
function hovercraft_add_base_color_divider( $wp_customize, $setting_id ) {
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

// add base color control
function hovercraft_add_base_color_control( $wp_customize, $setting_id, $label, $default, $description = '' ) {
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

// base color controls
$hovercraft_base_color_groups = array(
	array(
		'controls' => array(
			array(
				'id' => 'hovercraft_default_text_color',
				'label' => 'Default Text Color',
				'default' => '#263238',
				'description' => 'Default text color site-wide',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_default_link_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_default_link_color',
				'label' => 'Default Link Color',
				'default' => '#5C6BC0',
				'description' => 'Default link color site-wide',
			),
			array(
				'id' => 'hovercraft_default_hover_color',
				'label' => 'Default Hover Color',
				'default' => '#283593',
				'description' => 'Default hover color site-wide',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_hero_snippet_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_hero_snippet_text_color',
				'label' => 'Hero Snippet Text Color',
				'default' => '#ffffff',
				'description' => 'Hero Snippet Text Color',
			),
			array(
				'id' => 'hovercraft_hero_snippet_link_color',
				'label' => 'Hero Snippet Link Color',
				'default' => '#ffffff',
				'description' => 'Hero Snippet Link Color',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_breadcrumbs_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_breadcrumbs_text_color',
				'label' => 'Breadcrumbs Text Color',
				'default' => '#607D8B',
				'description' => 'Breadcrumbs text color',
			),
			array(
				'id' => 'hovercraft_breadcrumbs_link_color',
				'label' => 'Breadcrumbs Link Color',
				'default' => '#607D8B',
				'description' => 'Breadcrumbs link color',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_search_bar_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_search_bar_background_color',
				'label' => 'Search Bar Background Color',
				'default' => '#eceff1',
				'description' => 'Specify background color of the search bar element?',
			),
			array(
				'id' => 'hovercraft_search_bar_border_color',
				'label' => 'Search Bar Border Color',
				'default' => '#eceff1',
				'description' => 'Specify border color of the search bar element?',
			),
			array(
				'id' => 'hovercraft_search_input_placeholder_color',
				'label' => 'Search Input Placeholder Color',
				'default' => '#757575',
				'description' => 'Specify color of the placeholder text that appears before search input element is active?',
			),
			array(
				'id' => 'hovercraft_search_input_text_color',
				'label' => 'Search Input Text Color',
				'default' => '#263238',
				'description' => 'Search input text color',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_heading_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_title_divider_background_color',
				'label' => 'H1 H2 Divider Background Color',
				'default' => '#757575',
				'description' => 'Specify the background color of the H1 H2 divider line?',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_blockquote_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_blockquote_text_color',
				'label' => 'Blockquote Text Color',
				'default' => '#616161',
				'description' => 'Specify the text color on blockquotes?',
			),
			array(
				'id' => 'hovercraft_blockquote_border_color',
				'label' => 'Blockquote Border Color',
				'default' => '#757575',
				'description' => 'Specify the border-left color on blockquotes?',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_woocommerce_price_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_woocommerce_price_text_color',
				'label' => 'WooCommerce Price Text Color',
				'default' => '#9E9D24',
				'description' => 'Text color of the prices displayed by WooCommerce on products?',
			),
		),
	),
);

// register base color controls
foreach ( $hovercraft_base_color_groups as $hovercraft_base_color_group ) {
	if ( isset( $hovercraft_base_color_group['divider'] ) ) {
		hovercraft_add_base_color_divider( $wp_customize, $hovercraft_base_color_group['divider'] );
	}

	foreach ( $hovercraft_base_color_group['controls'] as $hovercraft_base_color_control ) {
		$description = '';

		if ( isset( $hovercraft_base_color_control['description'] ) ) {
			$description = $hovercraft_base_color_control['description'];
		}

		hovercraft_add_base_color_control(
			$wp_customize,
			$hovercraft_base_color_control['id'],
			$hovercraft_base_color_control['label'],
			$hovercraft_base_color_control['default'],
			$description
		);
	}
}
