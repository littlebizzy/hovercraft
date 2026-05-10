<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// divider above posthero colors setting
$wp_customize->add_setting( 'hovercraft_divider_posthero_colors', array(
	'sanitize_callback' => '__return_null',
) );

// divider above posthero colors control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_divider_posthero_colors',
	array(
		'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
		'type' => 'hidden',
		'section' => 'colors',
		'settings' => 'hovercraft_divider_posthero_colors',
	)
) );

// posthero background color setting
$wp_customize->add_setting( 'hovercraft_posthero_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// posthero background color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_posthero_background_color',
	array(
		'label' => 'Posthero Background Color',
		'description' => 'This is a description',
		'section' => 'colors',
		'settings' => 'hovercraft_posthero_background_color',
	)
) );

// posthero text color setting
$wp_customize->add_setting( 'hovercraft_posthero_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// posthero text color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_posthero_text_color',
	array(
		'label' => 'Posthero Text Color',
		'description' => 'This is a description',
		'section' => 'colors',
		'settings' => 'hovercraft_posthero_text_color',
	)
) );

// posthero link color setting
$wp_customize->add_setting( 'hovercraft_posthero_link_color', array(
	'default' => '#5C6BC0',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// posthero link color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_posthero_link_color',
	array(
		'label' => 'Posthero Link Color',
		'description' => 'This is a description',
		'section' => 'colors',
		'settings' => 'hovercraft_posthero_link_color',
	)
) );

// divider above after byline colors setting
$wp_customize->add_setting( 'hovercraft_divider_after_byline_colors', array(
	'sanitize_callback' => '__return_null',
) );

// divider above after byline colors control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_divider_after_byline_colors',
	array(
		'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
		'type' => 'hidden',
		'section' => 'colors',
		'settings' => 'hovercraft_divider_after_byline_colors',
	)
) );

// after byline background color setting
$wp_customize->add_setting( 'hovercraft_after_byline_background_color', array(
	'default' => '#fff8e1',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// after byline background color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_after_byline_background_color',
	array(
		'label' => 'After Byline Background Color',
		'description' => 'Applies to the After Byline widget element.',
		'section' => 'colors',
		'settings' => 'hovercraft_after_byline_background_color',
	)
) );

// after byline text color setting
$wp_customize->add_setting( 'hovercraft_after_byline_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// after byline text color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_after_byline_text_color',
	array(
		'label' => 'After Byline Text Color',
		'description' => 'Specify the text color in the After Byline widget?',
		'section' => 'colors',
		'settings' => 'hovercraft_after_byline_text_color',
	)
) );

// after byline link color setting
$wp_customize->add_setting( 'hovercraft_after_byline_link_color', array(
	'default' => '#5C6BC0',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// after byline link color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_after_byline_link_color',
	array(
		'label' => 'After Byline Link Color',
		'description' => 'Specify the link color in the After Byline widget?',
		'section' => 'colors',
		'settings' => 'hovercraft_after_byline_link_color',
	)
) );

// divider above main background colors setting
$wp_customize->add_setting( 'hovercraft_divider_main_background_colors', array(
	'sanitize_callback' => '__return_null',
) );

// divider above main background colors control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_divider_main_background_colors',
	array(
		'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
		'type' => 'hidden',
		'section' => 'colors',
		'settings' => 'hovercraft_divider_main_background_colors',
	)
) );

// main background color setting
$wp_customize->add_setting( 'hovercraft_main_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// main background color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_main_background_color',
	array(
		'label' => 'Main Background Color',
		'description' => 'This is a description',
		'section' => 'colors',
		'settings' => 'hovercraft_main_background_color',
	)
) );

// main background color (homepage) setting
$wp_customize->add_setting( 'hovercraft_main_background_color_homepage', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// main background color (homepage) control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_main_background_color_homepage',
	array(
		'label' => 'Main Background Color (Homepage)',
		'description' => 'This is a description',
		'section' => 'colors',
		'settings' => 'hovercraft_main_background_color_homepage',
	)
) );

// divider above content background colors setting
$wp_customize->add_setting( 'hovercraft_divider_content_background_colors', array(
	'sanitize_callback' => '__return_null',
) );

// divider above content background colors control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_divider_content_background_colors',
	array(
		'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
		'type' => 'hidden',
		'section' => 'colors',
		'settings' => 'hovercraft_divider_content_background_colors',
	)
) );

// content background color setting
$wp_customize->add_setting( 'hovercraft_content_background_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// content background color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_content_background_color',
	array(
		'label' => 'Content Background Color',
		'description' => 'This is a description',
		'section' => 'colors',
		'settings' => 'hovercraft_content_background_color',
	)
) );

// divider above sidebar callout colors setting
$wp_customize->add_setting( 'hovercraft_divider_sidebar_callout_colors', array(
	'sanitize_callback' => '__return_null',
) );

// divider above sidebar callout colors control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_divider_sidebar_callout_colors',
	array(
		'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
		'type' => 'hidden',
		'section' => 'colors',
		'settings' => 'hovercraft_divider_sidebar_callout_colors',
	)
) );

// sidebar callout background color setting
$wp_customize->add_setting( 'hovercraft_sidebar_callout_background_color', array(
	'default' => '#283593',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar callout background color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_sidebar_callout_background_color',
	array(
		'label' => 'Sidebar Callout Background Color',
		'description' => 'Specify background color of the Sidebar Callout widget? Note: Choose a bold tone for best results, and avoid white or shades of gray, which may result in poor visibility or CSS conflicts.',
		'section' => 'colors',
		'settings' => 'hovercraft_sidebar_callout_background_color',
	)
) );

// sidebar callout border color setting
$wp_customize->add_setting( 'hovercraft_sidebar_callout_border_color', array(
	'default' => '#283593',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar callout border color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_sidebar_callout_border_color',
	array(
		'label' => 'Sidebar Callout Border Color',
		'description' => 'Specify border color of sidebar callout widget',
		'section' => 'colors',
		'settings' => 'hovercraft_sidebar_callout_border_color',
	)
) );

// sidebar callout text color setting
$wp_customize->add_setting( 'hovercraft_sidebar_callout_text_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar callout text color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_sidebar_callout_text_color',
	array(
		'label' => 'Sidebar Callout Text Color',
		'description' => 'Specify text color of the Sidebar Callout widget?',
		'section' => 'colors',
		'settings' => 'hovercraft_sidebar_callout_text_color',
	)
) );

// sidebar callout CTA background color setting
$wp_customize->add_setting( 'hovercraft_sidebar_callout_cta_background_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar callout CTA background color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_sidebar_callout_cta_background_color',
	array(
		'label' => 'Sidebar Callout CTA Background Color',
		'description' => 'Specify background color of the Sidebar Callout CTA?',
		'section' => 'colors',
		'settings' => 'hovercraft_sidebar_callout_cta_background_color',
	)
) );

// sidebar callout CTA border color setting
$wp_customize->add_setting( 'hovercraft_sidebar_callout_cta_border_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar callout CTA border color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_sidebar_callout_cta_border_color',
	array(
		'label' => 'Sidebar Callout CTA Border Color',
		'description' => 'Specify border color of the Sidebar Callout CTA?',
		'section' => 'colors',
		'settings' => 'hovercraft_sidebar_callout_cta_border_color',
	)
) );

// sidebar callout CTA link color setting
$wp_customize->add_setting( 'hovercraft_sidebar_callout_link_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar callout CTA link color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_sidebar_callout_link_color',
	array(
		'label' => 'Sidebar Callout CTA Link Color',
		'description' => 'Specify link color of the Sidebar Callout widget?',
		'section' => 'colors',
		'settings' => 'hovercraft_sidebar_callout_link_color',
	)
) );

// sidebar callout (hover) background color setting
$wp_customize->add_setting( 'hovercraft_sidebar_callout_hover_background_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar callout (hover) background color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_sidebar_callout_hover_background_color',
	array(
		'label' => 'Sidebar Callout CTA Background Hover Color',
		'description' => 'Specify the hover background color for the CTA button in SideBar Callout widget?',
		'section' => 'colors',
		'settings' => 'hovercraft_sidebar_callout_hover_background_color',
	)
) );

// sidebar callout (hover) link color setting
$wp_customize->add_setting( 'hovercraft_sidebar_callout_hover_link_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar callout (hover) link color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_sidebar_callout_hover_link_color',
	array(
		'label' => 'Sidebar Callout CTA Link Hover Color',
		'description' => 'Specify the hover link color for the CTA button in SideBar Callout widget?',
		'section' => 'colors',
		'settings' => 'hovercraft_sidebar_callout_hover_link_color',
	)
) );

// divider above sidebar widgets colors setting
$wp_customize->add_setting( 'hovercraft_divider_sidebar_widgets_colors', array(
	'sanitize_callback' => '__return_null',
) );

// divider above sidebar widgets colors control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_divider_sidebar_widgets_colors',
	array(
		'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
		'type' => 'hidden',
		'section' => 'colors',
		'settings' => 'hovercraft_divider_sidebar_widgets_colors',
	)
) );

// sidebar left border color setting
$wp_customize->add_setting( 'hovercraft_sidebar_left_border_color', array(
	'default' => '#e0e0e0',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar left border color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_sidebar_left_border_color',
	array(
		'label' => 'Sidebar Left Border Color',
		'description' => 'Specify the color of the left border of the sidebar.',
		'section' => 'colors',
		'settings' => 'hovercraft_sidebar_left_border_color',
) ) );


// sidebar widgets background color setting
$wp_customize->add_setting( 'hovercraft_sidebar_widget_background_color', array(
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar widgets background color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_sidebar_widget_background_color',
	array(
		'label' => 'Sidebar Widgets Background Color',
		'description' => 'Specify background color of default sidebar widgets?',
		'section' => 'colors',
		'settings' => 'hovercraft_sidebar_widget_background_color',
	)
) );

// sidebar widgets border color setting
$wp_customize->add_setting( 'hovercraft_sidebar_widget_border_color', array(
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar widgets border color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_sidebar_widget_border_color',
	array(
		'label' => 'Sidebar Widgets Border Color',
		'description' => 'Specify border color of default sidebar widgets?',
		'section' => 'colors',
		'settings' => 'hovercraft_sidebar_widget_border_color',
	)
) );

// sidebar widgets text color setting
$wp_customize->add_setting( 'hovercraft_sidebar_widget_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar widgets text color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_sidebar_widget_text_color',
	array(
		'label' => 'Sidebar Widgets Text Color',
		'description' => 'Specify text color of default sidebar widgets?',
		'section' => 'colors',
		'settings' => 'hovercraft_sidebar_widget_text_color',
	)
) );

// sidebar widgets link color setting
$wp_customize->add_setting( 'hovercraft_sidebar_widget_link_color', array(
	'default' => '#5C6BC0',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar widgets link color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_sidebar_widget_link_color',
	array(
		'label' => 'Sidebar Widgets Link Color',
		'description' => 'Specify link color of default sidebar widgets?',
		'section' => 'colors',
		'settings' => 'hovercraft_sidebar_widget_link_color',
	)
) );

// sidebar widget title text color setting
$wp_customize->add_setting( 'hovercraft_sidebar_widget_title_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// sidebar widget title text color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_sidebar_widget_title_text_color',
	array(
		'label' => 'Sidebar Widget Title Text Color',
		'description' => 'This is a description',
		'section' => 'colors',
		'settings' => 'hovercraft_sidebar_widget_title_text_color',
	)
) );

// divider above tile colors setting
$wp_customize->add_setting( 'hovercraft_divider_tile_colors', array(
	'sanitize_callback' => '__return_null',
) );

// divider above tile colors control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_divider_tile_colors',
	array(
		'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
		'type' => 'hidden',
		'section' => 'colors',
		'settings' => 'hovercraft_divider_tile_colors',
	)
) );

// tile background color setting
$wp_customize->add_setting( 'hovercraft_tile_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// tile background color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_tile_background_color',
	array(
		'label' => 'Tile Background Color',
		'description' => 'This is a description',
		'section' => 'colors',
		'settings' => 'hovercraft_tile_background_color',
	)
) );

// tile border color setting
$wp_customize->add_setting( 'hovercraft_tile_border_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// tile border color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_tile_border_color',
	array(
		'label' => 'Tile Border Color',
		'description' => 'This is a description',
		'section' => 'colors',
		'settings' => 'hovercraft_tile_border_color',
	)
) );

// divider above column colors setting
$wp_customize->add_setting( 'hovercraft_divider_column_colors', array(
	'sanitize_callback' => '__return_null',
) );

// divider above column colors control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_divider_column_colors',
	array(
		'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
		'type' => 'hidden',
		'section' => 'colors',
		'settings' => 'hovercraft_divider_column_colors',
	)
) );

// column background color setting
$wp_customize->add_setting( 'hovercraft_column_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// column background color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_column_background_color',
	array(
		'label' => 'Column Background Color',
		'description' => 'This is a description',
		'section' => 'colors',
		'settings' => 'hovercraft_column_background_color',
	)
) );

// column border color setting
$wp_customize->add_setting( 'hovercraft_column_border_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// column border color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_column_border_color',
	array(
		'label' => 'Column Border Color',
		'description' => 'This is a description',
		'section' => 'colors',
		'settings' => 'hovercraft_column_border_color',
	)
) );

// divider above postmain top colors setting
$wp_customize->add_setting( 'hovercraft_divider_postmain_top_colors', array(
	'sanitize_callback' => '__return_null',
) );

// divider above postmain top colors control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_divider_postmain_top_colors',
	array(
		'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
		'type' => 'hidden',
		'section' => 'colors',
		'settings' => 'hovercraft_divider_postmain_top_colors',
	)
) );

// home postmain (top) background color setting
$wp_customize->add_setting( 'hovercraft_postmain_top_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// home postmain (top) background color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_postmain_top_background_color',
	array(
		'label' => 'Home Postmain (Top) Background Color',
		'description' => 'This is a description',
		'section' => 'colors',
		'settings' => 'hovercraft_postmain_top_background_color',
	)
) );

// home postmain (top) text color setting
$wp_customize->add_setting( 'hovercraft_postmain_top_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// home postmain (top) text color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_postmain_top_text_color',
	array(
		'label' => 'Home Postmain (Top) Text Color',
		'description' => 'This is a description',
		'section' => 'colors',
		'settings' => 'hovercraft_postmain_top_text_color',
	)
) );

// home postmain (top) link color setting
$wp_customize->add_setting( 'hovercraft_postmain_top_link_color', array(
	'default' => '#5C6BC0',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// home postmain (top) link color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_postmain_top_link_color',
	array(
		'label' => 'Home Postmain (Top) Link Color',
		'description' => 'This is a description',
		'section' => 'colors',
		'settings' => 'hovercraft_postmain_top_link_color',
	)
) );

// divider above postmain bottom colors setting
$wp_customize->add_setting( 'hovercraft_divider_postmain_bottom_colors', array(
	'sanitize_callback' => '__return_null',
) );

// divider above postmain bottom colors control
$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'hovercraft_divider_postmain_bottom_colors',
	array(
		'description' => '<hr style="margin: 16px 0; border: 0; border-top: 2px solid #ddd;">',
		'type' => 'hidden',
		'section' => 'colors',
		'settings' => 'hovercraft_divider_postmain_bottom_colors',
	)
) );

// home postmain (bottom) background color setting
$wp_customize->add_setting( 'hovercraft_postmain_bottom_background_color', array(
	'default' => '#eceff1',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// home postmain (bottom) background color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_postmain_bottom_background_color',
	array(
		'label' => 'Home Postmain (Bottom) Background Color',
		'description' => 'This is a description',
		'section' => 'colors',
		'settings' => 'hovercraft_postmain_bottom_background_color',
	)
) );

// home postmain (bottom) text color setting
$wp_customize->add_setting( 'hovercraft_postmain_bottom_text_color', array(
	'default' => '#263238',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// home postmain (bottom) text color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_postmain_bottom_text_color',
	array(
		'label' => 'Home Postmain (Bottom) Text Color',
		'description' => 'This is a description',
		'section' => 'colors',
		'settings' => 'hovercraft_postmain_bottom_text_color',
	)
) );

// home postmain (bottom) link color setting
$wp_customize->add_setting( 'hovercraft_postmain_bottom_link_color', array(
	'default' => '#5C6BC0',
	'sanitize_callback' => 'sanitize_hex_color',
) );

// home postmain (bottom) link color control
$wp_customize->add_control( new WP_Customize_Color_Control(
	$wp_customize,
	'hovercraft_postmain_bottom_link_color',
	array(
		'label' => 'Home Postmain (Bottom) Link Color',
		'description' => 'This is a description',
		'section' => 'colors',
		'settings' => 'hovercraft_postmain_bottom_link_color',
	)
) );
