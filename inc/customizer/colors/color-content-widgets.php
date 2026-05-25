<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// add content widget color divider
function hovercraft_add_content_widget_color_divider( $wp_customize, $setting_id ) {
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

// add content widget color control
function hovercraft_add_content_widget_color_control( $wp_customize, $setting_id, $label, $default, $description = '' ) {
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

// content widget color controls
$hovercraft_content_widget_color_groups = array(
	array(
		'divider' => 'hovercraft_divider_posthero_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_posthero_background_color',
				'label' => 'Posthero Background Color',
				'default' => '#eceff1',
			),
			array(
				'id' => 'hovercraft_posthero_text_color',
				'label' => 'Posthero Text Color',
				'default' => '#263238',
			),
			array(
				'id' => 'hovercraft_posthero_link_color',
				'label' => 'Posthero Link Color',
				'default' => '#5C6BC0',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_after_byline_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_after_byline_background_color',
				'label' => 'After Byline Background Color',
				'default' => '#fff8e1',
				'description' => 'Applies to the After Byline widget element.',
			),
			array(
				'id' => 'hovercraft_after_byline_text_color',
				'label' => 'After Byline Text Color',
				'default' => '#263238',
				'description' => 'Specify the text color in the After Byline widget?',
			),
			array(
				'id' => 'hovercraft_after_byline_link_color',
				'label' => 'After Byline Link Color',
				'default' => '#5C6BC0',
				'description' => 'Specify the link color in the After Byline widget?',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_main_background_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_main_background_color',
				'label' => 'Main Background Color',
				'default' => '#eceff1',
			),
			array(
				'id' => 'hovercraft_main_background_color_homepage',
				'label' => 'Main Background Color (Homepage)',
				'default' => '#eceff1',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_content_background_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_content_background_color',
				'label' => 'Content Background Color',
				'default' => '#ffffff',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_sidebar_callout_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_sidebar_callout_background_color',
				'label' => 'Sidebar Callout Background Color',
				'default' => '#283593',
				'description' => 'Specify background color of the Sidebar Callout widget? Note: Choose a bold tone for best results, and avoid white or shades of gray, which may result in poor visibility or CSS conflicts.',
			),
			array(
				'id' => 'hovercraft_sidebar_callout_border_color',
				'label' => 'Sidebar Callout Border Color',
				'default' => '#283593',
				'description' => 'Specify border color of sidebar callout widget',
			),
			array(
				'id' => 'hovercraft_sidebar_callout_text_color',
				'label' => 'Sidebar Callout Text Color',
				'default' => '#ffffff',
				'description' => 'Specify text color of the Sidebar Callout widget?',
			),
			array(
				'id' => 'hovercraft_sidebar_callout_cta_background_color',
				'label' => 'Sidebar Callout CTA Background Color',
				'default' => '#263238',
				'description' => 'Specify background color of the Sidebar Callout CTA?',
			),
			array(
				'id' => 'hovercraft_sidebar_callout_cta_border_color',
				'label' => 'Sidebar Callout CTA Border Color',
				'default' => '#263238',
				'description' => 'Specify border color of the Sidebar Callout CTA?',
			),
			array(
				'id' => 'hovercraft_sidebar_callout_link_color',
				'label' => 'Sidebar Callout CTA Link Color',
				'default' => '#ffffff',
				'description' => 'Specify link color of the Sidebar Callout widget?',
			),
			array(
				'id' => 'hovercraft_sidebar_callout_hover_background_color',
				'label' => 'Sidebar Callout CTA Background Hover Color',
				'default' => '#ffffff',
				'description' => 'Specify the hover background color for the CTA button in SideBar Callout widget?',
			),
			array(
				'id' => 'hovercraft_sidebar_callout_hover_link_color',
				'label' => 'Sidebar Callout CTA Link Hover Color',
				'default' => '#263238',
				'description' => 'Specify the hover link color for the CTA button in SideBar Callout widget?',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_sidebar_widgets_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_sidebar_left_border_color',
				'label' => 'Sidebar Left Border Color',
				'default' => '#e0e0e0',
				'description' => 'Specify the color of the left border of the sidebar.',
			),
			array(
				'id' => 'hovercraft_sidebar_widget_background_color',
				'label' => 'Sidebar Widgets Background Color',
				'default' => '#ffffff',
				'description' => 'Specify background color of default sidebar widgets?',
			),
			array(
				'id' => 'hovercraft_sidebar_widget_border_color',
				'label' => 'Sidebar Widgets Border Color',
				'default' => '#ffffff',
				'description' => 'Specify border color of default sidebar widgets?',
			),
			array(
				'id' => 'hovercraft_sidebar_widget_text_color',
				'label' => 'Sidebar Widgets Text Color',
				'default' => '#263238',
				'description' => 'Specify text color of default sidebar widgets?',
			),
			array(
				'id' => 'hovercraft_sidebar_widget_link_color',
				'label' => 'Sidebar Widgets Link Color',
				'default' => '#5C6BC0',
				'description' => 'Specify link color of default sidebar widgets?',
			),
			array(
				'id' => 'hovercraft_sidebar_widget_title_text_color',
				'label' => 'Sidebar Widget Title Text Color',
				'default' => '#263238',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_tile_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_tile_background_color',
				'label' => 'Tile Background Color',
				'default' => '#eceff1',
			),
			array(
				'id' => 'hovercraft_tile_border_color',
				'label' => 'Tile Border Color',
				'default' => '#eceff1',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_column_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_column_background_color',
				'label' => 'Column Background Color',
				'default' => '#eceff1',
			),
			array(
				'id' => 'hovercraft_column_border_color',
				'label' => 'Column Border Color',
				'default' => '#eceff1',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_postmain_top_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_postmain_top_background_color',
				'label' => 'Home Postmain (Top) Background Color',
				'default' => '#eceff1',
			),
			array(
				'id' => 'hovercraft_postmain_top_text_color',
				'label' => 'Home Postmain (Top) Text Color',
				'default' => '#263238',
			),
			array(
				'id' => 'hovercraft_postmain_top_link_color',
				'label' => 'Home Postmain (Top) Link Color',
				'default' => '#5C6BC0',
			),
		),
	),
	array(
		'divider' => 'hovercraft_divider_postmain_bottom_colors',
		'controls' => array(
			array(
				'id' => 'hovercraft_postmain_bottom_background_color',
				'label' => 'Home Postmain (Bottom) Background Color',
				'default' => '#eceff1',
			),
			array(
				'id' => 'hovercraft_postmain_bottom_text_color',
				'label' => 'Home Postmain (Bottom) Text Color',
				'default' => '#263238',
			),
			array(
				'id' => 'hovercraft_postmain_bottom_link_color',
				'label' => 'Home Postmain (Bottom) Link Color',
				'default' => '#5C6BC0',
			),
		),
	),
);

// register content widget color controls
foreach ( $hovercraft_content_widget_color_groups as $hovercraft_content_widget_color_group ) {
	hovercraft_add_content_widget_color_divider( $wp_customize, $hovercraft_content_widget_color_group['divider'] );

	foreach ( $hovercraft_content_widget_color_group['controls'] as $hovercraft_content_widget_color_control ) {
		$description = '';

		if ( isset( $hovercraft_content_widget_color_control['description'] ) ) {
			$description = $hovercraft_content_widget_color_control['description'];
		}

		hovercraft_add_content_widget_color_control(
			$wp_customize,
			$hovercraft_content_widget_color_control['id'],
			$hovercraft_content_widget_color_control['label'],
			$hovercraft_content_widget_color_control['default'],
			$description
		);
	}
}
