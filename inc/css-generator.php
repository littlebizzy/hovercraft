<?php

// css from customizer
function hovercraft_generate_css(){

	/* google fonts */
	$first_font_family = get_theme_mod( 'hovercraft_first_font_family', 'noto_sans' );
	$second_font_family = get_theme_mod( 'hovercraft_second_font_family', '' );
	$third_font_family = get_theme_mod( 'hovercraft_third_font_family', '' );
	$multilingual_font_family = get_theme_mod( 'hovercraft_multilingual_font_family', '' );
	
	/* default fonts */
    $default_font_family = get_theme_mod( 'hovercraft_default_font', '' );
    $default_desktop_font_size = get_theme_mod( 'hovercraft_default_desktop_font_size', '16' );
    $default_mobile_font_size = get_theme_mod( 'hovercraft_default_mobile_font_size', '16' );

	/* fonts (topbar) */
	$topbar_text_transform = get_theme_mod( 'hovercraft_topbar_text_transform', 'none' );
	$topbar_mobile_font_size = get_theme_mod( 'hovercraft_topbar_mobile_font_size', '14' );
	$topbar_desktop_font_size = get_theme_mod( 'hovercraft_topbar_desktop_font_size', '14' );
	$topbar_font_weight = get_theme_mod( 'hovercraft_topbar_font_weight', '400' );

	/* fonts (site title) */
	$site_name_font_family = get_theme_mod( 'hovercraft_site_name_font', 'noto_sans' );
	$site_name_text_transform = get_theme_mod( 'hovercraft_site_name_text_transform', 'none' );
	$site_name_mobile_font_size = get_theme_mod( 'hovercraft_site_name_mobile_font_size', '24' );
	$site_name_desktop_font_size = get_theme_mod( 'hovercraft_site_name_desktop_font_size', '36' );
	$site_name_font_weight = get_theme_mod( 'hovercraft_site_name_font_weight', '700' );

	/* fonts (main menu) */
	$main_menu_font_family = get_theme_mod( 'hovercraft_main_menu_font', 'noto_sans' );
	$main_menu_text_transform = get_theme_mod( 'hovercraft_main_menu_text_transform', 'none' );
	$main_menu_desktop_font_size = get_theme_mod( 'hovercraft_main_menu_desktop_font_size', '18' );
	$main_menu_font_weight = get_theme_mod( 'hovercraft_main_menu_font_weight', '600' );

	/* fonts (offcanvas menu) */
	$offcanvas_menu_text_transform = get_theme_mod( 'hovercraft_offcanvas_menu_text_transform', 'none' );
	$offcanvas_font_size = get_theme_mod( 'hovercraft_offcanvas_font_size', '18' );
	$offcanvas_font_weight = get_theme_mod( 'hovercraft_offcanvas_font_weight', '400' );

	/* fonts (offcanvas submenu) */
	$offcanvas_submenu_text_transform = get_theme_mod( 'hovercraft_offcanvas_submenu_text_transform', 'none' );
	$offcanvas_submenu_font_size = get_theme_mod( 'hovercraft_offcanvas_submenu_font_size', '16' );
	$offcanvas_submenu_font_weight = get_theme_mod( 'hovercraft_offcanvas_submenu_font_weight', '400' );
	
	/* fonts (after byline) */
	$after_byline_mobile_font_size = get_theme_mod( 'hovercraft_after_byline_mobile_font_size', '12' );
	$after_byline_desktop_font_size = get_theme_mod( 'hovercraft_after_byline_desktop_font_size', '12' );

	/* fonts (social sharing) */
	$social_sharing_font_size = get_theme_mod( 'hovercraft_social_sharing_font_size', '18' );

	/* fonts (footer) */
	$footer_mobile_font_size = get_theme_mod( 'hovercraft_footer_mobile_font_size', '14' );
	$footer_desktop_font_size = get_theme_mod( 'hovercraft_footer_desktop_font_size', '14' );

	/* fonts (copyright) */
	$copyright_mobile_font_size = get_theme_mod( 'hovercraft_copyright_mobile_font_size', '14' );
	$copyright_desktop_font_size = get_theme_mod( 'hovercraft_copyright_desktop_font_size', '14' );

	/* fonts (back to top) */
	$back_to_top_text_transform = get_theme_mod( 'hovercraft_back_to_top_text_transform', 'uppercase' );
	$back_to_top_font_weight = get_theme_mod( 'hovercraft_back_to_top_font_weight', '400' );

	/* h1 headings */
    $h1_font_family = get_theme_mod( 'hovercraft_h1_font', '' );
    $h1_mobile_font_size = get_theme_mod( 'hovercraft_h1_mobile_font_size', '36' );
    $h1_desktop_font_size = get_theme_mod( 'hovercraft_h1_desktop_font_size', '48' );
    $h1_font_weight = get_theme_mod( 'hovercraft_h1_font_weight', '700' );
    $h1_divider_display = get_theme_mod( 'hovercraft_h1_divider_display', 'none' );

	/* h2 headings */
    $h2_font_family = get_theme_mod( 'hovercraft_h2_font', '' );
    $h2_mobile_font_size = get_theme_mod( 'hovercraft_h2_mobile_font_size', '30' );
    $h2_desktop_font_size = get_theme_mod( 'hovercraft_h2_desktop_font_size', '36' );
    $h2_font_weight = get_theme_mod( 'hovercraft_h2_font_weight', '700' );
    $h2_divider_display = get_theme_mod( 'hovercraft_h2_divider_display', 'none' );

	/* h3 headings */
    $h3_font_family = get_theme_mod( 'hovercraft_h3_font', '' );
    $h3_mobile_font_size = get_theme_mod( 'hovercraft_h3_mobile_font_size', '24' );
    $h3_desktop_font_size = get_theme_mod( 'hovercraft_h3_desktop_font_size', '24' );
    $h3_font_weight = get_theme_mod( 'hovercraft_h3_font_weight', '700' );
    $h3_divider_display = get_theme_mod( 'hovercraft_h3_divider_display', 'none' );

	/* h4 headings */
    $h4_font_family = get_theme_mod( 'hovercraft_h4_font', '' );
    $h4_mobile_font_size = get_theme_mod( 'hovercraft_h4_mobile_font_size', '20' );
    $h4_desktop_font_size = get_theme_mod( 'hovercraft_h4_desktop_font_size', '20' );
    $h4_font_weight = get_theme_mod( 'hovercraft_h4_font_weight', '700' );

	/* h5 headings */
    $h5_font_family = get_theme_mod( 'hovercraft_h5_font', '' );
    $h5_mobile_font_size = get_theme_mod( 'hovercraft_h5_mobile_font_size', '18' );
    $h5_desktop_font_size = get_theme_mod( 'hovercraft_h5_desktop_font_size', '18' );
    $h5_font_weight = get_theme_mod( 'hovercraft_h5_font_weight', '700' );

	/* sidebar widget titles */
	$sidebar_widget_title_desktop_font_size = get_theme_mod( 'hovercraft_sidebar_widget_title_desktop_font_size', '24' );
	$sidebar_widget_title_mobile_font_size = get_theme_mod( 'hovercraft_sidebar_widget_title_mobile_font_size', '24' );
	$sidebar_widget_title_text_transform = get_theme_mod( 'hovercraft_sidebar_widget_title_text_transform', 'none' );
	$sidebar_widget_title_font_weight = get_theme_mod( 'hovercraft_sidebar_widget_title_font_weight', '600' );
	
	/* heros */
	$hero_gradient_tones = get_theme_mod( 'hovercraft_hero_gradient_tones', 'two_tones' );
	$mini_hero_vertical_padding = get_theme_mod( 'hovercraft_mini_hero_vertical_padding', '80' );
	$full_hero_background_position = get_theme_mod( 'hovercraft_full_hero_background_position', 'center_center' );
	$half_hero_background_position = get_theme_mod( 'hovercraft_half_hero_background_position', 'center_center' );
	$mini_hero_background_position = get_theme_mod( 'hovercraft_mini_hero_background_position', 'center_center' );
	$full_hero_header_background_color = get_theme_mod( 'hovercraft_full_hero_header_background_color', '#263238' );
	$full_hero_header_background_transparency = get_theme_mod( 'hovercraft_full_hero_header_background_transparency', '0.20' );
	$hero_gradient_angle = get_theme_mod( 'hovercraft_hero_gradient_angle', '60deg' );
	$hero_gradient_start_color_transparency = get_theme_mod( 'hovercraft_hero_gradient_start_color_transparency', '0.50' );
	$hero_gradient_mid_color_transparency = get_theme_mod( 'hovercraft_hero_gradient_mid_color_transparency', '0.50' );
	$hero_gradient_stop_color_transparency = get_theme_mod( 'hovercraft_hero_gradient_stop_color_transparency', '0.50' );
	$hero_gradient_start_color_length = get_theme_mod( 'hovercraft_hero_gradient_start_color_length', '30' );
	$hero_gradient_mid_color_length = get_theme_mod( 'hovercraft_hero_gradient_mid_color_length', '30' );
	$hero_gradient_stop_color_length = get_theme_mod( 'hovercraft_hero_gradient_stop_color_length', '100' );
	$hero_content_width_desktop = get_theme_mod( 'hovercraft_hero_content_width_desktop', '900px' );
	$url_hero_video = wp_get_attachment_url( get_theme_mod( 'hovercraft_video' ) ); 
	$url_header_image = esc_url( get_header_image() );
	$url_featured_image = wp_get_attachment_url( get_post_thumbnail_id(), 'large' ); 
	
	if (!empty( $url_featured_image )) { 
		$hero_image = $url_featured_image; 
	} else { 
		$hero_image = $url_header_image; 
	}
	
	/* widget areas */
	$home_premain_top_columns = get_theme_mod( 'hovercraft_home_premain_top_columns', '1' );
	$home_premain_top_align = get_theme_mod( 'hovercraft_home_premain_top_align', 'center' );
	$home_premain_bottom_columns = get_theme_mod( 'hovercraft_home_premain_bottom_columns', '1' );
	$home_premain_bottom_align = get_theme_mod( 'hovercraft_home_premain_bottom_align', 'center' );
	$home_postmain_top_columns = get_theme_mod( 'hovercraft_home_postmain_top_columns', '1' );
	$home_postmain_top_align = get_theme_mod( 'hovercraft_home_postmain_top_align', 'center' );
	$home_postmain_bottom_columns = get_theme_mod( 'hovercraft_home_postmain_bottom_columns', '1' );
	$home_postmain_bottom_align = get_theme_mod( 'hovercraft_home_postmain_bottom_align', 'center' );
	$prefooter_top_columns = get_theme_mod( 'hovercraft_prefooter_top_columns', '1' );
	$prefooter_top_align = get_theme_mod( 'hovercraft_prefooter_top_align', 'left' );
	$prefooter_bottom_columns = get_theme_mod( 'hovercraft_prefooter_bottom_columns', '1' );
	$prefooter_bottom_align = get_theme_mod( 'hovercraft_prefooter_bottom_align', 'left' );
	$postcolumns_top_align = get_theme_mod( 'hovercraft_postcolumns_top_align', 'left' );
	$postcolumns_bottom_align = get_theme_mod( 'hovercraft_postcolumns_bottom_align', 'left' );

	$back_to_top_desktop_font_size = get_theme_mod( 'hovercraft_back_to_top_desktop_font_size', '12' );
	$back_to_top_mobile_font_size = get_theme_mod( 'hovercraft_back_to_top_mobile_font_size', '12' );

	/* link decoration */
	$default_link_decoration = get_theme_mod( 'hovercraft_default_link_decoration', 'underline' );
	$topbar_link_decoration = get_theme_mod( 'hovercraft_topbar_link_decoration', 'underline' );
	$posthero_link_decoration = get_theme_mod( 'hovercraft_posthero_link_decoration', 'underline' );
	$postmain_top_link_decoration = get_theme_mod( 'hovercraft_postmain_top_link_decoration', 'underline' );
	$postmain_bottom_link_decoration = get_theme_mod( 'hovercraft_postmain_bottom_link_decoration', 'underline' );
	$premain_top_link_decoration = get_theme_mod( 'hovercraft_premain_top_link_decoration', 'underline' );
	$premain_bottom_link_decoration = get_theme_mod( 'hovercraft_premain_bottom_link_decoration', 'underline' );
	$prefooter_top_link_decoration = get_theme_mod( 'hovercraft_prefooter_top_link_decoration', 'underline' );
	$prefooter_bottom_link_decoration = get_theme_mod( 'hovercraft_prefooter_bottom_link_decoration', 'underline' );
	$footer_link_decoration = get_theme_mod( 'hovercraft_footer_link_decoration', 'underline' );
	$footer_callout_link_decoration = get_theme_mod( 'hovercraft_footer_callout_link_decoration', 'underline' );
	$copyright_link_decoration = get_theme_mod( 'hovercraft_copyright_link_decoration', 'underline' );
	
	/* colors */
	/* these need serious cleanup */
	$mini_hero_background_color = get_theme_mod( 'hovercraft_header_mini_hero_background_color', '#ffffff' );
	$mini_hero_header_link_color = get_theme_mod( 'hovercraft_mini_hero_header_link_color', '#263238' );
	$mini_hero_header_text_color = get_theme_mod( 'hovercraft_mini_hero_header_text_color', '#263238' );
	$default_text_color = get_theme_mod( 'hovercraft_default_text_color', '#263238' );
	$default_link_color = get_theme_mod( 'hovercraft_default_link_color', '#5C6BC0' );
	$default_hover_color = get_theme_mod( 'hovercraft_default_hover_color', '#283593' );
	$woocommerce_price_text_color = get_theme_mod( 'hovercraft_woocommerce_price_text_color', '#9E9D24' );
	$search_bar_background_color = get_theme_mod( 'hovercraft_search_bar_background_color', '#eceff1' );
	$search_bar_border_color = get_theme_mod( 'hovercraft_search_bar_border_color', '#eceff1' );
	$topbar_background_color = get_theme_mod( 'hovercraft_topbar_background_color', '#263238' );
	$topbar_text_color = get_theme_mod( 'hovercraft_topbar_text_color', '#ffffff' );
	$topbar_link_color = get_theme_mod( 'hovercraft_topbar_link_color', '#ffffff' );
	$half_hero_background_color = get_theme_mod( 'hovercraft_header_half_hero_background_color', '#ffffff' ); 
	$half_hero_text_color = get_theme_mod( 'hovercraft_header_half_hero_text_color', '#263238' ); 
	$half_hero_link_color = get_theme_mod( 'hovercraft_header_half_hero_link_color', '#263238' ); 
	$half_hero_header_text_color = get_theme_mod( 'hovercraft_header_half_hero_text_color', '#263238' ); 
	$half_hero_header_link_color = get_theme_mod( 'hovercraft_header_half_hero_link_color', '#263238' ); 
	$hero_gradient_start_color = get_theme_mod( 'hovercraft_hero_gradient_start_color', '#37474f' );
	$hero_gradient_mid_color = get_theme_mod( 'hovercraft_hero_gradient_mid_color', '#37474f' );
	$hero_gradient_stop_color = get_theme_mod( 'hovercraft_hero_gradient_stop_color', '#ffffff' );
	$offcanvas_background_color = get_theme_mod( 'hovercraft_offcanvas_background_color', '#ffffff' );
	$offcanvas_toggle_background_color = get_theme_mod( 'hovercraft_offcanvas_toggle_background_color', '#eceff1' );
	$breadcrumbs_text_color = get_theme_mod( 'hovercraft_breadcrumbs_text_color', '#607D8B' );
	$breadcrumbs_link_color = get_theme_mod( 'hovercraft_breadcrumbs_link_color', '#607D8B' );
	$hero_snippet_text_color = get_theme_mod( 'hovercraft_hero_snippet_text_color', '#ffffff' );
	$hero_snippet_link_color = get_theme_mod( 'hovercraft_hero_snippet_link_color', '#ffffff' );
	$search_input_placeholder_color = get_theme_mod( 'hovercraft_search_input_placeholder_color', '#757575' );
	$search_input_text_color = get_theme_mod( 'hovercraft_search_input_text_color', '#263238' );
	$sidebar_widget_title_text_color = get_theme_mod( 'hovercraft_sidebar_widget_title_text_color', '#263238' );

	// new
	$header_basic_hero_background_color = get_theme_mod( 'hovercraft_header_basic_background_color', '#ffffff' );
	$header_basic_hero_text_color = get_theme_mod( 'hovercraft_basic_hero_header_text_color', '#263238' );
	$header_basic_hero_link_color = get_theme_mod( 'hovercraft_basic_hero_header_link_color', '#263238' );

	$posthero_background_color = get_theme_mod( 'hovercraft_posthero_background_color', '#eceff1' );
	$posthero_text_color = get_theme_mod( 'hovercraft_posthero_text_color', '#263238' );
	$posthero_link_color = get_theme_mod( 'hovercraft_posthero_link_color', '#5C6BC0' );
	$postcolumns_top_background_color = get_theme_mod( 'hovercraft_postcolumns_top_background_color', '#eceff1' );
	$postcolumns_top_text_color = get_theme_mod( 'hovercraft_postcolumns_top_text_color', '#263238' );
	$postcolumns_bottom_background_color = get_theme_mod( 'hovercraft_postcolumns_bottom_background_color', '#eceff1' );
	$postcolumns_bottom_text_color = get_theme_mod( 'hovercraft_postcolumns_bottom_text_color', '#263238' );
	$footer_callout_background_color = get_theme_mod( 'hovercraft_footer_callout_background_color', '#283593' );
	$footer_callout_border_color = get_theme_mod( 'hovercraft_footer_callout_border_color', '#283593' );
	$footer_callout_text_color = get_theme_mod( 'hovercraft_footer_callout_text_color', '#ffffff' );
	$footer_callout_link_color = get_theme_mod( 'hovercraft_footer_callout_link_color', '#ffffff' );
	$sidebar_callout_background_color = get_theme_mod( 'hovercraft_sidebar_callout_background_color', '#283593' );
	$sidebar_callout_border_color = get_theme_mod( 'hovercraft_sidebar_callout_border_color', '#283593' );
	$sidebar_callout_text_color = get_theme_mod( 'hovercraft_sidebar_callout_text_color', '#ffffff' );
	$sidebar_callout_link_color = get_theme_mod( 'hovercraft_sidebar_callout_link_color', '#ffffff' );
	$sidebar_callout_cta_background_color = get_theme_mod( 'hovercraft_sidebar_callout_cta_background_color', '#263238' );
	$sidebar_callout_cta_border_color = get_theme_mod( 'hovercraft_sidebar_callout_cta_border_color', '#263238' );
	$sidebar_callout_hover_background_color = get_theme_mod( 'hovercraft_sidebar_callout_hover_background_color', '#ffffff' );
	$sidebar_callout_hover_link_color = get_theme_mod( 'hovercraft_sidebar_callout_hover_link_color', '#263238' );
	$sidebar_widget_background_color = get_theme_mod( 'hovercraft_sidebar_widget_background_color', '#ffffff' );
	$sidebar_widget_text_color = get_theme_mod( 'hovercraft_sidebar_widget_text_color', '#263238' );
	$sidebar_widget_link_color = get_theme_mod( 'hovercraft_sidebar_widget_link_color', '#5C6BC0' );
	$sidebar_widget_border_color = get_theme_mod( 'hovercraft_sidebar_widget_border_color', '#ffffff' );
	$sidebar_left_border_color = get_theme_mod( 'hovercraft_sidebar_left_border_color', '#e0e0e0' );
	$tile_background_color = get_theme_mod( 'hovercraft_tile_background_color', '#eceff1' );
	$tile_border_color = get_theme_mod( 'hovercraft_tile_border_color', '#eceff1' );
	$column_background_color = get_theme_mod( 'hovercraft_column_background_color', '#eceff1' );
	$column_border_color = get_theme_mod( 'hovercraft_column_border_color', '#eceff1' );
	$main_background_color = get_theme_mod( 'hovercraft_main_background_color', '#eceff1' );
	$main_background_color_homepage = get_theme_mod( 'hovercraft_main_background_color_homepage', '#eceff1' );
	$content_background_color = get_theme_mod( 'hovercraft_content_background_color', '#ffffff' );
	$postmain_top_background_color = get_theme_mod( 'hovercraft_postmain_top_background_color', '#eceff1' );
	$postmain_top_text_color = get_theme_mod( 'hovercraft_postmain_top_text_color', '#263238' );
	$postmain_top_link_color = get_theme_mod( 'hovercraft_postmain_top_link_color', '#5C6BC0' );
	$postmain_bottom_background_color = get_theme_mod( 'hovercraft_postmain_bottom_background_color', '#eceff1' );
	$postmain_bottom_text_color = get_theme_mod( 'hovercraft_postmain_bottom_text_color', '#263238' );
	$postmain_bottom_link_color = get_theme_mod( 'hovercraft_postmain_bottom_link_color', '#5C6BC0' );
	$premain_top_background_color = get_theme_mod( 'hovercraft_premain_top_background_color', '#eceff1' );
	$premain_top_text_color = get_theme_mod( 'hovercraft_premain_top_text_color', '#263238' );
	$premain_top_link_color = get_theme_mod( 'hovercraft_premain_top_link_color', '#5C6BC0' );
	$premain_bottom_background_color = get_theme_mod( 'hovercraft_premain_bottom_background_color', '#eceff1' );
	$premain_bottom_text_color = get_theme_mod( 'hovercraft_premain_bottom_text_color', '#263238' );
	$premain_bottom_link_color = get_theme_mod( 'hovercraft_premain_bottom_link_color', '#5C6BC0' );
    $prefooter_top_background_color = get_theme_mod( 'hovercraft_prefooter_top_background_color', '#eceff1' );
	$prefooter_top_text_color = get_theme_mod( 'hovercraft_prefooter_top_text_color', '#263238' );
	$prefooter_top_link_color = get_theme_mod( 'hovercraft_prefooter_top_link_color', '#5C6BC0' );
    $prefooter_bottom_background_color = get_theme_mod( 'hovercraft_prefooter_bottom_background_color', '#263238' );
	$prefooter_bottom_text_color = get_theme_mod( 'hovercraft_prefooter_bottom_text_color', '#ffffff' );
	$prefooter_bottom_link_color = get_theme_mod( 'hovercraft_prefooter_bottom_link_color', '#5C6BC0' );
    $footer_background_color = get_theme_mod( 'hovercraft_footer_background_color', '#ffffff' );
	$footer_text_color = get_theme_mod( 'hovercraft_footer_text_color', '#263238' );
	$footer_link_color = get_theme_mod( 'hovercraft_footer_link_color', '#5C6BC0' );
    $copyright_background_color = get_theme_mod( 'hovercraft_copyright_background_color', '#ffffff' );
	$copyright_text_color = get_theme_mod( 'hovercraft_copyright_text_color', '#263238' );
	$copyright_link_color = get_theme_mod( 'hovercraft_copyright_link_color', '#5C6BC0' );
	$back_to_top_background_color = get_theme_mod( 'hovercraft_back_to_top_background_color', '#eceff1' );
	$back_to_top_background_hover_color = get_theme_mod( 'hovercraft_back_to_top_background_hover_color', '#eceff1' );
	$back_to_top_link_color = get_theme_mod( 'hovercraft_back_to_top_link_color', '#263238' );

	/* misc */
	$blockquote_captions = get_theme_mod( 'hovercraft_blockquote_captions', 'none' );
	$breadcrumbs = get_theme_mod( 'hovercraft_breadcrumbs', 'none' );
	$gallery_captions = get_theme_mod( 'hovercraft_gallery_captions', 'none' );
	$tiles_captions = get_theme_mod( 'hovercraft_tiles_captions', 'none' );
	$sitewide_layout = get_theme_mod( 'hovercraft_sitewide_layout', 'floating_islands' );
	$tiles_across = get_theme_mod( 'hovercraft_tiles_across', '3' );
	$columns_across = get_theme_mod( 'hovercraft_columns_across', '4' );
	$scroll_to_top = get_theme_mod( 'hovercraft_scroll_to_top', 'mobile_only' );
	$mobile_topbar_widget = get_theme_mod( 'hovercraft_mobile_topbar', 'topbar_left' );
	$mobile_preheader_widget = get_theme_mod( 'hovercraft_mobile_preheader', 'none' );
	$desktop_logo_width = get_theme_mod( 'hovercraft_desktop_logo_width', '150' );
	$mobile_logo_width = get_theme_mod( 'hovercraft_mobile_logo_width', '100' );
	$tagline_display = get_theme_mod( 'hovercraft_tagline_display', 'right_of_site_title' );
	$site_name_display_mobile = get_theme_mod( 'hovercraft_site_name_display_mobile', 'block' );
	$after_byline_padding = get_theme_mod( 'hovercraft_after_byline_padding', '0' );
	$after_byline_background_color = get_theme_mod( 'hovercraft_after_byline_background_color', '#fff8e1' );
	$after_byline_text_color = get_theme_mod( 'hovercraft_after_byline_text_color', '#263238' );
	$after_byline_link_color = get_theme_mod( 'hovercraft_after_byline_link_color', '#5C6BC0' );
	$featured_image_position = get_theme_mod( 'hovercraft_featured_image_position', 'above_title' );
	$title_divider_background_color = get_theme_mod( 'hovercraft_title_divider_background_color', '#757575' );
	$blockquote_text_color = get_theme_mod( 'hovercraft_blockquote_text_color', '#616161' );
	$blockquote_border_color = get_theme_mod( 'hovercraft_blockquote_border_color', '#757575' );
    ?>

<style type="text/css" id="hovercraft_custom_css">
@media screen and (max-width: 1200px) {
html, body {
    height: 100%;
    font-family: <?php 
        echo !empty($default_font_family) 
            ? ucwords(str_replace("_", " ", $default_font_family)) 
            : (!empty($first_font_family) 
                ? ucwords(str_replace("_", " ", $first_font_family)) 
                : 'sans-serif'); 
    ?>;
    font-size: <?php echo $default_mobile_font_size; ?>px;
    line-height: 1.5;
    color: <?php echo $default_text_color; ?>;
    scroll-behavior: smooth;
    }
}

@media screen and (min-width: 1200px) {
html, body {
    height: 100%;
    font-family: <?php 
        echo !empty($default_font_family) 
            ? ucwords(str_replace("_", " ", $default_font_family)) 
            : (!empty($first_font_family) 
                ? ucwords(str_replace("_", " ", $first_font_family)) 
                : 'sans-serif'); 
    ?>;
    font-size: <?php echo $default_desktop_font_size; ?>px;
    line-height: 1.5;
    color: <?php echo $default_text_color; ?>;
    scroll-behavior: smooth;
    }
}


/* body frozen (triggered by offcanvas menu js) */

body.frozen {
	overflow: hidden;
}


/* misc */

strong {
	font-weight: 700;
}

em {
    font-style: italic;
}


/* paragraphs */

@media screen and (max-width: 1200px) {
p {
	margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
p {
	margin-bottom: 30px;
	}
}

.clear {
	clear: both;
}


/* general */

@media screen and (max-width: 1200px) {
#container {
	width: 100%;
	height: 100%;
	position: relative; /* required for mobile menu transform */
	transform: translate3d(0, 0, 0);
  	transition: transform 0.5s;
	}
}

@media screen and (min-width: 1200px) {
#container {
	width: 100%;
	height: 100%;
	}
}

.inner {
	margin:0px auto;
	max-width:1200px;
}

@media screen and (max-width: 1200px) {
.full {
	max-width: 100%;
	padding: 0px 0px;
	}
}

@media screen and (min-width: 1200px) {
.full {
	max-width: 100%;
	padding: 0px 40px;
	}
}


/* wordpress video/media container */
@media screen and (max-width: 1200px) {
.mejs-container {
	margin-bottom: 20px;
	}
}

/* wordpress video/media container */
@media screen and (min-width: 1200px) {
.mejs-container {
	margin-bottom: 30px;
	}
}


iframe {
	position: relative;
    display: block;
}

@media screen and (max-width: 1200px) {
hr {
	background: <?php echo $default_text_color; ?>;
	height: 1px;
	margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
hr {
	background: <?php echo $default_text_color; ?>;
	height: 1px;
	margin-bottom: 30px;
	}
}
	
/*
#content-wrapper iframe {
	aspect-ratio: 16 / 9;
}
*/

#footer iframe {
	aspect-ratio: 1 / 1.5;
}


/* header elements */

.header-left {
	display: table-cell;
    vertical-align: middle;
	height: inherit;
	min-width: auto; /* https://developer.mozilla.org/en-US/docs/Web/CSS/min-width */
	white-space: nowrap;
}

.header-right {
	display: table-cell;
    vertical-align: middle;
	height: inherit;
	text-align: right;
	width: 100%;
}


/* full hero */
<?php
$hovercraft_hero_full_css = get_template_directory() . '/inc/css/hero-full.php';
if ( file_exists( $hovercraft_hero_full_css ) ) {
	include $hovercraft_hero_full_css;
}
?>

/* half hero */
<?php
$hovercraft_hero_half_css = get_template_directory() . '/inc/css/hero-half.php';
if ( file_exists( $hovercraft_hero_half_css ) ) {
    include $hovercraft_hero_half_css;
}
?>

/* mini hero */
<?php
$hovercraft_hero_mini_css = get_template_directory() . '/inc/css/hero-mini.php';
if ( file_exists( $hovercraft_hero_mini_css ) ) {
    include $hovercraft_hero_mini_css;
}
?>

/* branding */
<?php
$hovercraft_branding_css = get_template_directory() . '/inc/css/branding.php';
if ( file_exists( $hovercraft_branding_css ) ) {
    include $hovercraft_branding_css;
}
?>

/* logo */
<?php
$hovercraft_logo_css = get_template_directory() . '/inc/css/logo.php';
if ( file_exists( $hovercraft_logo_css ) ) {
    include $hovercraft_logo_css;
}
?>

/* site title */
<?php
$hovercraft_site_title_css = get_template_directory() . '/inc/css/site-title.php';
if ( file_exists( $hovercraft_site_title_css ) ) {
	include $hovercraft_site_title_css;
}
?>

/* tagline */
<?php
$hovercraft_tagline_css = get_template_directory() . '/inc/css/tagline.php';
if ( file_exists( $hovercraft_tagline_css ) ) {
	include $hovercraft_tagline_css;
}
?>

/* related posts */
<?php
$hovercraft_related_posts_css = get_template_directory() . '/inc/css/related-posts.php';
if ( file_exists( $hovercraft_related_posts_css ) ) {
	include $hovercraft_related_posts_css;
}
?>

/* tags */
<?php
$hovercraft_tags_css = get_template_directory() . '/inc/css/tags.php';
if ( file_exists( $hovercraft_tags_css ) ) {
    include $hovercraft_tags_css;
}
?>

/* social sharing */
<?php
$hovercraft_social_sharing_css = get_template_directory() . '/inc/css/social-sharing.php';
if ( file_exists( $hovercraft_social_sharing_css ) ) {
    include $hovercraft_social_sharing_css;
}
?>

/* after byline (widget area) */
<?php
$hovercraft_after_byline_css = get_template_directory() . '/inc/css/after-byline.php';
if ( file_exists( $hovercraft_after_byline_css ) ) {
    include $hovercraft_after_byline_css;
}
?>

/* lists */
<?php
$hovercraft_lists_css = get_template_directory() . '/inc/css/lists.php';
if ( file_exists( $hovercraft_lists_css ) ) {
    include $hovercraft_lists_css;
}
?>

/* blockquotes */
<?php
$hovercraft_blockquotes_css = get_template_directory() . '/inc/css/blockquotes.php';
if ( file_exists( $hovercraft_blockquotes_css ) ) {
    include $hovercraft_blockquotes_css;
}
?>

/* tables */
<?php
$hovercraft_tables_css = get_template_directory() . '/inc/css/tables.php';
if ( file_exists( $hovercraft_tables_css ) ) {
    include $hovercraft_tables_css;
}
?>


/* general */
	
.white {
	color: #ffffff !important;
}

.full-width {
	width: 100%;
}

.center {
	text-align: center;
}


/* links */

a {
	color: <?php echo $default_link_color; ?>;
	text-decoration: <?php echo $default_link_decoration; ?>;
	cursor: pointer;
}
	
a:hover {
	color: <?php echo $default_hover_color; ?>;
	cursor: pointer;
}


/* cta (hero) */
<?php
$hovercraft_cta_hero_css = get_template_directory() . '/inc/css/cta-hero.php';
if ( file_exists( $hovercraft_cta_hero_css ) ) {
	include $hovercraft_cta_hero_css;
}
?>

/* hero title */
<?php
$hovercraft_hero_title_css = get_template_directory() . '/inc/css/hero-title.php';
if ( file_exists( $hovercraft_hero_title_css ) ) {
	include $hovercraft_hero_title_css;
}
?>

/* hero snippet */
<?php
$hovercraft_hero_snippet_css = get_template_directory() . '/inc/css/hero-snippet.php';
if ( file_exists( $hovercraft_hero_snippet_css ) ) {
	include $hovercraft_hero_snippet_css;
}
?>

/* headings */
<?php
$hovercraft_headings_css = get_template_directory() . '/inc/css/headings.php';
if ( file_exists( $hovercraft_headings_css ) ) {
	include $hovercraft_headings_css;
}
?>

/* images (general) */
<?php
$hovercraft_images_general_css = get_template_directory() . '/inc/css/images-general.php';
if ( file_exists( $hovercraft_images_general_css ) ) {
	include $hovercraft_images_general_css;
}
?>

/* images (featured) */
<?php
$hovercraft_featured_image_css = get_template_directory() . '/inc/css/images-featured.php';
if ( file_exists( $hovercraft_featured_image_css ) ) {
	include $hovercraft_featured_image_css;
}
?>
	
/* code snippets */
<?php
$hovercraft_code_snippets_css = get_template_directory() . '/inc/css/code-snippets.php';
if ( file_exists( $hovercraft_code_snippets_css ) ) {
	include $hovercraft_code_snippets_css;
}
?>

/* general cta (buttons) */
<?php
$hovercraft_general_cta_css = get_template_directory() . '/inc/css/cta-general.php';
if ( file_exists( $hovercraft_general_cta_css ) ) {
	include $hovercraft_general_cta_css;
}
?>

/* tiles */
<?php
$hovercraft_tiles_css = get_template_directory() . '/inc/css/tiles.php';
if ( file_exists( $hovercraft_tiles_css ) ) {
	include $hovercraft_tiles_css;
}
?>

/* bullets */
<?php
$hovercraft_bullets_css = get_template_directory() . '/inc/css/bullets.php';
if ( file_exists( $hovercraft_bullets_css ) ) {
	include $hovercraft_bullets_css;
}
?>

/* desktop menu */
<?php
$hovercraft_main_menu_css = get_template_directory() . '/inc/css/menu-desktop.php';
if ( file_exists( $hovercraft_main_menu_css ) ) {
	include $hovercraft_main_menu_css;
}
?>

/* mobile menu */
<?php
$hovercraft_mobile_menu_css = get_template_directory() . '/inc/css/menu-mobile.php';
if ( file_exists( $hovercraft_mobile_menu_css ) ) {
	include $hovercraft_mobile_menu_css;
}
?>

/* topbar */
<?php
$hovercraft_topbar_css = get_template_directory() . '/inc/css/topbar.php';
if ( file_exists( $hovercraft_topbar_css ) ) {
    include $hovercraft_topbar_css;
}
?>

/* preheader */
<?php
$hovercraft_preheader_css = get_template_directory() . '/inc/css/preheader.php';
if ( file_exists( $hovercraft_preheader_css ) ) {
	include $hovercraft_preheader_css;
}
?>

/* basic header */
<?php
$hovercraft_header_basic_css = get_template_directory() . '/inc/css/header-basic.php';
if ( file_exists( $hovercraft_header_basic_css ) ) {
	include $hovercraft_header_basic_css;
}
?>

/* cta header */
<?php
$hovercraft_cta_header_css = get_template_directory() . '/inc/css/cta-header.php';
if ( file_exists( $hovercraft_cta_header_css ) ) {
	include $hovercraft_cta_header_css;
}
?>

/* inline button: secondary */
a.button-secondary {
	font-family: <?php echo ucwords(str_replace("_", " ", $main_menu_font_family)); ?>;
	font-size: 20px;
	font-weight: 400;
	text-transform: <?php echo $main_menu_text_transform; ?>;
	display: inline-block;
	padding: 10px 20px;
	background: transparent;
	text-decoration: none;
	color: <?php echo $default_text_color; ?>;
	box-shadow: inset 0px 0px 0px 1px <?php echo $default_text_color; ?>;
	width: 100%;
	box-sizing: border-box;
}

a.button-secondary:hover {
	background: <?php echo $default_text_color; ?>;
	color: #ffffff !important;
}

@media screen and (min-width: 1200px) {
.welcome-wrapper {
	max-width: <?php echo $hero_content_width_desktop; ?>;
	}
}

/* posthero */
<?php
$hovercraft_posthero_css = get_template_directory() . '/inc/css/posthero.php';
if ( file_exists( $hovercraft_posthero_css ) ) {
	include $hovercraft_posthero_css;
}
?>

/* main */
<?php
$hovercraft_main_css = get_template_directory() . '/inc/css/main.php';
if ( file_exists( $hovercraft_main_css ) ) {
	include $hovercraft_main_css;
}
?>

/* primary */
<?php
$hovercraft_primary_css = get_template_directory() . '/inc/css/primary.php';
if ( file_exists( $hovercraft_primary_css ) ) {
	include $hovercraft_primary_css;
}
?>

/* byline */
<?php
$hovercraft_byline_css = get_template_directory() . '/inc/css/byline.php';
if ( file_exists( $hovercraft_byline_css ) ) {
    include $hovercraft_byline_css;
}
?>


/* alignment */
	
.aligncenter {
	text-align: center;
	margin: 0 auto;
	display: block;
}
	
.alignleft {
	text-align: left;
	display: inline-block;
}

.alignright {
	text-align: right;
	display: inline-block;
}


	


/* archives */
<?php
$hovercraft_archives_css = get_template_directory() . '/inc/css/archives.php';
if ( file_exists( $hovercraft_archives_css ) ) {
	include $hovercraft_archives_css;
}
?>

/* breadcrumbs */
<?php
$hovercraft_breadcrumbs_css = get_template_directory() . '/inc/css/breadcrumbs.php';
if ( file_exists( $hovercraft_breadcrumbs_css ) ) {
	include $hovercraft_breadcrumbs_css;
}
?>

/* content */
<?php
$hovercraft_content_css = get_template_directory() . '/inc/css/content.php';
if ( file_exists( $hovercraft_content_css ) ) {
	include $hovercraft_content_css;
}
?>

/* author box */
<?php
$hovercraft_author_box_css = get_template_directory() . '/inc/css/author-box.php';
if ( file_exists( $hovercraft_author_box_css ) ) {
	include $hovercraft_author_box_css;
}
?>

/* columns */
<?php
$hovercraft_columns_css = get_template_directory() . '/inc/css/columns.php';
if ( file_exists( $hovercraft_columns_css ) ) {
	include $hovercraft_columns_css;
}
?>

.wp-caption {
	margin-bottom: 30px;
	max-width: 100%;
	height: auto;
	display: block;
}
	
.wp-caption img {
	margin-bottom: 0 !important;
}

.wp-caption-text {
	margin-bottom: 0 !important;
    text-align: left;
    font-size: 12px;
	line-height: 2;
    color: #444;
}


/* zigzag (page template) */
	
.zigzag-section {
	text-align: left;
	padding: 40px 40px;
}

.zigzag-section-reverse {
	text-align: right;
	padding: 40px;
}

.zigzag-section h3 {
text-align: left;
}

.zigzag-section-reverse h3 {
text-align: right;
}

.zigzag-section img {
	float: left;
	margin-right: 40px;
	width: 300px !important;
}

.zigzag-section-reverse img {
	float: right;
	margin-left: 40px;
	width: 300px !important;
}


/* sidebar */
<?php
$hovercraft_sidebar_css = get_template_directory() . '/inc/css/sidebar.php';
if ( file_exists( $hovercraft_sidebar_css ) ) {
	include $hovercraft_sidebar_css;
}
?>

/* callout (footer) */
<?php
$hovercraft_footer_callout_css = get_template_directory() . '/inc/css/footer-callout.php';
if ( file_exists( $hovercraft_footer_callout_css ) ) {
    include $hovercraft_footer_callout_css;
}
?>


/* widgets */

.widget-wrapper ul li ul {
    margin-left: 0 !important;
}

.widget-wrapper ul li ul li {
    margin-left: 0 !important;
    list-style-type: circle;
}
	
 .widget-wrapper iframe {
	max-width: 100%;
}

/* home-premain-top */
<?php
$hovercraft_home_premain_top_css = get_template_directory() . '/inc/css/home-premain-top.php';
if ( file_exists( $hovercraft_home_premain_top_css ) ) {
    include $hovercraft_home_premain_top_css;
}
?>

/* home-premain-bottom */
<?php
$hovercraft_home_premain_bottom_css = get_template_directory() . '/inc/css/home-premain-bottom.php';
if ( file_exists( $hovercraft_home_premain_bottom_css ) ) {
    include $hovercraft_home_premain_bottom_css;
}
?>

/* home-postmain-top */
<?php
$hovercraft_home_postmain_top_css = get_template_directory() . '/inc/css/home-postmain-top.php';
if ( file_exists( $hovercraft_home_postmain_top_css ) ) {
    include $hovercraft_home_postmain_top_css;
}
?>

/* home-postmain-bottom */
<?php
$hovercraft_home_postmain_bottom_css = get_template_directory() . '/inc/css/home-postmain-bottom.php';
if ( file_exists( $hovercraft_home_postmain_bottom_css ) ) {
    include $hovercraft_home_postmain_bottom_css;
}
?>

/* prefooter top */
<?php
$hovercraft_prefooter_top_css = get_template_directory() . '/inc/css/prefooter-top.php';
if ( file_exists( $hovercraft_prefooter_top_css ) ) {
    include $hovercraft_prefooter_top_css;
}
?>

/* prefooter bottom */
<?php
$hovercraft_prefooter_bottom_css = get_template_directory() . '/inc/css/prefooter-bottom.php';
if ( file_exists( $hovercraft_prefooter_bottom_css ) ) {
    include $hovercraft_prefooter_bottom_css;
}
?>

/* footer layout */
<?php
$hovercraft_footer_layout_css = get_template_directory() . '/inc/css/footer-layout.php';
if ( file_exists( $hovercraft_footer_layout_css ) ) {
	include $hovercraft_footer_layout_css;
}
?>

/* copyright */
<?php
$hovercraft_copyright_css = get_template_directory() . '/inc/css/copyright.php';
if ( file_exists( $hovercraft_copyright_css ) ) {
    include $hovercraft_copyright_css;
}
?>

/* post image galleries */

@media screen and (max-width: 1200px) {
.gallery {
	columns: 1;
	column-fill: balance;
	}
}

@media screen and (min-width: 1200px) {
.gallery-narrow-wrapper > .gallery {
	columns: 2;
	column-fill: balance;
	column-gap: 20px;
	}
}

@media screen and (min-width: 1200px) {
.gallery-wide-wrapper > .gallery {
	columns: 3;
	column-fill: balance;
	column-gap: 2px;
	}
}

@media screen and (max-width: 1200px) {
.gallery img {
	width: 100%;
	display: block;
	margin-bottom: 20px;
	border: 0;
	}
}

@media screen and (min-width: 1200px) {
.gallery img {
	width: 354px;
	margin-bottom: 20px;
	border: 0;
	}
}

.gallery-caption {
	<?php if ( $gallery_captions == 'none') { echo "display: none;"; } ?>
}


/* buttons and submits */

button[type="submit"] {
	font-weight: 600;
	line-height: 1;
	background: <?php echo $default_link_color; ?> !important;
	text-decoration: none;
	color: #ffffff;
	border-radius: 0px;
	border: 0;
	cursor: pointer;
}


/* forms */
<?php
$hovercraft_forms_css = get_template_directory() . '/inc/css/forms.php';
if ( file_exists( $hovercraft_forms_css ) ) {
	include $hovercraft_forms_css;
}
?>

/* searchform */
<?php
$hovercraft_searchform_css = get_template_directory() . '/inc/css/searchform.php';
if ( file_exists( $hovercraft_searchform_css ) ) {
	include $hovercraft_searchform_css;
}
?>

/* comments */
<?php
$hovercraft_comments_css = get_template_directory() . '/inc/css/comments.php';
if ( file_exists( $hovercraft_comments_css ) ) {
	include $hovercraft_comments_css;
}
?>

/* search modal */
<?php
$hovercraft_search_modal_css = get_template_directory() . '/inc/css/search-modal.php';
if ( file_exists( $hovercraft_search_modal_css ) ) {
	include $hovercraft_search_modal_css;
}
?>

/* back to top */
<?php
$hovercraft_back_to_top_css = get_template_directory() . '/inc/css/back-to-top.php';
if ( file_exists( $hovercraft_back_to_top_css ) ) {
	include $hovercraft_back_to_top_css;
}
?>
	
/* bbpress */
<?php
$hovercraft_bbpress_css = get_template_directory() . '/inc/css/bbpress.php';
if ( file_exists( $hovercraft_bbpress_css ) ) {
	include $hovercraft_bbpress_css;
}
?>

/* pagination */
<?php
$hovercraft_pagination_css = get_template_directory() . '/inc/css/pagination.php';
if ( file_exists( $hovercraft_pagination_css ) ) {
	include $hovercraft_pagination_css;
}
?>

/* woocommerce cart */
<?php
$hovercraft_woocommerce_cart_css = get_template_directory() . '/inc/css/woocommerce-cart.php';
if ( file_exists( $hovercraft_woocommerce_cart_css ) ) {
    include $hovercraft_woocommerce_cart_css;
}
?>


/* woocommerce other */



div.coupon {
	display: flex;
}


.term-description {
	font-size: 18px;
	color: #607D8B;
}

@media screen and (max-width: 1200px) {
p.woocommerce-result-count {
	float: none !important;
	display: block;
	margin: 0 0 20px 0 !important;
	padding: 0 !important;
	font-size: 16px;
	font-weight: 600;
	color: <?php echo $breadcrumbs_text_color; ?>;
	line-height: 1.5 !important;
	}
}

@media screen and (min-width: 1200px) {
p.woocommerce-result-count {
	float: left !important;
	margin: 0 !important;
	padding: 5px 0px !important;
	font-size: 16px;
	font-weight: 600;
	color: <?php echo $breadcrumbs_text_color; ?>;
	line-height: 1.5 !important;
	}
}

/*
https://codepen.io/jpdanks/pen/KKBarq 
https://codepen.io/rabakilgur/pen/zyggOe
*/

@media screen and (max-width: 1200px) {
	form.woocommerce-ordering {
		float: none !important;
		width: 100%;
		max-width: 100%;
	} 
}


@media screen and (min-width: 1200px) {
	form.woocommerce-ordering {
		float: right !important;
		width: auto;
  		max-width: 100%;
	} 
}

form.woocommerce-ordering {
	margin: 0 !important;
	padding: 0 !important;
  	position: relative;
  	background-color: #eeeeee;
  	select {
		appearance: none;
		max-width: 100%;
		vertical-align: middle !important;
		outline: none;
		border: none;
    	box-shadow: none;
		line-height: 1.5 !important;
    	font-size: 16px;
		color: #757575;
    	padding: 5px 40px 5px 10px !important;
    	background-color: transparent;
    	&:active,
    	&:focus {
      		outline: none;
      		box-shadow: none;
    	}
  	}
  &:after {
    content: " ";
    position: absolute;
    top: 50%;
    margin-top: -2px;
    right: 10px;
    width: 0; 
    height: 0; 
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid #aaa;
  }
}

/*
.woocommerce-ordering:after {
	position: relative;
	margin: 0px 0px 0px -10px; 
        left: 95%;
        bottom: 1.6ch;
        pointer-events: none;
        font-family: "Material Icons";
        font-size: 24px;
        content: ' \e5cf';
}
*/


/* woocommerce products unordered list */
	
.woocommerce ul.products {
	margin: 0 !important;
	padding: 30px 0 0 0 !important;
}

.woocommerce ul.products li.product {
	float: left;
    list-style: none outside !important;
	position: relative;
	margin-bottom: 30px !important;
	padding: 0;
	line-height: 1 !important;
}


/* woocommerce product details */
<?php
$hovercraft_woocommerce_product_details_css = get_template_directory() . '/inc/css/woocommerce-product-details.php';
if ( file_exists( $hovercraft_woocommerce_product_details_css ) ) {
    include $hovercraft_woocommerce_product_details_css;
}
?>

/* woocommerce add to cart (and quantity buttons) */
<?php
$hovercraft_woocommerce_add_to_cart_css = get_template_directory() . '/inc/css/woocommerce-add-to-cart.php';
if ( file_exists( $hovercraft_woocommerce_add_to_cart_css ) ) {
    include $hovercraft_woocommerce_add_to_cart_css;
}
?>

/* woocommerce login */
<?php
$hovercraft_woocommerce_login_css = get_template_directory() . '/inc/css/woocommerce-login.php';
if ( file_exists( $hovercraft_woocommerce_login_css ) ) {
    include $hovercraft_woocommerce_login_css;
}
?>
	

/* woocommerce */

section.related {
	clear: both;
	display: block;
	margin-top: 30px !important;
}

section.upsells {
	clear: both;
	display: block;
}

.woo-related-products-container {
	clear: both;
	display: block;
}


/* woocommerce product list widget */
<?php
$hovercraft_woocommerce_widget_products_css = get_template_directory() . '/inc/css/woocommerce-widget-products.php';
if ( file_exists( $hovercraft_woocommerce_widget_products_css ) ) {
    include $hovercraft_woocommerce_widget_products_css;
}
?>

/* cart icon */
<?php
$hovercraft_cart_icon_css = get_template_directory() . '/inc/css/cart-icon.php';
if ( file_exists( $hovercraft_cart_icon_css ) ) {
	include $hovercraft_cart_icon_css;
}
?>

</style>

<?php }
 
add_action( 'wp_head', 'hovercraft_generate_css' );

// Ref: ChatGPT
// Ref: https://codex.wordpress.org/Wrapping_Text_Around_Images
// Ref: https://blog.logrocket.com/guide-css-word-wrap-overflow-wrap-word-break/
