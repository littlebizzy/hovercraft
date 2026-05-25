<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// after byline (desktop) setting
$wp_customize->add_setting( 'hovercraft_after_byline_desktop_font_size', array(
	'default'    => '12',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// after byline (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_after_byline_desktop_font_size',
	array(
		'label'     => __( 'After Byline Font Size (Desktop)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the After Byline widget on desktop devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_after_byline_desktop_font_size',
		'type' => 'text',
	)
) );

// after byline (mobile) setting
$wp_customize->add_setting( 'hovercraft_after_byline_mobile_font_size', array(
	'default'    => '12',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// after byline (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_after_byline_mobile_font_size',
	array(
		'label'     => __( 'After Byline Font Size (Mobile)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the After Byline widget on mobile devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_after_byline_mobile_font_size',
		'type' => 'text',
	)
) );

// back to top text transform setting
$wp_customize->add_setting( 'hovercraft_back_to_top_text_transform', array(
	'default'    => 'uppercase',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// back to top text transform control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_back_to_top_text_transform',
	array(
		'label'     => __( 'Back To Top Text Transform', 'hovercraft' ),
		'description' => __( 'Specify text transform for the Back To Top element?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_back_to_top_text_transform',
		'type' => 'select',
		'choices' => array(
		'none' => 'Default (None)',
		'uppercase' => 'Uppercase',
		'lowercase' => 'Lowercase',
		'capitalize' => 'Capitalize',
	)
		)
) );

// back to top font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_back_to_top_desktop_font_size', array(
	'default'    => '12',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// back to top font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_back_to_top_desktop_font_size',
	array(
		'label'     => __( 'Back To Top Font Size (Desktop)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the back to top element on desktop devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_back_to_top_desktop_font_size',
		'type' => 'text',
	)
) );

// back to top font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_back_to_top_mobile_font_size', array(
	'default'    => '12',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// back to top font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_back_to_top_mobile_font_size',
	array(
		'label'     => __( 'Back To Top Font Size (Mobile)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the back to top element on mobile devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_back_to_top_mobile_font_size',
		'type' => 'text',
	)
) );

// back to top font weight setting
$wp_customize->add_setting( 'hovercraft_back_to_top_font_weight', array(
	'default'    => '400',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// back to top font weight control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_back_to_top_font_weight',
	array(
		'label'     => __( 'Back To Top Font Weight', 'hovercraft' ),
		'description' => __( 'Specify font weight to use for the Back To Top element?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_back_to_top_font_weight',
		'type'      => 'select',
		'choices' => array(
		'700' => '700',
		'600' => '600',
		'400' => '400',
	)
		)
) );
