<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// add widget area select control
function hovercraft_add_widget_area_select_control( $wp_customize, $setting_id, $label, $description, $default, $sanitize_callback, $choices ) {
	$wp_customize->add_setting( $setting_id, array(
		'default' => $default,
		'sanitize_callback' => $sanitize_callback,
	) );

	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		$setting_id,
		array(
			'label' => $label,
			'description' => $description,
			'section' => 'hovercraft_widget_layouts',
			'settings' => $setting_id,
			'type' => 'select',
			'choices' => $choices,
		)
	) );
}

// widget areas section
$wp_customize->add_section( 'hovercraft_widget_layouts', array(
	'title' => 'Widget Areas',
	'priority' => 33,
) );

// widget area column choices
$hovercraft_widget_area_column_choices = array(
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
);

// widget area align choices
$hovercraft_widget_area_align_choices = array(
	'center' => 'Center',
	'left' => 'Left',
);

// widget area column controls
$hovercraft_widget_area_column_controls = array(
	array(
		'id' => 'hovercraft_home_premain_top_columns',
		'label' => __( 'Home Premain Top Columns (Desktop)', 'hovercraft' ),
		'description' => __( 'How many widgets across should display in the Home Premain Top widget area?', 'hovercraft' ),
	),
	array(
		'id' => 'hovercraft_home_premain_bottom_columns',
		'label' => __( 'Home Premain Bottom Columns (Desktop)', 'hovercraft' ),
		'description' => __( 'How many widgets across should display in the Home Premain Bottom widget area?', 'hovercraft' ),
	),
	array(
		'id' => 'hovercraft_home_postmain_top_columns',
		'label' => __( 'Home Postmain Top Columns (Desktop)', 'hovercraft' ),
		'description' => __( 'How many widgets across should display in the Home Postmain Top widget area?', 'hovercraft' ),
	),
	array(
		'id' => 'hovercraft_home_postmain_bottom_columns',
		'label' => __( 'Home Postmain Bottom Columns (Desktop)', 'hovercraft' ),
		'description' => __( 'How many widgets across should display in the Home Postmain Bottom widget area?', 'hovercraft' ),
	),
	array(
		'id' => 'hovercraft_prefooter_top_columns',
		'label' => __( 'Prefooter Top Columns (Desktop)', 'hovercraft' ),
		'description' => __( 'How many widgets across should display in the Prefooter Top widget area?', 'hovercraft' ),
	),
	array(
		'id' => 'hovercraft_prefooter_bottom_columns',
		'label' => __( 'Prefooter Bottom Columns (Desktop)', 'hovercraft' ),
		'description' => __( 'How many widgets across should display in the Prefooter Bottom widget area?', 'hovercraft' ),
	),
);

// register widget area column controls
foreach ( $hovercraft_widget_area_column_controls as $hovercraft_widget_area_column_control ) {
	hovercraft_add_widget_area_select_control(
		$wp_customize,
		$hovercraft_widget_area_column_control['id'],
		$hovercraft_widget_area_column_control['label'],
		$hovercraft_widget_area_column_control['description'],
		'1',
		'hovercraft_sanitize_float',
		$hovercraft_widget_area_column_choices
	);
}

// widget area align controls
$hovercraft_widget_area_align_controls = array(
	array(
		'id' => 'hovercraft_home_premain_top_align',
		'label' => __( 'Home Premain Top Text Align', 'hovercraft' ),
		'description' => __( 'How should content be aligned in the Home Premain Top widget area?', 'hovercraft' ),
		'default' => 'center',
	),
	array(
		'id' => 'hovercraft_home_premain_bottom_align',
		'label' => __( 'Home Premain Bottom Text Align', 'hovercraft' ),
		'description' => __( 'How should content be aligned in the Home Premain Bottom widget area?', 'hovercraft' ),
		'default' => 'center',
	),
	array(
		'id' => 'hovercraft_home_postmain_top_align',
		'label' => __( 'Home Postmain Top Text Align', 'hovercraft' ),
		'description' => __( 'How should content be aligned in the Home Postmain Top widget area?', 'hovercraft' ),
		'default' => 'center',
	),
	array(
		'id' => 'hovercraft_home_postmain_bottom_align',
		'label' => __( 'Home Postmain Bottom Text Align', 'hovercraft' ),
		'description' => __( 'How should content be aligned in the Home Postmain Bottom widget area?', 'hovercraft' ),
		'default' => 'center',
	),
	array(
		'id' => 'hovercraft_prefooter_top_align',
		'label' => __( 'Prefooter Top Text Align', 'hovercraft' ),
		'description' => __( 'How should content be aligned in the Prefooter Top widget area?', 'hovercraft' ),
		'default' => 'left',
	),
	array(
		'id' => 'hovercraft_prefooter_bottom_align',
		'label' => __( 'Prefooter Bottom Text Align', 'hovercraft' ),
		'description' => __( 'How should content be aligned in the Prefooter Bottom widget area?', 'hovercraft' ),
		'default' => 'left',
	),
	array(
		'id' => 'hovercraft_postcolumns_top_align',
		'label' => __( 'Postcolumns Top Text Align', 'hovercraft' ),
		'description' => __( 'How should content be aligned in the Postcolumns Top widget area?', 'hovercraft' ),
		'default' => 'left',
	),
	array(
		'id' => 'hovercraft_postcolumns_bottom_align',
		'label' => __( 'Postcolumns Bottom Text Align', 'hovercraft' ),
		'description' => __( 'How should content be aligned in the Postcolumns Bottom widget area?', 'hovercraft' ),
		'default' => 'left',
	),
);

// register widget area align controls
foreach ( $hovercraft_widget_area_align_controls as $hovercraft_widget_area_align_control ) {
	hovercraft_add_widget_area_select_control(
		$wp_customize,
		$hovercraft_widget_area_align_control['id'],
		$hovercraft_widget_area_align_control['label'],
		$hovercraft_widget_area_align_control['description'],
		$hovercraft_widget_area_align_control['default'],
		'hovercraft_sanitize_select',
		$hovercraft_widget_area_align_choices
	);
}
