<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// icons section
$wp_customize->add_section( 'hovercraft_icons', array(
    'title'      => 'Icons',
    'priority'   => 102,
) );

// layout icons setting
$wp_customize->add_setting( 'hovercraft_layout_icons', array(
    'default'    => 'material_icons_classic',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// layout icons control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_layout_icons',
        array(
            'label'     => __( 'Default Icon Elements', 'hovercraft' ),
			'description' => __( 'Which icon elements should be used for critical site layout and usability features?', 'hovercraft' ),
            'section'   => 'hovercraft_icons',
            'settings'  => 'hovercraft_layout_icons',
            'type'      => 'select',
			'choices' => array(
        		'none' => 'None (Disabled)',
        		'material_icons_classic' => 'Material Icons (Classic)',
				'font_awesome_version_6' => 'Font Awesome (Version 6)'
    			)
        )
) );

// material icons setting
$wp_customize->add_setting( 'hovercraft_material_icons', array(
    'default'    => 'classic_only',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// material icons control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_material_icons',
        array(
            'label'     => __( 'Material Icons Library', 'hovercraft' ),
			'description' => __( 'Which variations of the Material Icons should be loaded? Note: Disabling this might break your search, navigation, and shopping layout.', 'hovercraft' ),
            'section'   => 'hovercraft_icons',
            'settings'  => 'hovercraft_material_icons',
            'type'      => 'select',
			'choices' => array(
        		'none' => 'None (Disabled)',
        		'classic_only' => 'Classic Only',
				'classic_and_outlined' => 'Classic &amp; Outlined',
        		'classic_and_outlined_and_two_toned' => 'Classic &amp; Outlined &amp; Two-Toned'
    			)
        )
) );

// font awesome setting
$wp_customize->add_setting( 'hovercraft_font_awesome', array(
    'default'    => 'none',
	'sanitize_callback' => 'hovercraft_sanitize_select',
	)
);

// font awesome control
$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'hovercraft_font_awesome',
        array(
            'label'     => __( 'Font Awesome Library', 'hovercraft' ),
			'description' => __( 'Which variations of Font Awesome icons should be loaded? Note: Disabling this might break your search, navigation, and shopping layout.', 'hovercraft' ),
            'section'   => 'hovercraft_icons',
            'settings'  => 'hovercraft_font_awesome',
            'type'      => 'select',
			'choices' => array(
        		'none' => 'None (Disabled)',
        		'version_6' => 'Version 6',
				'version_5' => 'Version 5',
        		'version_4' => 'Version 4'
    			)
        )
) );

