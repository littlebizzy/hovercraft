<?php

// css from customizer
function hovercraft_generate_css(){

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

	/* fonts */
	$default_font_family = get_theme_mod( 'hovercraft_default_font', 'noto_sans' );
	$default_desktop_font_size = get_theme_mod( 'hovercraft_default_desktop_font_size', '16' );
	$default_mobile_font_size = get_theme_mod( 'hovercraft_default_mobile_font_size', '16' );
	$site_name_font_family = get_theme_mod( 'hovercraft_site_name_font', 'noto_sans' );
	$site_name_mobile_font_size = get_theme_mod( 'hovercraft_site_name_mobile_font_size', '24' );
	$site_name_desktop_font_size = get_theme_mod( 'hovercraft_site_name_desktop_font_size', '36' );
	$site_name_font_weight = get_theme_mod( 'hovercraft_site_name_font_weight', '700' );
	$main_menu_font_family = get_theme_mod( 'hovercraft_main_menu_font', 'noto_sans' );
	$main_menu_desktop_font_size = get_theme_mod( 'hovercraft_main_menu_desktop_font_size', '18' );
	$main_menu_font_weight = get_theme_mod( 'hovercraft_main_menu_font_weight', '600' );
	$after_byline_mobile_font_size = get_theme_mod( 'hovercraft_after_byline_mobile_font_size', '12' );
	$after_byline_desktop_font_size = get_theme_mod( 'hovercraft_after_byline_desktop_font_size', '12' );
	$offcanvas_font_size = get_theme_mod( 'hovercraft_offcanvas_font_size', '18' );
	$offcanvas_submenu_font_size = get_theme_mod( 'hovercraft_offcanvas_submenu_font_size', '16' );
	$topbar_desktop_font_size = get_theme_mod( 'hovercraft_topbar_desktop_font_size', '14' );
	$topbar_mobile_font_size = get_theme_mod( 'hovercraft_topbar_mobile_font_size', '14' );
	$social_sharing_font_size = get_theme_mod( 'hovercraft_social_sharing_font_size', '18' );
	$offcanvas_font_weight = get_theme_mod( 'hovercraft_offcanvas_font_weight', '400' );

	/* misc */
	$blockquote_captions = get_theme_mod( 'hovercraft_blockquote_captions', 'none' );
	$breadcrumbs = get_theme_mod( 'hovercraft_breadcrumbs', 'none' );
	$home_postmain_top_columns = get_theme_mod( 'hovercraft_home_postmain_top_columns', '1' );
	$home_postmain_bottom_columns = get_theme_mod( 'hovercraft_home_postmain_bottom_columns', '1' );
	$prefooter_top_columns = get_theme_mod( 'hovercraft_prefooter_top_columns', '1' );
	$prefooter_bottom_columns = get_theme_mod( 'hovercraft_prefooter_bottom_columns', '1' );
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
	
	/* titles */
	$h1_font_family = get_theme_mod( 'hovercraft_h1_font', 'noto_sans' );
	$h1_mobile_font_size = get_theme_mod( 'hovercraft_h1_mobile_font_size', '36' );
	$h1_desktop_font_size = get_theme_mod( 'hovercraft_h1_desktop_font_size', '48' );
	$h1_font_weight = get_theme_mod( 'hovercraft_h1_font_weight', '700' );
	$h1_divider_display = get_theme_mod( 'hovercraft_h1_divider_display', 'none' );
	$h2_font_family = get_theme_mod( 'hovercraft_h2_font', 'noto_sans' );
	$h2_mobile_font_size = get_theme_mod( 'hovercraft_h2_mobile_font_size', '30' );
	$h2_desktop_font_size = get_theme_mod( 'hovercraft_h2_desktop_font_size', '36' );
	$h2_font_weight = get_theme_mod( 'hovercraft_h2_font_weight', '700' );
	$h2_divider_display = get_theme_mod( 'hovercraft_h2_divider_display', 'none' );
	$h3_font_family = get_theme_mod( 'hovercraft_h3_font', 'noto_sans' );
	$h3_mobile_font_size = get_theme_mod( 'hovercraft_h3_mobile_font_size', '24' );
	$h3_desktop_font_size = get_theme_mod( 'hovercraft_h3_desktop_font_size', '24' );
	$h3_font_weight = get_theme_mod( 'hovercraft_h3_font_weight', '700' );
	$h4_font_family = get_theme_mod( 'hovercraft_h4_font', 'noto_sans' );
	$h4_mobile_font_size = get_theme_mod( 'hovercraft_h4_mobile_font_size', '20' );
	$h4_desktop_font_size = get_theme_mod( 'hovercraft_h4_desktop_font_size', '20' );
	$h4_font_weight = get_theme_mod( 'hovercraft_h4_font_weight', '700' );
	$h5_font_family = get_theme_mod( 'hovercraft_h5_font', 'noto_sans' );
	$h5_mobile_font_size = get_theme_mod( 'hovercraft_h5_mobile_font_size', '18' );
	$h5_desktop_font_size = get_theme_mod( 'hovercraft_h5_desktop_font_size', '18' );
	$h5_font_weight = get_theme_mod( 'hovercraft_h5_font_weight', '700' );
	$sidebar_widget_title_desktop_font_size = get_theme_mod( 'hovercraft_sidebar_widget_title_desktop_font_size', '24' );
	$sidebar_widget_title_mobile_font_size = get_theme_mod( 'hovercraft_sidebar_widget_title_mobile_font_size', '24' );
	$sidebar_widget_title_text_transform = get_theme_mod( 'hovercraft_sidebar_widget_title_text_transform', 'none' );
	$sidebar_widget_title_font_weight = get_theme_mod( 'hovercraft_sidebar_widget_title_font_weight', '600' );
	$offcanvas_menu_text_transform = get_theme_mod( 'hovercraft_offcanvas_menu_text_transform', 'none' );
	$main_menu_text_transform = get_theme_mod( 'hovercraft_main_menu_text_transform', 'none' );
	$back_to_top_text_transform = get_theme_mod( 'hovercraft_back_to_top_text_transform', 'uppercase' );
	
	/* footer */
	$footer_mobile_font_size = get_theme_mod( 'hovercraft_footer_mobile_font_size', '14' );
	$footer_desktop_font_size = get_theme_mod( 'hovercraft_footer_desktop_font_size', '14' );
	$copyright_mobile_font_size = get_theme_mod( 'hovercraft_copyright_mobile_font_size', '14' );
	$copyright_desktop_font_size = get_theme_mod( 'hovercraft_copyright_desktop_font_size', '14' );
	$back_to_top_desktop_font_size = get_theme_mod( 'hovercraft_back_to_top_desktop_font_size', '12' );
	$back_to_top_mobile_font_size = get_theme_mod( 'hovercraft_back_to_top_mobile_font_size', '12' );
	
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
	$footer_callout_link_decoration = get_theme_mod( 'hovercraft_footer_callout_decoration', 'underline' );
	$copyright_link_decoration = get_theme_mod( 'hovercraft_copyright_link_decoration', 'underline' );
    ?>

<style type="text/css" id="hovercraft_custom_css">
@media screen and (max-width: 1200px) {
html, body {
	height: 100%;
	font-family: <?php echo ucwords(str_replace("_", " ", $default_font_family)); ?>;
	font-size: <?php echo $default_mobile_font_size; ?>px;
	line-height: 1.5;
	color: <?php echo $default_text_color; ?>;
	scroll-behavior: smooth;
	}
}

@media screen and (min-width: 1200px) {
html, body {
	height: 100%;
	font-family: <?php echo ucwords(str_replace("_", " ", $default_font_family)); ?>;
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


/* unordered and ordered lists */

ul {
	list-style-position: inside;
}

ol {
	list-style-position: inside;
}

li {
	margin-bottom: 5px;
	line-height: 2;
}

ol > li::marker {
  font-weight: 700;
}


/* blockquotes */

blockquote {
	margin: 30px 0px 30px 30px;
	padding: 20px 30px;
	border-left: 5px solid #ECEFF1;
	color: #607D8B;
}

blockquote p {
	font-size: 18px;
	line-height: 2;
}

blockquote p:last-child {
	margin-bottom: 0;
}

blockquote .wp-caption-text {
	<?php if ( $blockquote_captions == 'none') { echo "display: none;"; } ?>
}


/* tables */

@media screen and (max-width: 1200px) {
table {
	margin-bottom: 20px;
	border: 1px solid grey;
	border-collapse: collapse;
	}
}

@media screen and (min-width: 1200px) {
table {
	margin-bottom: 30px;
	border: 1px solid grey;
	border-collapse: collapse;
	}
}
	
table tr:first-child {
  background: #eee !important;
}

table th,
table td {
	padding: 5px;
  border: 1px solid lightgrey;
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


/* related posts... we use #related for simple user-friendly anchor */

@media screen and (max-width: 1200px) {
#related {
	margin-top: 20px;
	}
}

@media screen and (min-width: 1200px) {
#related {
	margin-top: 30px;
	}
}


/* tags */

@media screen and (max-width: 1200px) {
.tags {
	margin-top: 20px;
	font-size: 14px;
	color: <?php echo $breadcrumbs_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.tags {
	margin-top: 30px;
	font-size: 14px;
	color: <?php echo $breadcrumbs_text_color; ?>;
	}
}
	

/* social sharing */

@media screen and (max-width: 1200px) {
.social-sharing {
	margin: 40px 0px;
	line-height: 1;
	}
}

@media screen and (min-width: 1200px) {
.social-sharing {
	margin: 60px 0px;
	line-height: 1;
	}
}

.social-sharing i {
	font-size: <?php echo $social_sharing_font_size; ?>px;
	line-height: 1;
	margin-right: 20px !important;
	vertical-align: middle;
}

.social-sharing-label {
	margin-right: 10px;
	vertical-align: middle;
	color: <?php echo $breadcrumbs_text_color; ?>;
}


/* after byline (widget area) */

@media screen and (max-width: 1200px) {
.after-byline {
	background: <?php echo $after_byline_background_color; ?>;
	font-size: <?php echo $after_byline_mobile_font_size; ?>px;
	padding: <?php echo $after_byline_padding; ?>px;
	margin-bottom: 20px;
	color: <?php echo $after_byline_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.after-byline {
	background: <?php echo $after_byline_background_color; ?>;
	font-size: <?php echo $after_byline_desktop_font_size; ?>px;
	padding: <?php echo $after_byline_padding; ?>px;
	margin-bottom: 30px;
	color: <?php echo $after_byline_text_color; ?>;
	}
}

.after-byline p:last-child {
	margin-bottom: 0;
}

.after-byline a {
	color: <?php echo $after_byline_link_color; ?>;
}


/* full hero */

#hero-full-container {
	width: 100%; /* correct */
	height: 100%; /* correct */
	padding: 0; /* correct */
	display: table; /* correct */
	position: relative; /* required to keep video background from escaping esp on mobile */
}

.hero-full-wrapper {
	display: table-row; /* correct */
}

.hero-full {
	width: 100%;
	height: 100%;
	display: table-cell;
	vertical-align: middle;
}

.hero-full-main {
	position: relative; /* required when using video background on splash-wide */
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


/* full hero header */

@media screen and (max-width: 1200px) {
#header-full-hero {
	width: 100%;
	display: table;
	padding: 10px 20px;
	background: <?php list($r1, $g1, $b1) = sscanf($full_hero_header_background_color, "#%02x%02x%02x"); echo "rgba({$r1}, {$g1}, {$b1}, {$full_hero_header_background_transparency})"; ?>;
	position: relative; /* required when using video background on splash-wide */
	color: #ffffff;
	}
}

@media screen and (min-width: 1200px) {
#header-full-hero {
	width: 100%;
	display: table;
	margin: 0px auto;
	padding: 20px 0px;
	background: <?php list($r1, $g1, $b1) = sscanf($full_hero_header_background_color, "#%02x%02x%02x"); echo "rgba({$r1}, {$g1}, {$b1}, {$full_hero_header_background_transparency})"; ?>;
	position: relative; /* required when using video background on splash-wide */
	color: #ffffff;
	}
}

@media screen and (max-width: 1200px) {
h1.full-hero-title {
	font-weight: 700;
	margin-bottom: 30px;
	color: #ffffff;
	}
}

@media screen and (min-width: 1200px) {
h1.full-hero-title {
	font-weight: 700;
	margin-bottom: 30px;
	color: #ffffff;
	}
}


/* half hero */

#hero-half-container {
	width: 100%; /* correct */
	height: 100%; /* correct */
	padding: 0; /* correct */
	display: table; /* correct */
	position: relative; /* required to keep video background from escaping esp on mobile */
}

.hero-half-wrapper {
	display: table-row; /* correct */
}

.hero-half {
	width: 100%;
	height: 100%;
	display: table-cell;
	vertical-align: middle;
}


/* half hero header */

@media screen and (max-width: 1200px) {
#header-half-hero {
	width: 100%;
	display: table;
	padding: 10px 20px;
	background: #ffffff;
	color: <?php echo $half_hero_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
#header-half-hero {
	width: 100%;
	display: table;
	margin: 0px auto;
	padding: 20px 0px;
	background: #ffffff;
	color: <?php echo $half_hero_text_color; ?>;
	}
}

@media screen and (max-width: 1200px) {
h1.half-hero-title {
	font-weight: 700;
	margin-bottom: 30px;
	color: #ffffff;
	}
}

@media screen and (min-width: 1200px) {
h1.half-hero-title {
	font-weight: 700;
	margin-bottom: 30px;
	color: #ffffff;
	}
}


/* mini hero */

@media screen and (max-width: 1200px) {
#hero-mini {
	width:100%; /* correct */
	padding:0px; /* correct */
	display:table; /* correct */
	}
}

@media screen and (min-width: 1200px) {
#hero-mini {
	width:100%; /* correct */
	padding:0px; /* correct */
	display:table; /* correct */
	}
}

@media screen and (max-width: 1200px) {
h1.mini-hero-title {
	font-weight: 700;
	margin-bottom: 0;
	color: #ffffff;
	}
}

@media screen and (min-width: 1200px) {
h1.mini-hero-title {
	font-weight: 700;
	margin-bottom: 0;
	color: #ffffff;
	}
}


/* logo */

@media screen and (max-width: 1200px) {
.site-logo {
	width: <?php echo $mobile_logo_width; ?>px !important;
	max-width: <?php echo $mobile_logo_width; ?>px !important;
	height: auto;
	margin-right: 10px;
	display: inline-block;
	}
}

@media screen and (min-width: 1200px) {
.site-logo {
	width: <?php echo $desktop_logo_width; ?>px !important;
	max-width: <?php echo $desktop_logo_width; ?>px !important;
	height: auto;
	margin-right: 20px;
	display: inline-block;
	}
}


/* branding */

#branding {
	display: table;
}

#branding a {
	text-decoration: none !important;
}

.branding-media {
	display: table-cell;
    vertical-align: middle;
	height: inherit;
	min-width: auto;
	white-space: nowrap;
}


/* branding text */

.branding-text {
	display: table-cell;
    vertical-align: middle;
	height: inherit;
	text-align: left;
	width: 100%;
}


/* site title */

@media screen and (max-width: 1200px) {
.site-title {
	font-family: <?php echo ucwords(str_replace("_", " ", $site_name_font_family)); ?>;
	font-weight: <?php echo $site_name_font_weight; ?>;
	font-size: <?php echo $site_name_mobile_font_size; ?>px;
	line-height: 1; /* site-tagline is hidden on mobile anyways */
	display: <?php echo $site_name_display_mobile; ?>;
	}
}

@media screen and (min-width: 1200px) {
.site-title {
	font-family: <?php echo ucwords(str_replace("_", " ", $site_name_font_family)); ?>;
	font-weight: <?php echo $site_name_font_weight; ?>;
	font-size: <?php echo $site_name_desktop_font_size; ?>px;
	line-height: 1; /* therefore site-tagline requires padding-top */
	display: block;
	}
}

.site-title-link {
	<?php if ( $tagline_display == 'right_of_site_title' ) { 
			echo "display: inline-block;\n"; 
		} else { 
			echo "display: block;\n"; 
		}  ?>
}


/* tagline */
	
@media screen and (max-width: 1200px) {
.tagline {
	font-size: 14px;
	line-height: 1;
	display: none;
	}
}

@media screen and (min-width: 1200px) {
.tagline {
	<?php if ( $tagline_display == 'right_of_site_title' ) { 
			echo "margin-left: 30px;\n"; 
		} else { 
			echo "margin-left: 0;\n"; 
		}  ?>
	padding-top: 10px;
	font-size: 14px;
	line-height: 1;
	<?php if ( $tagline_display == 'right_of_site_title' ) { 
			echo "display: inline-block;\n";
		} elseif ( $tagline_display == 'below_site_title' ) {
			echo "display: block;\n";
		} elseif ( $tagline_display == 'none' ) { 
			echo "display: none;\n"; 
		} else { 
			echo "display: inline-block;\n";
		}  ?>
	}
}


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


/* hero cta primary */

.cta-hero-wrapper {
	margin-top: 30px;
}

@media screen and (max-width: 1200px) {
.cta-hero-primary {
	display: block;
	width: 100%;
	}
}

@media screen and (min-width: 1200px) {
.cta-hero-primary {
	display: inline-block;
	margin-right: 30px;
	}
}

@media screen and (max-width: 1200px) {
.cta-hero-primary ul li {
	list-style-type: none;
	display: block;
	margin: 0;
	padding: 0;
	vertical-align: middle;
	text-align: center;
	}
}

@media screen and (min-width: 1200px) {
.cta-hero-primary ul li {
	list-style-type: none;
	display: inline-block;
	margin: 0;
	padding: 0;
	vertical-align: middle;
	text-align: center;
	}
}

@media screen and (max-width: 1200px) {
.cta-hero-primary ul li a {
	font-family: <?php echo ucwords(str_replace("_", " ", $main_menu_font_family)); ?>;
	width: 100%;
	font-size: 20px;
	font-weight: 700;
	color: #ffffff;
	padding: 10px 0px;
	text-decoration: none;
	display: block;
	background: <?php echo $default_link_color; ?>;
	margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
.cta-hero-primary ul li a {
	<?php if ( has_nav_menu( 'cta-hero-secondary' ) ) { echo "width: 200px;"; } else { echo "width: auto;"; } ?>
	font-family: <?php echo ucwords(str_replace("_", " ", $main_menu_font_family)); ?>;
	font-size: 20px;
	font-weight: 700;
	color: #ffffff;
	<?php if ( has_nav_menu( 'cta-hero-secondary' ) ) { echo "padding: 10px 0px;"; } else { echo "padding: 10px 20px;"; } ?>
	text-decoration: none;
	display: inline-block;
	background: <?php echo $default_link_color; ?>;
	}
}

.cta-hero-primary ul li a:hover {
	background: <?php echo $default_hover_color; ?>;
}


/* hero cta secondary */

@media screen and (max-width: 1200px) {
.cta-hero-secondary {
	display: block;
	width: 100%;
}
}

@media screen and (min-width: 1200px) {
.cta-hero-secondary {
	display: inline-block;
}
}

@media screen and (max-width: 1200px) {
.cta-hero-secondary ul li {
	list-style-type: none;
	display: block;
	margin: 0;
	padding: 0;
	vertical-align: middle;
	text-align: center;
	}
}

@media screen and (min-width: 1200px) {
.cta-hero-secondary ul li {
	list-style-type: none;
	display: inline-block;
	margin: 0;
	padding: 0;
	vertical-align: middle;
	text-align: center;
	}
}

@media screen and (max-width: 1200px) {
.cta-hero-secondary ul li a {
	font-family: <?php echo ucwords(str_replace("_", " ", $main_menu_font_family)); ?>;
	width: 100%;
	font-size: 20px;
	font-weight: 400;
	color: #ffffff;
	padding: 10px 0px;
	text-decoration: none;
	display: block;
	background: transparent;
	margin-bottom: 0;
	box-shadow: inset 0px 0px 0px 1px #ffffff;
	}
}

@media screen and (min-width: 1200px) {
.cta-hero-secondary ul li a {
	font-family: <?php echo ucwords(str_replace("_", " ", $main_menu_font_family)); ?>;
	width: 200px;
	font-size: 20px;
	font-weight: 400;
	color: #ffffff;
	padding: 10px 0px;
	text-decoration: none;
	display: inline-block;
	background: transparent;
	box-shadow: inset 0px 0px 0px 1px #ffffff;
	}
}

.cta-hero-secondary ul li:hover a {
	color: <?php echo $default_text_color; ?>;
	background: #ffffff;
}


/* hero title */

@media screen and (max-width: 1200px) {
.welcome-wrapper {
	width: 100%;
	padding: 30px 20px;
	}
}

@media screen and (min-width: 1200px) {
.welcome-wrapper {
	max-width: 900px;
	}
}

@media screen and (max-width: 1200px) {
.title-wrapper {
	width: 100%;
	padding: 0px 20px;
	text-align: center;
	}
}

@media screen and (min-width: 1200px) {
.title-wrapper {
	width: 100%;
	text-align: center;
	}
}


/* hero snippet */

@media screen and (max-width: 1200px) {
.hero-snippet {
	font-size: 16px;
	color: <?php echo $hero_snippet_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.hero-snippet {
	font-size: 18px;
	color: <?php echo $hero_snippet_text_color; ?>;
	}
}

.hero-snippet a {
	color: <?php echo $hero_snippet_link_color; ?>;
}

/* headings (titles) */

@media screen and (max-width: 1200px) {
h1 {
	font-family: <?php echo ucwords(str_replace("_", " ", $h1_font_family)); ?>;
	font-weight: <?php echo $h1_font_weight; ?>;
	font-size: <?php echo $h1_mobile_font_size; ?>px;
	margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
h1 {
	font-family: <?php echo ucwords(str_replace("_", " ", $h1_font_family)); ?>;
	font-weight: <?php echo $h1_font_weight; ?>;
	font-size: <?php echo $h1_desktop_font_size; ?>px;
	margin-bottom: 30px;
	}
}

@media screen and (max-width: 1200px) {
h1.divide:after {
	margin-top: 10px;
	margin-bottom: 20px;
	content: '';
	display: block;
	border: 1px solid <?php echo $title_divider_background_color; ?>;
	}
}
	
@media screen and (min-width: 1200px) {
h1.divide:after {
	margin-top: 15px;
	margin-bottom: 30px;
	content: '';
	display: block;
	border: 1px solid <?php echo $title_divider_background_color; ?>;
	}
}

@media screen and (max-width: 1200px) {
h2 {
	font-weight: <?php echo $h2_font_weight; ?>;
	font-size: <?php echo $h2_mobile_font_size; ?>px;
	margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
h2 {
	font-weight: <?php echo $h2_font_weight; ?>;
	font-size: <?php echo $h2_desktop_font_size; ?>px;
	margin-bottom: 30px;
	}
}

@media screen and (max-width: 1200px) {
h2:after {
	<?php if ( $h2_divider_display == 'everywhere_possible') { echo "margin-top: 10px;"; } ?>
	<?php if ( $h2_divider_display == 'everywhere_possible') { echo "margin-bottom: 20px;"; } ?>
	content: '';
	display: block;
	<?php if ( $h2_divider_display == 'everywhere_possible') { echo "border: 1px solid $title_divider_background_color;"; } ?>
	}
}
	
@media screen and (min-width: 1200px) {
h2:after {
	<?php if ( $h2_divider_display == 'everywhere_possible') { echo "margin-top: 15px;"; } ?>
	<?php if ( $h2_divider_display == 'everywhere_possible') { echo "margin-bottom: 30px;"; } ?>
	content: '';
	display: block;
	<?php if ( $h2_divider_display == 'everywhere_possible') { echo "border: 1px solid $title_divider_background_color;"; } ?>
	}
}

@media screen and (max-width: 1200px) {
h3 {
	font-weight: <?php echo $h3_font_weight; ?>;
	font-size: <?php echo $h3_mobile_font_size; ?>px;
	margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
h3 {
	font-weight: <?php echo $h3_font_weight; ?>;
	font-size: <?php echo $h3_desktop_font_size; ?>px;
	margin-bottom: 20px;
	}
}

@media screen and (max-width: 1200px) {
h4 {
	font-weight: <?php echo $h4_font_weight; ?>;
	font-size: <?php echo $h4_mobile_font_size; ?>px;
	margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
h4 {
	font-weight: <?php echo $h4_font_weight; ?>;
	font-size: <?php echo $h4_desktop_font_size; ?>px;
	margin-bottom: 20px;
	}
}

h4.sitename-offcanvas {
	font-weight: 600;
	font-size: <?php echo $h4_desktop_font_size; ?>px;
	line-height: 1;
	margin-bottom: 20px;
	padding-left: 20px;
	}

@media screen and (max-width: 1200px) {
h5 {
	font-weight: <?php echo $h5_font_weight; ?>;
	font-size: <?php echo $h5_mobile_font_size; ?>px;
	margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
h5 {
	font-weight: <?php echo $h5_font_weight; ?>;
	font-size: <?php echo $h5_desktop_font_size; ?>px;
	margin-bottom: 20px;
	}
}
	
h5.author-biography-intro {
	font-size: 14px;
	font-weight: 600;
	text-transform: uppercase;
	color: #607D8B;
}


/* images */
	
.alignright { 
	float: right; 
	margin: 0 0 20px 20px; 
}

.alignleft { 
	float: left; 
	margin: 0 20px 20px 0; 
}

.aligncenter { 
	display: block; 
	margin-left: auto; 
	margin-right: auto; 
}


/* code styling */

code {
	font-family: 'Noto Sans Mono', monospace;
	font-weight: 400;
	background: #ECEFF1;
	padding: 0px 5px;
}

@media screen and (max-width: 1200px) {
pre {
	width: calc(100% - 40px) !important;
	font-family: 'Noto Sans Mono', monospace;
	font-weight: 400;
	background: #ECEFF1; /* correct */
	padding: 10px;
	margin-bottom: 30px;
	overflow-x: scroll;
	white-space: pre;
	color: <?php echo $default_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
pre {
	width: 100%;
	font-family: 'Noto Sans Mono', monospace;
	font-weight: 400;
	background: #ECEFF1; /* correct */
	padding: 10px;
	margin-bottom: 30px;
	overflow-x: scroll;
	white-space: pre;
	color: <?php echo $default_text_color; ?>;
	}
}

.pre {
	width: 100%;
	font-family: 'Noto Sans Mono', monospace;
	background: #ECEFF1; /* correct */
	padding: 10px;
	margin-bottom: 30px;
	overflow-x: scroll;
	white-space: pre;
	color: <?php echo $default_text_color; ?>;
}


/* buttons */

button {
	font-size: 16px;
	font-weight: 400;
	padding: 10px 20px;
	text-decoration: none;
	background: #ECEFF1;
	border: 0 !important;
	border-radius: 0 !important;
	cursor: pointer;
}

.button {
	border: 0 !important;
	border-radius: 0 !important;
}

@media screen and (max-width: 1200px) {
.button-link {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: #ffffff;
	padding: 10px 0;
	text-decoration: none;
	display: block;
	background: <?php echo $default_link_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.button-link {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: #ffffff;
	padding: 10px 0;
	text-decoration: none;
	display: block;
	background: <?php echo $default_link_color; ?>;
	}
}

@media screen and (max-width: 1200px) {
.button-outline {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: <?php echo $default_text_color; ?>;
	padding: 10px 0;
	text-decoration: none;
	display: block;
	background: transparent;
	box-shadow: inset 0px 0px 0px 1px <?php echo $default_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.button-outline {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: <?php echo $default_text_color; ?>;
	padding: 10px 0;
	text-decoration: none;
	display: block;
	background: transparent;
	box-shadow: inset 0px 0px 0px 1px <?php echo $default_text_color; ?>;
	}
}

@media screen and (max-width: 1200px) {
.button-outline-white {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: #ffffff;
	padding: 10px 0;
	text-decoration: none;
	display: block;
	background: transparent;
	box-shadow: inset 0px 0px 0px 1px #ffffff;
	}
}

@media screen and (min-width: 1200px) {
.button-outline-white {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: #ffffff;
	padding: 10px 0;
	text-decoration: none;
	display: block;
	background: transparent;
	box-shadow: inset 0px 0px 0px 1px #ffffff;
	}
}

@media screen and (max-width: 1200px) {
.button-wide-dark {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: #ffffff;
	padding: 10px 0;
	text-decoration: none;
	display: block;
	background: <?php echo $default_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.button-wide-dark {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: #ffffff;
	padding: 10px 0;
	text-decoration: none;
	display: block;
	background: <?php echo $default_text_color; ?>;
	}
}

@media screen and (max-width: 1200px) {
.button-wide-white {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: <?php echo $default_text_color; ?>;
	padding: 10px 0;
	text-decoration: none;
	display: block;
	background: #ffffff;
	box-shadow: inset 0px 0px 0px 1px <?php echo $default_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.button-wide-white {
	width: 100%;
	text-align: center;
	font-size: 20px;
	font-weight: 700;
	color: <?php echo $default_text_color; ?>;
	padding: 10px 0;
	text-decoration: none;
	display: block;
	background: #ffffff;
	box-shadow: inset 0px 0px 0px 1px <?php echo $default_text_color; ?>;
	}
}


/* tiles */

@media screen and (max-width: 1200px) {
#tiles {
	width: 100%;
	padding: 30px 20px;
	}
}

@media screen and (min-width: 1200px) {
#tiles {
	width: 100%;
	display: grid;
  	<?php if ( $tiles_across == '3' ) { 
			echo "grid-template-columns: repeat(3, 1fr);\n"; 
		} elseif ( $tiles_across == '4' ) { 
			echo "grid-template-columns: repeat(4, 1fr);\n"; 
	} ?>
  	gap: 30px;
	}
}

@media screen and (max-width: 1200px) {
#tiles-wide {
	width: 100%;
	padding: 0px;
	}
}

@media screen and (min-width: 1200px) {
#tiles-wide {
	width: 100%;
	display: grid;
  	<?php if ( $tiles_across == '3' ) { 
			/* echo "grid-template-columns: repeat(3, 1fr);\n"; */
			echo "grid-template-columns: repeat(3, minmax(200px, 1fr));\n";
		} elseif ( $tiles_across == '4' ) { 
			/* echo "grid-template-columns: repeat(4, 1fr);\n"; */
			echo "grid-template-columns: repeat(4, minmax(200px, 1fr));\n";
	} ?>
  	gap: 30px;
	}
}

@media screen and (max-width: 1200px) {
.tile {
	width: 100%;
	margin-bottom: 30px;
	padding: 30px;
	text-align: center;
	box-shadow: inset 0px 0px 0px 1px <?php echo $tile_border_color; ?>;
	background: <?php echo $tile_background_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.tile {
	max-width: 100%;
	padding: 30px;
  	justify-content: center;
  	align-items: center;
	text-align: center;
	box-shadow: inset 0px 0px 0px 1px <?php echo $tile_border_color; ?>;
	display: inline-block;
	background: <?php echo $tile_background_color; ?>;
	}
}

.tile i {
	margin-bottom: 20px;
	font-size: 48px;
	display: block;
	color: <?php echo $default_link_color; ?>;
}

.tile img {
	display: block;
	margin: 0 auto;
}

.tile p:last-child {
	margin-bottom: 0;
}


.tile p.wp-caption-text {
	<?php if ( $tiles_captions == 'none') { echo "display: none;"; } ?>
}


/* bullets */

@media screen and (max-width: 1200px) {
	#bullets {
	columns: 1;
  column-fill: balance;
	column-gap: 0;
	}
}

@media screen and (min-width: 1200px) {
	#bullets {
	columns: 2;
  column-fill: balance;
	column-gap: 40px;
	}
}

@media screen and (max-width: 1200px) {
#bullets p {
	font-size: 14px;
	margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
#bullets p {
	font-size: 14px;
	margin-bottom: 30px;
	}
}
	
#bullets ul, #bullets ol {
	font-size: 14px;
	margin-bottom: 40px;
}

#bullets li {
	font-size: 14px;
	margin-bottom: 10px;
}

.faq-item {
	display: inline-block;
}


/* main menu (desktop) */

@media screen and (max-width: 1200px) {
.menu-desktop {
	display: none;	
	}
}

.menu-desktop > .main-menu {
	display: inline-block;
}

.menu-desktop > .main-menu:after {
	content:"";
	display:table;
	clear:both;
}

.menu-desktop > .main-menu ul {
	margin: 0;
	padding: 0;
	list-style-type: none;
	position: relative;
	text-align: right;
	display: inline-table;
}

.menu-desktop > .main-menu ul li {
	margin: 0;
	padding: 0;
	list-style-type: none;
	display: inline-block;
	vertical-align: middle;
}

.menu-desktop > .main-menu ul ul {
	display: none;
	position: absolute; 
	top: 36px; 
}
	
.menu-desktop > .main-menu ul li:hover > ul {
	display: block;
	z-index: 100;
}	

.menu-desktop > .main-menu a {
	font-family: <?php echo ucwords(str_replace("_", " ", $main_menu_font_family)); ?>;
	font-size: <?php echo $main_menu_desktop_font_size; ?>px;
	font-weight: <?php echo $main_menu_font_weight; ?>;
	display: inline-block;
	padding-left: 30px;
	text-decoration: none !important;
	text-transform: <?php echo $main_menu_text_transform; ?>;
}


/* Fisrt Tier Dropdown */
.menu-desktop > .main-menu ul ul li {
	width:250px;
	display: list-item;
	position: relative;
	text-align: left;
}

/* do we need it */
.menu-desktop > .main-menu li ul { position: absolute; display: none;  }
.menu-desktop > .main-menu li:hover ul, .menu-desktop > .main-menu li ul li { display: block; z-index:999; }
.menu-desktop > .main-menu ul ul ul { position: absolute; display: none;  }
	

/* force display block and line height on desktop drop-down links only (not parent links) */
.menu-desktop > .main-menu ul ul a, .main-menu ul ul ul a { display:block !important; line-height: 60px; }

/* Second, Third and more Tiers	*/

.menu-desktop > .main-menu ul ul ul li {
	position: relative;
	top: -56px; 
	left: 250px;
}
	
/* dropdown symbol should only appear in .main-menu context in header (not e.g. menu widgets in footer or sidebar) 
.main-menu .menu-item-has-children > a:after { 
	font-family: "Material Icons";
	font-size: 24px;
	content:  ' \e5cf'; 
	vertical-align: middle;
}

.main-menu li > a:only-child:after { 
	content: ''; 
}
*/
	
.main-menu .menu-item-has-children > a.menu-toggle {
	position: relative;
	vertical-align: top;
	padding-left: 10px;
}
	
.main-menu .menu-item-has-children > a.menu-toggle:after {
	position: relative;
	font-family: FontAwesome;
	font-size: 12px;
	content: "\f078";
	padding-left: 0;
}

	
#header-full-hero .menu-desktop > .main-menu ul li ul li { background: <?php echo $default_text_color; ?>; }
	
#header-half-hero .menu-desktop > .main-menu ul li ul li { background: <?php echo $half_hero_background_color; ?>; }

#header-mini-hero .menu-desktop > .main-menu ul li ul li { background: <?php echo $mini_hero_background_color; ?>; }
	
#header-basic .menu-desktop > .main-menu ul li ul li { background: <?php echo $header_basic_hero_background_color; ?>; }



	
#header-full-hero .main-menu ul li a {
	text-decoration: none;
	color: #ffffff; /* correct */
}



#header-full-hero a {
	color: #ffffff; /* correct */
}

#header-half-hero .main-menu ul li a {
	text-decoration: none;
	color: <?php echo $half_hero_link_color; ?>;
}

#header-half-hero a {
	color: <?php echo $half_hero_link_color; ?>;
}

#header-mini-hero .main-menu ul li a {
	text-decoration: none;
	color: <?php echo $mini_hero_header_link_color; ?>;
}

#header-basic .main-menu ul li a {
	text-decoration: none;
	color: <?php echo $header_basic_hero_link_color; ?>;
}


/* topbar */

@media screen and (max-width: 1200px) {
#topbar {
	width: 100%;
	padding: 10px 20px;
	font-size: <?php echo $topbar_mobile_font_size; ?>px;
	line-height: 1.5;
	background: <?php echo $topbar_background_color; ?>;
	color: <?php echo $topbar_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
#topbar {
	width: 100%;
	padding: 10px 0px;
	font-size: <?php echo $topbar_desktop_font_size; ?>px;
	line-height: 1.5;
	display: table;
	background: <?php echo $topbar_background_color; ?>;
	color: <?php echo $topbar_text_color; ?>;
	}
}

#topbar a {
	color: <?php echo $topbar_link_color; ?>;
	text-decoration: <?php echo $topbar_link_decoration; ?>;
}

#topbar p {
	margin-bottom: 0;
}
	
@media screen and (max-width: 1200px) {
.topbar-left {
    vertical-align: middle;
	text-align: center;
	<?php if ( $mobile_topbar_widget == 'topbar_right') { echo "display: none;"; } ?>
	}
}

@media screen and (min-width: 1200px) {
.topbar-left {
	display: table-cell;
    vertical-align: middle;
	height: inherit;
	white-space: nowrap;
	width: auto;
	text-align: left;
	}
}

@media screen and (max-width: 1200px) {
.topbar-right {
	vertical-align: middle;
	text-align: center;
	<?php if ( $mobile_topbar_widget == 'topbar_left') { echo "display: none;"; } ?>
	}
}

@media screen and (min-width: 1200px) {
.topbar-right {
	display: table-cell;
    vertical-align: middle;
	height: inherit;
	text-align: right;
	width: 100%;
	}
}
	
@media screen and (max-width: 1200px) {
.topbar-center {
	text-align: center;
	}
}

@media screen and (min-width: 1200px) {
.topbar-center {
    vertical-align: middle;
	height: inherit;
	text-align: center;
	}
}


/* topbar ul */

#topbar ul {
	margin: 0;
	list-style-type: none;
}

#topbar ul li {
	list-style-type: none;
	display: inline-block;
	margin: 0 0 0 10px;
}


/* preheader */

@media screen and (max-width: 1200px) {
#preheader {
	width: 100%;
	padding: 0px 20px 20px 20px;
	font-size: 14px;
	line-height: 1.5;
	}
}

@media screen and (min-width: 1200px) {
#preheader {
	width: 100%;
	padding: 0px 0px 40px 0px;
	font-size: 14px;
	line-height: 1.5;
	display: table;
	}
}

#preheader p {
	margin-bottom: 0;
}
	
@media screen and (max-width: 1200px) {
.preheader-left {
    vertical-align: middle;
	text-align: center;
	<?php if ( $mobile_preheader_widget == 'preheader_right') { echo "display: none;"; } ?>
	}
}

@media screen and (min-width: 1200px) {
.preheader-left {
	display: table-cell;
    vertical-align: middle;
	height: inherit;
	white-space: nowrap;
	width: auto;
	text-align: left;
	}
}

@media screen and (max-width: 1200px) {
.preheader-right {
	vertical-align: middle;
	text-align: center;
	<?php if ( $mobile_preheader_widget == 'preheader_left') { echo "display: none;"; } ?>
	}
}

@media screen and (min-width: 1200px) {
.preheader-right {
	display: table-cell;
    vertical-align: middle;
	height: inherit;
	text-align: right;
	width: 100%;
	}
}
	
@media screen and (max-width: 1200px) {
.preheader-center {
	text-align: center;
	}
}

@media screen and (min-width: 1200px) {
.preheader-center {
    vertical-align: middle;
	height: inherit;
	text-align: center;
	}
}

#hero-full-container {
<?php if ( $hero_gradient_tones == 'two_tones' ) { ?>
	background: linear-gradient(<?php echo $hero_gradient_angle; ?>, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_start_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_start_color_transparency})"; 
		?> <?php echo $hero_gradient_start_color_length; ?>%, <?php 
		list($r2, $g2, $b2) = sscanf($hero_gradient_stop_color, "#%02x%02x%02x");
		echo "rgba({$r2}, {$g2}, {$b2}, {$hero_gradient_stop_color_transparency})"; 
		?> <?php echo $hero_gradient_stop_color_length; ?>%)<?php if (!empty( $hero_image )) echo ", url({$hero_image})" ?>;
<?php } elseif ( $hero_gradient_tones == 'three_tones' ) { ?>
	background: linear-gradient(<?php echo $hero_gradient_angle; ?>, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_start_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_start_color_transparency})"; 
		?> <?php echo $hero_gradient_start_color_length; ?>%, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_mid_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_mid_color_transparency})"; 
		?> <?php echo $hero_gradient_mid_color_length; ?>%, <?php 
		list($r2, $g2, $b2) = sscanf($hero_gradient_stop_color, "#%02x%02x%02x");
		echo "rgba({$r2}, {$g2}, {$b2}, {$hero_gradient_stop_color_transparency})"; 
		?> <?php echo $hero_gradient_stop_color_length; ?>%)<?php if (!empty( $hero_image )) echo ", url({$hero_image})" ?>;
<?php } ?>
	background-position: <?php $fullpos = str_replace('_',' ',$full_hero_background_position); echo $fullpos; ?>;
	background-size: cover;
	background-repeat: no-repeat;
}

video.hero-background-video {
	width: 100%; /* correct */
	height: 100%; /* correct */
	object-fit: cover; /* simulates background-size: cover */
  	position: absolute; /* correct */
  	top: 0;
  	left: 0;
}

.hero-background-video-overlay {
	width: 100%; /* correct */
	height: 100%; /* correct */
	object-fit: cover; /* simulates background-size: cover */
  	position: absolute; /* correct */
  	top: 0;
  	left: 0;
<?php if ( $hero_gradient_tones == 'two_tones' ) { ?>
	background: linear-gradient(<?php echo $hero_gradient_angle; ?>, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_start_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_start_color_transparency})"; 
		?> <?php echo $hero_gradient_start_color_length; ?>%, <?php 
		list($r2, $g2, $b2) = sscanf($hero_gradient_stop_color, "#%02x%02x%02x");
		echo "rgba({$r2}, {$g2}, {$b2}, {$hero_gradient_stop_color_transparency})"; 
		?> <?php echo $hero_gradient_stop_color_length; ?>%)<?php if (!empty( $hero_image )) echo ", url({$hero_image})" ?>;
<?php } elseif ( $hero_gradient_tones == 'three_tones' ) { ?>
	background: linear-gradient(<?php echo $hero_gradient_angle; ?>, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_start_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_start_color_transparency})"; 
		?> <?php echo $hero_gradient_start_color_length; ?>%, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_mid_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_mid_color_transparency})"; 
		?> <?php echo $hero_gradient_mid_color_length; ?>%, <?php 
		list($r2, $g2, $b2) = sscanf($hero_gradient_stop_color, "#%02x%02x%02x");
		echo "rgba({$r2}, {$g2}, {$b2}, {$hero_gradient_stop_color_transparency})"; 
		?> <?php echo $hero_gradient_stop_color_length; ?>%)<?php if (!empty( $hero_image )) echo ", url({$hero_image})" ?>;
<?php } ?>
	background-position: top center;
	background-size: cover;
	background-repeat: no-repeat;
}
	
.hero-half {
<?php if ( $hero_gradient_tones == 'two_tones' ) { ?>
	background: linear-gradient(<?php echo $hero_gradient_angle; ?>, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_start_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_start_color_transparency})"; 
		?> <?php echo $hero_gradient_start_color_length; ?>%, <?php 
		list($r2, $g2, $b2) = sscanf($hero_gradient_stop_color, "#%02x%02x%02x");
		echo "rgba({$r2}, {$g2}, {$b2}, {$hero_gradient_stop_color_transparency})"; 
		?> <?php echo $hero_gradient_stop_color_length; ?>%)<?php if (!empty( $hero_image )) echo ", url({$hero_image})" ?>;
<?php } elseif ( $hero_gradient_tones == 'three_tones' ) { ?>
	background: linear-gradient(<?php echo $hero_gradient_angle; ?>, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_start_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_start_color_transparency})"; 
		?> <?php echo $hero_gradient_start_color_length; ?>%, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_mid_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_mid_color_transparency})"; 
		?> <?php echo $hero_gradient_mid_color_length; ?>%, <?php 
		list($r2, $g2, $b2) = sscanf($hero_gradient_stop_color, "#%02x%02x%02x");
		echo "rgba({$r2}, {$g2}, {$b2}, {$hero_gradient_stop_color_transparency})"; 
		?> <?php echo $hero_gradient_stop_color_length; ?>%)<?php if (!empty( $hero_image )) echo ", url({$hero_image})" ?>;
<?php } ?>
	background-position: <?php $halfpos = str_replace('_',' ',$half_hero_background_position); echo $halfpos; ?>;
	background-size: cover;
	background-repeat: no-repeat;
}

#header-half-hero {
	background: <?php echo $half_hero_background_color; ?>;
}

#header-half-hero .menu-mobile-wrapper i {
	margin-left: 20px;
	font-size: 36px;
	color: <?php echo $default_text_color; ?>;
}

/* mini header */

#hero-mini {
<?php if ( $hero_gradient_tones == 'two_tones' ) { ?>
	background: linear-gradient(<?php echo $hero_gradient_angle; ?>, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_start_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_start_color_transparency})"; 
		?> <?php echo $hero_gradient_start_color_length; ?>%, <?php 
		list($r2, $g2, $b2) = sscanf($hero_gradient_stop_color, "#%02x%02x%02x");
		echo "rgba({$r2}, {$g2}, {$b2}, {$hero_gradient_stop_color_transparency})"; 
		?> <?php echo $hero_gradient_stop_color_length; ?>%)<?php if (!empty( $hero_image )) echo ", url({$hero_image})" ?>;
<?php } elseif ( $hero_gradient_tones == 'three_tones' ) { ?>
	background: linear-gradient(<?php echo $hero_gradient_angle; ?>, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_start_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_start_color_transparency})"; 
		?> <?php echo $hero_gradient_start_color_length; ?>%, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_mid_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_mid_color_transparency})"; 
		?> <?php echo $hero_gradient_mid_color_length; ?>%, <?php 
		list($r2, $g2, $b2) = sscanf($hero_gradient_stop_color, "#%02x%02x%02x");
		echo "rgba({$r2}, {$g2}, {$b2}, {$hero_gradient_stop_color_transparency})"; 
		?> <?php echo $hero_gradient_stop_color_length; ?>%)<?php if (!empty( $hero_image )) echo ", url({$hero_image})" ?>;
<?php } ?>
	background-position: <?php $minipos = str_replace('_',' ',$mini_hero_background_position); echo $minipos; ?>;
	background-size: cover;
	background-repeat: no-repeat;
}

.hero-main-mini {
<?php if ( $hero_gradient_tones == 'two_tones' ) { ?>
	background: linear-gradient(<?php echo $hero_gradient_angle; ?>, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_start_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_start_color_transparency})"; 
		?> <?php echo $hero_gradient_start_color_length; ?>%, <?php 
		list($r2, $g2, $b2) = sscanf($hero_gradient_stop_color, "#%02x%02x%02x");
		echo "rgba({$r2}, {$g2}, {$b2}, {$hero_gradient_stop_color_transparency})"; 
		?> <?php echo $hero_gradient_stop_color_length; ?>%)<?php if (!empty( $hero_image )) echo ", url({$hero_image})" ?>;
<?php } elseif ( $hero_gradient_tones == 'three_tones' ) { ?>
	background: linear-gradient(<?php echo $hero_gradient_angle; ?>, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_start_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_start_color_transparency})"; 
		?> <?php echo $hero_gradient_start_color_length; ?>%, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_mid_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_mid_color_transparency})"; 
		?> <?php echo $hero_gradient_mid_color_length; ?>%, <?php 
		list($r2, $g2, $b2) = sscanf($hero_gradient_stop_color, "#%02x%02x%02x");
		echo "rgba({$r2}, {$g2}, {$b2}, {$hero_gradient_stop_color_transparency})"; 
		?> <?php echo $hero_gradient_stop_color_length; ?>%)<?php if (!empty( $hero_image )) echo ", url({$hero_image})" ?>;
<?php } ?>
	background-position: <?php $minipos = str_replace('_',' ',$mini_hero_background_position); echo $minipos; ?>;
	background-size: cover;
	background-repeat: no-repeat;
}

@media screen and (max-width: 1200px) {
.hero-main-mini {
	padding: 60px 20px; /* correct */
	}
}

@media screen and (min-width: 1200px) {
.hero-main-mini {
	padding: <?php echo $mini_hero_vertical_padding; ?>px 0px;
	}
}

@media screen and (max-width: 1200px) {
#header-mini-hero {
	width: 100%;
	display: table;
	padding: 10px 20px;
	background: <?php echo $mini_hero_background_color; ?>;
	color: <?php echo $mini_hero_header_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
#header-mini-hero {
	width: 100%;
	display: table;
	margin: 0px auto;
	padding: 20px 0px;
	background: <?php echo $mini_hero_background_color; ?>;
	color: <?php echo $mini_hero_header_text_color; ?>;
	}
}
	
#header-mini-hero .menu-mobile-wrapper i {
	margin-left: 20px;
	font-size: 36px;
	color: <?php echo $mini_hero_header_text_color; ?>;
}

#header-mini-hero a {
	color: <?php echo $mini_hero_header_link_color; ?>;
}

/* basic header */

@media screen and (max-width: 1200px) {
#header-basic {
	width: 100%;
	display: table;
	padding: 10px 20px;
	background: <?php echo $header_basic_hero_background_color; ?>;
	color: <?php echo $header_basic_hero_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
#header-basic {
	width: 100%;
	display: table;
	margin: 0px auto;
	padding: 20px 0px;
	background: <?php echo $header_basic_hero_background_color; ?>;
	color: <?php echo $header_basic_hero_text_color; ?>;
	}
}

#header-basic .menu-mobile-wrapper i {
	margin-left: 20px;
	font-size: 36px;
	color: <?php echo $header_basic_hero_text_color; ?>;
}

#header-basic a {
	color: <?php echo $header_basic_hero_link_color; ?>;
}


/* header primary cta */

.cta-header-primary {
	display: inline-block;
	margin-left: 30px;
}

.cta-header-primary ul li {
	list-style-type: none;
	display: inline-block;
	margin: 0;
	padding: 0;
	vertical-align: middle;
	text-align: center;
}

.cta-header-primary ul li a {
	font-family: <?php echo ucwords(str_replace("_", " ", $main_menu_font_family)); ?>;
	font-size: <?php echo $main_menu_desktop_font_size; ?>px;
	font-weight: 700;
	text-transform: <?php echo $main_menu_text_transform; ?>;
	display: inline-block;
	padding: 10px 20px;
	background: <?php echo $default_link_color; ?>;
	text-decoration: none !important;
	color: #ffffff !important;
}

.cta-header-primary ul li a:hover {
	background: <?php echo $default_hover_color; ?>;
	color: #ffffff !important;
}
	

/* header secondary cta */

.cta-header-secondary {
	display: inline-block;
	margin-left: 30px;
}

#header-full-hero .cta-header-secondary ul li {
	list-style-type: none;
	display: inline-block;
	margin: 0;
	padding: 0;
	vertical-align: middle;
	text-align: center;
}

#header-half-hero .cta-header-secondary ul li, #header-mini-hero .cta-header-secondary ul li, #header-basic .cta-header-secondary ul li {
	list-style-type: none;
	display: inline-block;
	margin: 0;
	padding: 0;
	vertical-align: middle;
	text-align: center;
}

#header-full-hero .cta-header-secondary ul li a {
	font-family: <?php echo ucwords(str_replace("_", " ", $main_menu_font_family)); ?>;
	font-size: <?php echo $main_menu_desktop_font_size; ?>px;
	font-weight: 400;
	text-transform: <?php echo $main_menu_text_transform; ?>;
	display: inline-block;
	padding: 10px 20px;
	background: transparent;
	text-decoration: none;
	color: #ffffff;
	box-shadow: inset 0px 0px 0px 1px #ffffff;
}

#header-half-hero .cta-header-secondary ul li a, #header-mini-hero .cta-header-secondary ul li a, #header-basic .cta-header-secondary ul li a {
	font-family: <?php echo ucwords(str_replace("_", " ", $main_menu_font_family)); ?>;
	font-size: <?php echo $main_menu_desktop_font_size; ?>px;
	font-weight: 400;
	text-transform: <?php echo $main_menu_text_transform; ?>;
	display: inline-block;
	padding: 10px 20px;
	background: transparent;
	text-decoration: none;
	color: <?php echo $default_text_color; ?>;
	box-shadow: inset 0px 0px 0px 1px #263238;
}

#header-full-hero .cta-header-secondary ul li a:hover {
	background: #ffffff;
	color: <?php echo $default_text_color; ?> !important;
}

#header-half-hero .cta-header-secondary ul li a:hover, #header-mini-hero .cta-header-secondary ul li a:hover, #header-basic .cta-header-secondary ul li a:hover {
	background: <?php echo $default_text_color; ?>;
	color: #ffffff !important;
}

#header-half-hero a {
	color: <?php echo $half_hero_header_link_color; ?>;
}



@media screen and (min-width: 1200px) {
.welcome-wrapper {
	max-width: <?php echo $hero_content_width_desktop; ?>;
	}
}

@media screen and (max-width: 1200px) {
#posthero {
	width: 100%;
	padding: 30px 20px;
	text-align: center;
	background: <?php echo $posthero_background_color; ?>;
	color: <?php echo $posthero_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
#posthero {
	width: 100%;
	padding: 30px 0px;
	text-align: center;
	background: <?php echo $posthero_background_color; ?>;
	color: <?php echo $posthero_text_color; ?>;
	}
}

#posthero .widget-wrapper {
	display: inline-block;
}

#posthero .widget_text {
	display: block;
}
	
#posthero img {
	margin-right: 30px;
}
	
#posthero img:last-of-type {
	margin-right: 0;
}

#posthero a {
	color: <?php echo $posthero_link_color; ?>;
	text-decoration: <?php echo $posthero_link_decoration; ?>;
}

/* no bottom margin if the only thing in posthero is a paragraph or heading title */
#posthero p:last-child, #posthero h2:last-child, #posthero h3:last-child, #posthero h4:last-child, #posthero h5:last-child {
	margin-bottom: 0;
}


/* main */
/* main refers to everything between header/splash and footer */

@media screen and (max-width: 1200px) {
#main {
	width: 100%;
	padding: 0;
	background: <?php echo $main_background_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
#main {
	padding: 40px 0px;
	<?php if ( $sitewide_layout == 'floating_islands' ) { 
			echo "background: $main_background_color;\n"; 
		} else { 
			echo "background: #ffffff;\n"; 
		}  ?>
	background: <?php echo $main_background_color; ?>;
	}
}

body.home #main {
	background: <?php echo $main_background_color_homepage; ?>;
}

body.home #content-wide {
	background: <?php echo $main_background_color_homepage; ?>;
}


/* primary */

@media screen and (max-width: 1200px) {
#primary {
	width: 100%;
	padding: 0px 0px;
	}
}

@media screen and (min-width: 1200px) {
#primary {
	float: left;
	padding: 0px 0px;
	<?php if ( $sitewide_layout == 'floating_islands' ) { 
			echo "width: 768px;\n"; 
		} else { 
			echo "width: 768px;\n"; 
		}  ?>
	}
}
	
/* primary-wide */

@media screen and (max-width: 1200px) {
#primary-wide {
	width: 100%;
	padding: 0px 0px;
	}
}

@media screen and (min-width: 1200px) {
#primary-wide {
	width: 100%;
	}
}
	
/* primary-center */

@media screen and (max-width: 1200px) {
#primary-center {
	width: 100%;
	}
}

@media screen and (min-width: 1200px) {
#primary-center {
	width: 768px;
	margin: 0px auto;
	}
}


/* post byline */

.post-byline {
	margin-bottom: 30px;
	line-height: 16px;
}

.post-byline-archive {
	margin-bottom: 20px;
	line-height: 1;
}

.byline-photo {
	display: inline-block;
	margin-right: 5px;
	vertical-align: middle;
	clip-path: circle();
	width: 25px;
	height: 25px;
}

.post-author {
	display: inline;
}

.post-updated {
	display: inline;
}


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


/* featured image wrapper */

@media screen and (max-width: 1200px) {
.featured-image-wrapper {
	position: relative;
	margin-bottom: 20px;
	width: 100%;
	height: auto;
	}
}

@media screen and (min-width: 1200px) {
.featured-image-wrapper {
	position: relative;
	margin-bottom: 30px;
	width: 768px;
	height: auto;
	<?php if ( $sitewide_layout == 'floating_islands' ) { 
		
		if ( $featured_image_position == 'below_title' ) { 
			echo "margin-left: -40px;\n"; 
		} elseif ( $featured_image_position == 'above_title' ) { 
			echo "margin-left: 0;\n"; 
		} 
		
	} elseif ( $sitewide_layout == 'classic_clean' ) { 

		if ( $featured_image_position == 'below_title' ) { 
			echo "margin-left: 0;\n"; 
		} elseif ( $featured_image_position == 'above_title' ) { 
			echo "margin-left: 0;\n"; 
		} 

	} ?>
	}
}

	
/* featured images */

.featured-image-wrapper img {
	margin-bottom: 0 !important;
}

@media screen and (max-width: 1200px) {
img.featured-image {
	width: 100%;
	height: auto;
	display: block;
	margin-bottom: 0;
	}
}

@media screen and (min-width: 1200px) {
img.featured-image {
	<?php if ( $sitewide_layout == 'floating_islands' ) { 
			echo "width: 768px;\n"; 
		} else { 
			echo "width: 768px;\n"; 
		}  ?>
	height: auto;
	display: block;
	margin-bottom: 0;
	}
}
	
.featured-image-caption {
	position: absolute;
	font-size: 12px;
	bottom: 0px;
	color: #ffffff;
	padding: 5px 10px;
	right: 0px;
}


/* archives */

.post-tease-archive {
	margin-bottom: 40px;
}

.post-excerpt-archive p {
	margin: 0;
}

@media screen and (max-width: 1200px) {
img.featured-image-archive {
	width: 100%;
	height: auto;
	display: block;
	margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
img.featured-image-archive {
	width: 768px;
	height: auto;
	display: block;
	margin-bottom: 20px;
	}
}


/* breadcrumbs */

@media screen and (max-width: 1200px) {
.breadcrumbs {
	width: 100%;
	margin-bottom: 20px;
	font-size: 14px;
	line-height: 18px !important;
	color: <?php echo $breadcrumbs_text_color; ?>;
	white-space: normal;
	}
}

@media screen and (min-width: 1200px) {
.breadcrumbs {
	margin-bottom: 30px;
	font-size: 14px;
	line-height: 20px !important;
	color: <?php echo $breadcrumbs_text_color; ?>;
	white-space: normal;
	}
}

.breadcrumbs ul {
	display: inline;
	list-style-position: unset;
	margin-left: 0 !important;
}

.breadcrumbs ul li {
	display: inline;
	word-break: break-all;
	margin-right: 5px;
}

.breadcrumbs i {
	font-size: 18px !important;
	margin-right: 5px;
}

.breadcrumbs a {
	color: <?php echo $breadcrumbs_link_color; ?>;
}


/* content (primary area) */

@media screen and (max-width: 1200px) {
#content-wrapper {
	background: <?php echo $content_background_color; ?>;
	}
}
	
@media screen and (min-width: 1200px) {
#content-wrapper {
	background: <?php echo $content_background_color; ?>;
	}
}

/* content (primary area) unordered and ordered lists */
	
#content-wrapper ul {
	margin-left: 30px;
	margin-bottom: 30px;
}

#content-wrapper ol {
	margin-left: 30px;
	margin-bottom: 30px;
}

#content-wrapper ol li {
	margin-bottom: 5px;
}
	

/* content-wide */

@media screen and (max-width: 1200px) {
#content-wide {
	padding: 20px;
	width: 100%;
	max-width: 100%;
	display: block;
    overflow: hidden;
	overflow-wrap: break-word;
	}
}

@media screen and (min-width: 1200px) {
#content-wide {
	<?php if ( $sitewide_layout == 'floating_islands' ) { 
			echo "padding: 40px 40px 40px 40px;\n"; 
		} else { 
			echo "padding: 0px 40px 0px 0px;\n"; 
		}  ?>
	display: block;
	overflow: hidden;
	overflow-wrap: break-word;
	}
}

	
/* content-padded */

@media screen and (max-width: 1200px) {
#content-padded {
	<?php if ( $sitewide_layout == 'floating_islands' ) { 
			echo "padding: 0px 20px 20px 20px;\n"; 
		} else { 
			echo "padding: 0px 20px 20px 20px;\n"; 
		}  ?>
	width: 100%;
	max-width: 100%;
	display: block;
    overflow: hidden;
	overflow-wrap: break-word;
	}
}

@media screen and (min-width: 1200px) {
#content-padded {
	<?php if ( $sitewide_layout == 'floating_islands' ) { 
			echo "padding: 40px 40px 40px 40px;\n"; 
		} else { 
			echo "padding: 0px 0px 40px 0px;\n"; 
		}  ?>
	display: block;
	overflow: hidden;
	overflow-wrap: break-word;
	}
}

#content-padded iframe {
	margin-bottom: 30px;
}
	
#content-padded img {
	margin-bottom: 30px;
	max-width: 100%;
	height: auto;
	display: block;
}

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

/* author biography box */

#author {
	margin-top: 30px;
	padding: 40px;
	box-shadow: inset 0px 0px 0px 1px #cccccc;
	border-radius: 0px;
}

#author p {
	margin-bottom: 0;
}

.biography-photo img {
	float: left; 
	margin: 0 20px 0 0; 
}

p.biography-description {
	font-size: 14px;
}
	

/* columns */

@media screen and (max-width: 1200px) {
#columns {
	width: 100%;
	padding: 30px 20px;
	}
}

@media screen and (min-width: 1200px) {
#columns {
	width: 100%;
	display: grid;
  	<?php if ( $columns_across == '3' ) { 
			echo "grid-template-columns: repeat(3, 1fr);\n"; 
		} elseif ( $columns_across == '4' ) { 
			echo "grid-template-columns: repeat(4, 1fr);\n"; 
		} elseif ( $columns_across == '5' ) { 
			echo "grid-template-columns: repeat(5, 1fr);\n"; 
		} elseif ( $columns_across == '6' ) { 
			echo "grid-template-columns: repeat(6, 1fr);\n"; 
		} ?>
  	gap: 30px;
	}
}

@media screen and (max-width: 1200px) {
.column {
	width: 100%;
	margin-bottom: 30px;
	padding: 30px;
	box-shadow: inset 0px 0px 0px 1px <?php echo $column_border_color; ?>;
	background: <?php echo $column_background_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.column {
	display: inline-block;
	max-width: 100%;
	padding: 30px;
  	justify-content: center;
  	align-items: center;
	text-align: center;
	box-shadow: inset 0px 0px 0px 1px <?php echo $column_border_color; ?>;
	background: <?php echo $column_background_color; ?>;
	}
}
	
.column ul {
	font-size: 14px;
}

.column i {
	margin-bottom: 20px;
	font-size: 48px;
	display: block;
	color: <?php echo $default_link_color; ?>;
}

.column img {
	display: block;
	margin: 0 auto;
}

.column p:last-child {
	margin-bottom: 0;
}


/* postcolumns */
	
@media screen and (max-width: 1200px) {
#postcolumns-top {
	width: 100%;
	padding: 30px 20px;
	text-align: center;
	background: <?php echo $postcolumns_top_background_color; ?>;
	color: <?php echo $postcolumns_top_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
#postcolumns-top {
	width: 100%;
	padding: 30px 0px;
	text-align: center;
	background: <?php echo $postcolumns_top_background_color; ?>;
	color: <?php echo $postcolumns_top_text_color; ?>;
	}
}

@media screen and (max-width: 1200px) {
#postcolumns-bottom {
	width: 100%;
	padding: 30px 20px;
	text-align: center;
	background: <?php echo $postcolumns_bottom_background_color; ?>;
	color: <?php echo $postcolumns_bottom_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
#postcolumns-bottom {
	width: 100%;
	padding: 30px 0px;
	text-align: center;
	background: <?php echo $postcolumns_bottom_background_color; ?>;
	color: <?php echo $postcolumns_bottom_text_color; ?>;
	}
}


/* sidebar */

@media screen and (max-width: 1200px) {
#sidebar {
	width: 100%;
	padding: 20px;
	}
}

@media screen and (min-width: 1200px) {
#sidebar {
	float: right;
	width: 392px;
	margin-left: 40px;
	<?php // $sidebar_padding_checked = get_theme_mod( 'hovercraft_sidebar_padding' ) ? true : false;
	// if ( $sidebar_padding_checked == true ) { echo "padding: 40px;"; } ?>
	}
}

#sidebar .widget-wrapper {
	width: 100%;
	padding: 40px 40px;
	background: <?php echo $sidebar_widget_background_color; ?>;
	color: <?php echo $sidebar_widget_text_color; ?>;
	box-shadow: inset 0px 0px 0px 1px <?php echo $sidebar_widget_border_color; ?> !important;
}

#sidebar .widget-wrapper a {
	color: <?php echo $sidebar_widget_link_color; ?>;
}

@media screen and (max-width: 1200px) {
	#sidebar .widget-wrapper .widget-title {
		font-size: <?php echo $sidebar_widget_title_mobile_font_size; ?>px;
		font-weight: <?php echo $sidebar_widget_title_font_weight; ?>;
		text-transform: <?php echo $sidebar_widget_title_text_transform; ?>;
		color: <?php echo $sidebar_widget_title_text_color; ?>;
	}
}
	
@media screen and (min-width: 1200px) {
	#sidebar .widget-wrapper .widget-title {
		font-size: <?php echo $sidebar_widget_title_desktop_font_size; ?>px;
		font-weight: <?php echo $sidebar_widget_title_font_weight; ?>;
		text-transform: <?php echo $sidebar_widget_title_text_transform; ?>;
		color: <?php echo $sidebar_widget_title_text_color; ?>;
	}
}

@media screen and (max-width: 1200px) {
	#sidebar .widget-wrapper:not(:last-child) {
    margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
	#sidebar .widget-wrapper:not(:last-child) {
    margin-bottom: 30px;
	}
}

#sidebar .widget-wrapper p:last-child {
	margin-bottom: 0;
}

#sidebar .widget-wrapper ul {
	margin-bottom: 30px;
}

#sidebar .widget-wrapper ul ul {
	margin-bottom: 0;
}

#sidebar .widget-wrapper ul li {
	margin-bottom: 5px;
}
	
#sidebar .widget-wrapper ol {
	margin-bottom: 30px;
}

#sidebar .widget-wrapper ol li {
	margin-bottom: 5px;
}

#sidebar img {
	max-width: 100%;
	height: auto;
	display: block;
}



/* sidebar callout widget area (must load after #sidebar rules) */

#sidebar .widget-callout {
   	background: <?php echo $sidebar_callout_background_color; ?> !important;
	color: <?php echo $sidebar_callout_text_color; ?> !important;
	box-shadow: inset 0px 0px 0px 1px <?php echo $sidebar_callout_border_color; ?> !important;
}

#sidebar .widget-callout .widget-title {
	color: <?php echo $sidebar_callout_text_color; ?> !important;
}

#sidebar .widget-callout a {
	color: <?php echo $sidebar_callout_link_color; ?>;
}

@media screen and (max-width: 1200px) {
.cta-sidebar-callout {
	display: block;
	width: 100%;
	margin-top: 40px;
}
}

@media screen and (min-width: 1200px) {
.cta-sidebar-callout {
	display: block;
	width: 100%;
	margin-top: 40px;
}
}

.cta-sidebar-callout ul {
	margin: 0 !important;
	padding: 0 !important;
}
	
@media screen and (max-width: 1200px) {
.cta-sidebar-callout ul li {
	list-style-type: none;
	display: block;
	margin: 0;
	padding: 0;
	vertical-align: middle;
	text-align: center;
	}
}

@media screen and (min-width: 1200px) {
.cta-sidebar-callout ul li {
	list-style-type: none;
	display: block;
	margin: 0;
	padding: 0;
	vertical-align: middle;
	text-align: center;
	}
}

@media screen and (max-width: 1200px) {
.cta-sidebar-callout ul li a {
	width: 100%;
	font-size: 20px;
	font-weight: 600;
	color: <?php echo $sidebar_callout_link_color; ?> !important;
	padding: 10px 0px;
	text-decoration: none;
	display: block;
	background: transparent;
	margin-bottom: 0;
	box-shadow: inset 0px 0px 0px 1px <?php echo $sidebar_callout_cta_border_color; ?> !important;
	background: <?php echo $sidebar_callout_cta_background_color; ?> !important;
	}
}

@media screen and (min-width: 1200px) {
.cta-sidebar-callout ul li a {
	width: 100%;
	font-size: 20px;
	font-weight: 600;
	color: <?php echo $sidebar_callout_link_color; ?> !important;
	padding: 10px 0px;
	text-decoration: none;
	display: block;
	background: transparent;
	box-shadow: inset 0px 0px 0px 1px <?php echo $sidebar_callout_cta_border_color; ?> !important;
	background: <?php echo $sidebar_callout_cta_background_color; ?> !important;
	}
}

.cta-sidebar-callout ul li:hover a {
	color: <?php echo $sidebar_callout_hover_link_color; ?> !important;
	background: <?php echo $sidebar_callout_hover_background_color; ?> !important;
	box-shadow: none !important;
}


/* footer callout widget area */

#footer .widget-footer-callout {
   	background: <?php echo $footer_callout_background_color; ?> !important;
	color: <?php echo $footer_callout_text_color; ?> !important;
	box-shadow: inset 0px 0px 0px 1px <?php echo $footer_callout_border_color; ?> !important;
	padding: 40px;
}

#footer .widget-footer-callout .widget-title {
	color: <?php echo $footer_callout_text_color; ?> !important;
}

#footer .widget-footer-callout a {
	color: <?php echo $footer_callout_link_color; ?>;
}

#footer .widget-wrapper p:last-child {
	margin-bottom: 0;
}

@media screen and (max-width: 1200px) {
.cta-footer-callout {
	display: block;
	width: 100%;
	margin-top: 40px;
}
}

@media screen and (min-width: 1200px) {
.cta-footer-callout {
	display: block;
	width: 100%;
	margin-top: 40px;
}
}


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

@media screen and (max-width: 1200px) {
#home-premain-top {
	width: 100%;
	background: <?php echo $premain_top_background_color; ?>;
	color: <?php echo $premain_top_text_color; ?>;
	padding: 20px 20px;
	}
}

@media screen and (min-width: 1200px) {
#home-premain-top {
	width: 100%;
	margin: 0px auto;
	background: <?php echo $premain_top_background_color; ?>;
	color: <?php echo $premain_top_text_color; ?>;
	padding: 30px 0px;
	}
}

#home-premain-top a {
	color: <?php echo $premain_top_link_color; ?>;
	text-decoration: <?php echo $premain_top_link_decoration; ?>;
}


/* home-premain-bottom */

@media screen and (max-width: 1200px) {
#home-premain-bottom {
	width: 100%;
	background: <?php echo $premain_bottom_background_color; ?>;
	color: <?php echo $premain_bottom_text_color; ?>;
	padding: 20px 20px;
	}
}

@media screen and (min-width: 1200px) {
#home-premain-bottom {
	width: 100%;
	margin: 0px auto;
	background: <?php echo $premain_bottom_background_color; ?>;
	color: <?php echo $premain_bottom_text_color; ?>;
	padding: 30px 0px;
	}
}

#home-premain-bottom a {
	color: <?php echo $premain_bottom_link_color; ?>;
	text-decoration: <?php echo $premain_bottom_link_decoration; ?>;
}


/* home-postmain-top */

@media screen and (max-width: 1200px) {
#home-postmain-top {
	width: 100%;
	background: <?php echo $postmain_top_background_color; ?>;
	color: <?php echo $postmain_top_text_color; ?>;
	padding: 20px 20px;
	}
}

@media screen and (min-width: 1200px) {
#home-postmain-top {
	width: 100%;
	margin: 0px auto;
	background: <?php echo $postmain_top_background_color; ?>;
	color: <?php echo $postmain_top_text_color; ?>;
	padding: 30px 0px;
	}
}

@media screen and (max-width: 1200px) {
#home-postmain-top .inner {
	width: 100%;
	padding: 0px 0px;
	}
}

@media screen and (min-width: 1200px) {
#home-postmain-top .inner {
	width: 100%;
	display: grid;
	<?php if ( $home_postmain_top_columns == '1' ) { 
		echo "grid-template-columns: repeat(1, 1fr);\n"; 
	} elseif ( $home_postmain_top_columns == '2' ) { 
		echo "grid-template-columns: repeat(2, 1fr);\n"; 
	} elseif ( $home_postmain_top_columns == '3' ) { 
		echo "grid-template-columns: repeat(3, 1fr);\n"; 
	} elseif ( $home_postmain_top_columns == '4' ) { 
		echo "grid-template-columns: repeat(4, 1fr);\n"; 
	} elseif ( $home_postmain_top_columns == '5' ) { 
		echo "grid-template-columns: repeat(5, 1fr);\n"; 
	} elseif ( $home_postmain_top_columns == '6' ) { 
		echo "grid-template-columns: repeat(6, 1fr);\n"; 
	} elseif ( $home_postmain_top_columns == '7' ) { 
		echo "grid-template-columns: repeat(7, 1fr);\n"; 
	} elseif ( $home_postmain_top_columns == '8' ) { 
		echo "grid-template-columns: repeat(8, 1fr);\n"; } ?>
  	gap: 30px;
	}
}

#home-postmain-top a {
	color: <?php echo $postmain_top_link_color; ?>;
	text-decoration: <?php echo $postmain_top_link_decoration; ?>;
}


/* home-postmain-bottom */

@media screen and (max-width: 1200px) {
#home-postmain-bottom {
	width: 100%;
	background: <?php echo $postmain_bottom_background_color; ?>;
	color: <?php echo $postmain_bottom_text_color; ?>;
	padding: 20px 20px;
	}
}

@media screen and (min-width: 1200px) {
#home-postmain-bottom {
	width: 100%;
	margin: 0px auto;
	background: <?php echo $postmain_bottom_background_color; ?>;
	color: <?php echo $postmain_bottom_text_color; ?>;
	padding: 30px 0px;
	}
}

#home-postmain-bottom a {
	color: <?php echo $postmain_bottom_link_color; ?>;
	text-decoration: <?php echo $postmain_bottom_link_decoration; ?>;
}


/* prefooter-top */

@media screen and (max-width: 1200px) {
#prefooter-top {
	width: 100%;
	background: <?php echo $prefooter_top_background_color; ?>;
	color: <?php echo $prefooter_top_text_color; ?>;
	padding: 20px 20px;
	text-align: center;
	}
}

@media screen and (min-width: 1200px) {
#prefooter-top {
	width: 100%;
	margin: 0px auto;
	background: <?php echo $prefooter_top_background_color; ?>;
	color: <?php echo $prefooter_top_text_color; ?>;
	padding: 40px 0px;
	text-align: center;
	}
}

@media screen and (max-width: 1200px) {
#prefooter-top .inner {
	width: 100%;
	padding: 30px 20px;
	}
}

@media screen and (min-width: 1200px) {
#prefooter-top .inner {
	width: 100%;
	display: grid;
	<?php if ( $prefooter_top_columns == '1' ) { 
		echo "grid-template-columns: repeat(1, 1fr);\n"; 
	} elseif ( $prefooter_top_columns == '2' ) { 
		echo "grid-template-columns: repeat(2, 1fr);\n"; 
	} elseif ( $prefooter_top_columns == '3' ) { 
		echo "grid-template-columns: repeat(3, 1fr);\n"; 
	} elseif ( $prefooter_top_columns == '4' ) { 
		echo "grid-template-columns: repeat(4, 1fr);\n"; 
	} elseif ( $prefooter_top_columns == '5' ) { 
		echo "grid-template-columns: repeat(5, 1fr);\n"; 
	} elseif ( $prefooter_top_columns == '6' ) { 
		echo "grid-template-columns: repeat(6, 1fr);\n"; 
	} elseif ( $prefooter_top_columns == '7' ) { 
		echo "grid-template-columns: repeat(7, 1fr);\n"; 
	} elseif ( $prefooter_top_columns == '8' ) { 
		echo "grid-template-columns: repeat(8, 1fr);\n"; } ?>
  	gap: 30px;
	}
}

@media screen and (max-width: 1200px) {
#prefooter-top .widget-wrapper {
	width: 100%;
	margin-bottom: 30px;
	}
}

@media screen and (min-width: 1200px) {
#prefooter-top .widget-wrapper {
	max-width: 100%;
	display: inline-block;
	}
}
	
#prefooter-top a {
	color: <?php echo $prefooter_top_link_color; ?>;
	text-decoration: <?php echo $prefooter_top_link_decoration; ?>;
}


/* prefooter-bottom */

@media screen and (max-width: 1200px) {
#prefooter-bottom {
	width: 100%;
	background: <?php echo $prefooter_bottom_background_color; ?>;
	color: <?php echo $prefooter_bottom_text_color; ?>;
	padding: 30px 20px;
	text-align: center;
	}
}

@media screen and (min-width: 1200px) {
#prefooter-bottom {
	width: 100%;
	background: <?php echo $prefooter_bottom_background_color; ?>;
	color: <?php echo $prefooter_bottom_text_color; ?>;
	padding: 60px 0px;
	text-align: center;
	}
}

@media screen and (max-width: 1200px) {
#prefooter-bottom .inner {
	width: 100%;
	padding: 30px 20px;
	}
}

@media screen and (min-width: 1200px) {
#prefooter-bottom .inner {
	width: 100%;
	display: grid;
	<?php if ( $prefooter_bottom_columns == '1' ) { 
		echo "grid-template-columns: repeat(1, 1fr);\n"; 
	} elseif ( $prefooter_bottom_columns == '2' ) { 
		echo "grid-template-columns: repeat(2, 1fr);\n"; 
	} elseif ( $prefooter_bottom_columns == '3' ) { 
		echo "grid-template-columns: repeat(3, 1fr);\n"; 
	} elseif ( $prefooter_bottom_columns == '4' ) { 
		echo "grid-template-columns: repeat(4, 1fr);\n"; 
	} elseif ( $prefooter_bottom_columns == '5' ) { 
		echo "grid-template-columns: repeat(5, 1fr);\n"; 
	} elseif ( $prefooter_bottom_columns == '6' ) { 
		echo "grid-template-columns: repeat(6, 1fr);\n"; 
	} elseif ( $prefooter_bottom_columns == '7' ) { 
		echo "grid-template-columns: repeat(7, 1fr);\n"; 
	} elseif ( $prefooter_bottom_columns == '8' ) { 
		echo "grid-template-columns: repeat(8, 1fr);\n"; } ?>
  	gap: 30px;
	}
}

@media screen and (max-width: 1200px) {
#prefooter-bottom .widget-wrapper {
	width: 100%;
	margin-bottom: 30px;
	}
}

@media screen and (min-width: 1200px) {
#prefooter-bottom .widget-wrapper {
	max-width: 100%;
	display: inline-block;
	}
}

#prefooter-bottom a {
	color: <?php echo $prefooter_bottom_link_color; ?>;
	text-decoration: <?php echo $prefooter_bottom_link_decoration; ?>;
}


/* footer */

/* footer */

@media screen and (max-width: 1200px) {
#footer {
	width: 100%;
	padding: 20px 20px;
	font-size: <?php echo $footer_mobile_font_size; ?>px;
	background: <?php echo $footer_background_color; ?>;
	color: <?php echo $footer_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
#footer {
	width: 100%;
	margin: 0px auto;
	padding: 40px 0px;
	font-size: <?php echo $footer_desktop_font_size; ?>px;
	background: <?php echo $footer_background_color; ?>;
	color: <?php echo $footer_text_color; ?>;
	}
}

#footer .widget-wrapper{
    margin-bottom: 30px;
}
#footer .widget-wrapper:last-child{
    margin-bottom: 0;
}

#footer a {
	color: <?php echo $footer_link_color; ?>;
	text-decoration: <?php echo $footer_link_decoration; ?>;
}


/* footer column one (four unequal columns) */

@media screen and (max-width: 1200px) {
.footer-column-one-four-unequal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	padding: 0;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-one-four-unequal {
	float: left;
	width: 420px;
	display: inline-block;
    vertical-align: top;
	padding-right: 30px;
	}
}


/* footer column two, three, and four (four unequal columns) */

@media screen and (max-width: 1200px) {
.footer-column-two-four-unequal, .footer-column-three-four-unequal, .footer-column-four-four-unequal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-two-four-unequal, .footer-column-three-four-unequal, .footer-column-four-four-unequal {
	float: left;
	width: 260px;
	display: inline-block;
	vertical-align: top;
	padding-left: 60px;
	}
}


/* footer column one (four equal columns) */

@media screen and (max-width: 1200px) {
.footer-column-one-four-equal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	padding: 0;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-one-four-equal {
	float: left;
	width: 255px;
	display: inline-block;
    vertical-align: top;
	margin-right: 60px;
	}
}


/* footer column two (four equal columns) */

@media screen and (max-width: 1200px) {
.footer-column-two-four-equal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	padding: 0;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-two-four-equal {
	float: left;
	width: 255px;
	display: inline-block;
    vertical-align: top;
	margin-right: 60px;
	}
}


/* footer column three (four equal columns) */

@media screen and (max-width: 1200px) {
.footer-column-three-four-equal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	padding: 0;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-three-four-equal {
	float: left;
	width: 255px;
	display: inline-block;
    vertical-align: top;
	margin-right: 60px;
	}
}


/* footer column four (four equal columns) */

@media screen and (max-width: 1200px) {
.footer-column-four-four-equal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	padding: 0;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-four-four-equal {
	float: left;
	width: 255px;
	display: inline-block;
    vertical-align: top;
	margin-right: 0;
	}
}


/* footer column one (three unequal columns) */

@media screen and (max-width: 1200px) {
.footer-column-one-three-unequal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	padding: 0;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-one-three-unequal {
	float: left;
	width: 440px;
	display: inline-block;
    vertical-align: top;
	margin-right: 30px;
	}
}


/* footer column two (three unequal columns) */

@media screen and (max-width: 1200px) {
.footer-column-two-three-unequal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-two-three-unequal {
	float: left;
	width: 350px;
	display: inline-block;
	vertical-align: top;
	margin-right: 30px;
	}
}


/* footer column three (three unequal columns) */

@media screen and (max-width: 1200px) {
.footer-column-three-three-unequal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-three-three-unequal {
	float: left;
	width: 350px;
	display: inline-block;
	vertical-align: top;
	margin-right: 0;
	}
}


/* footer column one (three equal columns) */

@media screen and (max-width: 1200px) {
.footer-column-one-three-equal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	padding: 0;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-one-three-equal {
	float: left;
	width: 360px;
	display: inline-block;
    vertical-align: top;
	margin-right: 60px;
	}
}


/* footer column two (three equal columns) */

@media screen and (max-width: 1200px) {
.footer-column-two-three-equal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	padding: 0;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-two-three-equal {
	float: left;
	width: 360px;
	display: inline-block;
    vertical-align: top;
	margin-right: 60px;
	}
}


/* footer column three (three equal columns) */

@media screen and (max-width: 1200px) {
.footer-column-three-three-equal {
	width: 100%;
	display: block;
    vertical-align: top;
	margin-bottom: 30px;
	padding: 0;
	}
}

@media screen and (min-width: 1200px) {
.footer-column-three-three-equal {
	float: left;
	width: 360px;
	display: inline-block;
    vertical-align: top;
	margin-right: 0;
	}
}


/* footer ul */

#footer ul {
	margin-left: 10px;
}


/* copyright */
	
@media screen and (max-width: 1200px) {
#copyright {
	width: 100%;
	padding: 20px 20px;
	font-size: <?php echo $copyright_mobile_font_size; ?>px;
	line-height: 1;
	background: <?php echo $copyright_background_color; ?>;
	color: <?php echo $copyright_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
#copyright {
	display: table;
	width: 100%;
	padding: 20px 0px;
	font-size: <?php echo $copyright_desktop_font_size; ?>px;
	line-height: 1;
	background: <?php echo $copyright_background_color; ?>;
	color: <?php echo $copyright_text_color; ?>;
	}
}

#copyright a {
	color: <?php echo $copyright_link_color; ?>;
	text-decoration: <?php echo $copyright_link_decoration; ?>;
}

@media screen and (max-width: 1200px) {
.copyright-left {
	width: 100%;
	display: block;
    vertical-align: top;
	text-align: center;
	}
}

@media screen and (min-width: 1200px) {
.copyright-left {
	display: table-cell;
    vertical-align: middle;
	height: inherit;
	min-width: auto;
	white-space: nowrap;
	}
}

@media screen and (max-width: 1200px) {
.copyright-right {
	width: 100%;
	margin-top: 30px;
	display: block;
    vertical-align: top;
	text-align: center;
	}
}

@media screen and (min-width: 1200px) {
.copyright-right {
	width: 100%;
	display: table-cell;
    vertical-align: middle;
	height: inherit;
	text-align: right;
	}
}


/* copyright icons */

#copyright i {
	font-size: 20px;
	margin-left: 20px !important;
}

#copyright i:first-child {
	margin-left: 0;
}


/* copyright ul */

#copyright ul {
	margin: 0;
	list-style-type: none;
}

#copyright ul li {
	list-style-type: none;
	display: inline-block;
	margin: 0 0 0 10px;
}


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
	
form {
	margin: 0 !important;
	padding: 0 !important;
}
	
input, select {
	width: 100%;
	max-width: 100%;
	height: auto !important;
	min-height: auto !important;
	vertical-align: middle;
	font-weight: 400;
	line-height: 2;
	padding: 10px 20px !important;
	border: 0;
	outline: none;
	font-size: 16px;
	background: #ffffff;
	display: inline-block;
	box-shadow: inset 0px 0px 0px 1px <?php echo $breadcrumbs_text_color; ?>;
}

option {
	line-height: 1.5;
	padding: 0 !important;
	display: block;
	white-space: nowrap;
}

#topbar input, .hero-half input {
	box-shadow: none;
}

textarea {
	width: 100%;
	font-size: 18px;
	font-weight: 400;
	display: inline-block;
	padding: 10px 20px !important;
	background: #ffffff;
	border-radius: 0px;
	border: 0;
	box-shadow: inset 0px 0px 0px 1px #BDBDBD;
}

input[type="checkbox"] {
	width: auto;
	font-size: 18px;
	display: inline-block;
	outline: none;
	box-shadow: none;
}

input[type="submit"] {
	width: 100%;
	font-size: 18px;
	font-weight: 600;
	display: inline-block;
	padding: 10px 20px !important;
	background: <?php echo $default_link_color; ?>;
	text-decoration: none;
	color: #ffffff;
	border-radius: 0px;
	border: 0;
	cursor: pointer;
	box-shadow: none;
}
	
button[type="submit"]:hover, input[type="submit"]:hover {
	background: <?php echo $default_hover_color; ?> !important;
}


/* searchform.php style June 2024 */

.input-container {
	display: flex;
}

::placeholder {
	color: <?php echo $search_input_placeholder_color; ?>;
	opacity: 1;
}

.search-input {
	background: <?php echo $search_bar_background_color; ?>;
	color: <?php echo $search_input_text_color; ?>;
	vertical-align: middle;
	font-size: 16px;
	line-height: 2;
	padding: 10px 20px;
	border: 0;
	outline: none;
	box-shadow: inset 0 -1px 1px -1px <?php echo $search_bar_border_color; ?>, inset 0 1px 1px -1px <?php echo $search_bar_border_color; ?>, inset 1px 0 1px -1px <?php echo $search_bar_border_color; ?>;
}

.hero-main-mini .search-input {
	background: #ffffff !important;
	box-shadow: inset 0px 0px 0px 1px #ffffff !important;
}

.search-submit {
	background: #D500F9;
	color: #ffffff;
	vertical-align: middle;
	padding: 0 20px;
	border: 0;
	outline: none;
	cursor: pointer;
}

.search-submit:hover {
	background: #AB47BC;
}

.search-submit i {
	font-size: 24px;
}
	

/* search bar */

.searchinput::placeholder {
	color: <?php echo $search_input_placeholder_color; ?>;
}

.searchinput:focus {
  outline: none;
}


/* comments */

@media screen and (max-width: 1200px) {
#comments {
	margin-top: 0;
	padding: 20px;
	}
}

@media screen and (min-width: 1200px) {
#comments {
	margin-top: 40px;
	}
}

@media screen and (max-width: 1200px) {
#respond {
	margin-top: 0;
	padding: 20px;
	}
}

@media screen and (min-width: 1200px) {
#respond {
	margin-top: 40px;
	}
}

@media screen and (max-width: 1200px) {
p.akismet_comment_form_privacy_notice {
	padding: 0 20px;
	}
}

@media screen and (min-width: 1200px) {
p.akismet_comment_form_privacy_notice {
	padding: 0;
	}
}


/* search icon and full screen search */

.search-icon-wrapper {
	display: inline-block;
	padding-left: 30px;
	vertical-align: middle;
	text-align: center;
	cursor: pointer;
}

.search-icon-wrapper i {
	padding: 10px 0px;
	text-decoration: none !important;
	font-size: 24px;
}

#sidebar ul li {
	line-height: 2;
}


/**
* Background
*/
#full-screen-search {
    visibility: hidden;
    opacity: 0;
	position: static;
    width: 100%;
    height: 0;
    background: rgba(0,0,0,0.7);
    transition: opacity 0.1s linear;
	top: 0;
	left: 0;
	z-index: -1;
}

/**
* Display Full Screen Search when Open
*/
#full-screen-search.open {
    /**
    * Because we're using visibility and opacity for CSS transition support,
    * we define position: fixed; here so that the Full Screen Search doesn't block
    * the underlying HTML elements when not open
    */
	height: 100%;
    visibility: visible;
    opacity: 1;
	position: fixed;
	z-index: 999998;
}

/**
* Search Form
*/
#full-screen-search form {
    position: relative;
    width: 100%;
    height: 100%;
}

/**
* Close Button
*/
#full-screen-search button.close {
    position: absolute;
    z-index: 999999;
    top: 20px;
    right: 20px;
	padding: 0 !important;
	background: transparent;
    color: #ffffff;
    cursor: pointer;
}
	
#full-screen-search button.close i {
	font-size: 48px;
}

/**
* Search Form Div
*/
#full-screen-search form div {
    position: absolute;
    width: 50%;
    height: 100px;
    top: 50%;
    left: 50%;
    margin: -50px 0 0 -25%;
}

/**
* Search Form Input Placeholder Color
*/
#full-screen-search form div input::placeholder { 
    color: #ccc;
}

/**
* Search Form Input
*/
#full-screen-search form div input {
    width: 100%;
    height: 100px;
    background: #ffffff;
    padding: 20px;
    font-size: 36px;
    line-height: 60px;
	box-shadow: none;
}


/* back to top */

@media screen and (max-width: 1200px) {
.scrollup-wrapper {
	<?php if ( $scroll_to_top == 'none') { echo "display: none;"; } ?>
	margin-top: 20px;
	}
}
	
@media screen and (min-width: 1200px) {
.scrollup-wrapper {
	<?php if ( $scroll_to_top == 'mobile_only') { echo "display: none;"; } ?>
	margin-top: 30px;
	}
}

@media screen and (max-width: 1200px) {
.scrollup-link {
	display: block;
	width: 100%;
	cursor: pointer;
	font-size: <?php echo $back_to_top_mobile_font_size; ?>px;
	text-transform: <?php echo $back_to_top_text_transform; ?>;
	line-height: 1;
	padding: 10px 0px;
	color: rgba(255, 255, 255, 0.5);
	color: <?php echo $back_to_top_link_color; ?>;
	text-decoration: none !important;
	text-align: center;
	vertical-align: middle;
	background: rgba(0, 0, 0, 0.1);
	background: <?php echo $back_to_top_background_color; ?>;
	}
}
	
@media screen and (min-width: 1200px) {
.scrollup-link {
	display: block;
	width: 100%;
	cursor: pointer;
	font-size: <?php echo $back_to_top_desktop_font_size; ?>px;
	text-transform: <?php echo $back_to_top_text_transform; ?>;
	line-height: 1;
	padding: 10px 0px;
	color: rgba(255, 255, 255, 0.5);
	color: <?php echo $back_to_top_link_color; ?>;
	text-decoration: none !important;
	text-align: center;
	vertical-align: middle;
	background: rgba(0, 0, 0, 0.1);
	background: <?php echo $back_to_top_background_color; ?>;
	}
}

.scrollup-link:active, .scrollup-link:hover {
	background: rgba(0, 0, 0, 0.2);
	background: <?php echo $back_to_top_background_hover_color; ?>;
	color: #ffffff;
	color: <?php echo $back_to_top_link_color; ?>;
	outline: none !important;
}

	
/* bbpress */

.forums {
	border-radius: 0px;
}

#bbpress-forums ul.bbp-forums, #bbpress-forums ul.bbp-lead-topic, #bbpress-forums ul.bbp-replies, #bbpress-forums ul.bbp-search-results, #bbpress-forums ul.bbp-topics {
	border: none;
}

#bbpress-forums li.bbp-body ul.forum, #bbpress-forums li.bbp-body ul.topic {
	border-top: none;
}

div.bbp-forum-header, div.bbp-reply-header, div.bbp-topic-header {
    border-top: none;
    clear: both;
}

.bbp-template-notice {
	display: none;
}

.bbp-pagination-count {
	display: none;
}

li.bbp-header {
	margin: 0 !important;
	background: #ECEFF1 !important;
	font-size: 12px !important;
	font-weight: 600 !important;
	text-transform: uppercase !important;
	color: <?php echo $default_text_color; ?>;
}

li.bbp-body {
	background: #ffffff !important;
	color: #263238 !important;
}

li.bbp-footer {
	display: none;
}

	
.bbp-topic-title {
	font-size: 16px !important;
}

.bbp-reply-content p {
	font-size: 16px !important;
	line-height: 1.5 !important;
}

ul.forum {
	background: #FFF !important;
}

ul.topic {
	background: #FFF !important;
	padding: 20px !important;
}

ul.forum-titles {
	font-size: 16px !important;
}

.bbp-topic-voice-count {
visibility: hidden;
}

.bbp-topics-widget div {
	color: #607D8B;
}

.quicktags-toolbar input  {
	display: inline-block;
	width: auto;
	padding: 0 10px !important;
	margin: 0 !important;
	font-size: 12px !important;
	text-transform: uppercase;
	text-decoration: none;
	cursor: pointer;
	white-space: nowrap;
	line-height: 0 !important;
	background-color: transparent;
	border: 0px solid transparent;
	color: <?php echo $default_text_color; ?>;
}


/* woocommerce cart */

a.checkout-button {
	background: <?php echo $default_link_color; ?> !important;
}

a.checkout-button:hover {
	background: <?php echo $default_hover_color; ?> !important;
}

@media screen and (max-width: 1200px) {
	div.woocommerce-notices-wrapper {
		margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
	div.woocommerce-notices-wrapper {
		margin-bottom: 30px;
	}
}

div.woocommerce-notices-wrapper ul {
	margin: 0 !important;
	font-size: 18px !important;
}

div.coupon {
	display: flex;
}


/* woocommerce other */

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


/* woocommerce other */
	
.price {
	font-size: 24px !important;
	font-weight: 600 !important;
	color: <?php echo $woocommerce_price_text_color; ?> !important;
}

p.stock {
	font-size: 12px !important;
	font-weight: 400 !important;
	color: <?php echo $woocommerce_price_text_color; ?> !important;
}

.woocommerce .summary ul {
	margin-left: 0 !important;
}

.product_meta {
	display: block;
	font-size: 14px;
	margin-bottom: 30px;
	color: #607D8B;
}

.sku_wrapper {
	display: block;
}

.posted_in {
	display: block;
}


/* woocommerce add to cart form */

form.variations_form {
	display: block !important;
}

form.cart {
	display: flex;
}
	
div.single_variation_wrap {
	clear: both;
	display: flex;
}

table.variations {
	display: block;
	width: 100%;
	margin-bottom: 30px !important;
	border: 0;
}

form.cart input {
	vertical-align: middle;
	font-size: 16px;
	font-weight: 400;
	line-height: 2;
	text-align: center;
	margin-right: 5px;
	padding: 5px 0px !important;
	border: 0;
	outline: none;
	box-shadow: inset 0px 0px 0px 1px #BDBDBD;
}

form.cart button {
	vertical-align: middle;
	font-size: 16px !important;
	font-weight: 700 !important;
	padding: 0 20px;
	border: 0;
	outline: none;
	cursor: pointer;
	border-radius: 0 !important;
}


/* woocommerce login page */

.show-password-input {
	position: absolute !important;
	top: .4em !important;
}

.woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea {
    border: 1px solid #d3ced2 !important;
	padding: 5px 10px !important;
	box-shadow: inset 0px 0px 0px 0px #bdbdbd !important;
	font-size: 18px !important;
}

.woocommerce-form__input-checkbox {
	width: auto;
	box-shadow: inset 0px 0px 0px 0px #bdbdbd !important;
}


/* woocommerce */

/* shopping cart icon mobile */
.menu-mobile-wrapper i.shopping_cart {
	font-size: 36px;
}

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

@media screen and (max-width: 1200px) {
ul.product_list_widget {
	width: 100% !important;
	list-style-type:none;
  columns: 2;
  column-fill: balance;
	column-gap: 20px;
	}
}

@media screen and (min-width: 1200px) {
ul.product_list_widget {
	width: 100% !important;
	list-style-type:none;
    display: grid;
    grid-template-columns: repeat(auto-fill, 300px);
    grid-gap: 60px;
	grid-template-columns: auto auto auto auto;
	}
}

ul.product_list_widget li {
	height: 250px;
	position: relative;
}

ul.product_list_widget .product-title {
	width: 100%;
	font-size: 16px;
	bottom:0;
	position: absolute;
	display: block;
	padding: 10px;
	background: rgba(0, 0, 0, 0.7);
}

ul.product_list_widget .woocommerce-Price-amount {
	display: none;
	font-weight: 700;
}

ul.product_list_widget li img {
	display: block !important;
	margin-bottom: 10px;
	object-fit: cover;
	width: 100%;
	height: 100%;
	display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    border: 0px solid #263238;
}

ul.product_list_widget li a:before {
	content: "";
  width: 100%;
  height: 100%;
  position: absolute;
  background: rgba(0, 0, 0, 0.1);
}

ul.product_list_widget li a:hover:before {
	background: rgba(0, 0, 0, 0.0);
}


/* pagination */

.navigation {
	padding-top: 30px;
}

.navigation ul {
	margin: 0 !important;
}

.navigation li {
    display: inline-block;
}
  
.navigation li a,
.navigation li a:hover,
.navigation li.active a,
.navigation li.disabled {
    background-color: #ECEFF1;
	color: #263238;
    cursor: pointer;
    padding: 5px 10px;
	text-decoration: none;
	font-size: 14px;
	line-height: 1;
}
  
.navigation li a:hover,
.navigation li.active a {
	background-color: <?php echo $default_text_color; ?>;
	color: #ffffff;
}


/* mobile menu */

.nav-icon {
    outline: none !important;
}

.nav-icon:focus {
    outline: none !important;
}

@media screen and (max-width: 1200px) {
.mobile-nav {
	display: none;
	clear: both;
	width: 100%;
	list-style:none;
	background: #212121;
	padding: 20px;
	}

.mobile-nav ul li {
	font-size: 18px;
	list-style-type: none;
 	vertical-align: middle;
	display: block;
	margin: 0px;
	padding: 0px;
	border-bottom: 1px solid rgba(255,255,255, 0.2);
}

.mobile-nav ul li:last-child {
	border-bottom: 0;
}
	
.mobile-nav a {
	display: block;
	width: 100%;
	line-height:40px;
	color: #ffffff !important;
	font-size: 18px;
	text-decoration: none;
}

/* js will toggle this to display: block */
 .mobile-nav li > ul { display:none; width: 100%; position:relative; }

}

@media screen and (min-width: 1200px) {
.mobile-nav {
	display: none !important;
	}
}

@media screen and (max-width: 1200px) {
.menu-mobile-wrapper {
	display: inline-block;
	text-align: right;
 	vertical-align: middle;
	}
}
	
@media screen and (min-width: 1200px) {
.menu-mobile-wrapper {
 	display: none;	
	}
}

#header-full-hero .menu-mobile-wrapper i {
	font-size: 36px; /* correct */
	color: #ffffff; /* correct */
}


/* cart (desktop) */

.cart-icon-wrapper {
	display: inline-block;
	padding-left: 30px;
	vertical-align: middle;
	text-align: center;
}

.cart-icon-wrapper i {
	padding: 10px 0px;
	text-decoration: none !important;
	font-size: 24px;
	position: relative;
}

.notification-dot {
	position: relative;
	display: inline-block;
	background-color: #f44336;
  	border-radius: 50%;
  	top: -15px;
  	left: -1px;
	line-height: 1;
	font-size: 11px;
	font-weight: 700;
	color: #ffffff;
	padding: 2px 4px;
}


/* cart (mobile) */

.cart-button-offcanvas-wrapper {
	width: 100%;
	padding: 0 20px;
	margin-bottom: 20px;
}

.cart-button-offcanvas {
	width: 100%;
	text-align: center;
	font-size: 18px;
	font-weight: 700;
	display: inline-block;
	padding: 10px 0;
	background: transparent;
	text-decoration: none;
	color: #ffffff;
	border-radius: 0px;
	box-shadow: inset 0px 0px 0px 1px #ffffff;
	vertical-align: middle;
}

.cart-button-offcanvas i {
	padding-right: 10px !important;
	text-decoration: none !important;
}

.notification-dot-offcanvas {
	position: relative;
	display: inline-block;
	background-color: #f44336;
  	border-radius: 50%;
	line-height: 1;
	font-size: 11px;
	font-weight: 700;
	color: #ffffff;
	padding: 2px 4px;
	left: 5px;
	top: -5px;
}


/***************************/
/*start mobile menu overlay*/
/***************************/
.mobile-menu-trig {
	/*display: none;*/
}

.mobile-menu-trig:hover {
	cursor: pointer;
}

.overlay {   
	position: fixed; 
	overflow-x: hidden;
   	overflow-y: scroll;
   	overscroll-behavior: contain;
   	top: 0; right: 0; bottom: 0; left: 0; 

	height: 0;
  	z-index: 999999; 
  	background-color: rgba(0,0,0, 0.9); 
  	transition: 0.5s; 
}

.overlay-content {
	max-width: 768px;
	width: 100%; 
	height: 100%;
	
  	position: relative;
  	text-align: center; 
}

.overlay ul.menu {
	list-style: none;
	margin: 0;
	padding: 40px 0px;
}

.overlay ul a {
	display: block;
  	padding: 5px 0;
	font-size: 18px;
}

.overlay ul.sub-menu {
	list-style: none;
	margin-left: 0px;
	padding-left: 0px;
	font-style: italic;
}
	
.overlay a {
  	text-decoration: none;
  	color: #818181;
  	transition: 0.3s;
}

.overlay li.current-menu-item a {
	color: #ffffff;
}

.overlay a:hover, 
.overlay a:focus {
  	color: #f1f1f1;
  	text-decoration: none;
}

.overlay .closebtn i {
  	position: absolute;
  	top: 20px;
  	right: 20px;
  	font-size: 36px;
	z-index: 999999;
}

.overlay .closebtn i:hover,
.overlay .closebtn i:focus {
	text-decoration: none;
	outline: none;
}


	
@media screen and (max-width: 800px) {
	nav#site-navigation{
		display: none;
	}
	.mobile-menu-trig{
		display: inline;
	}

}
/*************************/
/*end mobile menu overlay*/
/*************************/
	
#offcanvas {
	top: 0;
	left: -100%;
	width: 100%;
	max-width: 75vw;
	background: <?php echo $offcanvas_background_color; ?>;
	color: <?php echo $default_text_color; ?>;
	height: 100%;
	position: fixed;
	z-index: 9997;
	overflow-y: auto;
	transform: translate3d(0, 0, 205px);
	transition: all 500ms ease-in-out;
	padding: 20px 0 0 0;

	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		font-weight: <?php echo $offcanvas_font_weight; ?>;
		font-size: <?php echo $offcanvas_font_size; ?>px;
		text-transform: <?php echo $offcanvas_menu_text_transform; ?>;

	li {
		border-top: 1px dotted rgba(0, 0, 0, 0.0980392);
		position: relative;
		width: 100%;
		user-select: none;
		margin: 0;
		padding: 0;

	a {
		color: rgba(0, 0, 0, 0.701961);
		padding: 7px 0 7px 20px;
		display: inline-block;
		width: calc(100% - 50px);
		text-decoration: none;
		vertical-align: middle;

		&:hover {
		text-decoration: none;
		}
	}
	
	&.current-menu-item a {
		font-weight: 600;
	}
		
	&.current-menu-item ul a {
		font-weight: 400;
	}
	
	a.menu-toggle {
		position: relative;
		width: 50px;
		text-align: center;
		vertical-align: middle;
		background: <?php echo $offcanvas_toggle_background_color; ?>;
		padding-left: 0;

	&:after {
		position: relative;
		right: 0;
		text-align: center;
		vertical-align: middle;
		font-family: FontAwesome;
		font-size: 12px;
		content: "\f078";
	}
	
	&:focus,
	&:hover,
	&:visited,
	&:link{
		border-bottom: 0;
		text-decoration: none;
		}
	
	&.rotate {
		transform: rotate(180deg);
		/* right: 1px; */
		}
	}
	}
	}

	ul.sub-menu {
		display: none;
		font-weight: <?php echo $offcanvas_font_weight; ?>;
		font-size: <?php echo $offcanvas_submenu_font_size; ?>px;
		background: <?php echo $offcanvas_toggle_background_color; ?>;
	}
	
	ul.sub-menu li {
		padding-left: 0px;
	}
}

#offcanvas.active {
	left: 0;
	transform: translate3d(0, 0, 0);
	transition: all 500ms ease-in-out;
}

.overlay-main {
	background-color: #000000c2;
	position: absolute;
	visibility: hidden;
	opacity: 0;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	transition: all 0.3s;
	z-index: 99;
}
	
.overlay-main.active {
	visibility: visible;
	opacity: 1;
}


</style>

<?php }
 
add_action( 'wp_head', 'hovercraft_generate_css' );

// https://codex.wordpress.org/Wrapping_Text_Around_Images
// https://blog.logrocket.com/guide-css-word-wrap-overflow-wrap-word-break/
