<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// add footer color divider
function hovercraft_add_footer_color_divider( $wp_customize, $setting_id ) {
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

// add footer color control
function hovercraft_add_footer_color_control( $wp_customize, $setting_id, $label, $default, $description = '' ) {
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

// footer color controls
$hovercraft_footer_color_groups = array(
	array(
		'divider' => 'hovercraft_divider_prefooter_top_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_prefooter_top_background_color',
				'label' => 'Prefooter (Top) Background Color',
				'default' => '#eceff1',
			),
			array(
				'id' => 'hovercraft_prefooter_top_text_color',
				'label' => 'Prefooter (Top) Text Color',
				'default' => '#263238',
			),
			array(
				'id' => 'hovercraft_prefooter_top_link_color',
				'label' => 'Prefooter (Top) Link Color',
				'default' => '#5C6BC0',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_prefooter_bottom_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_prefooter_bottom_background_color',
				'label' => 'Prefooter (Bottom) Background Color',
				'default' => '#263238',
			),
			array(
				'id' => 'hovercraft_prefooter_bottom_text_color',
				'label' => 'Prefooter (Bottom) Text Color',
				'default' => '#ffffff',
			),
			array(
				'id' => 'hovercraft_prefooter_bottom_link_color',
				'label' => 'Prefooter (Bottom) Link Color',
				'default' => '#5C6BC0',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_footer_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_footer_background_color',
				'label' => 'Footer Background Color',
				'default' => '#ffffff',
			),
			array(
				'id' => 'hovercraft_footer_text_color',
				'label' => 'Footer Text Color',
				'default' => '#263238',
			),
			array(
				'id' => 'hovercraft_footer_link_color',
				'label' => 'Footer Link Color',
				'default' => '#5C6BC0',
			),
			array(
				'id' => 'hovercraft_footer_callout_background_color',
				'label' => 'Footer Callout Background Color',
				'default' => '#283593',
				'description' => 'Specify background color of the Footer Callout widget? Note: Choose a bold tone for best results, and avoid white or shades of gray, which may result in poor visibility or CSS conflicts.',
			),
			array(
				'id' => 'hovercraft_footer_callout_border_color',
				'label' => 'Footer Callout Border Color',
				'default' => '#283593',
				'description' => 'Specify border color of the Footer Callout widget?',
			),
			array(
				'id' => 'hovercraft_footer_callout_text_color',
				'label' => 'Footer Callout Text Color',
				'default' => '#ffffff',
				'description' => 'Specify text color of the Footer Callout widget?',
			),
			array(
				'id' => 'hovercraft_footer_callout_link_color',
				'label' => 'Footer Callout Link Color',
				'default' => '#ffffff',
				'description' => 'Specify link color of the Footer Callout widget?',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_copyright_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_copyright_background_color',
				'label' => 'Copyright Background Color',
				'default' => '#ffffff',
			),
			array(
				'id' => 'hovercraft_copyright_text_color',
				'label' => 'Copyright Text Color',
				'default' => '#263238',
			),
			array(
				'id' => 'hovercraft_copyright_link_color',
				'label' => 'Copyright Link Color',
				'default' => '#5C6BC0',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_back_to_top',
		'controls' => array(
			array(
				'id' => 'hovercraft_back_to_top_background_color',
				'label' => 'Back To Top Background Color',
				'default' => '#eceff1',
			),
			array(
				'id' => 'hovercraft_back_to_top_background_hover_color',
				'label' => 'Back To Top Background Hover Color',
				'default' => '#eceff1',
			),
			array(
				'id' => 'hovercraft_back_to_top_link_color',
				'label' => 'Back To Top Link Color',
				'default' => '#263238',
			),
		),
	),
);

// register footer color controls
foreach ( $hovercraft_footer_color_groups as $hovercraft_footer_color_group ) {
	hovercraft_add_footer_color_divider( $wp_customize, $hovercraft_footer_color_group['divider'] );

	foreach ( $hovercraft_footer_color_group['controls'] as $hovercraft_footer_color_control ) {
		$description = '';

		if ( isset( $hovercraft_footer_color_control['description'] ) ) {
			$description = $hovercraft_footer_color_control['description'];
		}

		hovercraft_add_footer_color_control(
			$wp_customize,
			$hovercraft_footer_color_control['id'],
			$hovercraft_footer_color_control['label'],
			$hovercraft_footer_color_control['default'],
			$description
		);
	}
}
