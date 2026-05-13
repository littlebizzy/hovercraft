<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// sidebar widget title text transform setting
$wp_customize->add_setting( 'hovercraft_sidebar_widget_title_text_transform', array(
	'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// sidebar widget title text transform control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_sidebar_widget_title_text_transform',
	array(
		'label'     => __( 'Sidebar Widget Title Text Transform', 'hovercraft' ),
		'description' => __( 'Specify text transform for sidebar widget titles?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_sidebar_widget_title_text_transform',
		'type' => 'select',
		'choices' => array(
		'none' => 'Default (None)',
		'uppercase' => 'Uppercase',
		'lowercase' => 'Lowercase',
		'capitalize' => 'Capitalize',
	)
		)
) );

// sidebar widget title font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_sidebar_widget_title_desktop_font_size', array(
	'default'    => '24',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// sidebar widget title font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_sidebar_widget_title_desktop_font_size',
	array(
		'label'     => __( 'Sidebar Widget Title Font Size (Desktop)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the sidebar widget titles on desktop devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_sidebar_widget_title_desktop_font_size',
		'type' => 'text',
	)
) );

// sidebar widget title font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_sidebar_widget_title_mobile_font_size', array(
	'default'    => '24',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// sidebar widget title font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_sidebar_widget_title_mobile_font_size',
	array(
		'label'     => __( 'Sidebar Widget Title Font Size (Mobile)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the sidebar widget titles on mobile devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_sidebar_widget_title_mobile_font_size',
		'type' => 'text',
	)
) );

// sidebar widget title font weight setting
$wp_customize->add_setting( 'hovercraft_sidebar_widget_title_font_weight', array(
	'default'    => '600',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// sidebar widget title font weight control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_sidebar_widget_title_font_weight',
	array(
		'label'     => __( 'Sidebar Widget Title Font Weight', 'hovercraft' ),
		'description' => __( 'Specify font weight to use for the Sidebar widget titles? Note: Ensure your chosen font family supports the font weight that you choose.', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_sidebar_widget_title_font_weight',
		'type'      => 'select',
		'choices' => array(
		'700' => '700',
		'600' => '600',
		'400' => '400',
	)
		)
) );

// social sharing font size setting
$wp_customize->add_setting( 'hovercraft_social_sharing_font_size', array(
	'default'    => '18',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// social sharing font size control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_social_sharing_font_size',
	array(
		'label'     => __( 'Social Sharing Font Size', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the social sharing icons?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_social_sharing_font_size',
		'type' => 'text',
	)
) );

// footer font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_footer_desktop_font_size', array(
	'default'    => '14',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// footer font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_footer_desktop_font_size',
	array(
		'label'     => __( 'Footer Font Size (Desktop)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the footer on desktop devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_footer_desktop_font_size',
		'type' => 'text',
	)
) );

// footer font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_footer_mobile_font_size', array(
	'default'    => '14',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// footer font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_footer_mobile_font_size',
	array(
		'label'     => __( 'Footer Font Size (Mobile)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the footer on mobile devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_footer_mobile_font_size',
		'type' => 'text',
	)
) );

// copyright font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_copyright_desktop_font_size', array(
	'default'    => '14',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// copyright font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_copyright_desktop_font_size',
	array(
		'label'     => __( 'Copyright Font Size (Desktop)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the copyright on desktop devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_copyright_desktop_font_size',
		'type' => 'text',
	)
) );

// copyright font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_copyright_mobile_font_size', array(
	'default'    => '14',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// copyright font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_copyright_mobile_font_size',
	array(
		'label'     => __( 'Copyright Font Size (Mobile)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the copyright on mobile devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_copyright_mobile_font_size',
		'type' => 'text',
	)
) );
