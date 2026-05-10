<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// link styling section
$wp_customize->add_section( 'hovercraft_link_styling', array(
	'title' => 'Link Styling',
	'priority' => 103,
) );

// default link decoration setting
$wp_customize->add_setting( 'hovercraft_default_link_decoration', array(
	'default' => 'underline',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// default link decoration control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_default_link_decoration',
	array(
		'label' => __( 'Default link decoration', 'hovercraft' ),
		'description' => __( 'What type of link decoration', 'hovercraft' ),
		'section' => 'hovercraft_link_styling',
		'settings' => 'hovercraft_default_link_decoration',
		'type' => 'select',
		'choices' => array(
		'underline' => 'Underline',
		'none' => 'None (no decoration)',
		),
	)
) );

// topbar link decoration setting
$wp_customize->add_setting( 'hovercraft_topbar_link_decoration', array(
	'default' => 'underline',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// topbar link decoration control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_topbar_link_decoration',
	array(
		'label' => __( 'Topbar link decoration', 'hovercraft' ),
		'description' => __( 'What type of link decoration', 'hovercraft' ),
		'section' => 'hovercraft_link_styling',
		'settings' => 'hovercraft_topbar_link_decoration',
		'type' => 'select',
		'choices' => array(
		'underline' => 'Underline',
		'none' => 'None (no decoration)',
		),
	)
) );

// posthero link decoration setting
$wp_customize->add_setting( 'hovercraft_posthero_link_decoration', array(
	'default' => 'underline',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// posthero link decoration control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_posthero_link_decoration',
	array(
		'label' => __( 'Posthero link decoration', 'hovercraft' ),
		'description' => __( 'What type of link decoration', 'hovercraft' ),
		'section' => 'hovercraft_link_styling',
		'settings' => 'hovercraft_posthero_link_decoration',
		'type' => 'select',
		'choices' => array(
		'underline' => 'Underline',
		'none' => 'None (no decoration)',
		),
	)
) );

// home premain top link decoration setting
$wp_customize->add_setting( 'hovercraft_premain_top_link_decoration', array(
	'default' => 'underline',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// home premain top link decoration control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_premain_top_link_decoration',
	array(
		'label' => __( 'Home Premain (Top) Link Decoration', 'hovercraft' ),
		'description' => __( 'What type of link decoration', 'hovercraft' ),
		'section' => 'hovercraft_link_styling',
		'settings' => 'hovercraft_premain_top_link_decoration',
		'type' => 'select',
		'choices' => array(
		'underline' => 'Underline',
		'none' => 'None (no decoration)',
		),
	)
) );

// home premain bottom link decoration setting
$wp_customize->add_setting( 'hovercraft_premain_bottom_link_decoration', array(
	'default' => 'underline',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// home premain bottom link decoration control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_premain_bottom_link_decoration',
	array(
		'label' => __( 'Home Premain (Bottom) Link Decoration', 'hovercraft' ),
		'description' => __( 'What type of link decoration', 'hovercraft' ),
		'section' => 'hovercraft_link_styling',
		'settings' => 'hovercraft_premain_bottom_link_decoration',
		'type' => 'select',
		'choices' => array(
		'underline' => 'Underline',
		'none' => 'None (no decoration)',
		),
	)
) );

// home postmain top link decoration setting
$wp_customize->add_setting( 'hovercraft_postmain_top_link_decoration', array(
	'default' => 'underline',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// home postmain top link decoration control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_postmain_top_link_decoration',
	array(
		'label' => __( 'Home Postmain (Top) Link Decoration', 'hovercraft' ),
		'description' => __( 'What type of link decoration', 'hovercraft' ),
		'section' => 'hovercraft_link_styling',
		'settings' => 'hovercraft_postmain_top_link_decoration',
		'type' => 'select',
		'choices' => array(
		'underline' => 'Underline',
		'none' => 'None (no decoration)',
		),
	)
) );

// home postmain bottom link decoration setting
$wp_customize->add_setting( 'hovercraft_postmain_bottom_link_decoration', array(
	'default' => 'underline',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// home postmain bottom link decoration control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_postmain_bottom_link_decoration',
	array(
		'label' => __( 'Home Postmain (Bottom) Link Decoration', 'hovercraft' ),
		'description' => __( 'What type of link decoration', 'hovercraft' ),
		'section' => 'hovercraft_link_styling',
		'settings' => 'hovercraft_postmain_bottom_link_decoration',
		'type' => 'select',
		'choices' => array(
		'underline' => 'Underline',
		'none' => 'None (no decoration)',
		),
	)
) );

// prefooter top link decoration setting
$wp_customize->add_setting( 'hovercraft_prefooter_top_link_decoration', array(
	'default' => 'underline',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// prefooter top link decoration control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_prefooter_top_link_decoration',
	array(
		'label' => __( 'Prefooter (top) link decoration', 'hovercraft' ),
		'description' => __( 'What type of link decoration', 'hovercraft' ),
		'section' => 'hovercraft_link_styling',
		'settings' => 'hovercraft_prefooter_top_link_decoration',
		'type' => 'select',
		'choices' => array(
		'underline' => 'Underline',
		'none' => 'None (no decoration)',
		),
	)
) );

// prefooter bottom link decoration setting
$wp_customize->add_setting( 'hovercraft_prefooter_bottom_link_decoration', array(
	'default' => 'underline',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// prefooter bottom link decoration control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_prefooter_bottom_link_decoration',
	array(
		'label' => __( 'Prefooter (bottom) link decoration', 'hovercraft' ),
		'description' => __( 'What type of link decoration', 'hovercraft' ),
		'section' => 'hovercraft_link_styling',
		'settings' => 'hovercraft_prefooter_bottom_link_decoration',
		'type' => 'select',
		'choices' => array(
		'underline' => 'Underline',
		'none' => 'None (no decoration)',
		),
	)
) );

// footer link decoration setting
$wp_customize->add_setting( 'hovercraft_footer_link_decoration', array(
	'default' => 'underline',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// footer link decoration control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_footer_link_decoration',
	array(
		'label' => __( 'Footer link decoration', 'hovercraft' ),
		'description' => __( 'What type of link decoration', 'hovercraft' ),
		'section' => 'hovercraft_link_styling',
		'settings' => 'hovercraft_footer_link_decoration',
		'type' => 'select',
		'choices' => array(
		'underline' => 'Underline',
		'none' => 'None (no decoration)',
		),
	)
) );

// footer callout link decoration setting
$wp_customize->add_setting( 'hovercraft_footer_callout_link_decoration', array(
	'default' => 'underline',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// footer callout link decoration control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_footer_callout_link_decoration',
	array(
		'label' => __( 'Footer Callout Link Decoration', 'hovercraft' ),
		'description' => __( 'Specify link decoration style for the Footer Callout widget area?', 'hovercraft' ),
		'section' => 'hovercraft_link_styling',
		'settings' => 'hovercraft_footer_callout_link_decoration',
		'type' => 'select',
		'choices' => array(
		'underline' => 'Underline',
		'none' => 'None (no decoration)',
		),
	)
) );

// copyright link decoration setting
$wp_customize->add_setting( 'hovercraft_copyright_link_decoration', array(
	'default' => 'underline',
	'sanitize_callback' => 'hovercraft_sanitize_select',
) );

// copyright link decoration control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_copyright_link_decoration',
	array(
		'label' => __( 'Copyright link decoration', 'hovercraft' ),
		'description' => __( 'What type of link decoration', 'hovercraft' ),
		'section' => 'hovercraft_link_styling',
		'settings' => 'hovercraft_copyright_link_decoration',
		'type' => 'select',
		'choices' => array(
		'underline' => 'Underline',
		'none' => 'None (no decoration)',
		),
	)
) );
