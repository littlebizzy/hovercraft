<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// offcanvas menu text transform setting
$wp_customize->add_setting( 'hovercraft_offcanvas_menu_text_transform', array(
	'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// offcanvas menu text transform control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_offcanvas_menu_text_transform',
	array(
		'label'     => __( 'Offcanvas Menu Text Transform', 'hovercraft' ),
		'description' => __( 'Specify text transform for Offcanvas menu list items?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_offcanvas_menu_text_transform',
		'type' => 'select',
		'choices' => array(
		'none' => 'Default (None)',
		'uppercase' => 'Uppercase',
		'lowercase' => 'Lowercase',
		'capitalize' => 'Capitalize',
	)
		)
) );

// offcanvas menu font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_offcanvas_font_size', array(
	'default'    => '18',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// offcanvas menu font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_offcanvas_font_size',
	array(
		'label'     => __( 'Offcanvas Menu Font Size (Mobile)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the Offcanvas Menu on mobile devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_offcanvas_font_size',
		'type' => 'text',
	)
) );

// offcanvas menu font weight setting
$wp_customize->add_setting( 'hovercraft_offcanvas_font_weight', array(
	'default'    => '400',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// offcanvas menu font weight control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_offcanvas_font_weight',
	array(
		'label'     => __( 'Offcanvas Menu Font Weight', 'hovercraft' ),
		'description' => __( 'Specify font weight to use for the Offcanvas Menu? Note: Ensure your chosen font family supports the font weight that you choose.', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_offcanvas_font_weight',
		'type'      => 'select',
		'choices' => array(
		'700' => '700',
		'600' => '600',
		'400' => '400',
	)
		)
) );

// offcanvas submenu text transform setting
$wp_customize->add_setting( 'hovercraft_offcanvas_submenu_text_transform', array(
	'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// offcanvas submenu text transform control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_offcanvas_submenu_text_transform',
	array(
		'label'     => __( 'Offcanvas Submenu Text Transform', 'hovercraft' ),
		'description' => __( 'Specify text transform for Offcanvas submenu list items?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_offcanvas_submenu_text_transform',
		'type' => 'select',
		'choices' => array(
		'none' => 'Default (None)',
		'uppercase' => 'Uppercase',
		'lowercase' => 'Lowercase',
		'capitalize' => 'Capitalize',
	)
		)
) );

// offcanvas submenu font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_offcanvas_submenu_font_size', array(
	'default'    => '16',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// offcanvas submenu font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_offcanvas_submenu_font_size',
	array(
		'label'     => __( 'Offcanvas Submenu Font Size (Mobile)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the Offcanvas submenus on mobile devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_offcanvas_submenu_font_size',
		'type' => 'text',
	)
) );

// offcanvas submenu font weight setting
$wp_customize->add_setting( 'hovercraft_offcanvas_submenu_font_weight', array(
	'default'    => '400',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// offcanvas submenu font weight control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_offcanvas_submenu_font_weight',
	array(
		'label'     => __( 'Offcanvas Submenu Font Weight', 'hovercraft' ),
		'description' => __( 'Specify font weight to use for the Offcanvas Submenu? Note: Ensure your chosen font family supports the font weight that you choose.', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_offcanvas_submenu_font_weight',
		'type'      => 'select',
		'choices' => array(
		'700' => '700',
		'600' => '600',
		'400' => '400',
	)
		)
) );

// topbar text transform setting
$wp_customize->add_setting( 'hovercraft_topbar_text_transform', array(
	'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// topbar text transform control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_topbar_text_transform',
	array(
		'label'     => __( 'Topbar Text Transform', 'hovercraft' ),
		'description' => __( 'Specify text transform for Topbar area?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_topbar_text_transform',
		'type' => 'select',
		'choices' => array(
		'none' => 'Default (None)',
		'uppercase' => 'Uppercase',
		'lowercase' => 'Lowercase',
		'capitalize' => 'Capitalize',
	)
		)
) );

// topbar font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_topbar_desktop_font_size', array(
	'default'    => '14',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// topbar font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_topbar_desktop_font_size',
	array(
		'label'     => __( 'Topbar Font Size (Desktop)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the Topbar on desktop devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_topbar_desktop_font_size',
		'type' => 'text',
	)
) );

// topbar font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_topbar_mobile_font_size', array(
	'default'    => '14',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// topbar font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_topbar_mobile_font_size',
	array(
		'label'     => __( 'Topbar Font Size (Mobile)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the Topbar on mobile devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_topbar_mobile_font_size',
		'type' => 'text',
	)
) );

// topbar font weight setting
$wp_customize->add_setting( 'hovercraft_topbar_font_weight', array(
	'default'    => '400',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// topbar font weight control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_topbar_font_weight',
	array(
		'label'     => __( 'Topbar Font Weight', 'hovercraft' ),
		'description' => __( 'Specify font weight to use for the Topbar area? Note: Ensure your chosen font family supports the font weight that you choose.', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_topbar_font_weight',
		'type'      => 'select',
		'choices' => array(
		'700' => '700',
		'600' => '600',
		'400' => '400',
	)
		)
) );

// main menu font family setting
$wp_customize->add_setting( 'hovercraft_main_menu_font', array(
	'default'    => '',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// main menu font family control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_main_menu_font',
	array(
		'label'       => __( 'Main Menu Font Family', 'hovercraft' ),
		'description' => __( 'Which Google Fonts family should be used for the main menu links?', 'hovercraft' ),
		'section'     => 'hovercraft_fonts',
		'settings'    => 'hovercraft_main_menu_font',
		'type'        => 'select',
		'choices'     => $hovercraft_available_fonts,
	)
) );

// main menu text transform setting
$wp_customize->add_setting( 'hovercraft_main_menu_text_transform', array(
	'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// main menu text transform control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_main_menu_text_transform',
	array(
		'label'     => __( 'Main Menu Text Transform', 'hovercraft' ),
		'description' => __( 'Specify text transform for Main Menu list items?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_main_menu_text_transform',
		'type' => 'select',
		'choices' => array(
		'none' => 'Default (None)',
		'uppercase' => 'Uppercase',
		'lowercase' => 'Lowercase',
		'capitalize' => 'Capitalize',
	)
		)
) );

// main menu font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_main_menu_desktop_font_size', array(
	'default'    => '18',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// main menu font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_main_menu_desktop_font_size',
	array(
		'label'     => __( 'Main Menu Font Size (Desktop)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the main menu links on desktop devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_main_menu_desktop_font_size',
		'type' => 'text',
	)
) );

// main menu font weight setting
$wp_customize->add_setting( 'hovercraft_main_menu_font_weight', array(
	'default'    => '600',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// main menu font weight control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_main_menu_font_weight',
	array(
		'label'     => __( 'Main Menu Font Weight', 'hovercraft' ),
		'description' => __( 'Specify font weight to use for the main menu? Note: Ensure your chosen font family supports the font weight that you choose.', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_main_menu_font_weight',
		'type'      => 'select',
		'choices' => array(
		'700' => '700',
		'600' => '600',
		'400' => '400',
	)
		)
) );
