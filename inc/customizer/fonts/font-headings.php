<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// h1 font family setting
$wp_customize->add_setting( 'hovercraft_h1_font', array(
	'default'    => '',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// h1 font family control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_h1_font',
	array(
		'label'       => __( 'H1 Font Family', 'hovercraft' ),
		'description' => __( 'Which Google Fonts family should be used for all H1 titles site-wide?', 'hovercraft' ),
		'section'     => 'hovercraft_fonts',
		'settings'    => 'hovercraft_h1_font',
		'type'        => 'select',
		'choices'     => $hovercraft_available_fonts,
	)
) );

// h1 font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_h1_desktop_font_size', array(
	'default'    => '48',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h1 font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_h1_desktop_font_size',
	array(
		'label'     => __( 'H1 Font Size (Desktop)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the H1 titles on desktop devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_h1_desktop_font_size',
		'type' => 'text',
	)
) );

// h1 font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_h1_mobile_font_size', array(
	'default'    => '36',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h1 font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_h1_mobile_font_size',
	array(
		'label'     => __( 'H1 Font Size (Mobile)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the H1 titles on mobile devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_h1_mobile_font_size',
		'type' => 'text',
	)
) );

// h1 font weight setting
$wp_customize->add_setting( 'hovercraft_h1_font_weight', array(
	'default'    => '700',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h1 font weight control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_h1_font_weight',
	array(
		'label'     => __( 'H1 Font Weight', 'hovercraft' ),
		'description' => __( 'Specify font weight to use for the H1 titles? Note: Ensure your chosen font family supports the font weight that you choose.', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_h1_font_weight',
		'type'      => 'select',
		'choices' => array(
		'700' => '700',
		'600' => '600',
		'400' => '400',
	)
		)
) );

// h1 divider display setting
$wp_customize->add_setting( 'hovercraft_h1_divider_display', array(
	'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// h1 divider display control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_h1_divider_display',
	array(
		'label'     => __( 'H1 Divider Display', 'hovercraft' ),
		'description' => __( 'Choose if you want to display a divider (line) below the H1 elements?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_h1_divider_display',
		'type'      => 'select',
		'choices' => array(
		'none' => 'None (Hidden)',
		'everywhere_possible' => 'Everywhere Possible',
		'everywhere_except_heros' => 'Everywhere Except Heros',
	)
		)
) );

// h2 font family setting
$wp_customize->add_setting( 'hovercraft_h2_font', array(
	'default'    => '',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// h2 font family control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_h2_font',
	array(
		'label'       => __( 'H2 Font Family', 'hovercraft' ),
		'description' => __( 'Which Google Fonts family should be used for all h2 titles site-wide?', 'hovercraft' ),
		'section'     => 'hovercraft_fonts',
		'settings'    => 'hovercraft_h2_font',
		'type'        => 'select',
		'choices'     => $hovercraft_available_fonts,
	)
) );

// h2 font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_h2_desktop_font_size', array(
	'default'    => '36',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h2 font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_h2_desktop_font_size',
	array(
		'label'     => __( 'H2 Font Size (Desktop)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the h2 titles on desktop devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_h2_desktop_font_size',
		'type' => 'text',
	)
) );

// h2 font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_h2_mobile_font_size', array(
	'default'    => '30',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h2 font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_h2_mobile_font_size',
	array(
		'label'     => __( 'H2 Font Size (Mobile)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the h2 titles on mobile devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_h2_mobile_font_size',
		'type' => 'text',
	)
) );

// h2 font weight setting
$wp_customize->add_setting( 'hovercraft_h2_font_weight', array(
	'default'    => '700',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h2 font weight control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_h2_font_weight',
	array(
		'label'     => __( 'H2 Font Weight', 'hovercraft' ),
		'description' => __( 'Specify font weight to use for the h2 titles? Note: Ensure your chosen font family supports the font weight that you choose.', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_h2_font_weight',
		'type'      => 'select',
		'choices' => array(
		'700' => '700',
		'600' => '600',
		'400' => '400',
	)
		)
) );

// h2 divider display setting
$wp_customize->add_setting( 'hovercraft_h2_divider_display', array(
	'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// h2 divider display control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_h2_divider_display',
	array(
		'label'     => __( 'H2 Divider Display', 'hovercraft' ),
		'description' => __( 'Choose if you want to display a divider (line) below the H2 elements?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_h2_divider_display',
		'type'      => 'select',
		'choices' => array(
		'none' => 'None (Hidden)',
		'everywhere_possible' => 'Everywhere Possible',
	)
		)
) );

// h3 font family setting
$wp_customize->add_setting( 'hovercraft_h3_font', array(
	'default'    => '',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// h3 font family control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_h3_font',
	array(
		'label'       => __( 'H3 Font Family', 'hovercraft' ),
		'description' => __( 'Which Google Fonts family should be used for all h3 titles site-wide?', 'hovercraft' ),
		'section'     => 'hovercraft_fonts',
		'settings'    => 'hovercraft_h3_font',
		'type'        => 'select',
		'choices'     => $hovercraft_available_fonts,
	)
) );

// h3 font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_h3_desktop_font_size', array(
	'default'    => '24',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h3 font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_h3_desktop_font_size',
	array(
		'label'     => __( 'H3 Font Size (Desktop)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the h3 titles on desktop devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_h3_desktop_font_size',
		'type' => 'text',
	)
) );

// h3 font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_h3_mobile_font_size', array(
	'default'    => '24',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h3 font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_h3_mobile_font_size',
	array(
		'label'     => __( 'H3 Font Size (Mobile)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the h3 titles on mobile devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_h3_mobile_font_size',
		'type' => 'text',
	)
) );

// h3 font weight setting
$wp_customize->add_setting( 'hovercraft_h3_font_weight', array(
	'default'    => '700',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h3 font weight control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_h3_font_weight',
	array(
		'label'     => __( 'H3 Font Weight', 'hovercraft' ),
		'description' => __( 'Specify font weight to use for the h3 titles? Note: Ensure your chosen font family supports the font weight that you choose.', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_h3_font_weight',
		'type'      => 'select',
		'choices' => array(
		'700' => '700',
		'600' => '600',
		'400' => '400',
	)
		)
) );

// h4 font family setting
$wp_customize->add_setting( 'hovercraft_h4_font', array(
	'default'    => '',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// h4 font family control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_h4_font',
	array(
		'label'       => __( 'H4 Font Family', 'hovercraft' ),
		'description' => __( 'Which Google Fonts family should be used for all h4 titles site-wide?', 'hovercraft' ),
		'section'     => 'hovercraft_fonts',
		'settings'    => 'hovercraft_h4_font',
		'type'        => 'select',
		'choices'     => $hovercraft_available_fonts,
	)
) );

// h4 font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_h4_desktop_font_size', array(
	'default'    => '20',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h4 font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_h4_desktop_font_size',
	array(
		'label'     => __( 'H4 Font Size (Desktop)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the h4 titles on desktop devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_h4_desktop_font_size',
		'type' => 'text',
	)
) );

// h4 font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_h4_mobile_font_size', array(
	'default'    => '20',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h4 font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_h4_mobile_font_size',
	array(
		'label'     => __( 'H4 Font Size (Mobile)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the h4 titles on mobile devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_h4_mobile_font_size',
		'type' => 'text',
	)
) );

// h4 font weight setting
$wp_customize->add_setting( 'hovercraft_h4_font_weight', array(
	'default'    => '700',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h4 font weight control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_h4_font_weight',
	array(
		'label'     => __( 'H4 Font Weight', 'hovercraft' ),
		'description' => __( 'Specify font weight to use for the h4 titles? Note: Ensure your chosen font family supports the font weight that you choose.', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_h4_font_weight',
		'type'      => 'select',
		'choices' => array(
		'700' => '700',
		'600' => '600',
		'400' => '400',
	)
		)
) );

// h5 font family setting
$wp_customize->add_setting( 'hovercraft_h5_font', array(
	'default'    => '',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// h5 font family control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_h5_font',
	array(
		'label'       => __( 'H5 Font Family', 'hovercraft' ),
		'description' => __( 'Which Google Fonts family should be used for all h5 titles site-wide?', 'hovercraft' ),
		'section'     => 'hovercraft_fonts',
		'settings'    => 'hovercraft_h5_font',
		'type'        => 'select',
		'choices'     => $hovercraft_available_fonts,
	)
) );

// h5 font size (desktop) setting
$wp_customize->add_setting( 'hovercraft_h5_desktop_font_size', array(
	'default'    => '18',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h5 font size (desktop) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_h5_desktop_font_size',
	array(
		'label'     => __( 'H5 Font Size (Desktop)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the h5 titles on desktop devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_h5_desktop_font_size',
		'type' => 'text',
	)
) );

// h5 font size (mobile) setting
$wp_customize->add_setting( 'hovercraft_h5_mobile_font_size', array(
	'default'    => '18',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h5 font size (mobile) control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_h5_mobile_font_size',
	array(
		'label'     => __( 'H5 Font Size (Mobile)', 'hovercraft' ),
		'description' => __( 'Specify font size to use, in pixels, for the h5 titles on mobile devices?', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_h5_mobile_font_size',
		'type' => 'text',
	)
) );

// h5 font weight setting
$wp_customize->add_setting( 'hovercraft_h5_font_weight', array(
	'default'    => '700',
	'sanitize_callback' => 'hovercraft_sanitize_float',
	)
);

// h5 font weight control
$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'hovercraft_h5_font_weight',
	array(
		'label'     => __( 'H5 Font Weight', 'hovercraft' ),
		'description' => __( 'Specify font weight to use for the h5 titles? Note: Ensure your chosen font family supports the font weight that you choose.', 'hovercraft' ),
		'section'   => 'hovercraft_fonts',
		'settings'  => 'hovercraft_h5_font_weight',
		'type'      => 'select',
		'choices' => array(
		'700' => '700',
		'600' => '600',
		'400' => '400',
	)
		)
) );
