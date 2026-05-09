<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// divider above prefooter top colors setting
$wp_customize->add_setting( 'hovercraft_divider_prefooter_top_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above prefooter top colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_prefooter_top_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_prefooter_top_colors',
)));

// prefooter (top) background color setting
$wp_customize->add_setting( 'hovercraft_prefooter_top_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// prefooter (top) background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_prefooter_top_background_color', array(
	'label' => 'Prefooter (Top) Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_prefooter_top_background_color'
	)
) );
	
// prefooter (top) text color setting
$wp_customize->add_setting( 'hovercraft_prefooter_top_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// prefooter (top) text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_prefooter_top_text_color', array(
	'label' => 'Prefooter (Top) Text Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_prefooter_top_text_color'
	)
) );
	
// prefooter (top) link color setting
$wp_customize->add_setting( 'hovercraft_prefooter_top_link_color', array(
	'default' => '#5C6BC0',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// prefooter (top) link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_prefooter_top_link_color', array(
	'label' => 'Prefooter (Top) Link Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_prefooter_top_link_color'
	)
) );

// divider above prefooter bottom colors setting
$wp_customize->add_setting( 'hovercraft_divider_prefooter_bottom_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above prefooter bottom colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_prefooter_bottom_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_prefooter_bottom_colors',
)));

// prefooter (bottom) background color setting
$wp_customize->add_setting( 'hovercraft_prefooter_bottom_background_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// prefooter (bottom) background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_prefooter_bottom_background_color', array(
	'label' => 'Prefooter (Bottom) Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_prefooter_bottom_background_color'
	)
) );
	
// prefooter (bottom) text color setting
$wp_customize->add_setting( 'hovercraft_prefooter_bottom_text_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// prefooter (bottom) text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_prefooter_bottom_text_color', array(
	'label' => 'Prefooter (Bottom) Text Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_prefooter_bottom_text_color'
	)
) );
	
// prefooter (bottom) link color setting
$wp_customize->add_setting( 'hovercraft_prefooter_bottom_link_color', array(
	'default' => '#5C6BC0',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// prefooter (bottom) link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_prefooter_bottom_link_color', array(
	'label' => 'Prefooter (Bottom) Link Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_prefooter_bottom_link_color'
	)
) );

// divider above footer colors setting
$wp_customize->add_setting( 'hovercraft_divider_footer_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above footer colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_footer_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_footer_colors',
)));

// footer background color setting
$wp_customize->add_setting( 'hovercraft_footer_background_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// footer background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_footer_background_color', array(
	'label' => 'Footer Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_footer_background_color'
	)
) );
	
// footer text color setting
$wp_customize->add_setting( 'hovercraft_footer_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// footer text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_footer_text_color', array(
	'label' => 'Footer Text Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_footer_text_color'
	)
) );
	
// footer link color setting
$wp_customize->add_setting( 'hovercraft_footer_link_color', array(
	'default' => '#5C6BC0',
	'sanitize_callback' => 'sanitize_hex_color',
) );
 
// footer link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_footer_link_color', array(
	'label' => 'Footer Link Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_footer_link_color'
	)
) );

// footer callout background color setting
$wp_customize->add_setting( 'hovercraft_footer_callout_background_color', array(
	'default' => '#283593',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// footer callout background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_footer_callout_background_color', array(
	'label' => 'Footer Callout Background Color',
	'description' => 'Specify background color of the Footer Callout widget? Note: Choose a bold tone for best results, and avoid white or shades of gray, which may result in poor visibility or CSS conflicts.',
	'section' => 'colors',
	'settings' => 'hovercraft_footer_callout_background_color'
	)
) );

// footer callout border color setting
$wp_customize->add_setting( 'hovercraft_footer_callout_border_color', array(
	'default' => '#283593',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// footer callout border color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_footer_callout_border_color', array(
	'label' => 'Footer Callout Border Color',
	'description' => 'Specify border color of the Footer Callout widget?',
	'section' => 'colors',
	'settings' => 'hovercraft_footer_callout_border_color'
	)
) );

// footer callout text color setting
$wp_customize->add_setting( 'hovercraft_footer_callout_text_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// footer callout text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_footer_callout_text_color', array(
	'label' => 'Footer Callout Text Color',
	'description' => 'Specify text color of the Footer Callout widget?',
	'section' => 'colors',
	'settings' => 'hovercraft_footer_callout_text_color'
	)
) );

// footer callout link color setting
$wp_customize->add_setting( 'hovercraft_footer_callout_link_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// footer callout link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_footer_callout_link_color', array(
	'label' => 'Footer Callout Link Color',
	'description' => 'Specify link color of the Footer Callout widget?',
	'section' => 'colors',
	'settings' => 'hovercraft_footer_callout_link_color'
	)
) );

// divider above copyright colors setting
$wp_customize->add_setting( 'hovercraft_divider_copyright_colors', array(
	'sanitize_callback' => '__return_null',
));

// divider above copyright colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_copyright_colors', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_copyright_colors',
)));

// copyright background color setting
$wp_customize->add_setting( 'hovercraft_copyright_background_color', array(
        'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
		));
 
// copyright background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_copyright_background_color', array(
	'label' => 'Copyright Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_copyright_background_color'
    )));

// copyright text color setting
$wp_customize->add_setting( 'hovercraft_copyright_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// copyright text color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_copyright_text_color', array(
	'label' => 'Copyright Text Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_copyright_text_color'
	)
) );
	
// copyright link color setting
$wp_customize->add_setting( 'hovercraft_copyright_link_color', array(
	'default' => '#5C6BC0',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// copyright link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_copyright_link_color', array(
	'label' => 'Copyright Link Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_copyright_link_color'
	)
) );

// divider above back to top colors setting
$wp_customize->add_setting( 'hovercraft_divider_back_to_top', array(
	'sanitize_callback' => '__return_null',
));

// divider above back to top colors control
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hovercraft_divider_back_to_top', array(
	'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
	'type' => 'hidden',
	'section' => 'colors',
	'settings' => 'hovercraft_divider_back_to_top',
)));

// back to top background color setting
$wp_customize->add_setting( 'hovercraft_back_to_top_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// back to top background color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_back_to_top_background_color', array(
	'label' => 'Back To Top Background Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_back_to_top_background_color'
	)
) );

// back to top background hover color setting
$wp_customize->add_setting( 'hovercraft_back_to_top_background_hover_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// back to top background hover color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_back_to_top_background_hover_color', array(
	'label' => 'Back To Top Background Hover Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_back_to_top_background_hover_color'
	)
) );
	
// back to top link color setting
$wp_customize->add_setting( 'hovercraft_back_to_top_link_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// back to top link color control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hovercraft_back_to_top_link_color', array(
	'label' => 'Back To Top Link Color',
	'description' => 'This is a description',
	'section' => 'colors',
	'settings' => 'hovercraft_back_to_top_link_color'
	)
) );

