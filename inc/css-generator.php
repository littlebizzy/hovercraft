<?php

// css from customizer
function hovercraft_generate_css(){
	$url_hero_video = wp_get_attachment_url( get_theme_mod( 'hovercraft_video' ) ); 
	$url_header_image = esc_url( get_header_image() );
	$url_featured_image = wp_get_attachment_url( get_post_thumbnail_id(), 'large' ); 
	
	if (!empty( $url_featured_image )) { 
		$hero_image = $url_featured_image; 
	} else { 
		$hero_image = $url_header_image; 
	}
    
	$hero_gradient_tones = get_theme_mod( 'hovercraft_hero_gradient_tones', 'two_tones' );
	$mini_hero_vertical_padding = get_theme_mod( 'hovercraft_mini_hero_vertical_padding', '80' );
	$basic_hero_header_link_color = get_theme_mod( 'hovercraft_basic_hero_header_link_color', '#263238' );
	$basic_hero_header_text_color = get_theme_mod( 'hovercraft_basic_hero_header_text_color', '#263238' );
	$mini_hero_header_link_color = get_theme_mod( 'hovercraft_mini_hero_header_link_color', '#263238' );
	$mini_hero_header_text_color = get_theme_mod( 'hovercraft_mini_hero_header_text_color', '#263238' );
	$full_hero_background_position = get_theme_mod( 'hovercraft_full_hero_background_position', 'center_center' );
	$half_hero_background_position = get_theme_mod( 'hovercraft_half_hero_background_position', 'center_center' );
	$mini_hero_background_position = get_theme_mod( 'hovercraft_mini_hero_background_position', 'center_center' );
	$sitewide_layout = get_theme_mod( 'hovercraft_sitewide_layout', 'floating_islands' );
	$tiles_across = get_theme_mod( 'hovercraft_tiles_across', '3' );
	$columns_across = get_theme_mod( 'hovercraft_columns_across', '4' );
	$scroll_to_top = get_theme_mod( 'hovercraft_scroll_to_top', 'mobile_only' );
	$mobile_topbar_widget = get_theme_mod( 'hovercraft_mobile_topbar', 'topbar_left' );
	$mobile_preheader_widget = get_theme_mod( 'hovercraft_mobile_preheader', 'none' );
	$desktop_logo_width = get_theme_mod( 'hovercraft_desktop_logo_width', '150' );
	$mobile_logo_width = get_theme_mod( 'hovercraft_mobile_logo_width', '100' );
	$default_font_family = get_theme_mod( 'hovercraft_default_font', 'noto_sans' );
	$default_desktop_font_size = get_theme_mod( 'hovercraft_default_desktop_font_size', '16' );
	$default_mobile_font_size = get_theme_mod( 'hovercraft_default_mobile_font_size', '16' );
	$site_name_font_family = get_theme_mod( 'hovercraft_site_name_font', 'noto_sans' );
	$site_name_mobile_font_size = get_theme_mod( 'hovercraft_site_name_mobile_font_size', '24' );
	$site_name_desktop_font_size = get_theme_mod( 'hovercraft_site_name_desktop_font_size', '36' );
	$tagline_display = get_theme_mod( 'hovercraft_tagline_display', 'right_of_site_title' );
	$site_name_font_weight = get_theme_mod( 'hovercraft_site_name_font_weight', '700' );
	$main_menu_font_family = get_theme_mod( 'hovercraft_main_menu_font', 'noto_sans' );
	$main_menu_desktop_font_size = get_theme_mod( 'hovercraft_main_menu_desktop_font_size', '18' );
	$main_menu_font_weight = get_theme_mod( 'hovercraft_main_menu_font_weight', '600' );
	$after_byline_mobile_font_size = get_theme_mod( 'hovercraft_after_byline_mobile_font_size', '12' );
	$after_byline_desktop_font_size = get_theme_mod( 'hovercraft_after_byline_desktop_font_size', '12' );
	$after_byline_padding = get_theme_mod( 'hovercraft_after_byline_padding', '0' );
	$after_byline_background_color = get_theme_mod( 'hovercraft_after_byline_background_color', '#fff8e1' );
	$h1_font_family = get_theme_mod( 'hovercraft_h1_font', 'noto_sans' );
	$h1_mobile_font_size = get_theme_mod( 'hovercraft_h1_mobile_font_size', '36' );
	$h1_desktop_font_size = get_theme_mod( 'hovercraft_h1_desktop_font_size', '48' );
	$h1_font_weight = get_theme_mod( 'hovercraft_h1_font_weight', '700' );
	$h2_font_family = get_theme_mod( 'hovercraft_h2_font', 'noto_sans' );
	$h2_mobile_font_size = get_theme_mod( 'hovercraft_h2_mobile_font_size', '30' );
	$h2_desktop_font_size = get_theme_mod( 'hovercraft_h2_desktop_font_size', '36' );
	$h2_font_weight = get_theme_mod( 'hovercraft_h2_font_weight', '700' );
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
	$default_text_color = get_theme_mod( 'hovercraft_default_text_color', '#263238' );
	$default_link_color = get_theme_mod( 'hovercraft_default_link_color', '#5C6BC0' );
	$default_link_decoration = get_theme_mod( 'hovercraft_default_link_decoration', 'underline' );
	$default_hover_color = get_theme_mod( 'hovercraft_default_hover_color', '#283593' );
	$topbar_background_color = get_theme_mod( 'hovercraft_topbar_background_color', '#263238' );
	$topbar_text_color = get_theme_mod( 'hovercraft_topbar_text_color', '#ffffff' );
	$topbar_link_color = get_theme_mod( 'hovercraft_topbar_link_color', '#ffffff' );
	$topbar_link_decoration = get_theme_mod( 'hovercraft_topbar_link_decoration', 'underline' );
	$hero_gradient_start_color = get_theme_mod( 'hovercraft_hero_gradient_start_color', '#37474f' );
	$hero_gradient_mid_color = get_theme_mod( 'hovercraft_hero_gradient_mid_color', '#37474f' );
	$hero_gradient_stop_color = get_theme_mod( 'hovercraft_hero_gradient_stop_color', '#ffffff' );
    $header_half_hero_background_color = get_theme_mod( 'hovercraft_header_half_hero_background_color', '#ffffff' ); 
    $header_mini_hero_background_color = get_theme_mod( 'hovercraft_header_mini_hero_background_color', '#ffffff' );
    $header_basic_background_color = get_theme_mod( 'hovercraft_header_basic_background_color', '#ffffff' );
	$posthero_background_color = get_theme_mod( 'hovercraft_posthero_background_color', '#eceff1' );
	$posthero_text_color = get_theme_mod( 'hovercraft_posthero_text_color', '#263238' );
	$posthero_link_color = get_theme_mod( 'hovercraft_posthero_link_color', '#5C6BC0' );
	$posthero_link_decoration = get_theme_mod( 'hovercraft_posthero_link_decoration', 'underline' );
	$postcolumns_top_background_color = get_theme_mod( 'hovercraft_postcolumns_top_background_color', '#eceff1' );
	$postcolumns_top_text_color = get_theme_mod( 'hovercraft_postcolumns_top_text_color', '#263238' );
	$postcolumns_bottom_background_color = get_theme_mod( 'hovercraft_postcolumns_bottom_background_color', '#eceff1' );
	$postcolumns_bottom_text_color = get_theme_mod( 'hovercraft_postcolumns_bottom_text_color', '#263238' );
	$sidebar_callout_background_color = get_theme_mod( 'hovercraft_sidebar_callout_background_color', '#283593' );
	$sidebar_callout_text_color = get_theme_mod( 'hovercraft_sidebar_callout_text_color', '#ffffff' );
	$sidebar_callout_link_color = get_theme_mod( 'hovercraft_sidebar_callout_link_color', '#ffffff' );
	$sidebar_widget_background_color = get_theme_mod( 'hovercraft_sidebar_widget_background_color', '#ffffff' );
	$sidebar_widget_text_color = get_theme_mod( 'hovercraft_sidebar_widget_text_color', '#263238' );
	$sidebar_widget_link_color = get_theme_mod( 'hovercraft_sidebar_widget_link_color', '#5C6BC0' );
	$main_background_color = get_theme_mod( 'hovercraft_main_background_color', '#eceff1' );
	$postmain_top_background_color = get_theme_mod( 'hovercraft_postmain_top_background_color', '#eceff1' );
	$postmain_top_text_color = get_theme_mod( 'hovercraft_postmain_top_text_color', '#263238' );
	$postmain_top_link_color = get_theme_mod( 'hovercraft_postmain_top_link_color', '#5C6BC0' );
	$postmain_top_link_decoration = get_theme_mod( 'hovercraft_postmain_top_link_decoration', 'underline' );
	$postmain_bottom_background_color = get_theme_mod( 'hovercraft_postmain_bottom_background_color', '#eceff1' );
	$postmain_bottom_text_color = get_theme_mod( 'hovercraft_postmain_bottom_text_color', '#263238' );
	$postmain_bottom_link_color = get_theme_mod( 'hovercraft_postmain_bottom_link_color', '#5C6BC0' );
	$postmain_bottom_link_decoration = get_theme_mod( 'hovercraft_postmain_bottom_link_decoration', 'underline' );
	$premain_top_background_color = get_theme_mod( 'hovercraft_premain_top_background_color', '#eceff1' );
	$premain_top_text_color = get_theme_mod( 'hovercraft_premain_top_text_color', '#263238' );
	$premain_top_link_color = get_theme_mod( 'hovercraft_premain_top_link_color', '#5C6BC0' );
	$premain_top_link_decoration = get_theme_mod( 'hovercraft_premain_top_link_decoration', 'underline' );
	$premain_bottom_background_color = get_theme_mod( 'hovercraft_premain_bottom_background_color', '#eceff1' );
	$premain_bottom_text_color = get_theme_mod( 'hovercraft_premain_bottom_text_color', '#263238' );
	$premain_bottom_link_color = get_theme_mod( 'hovercraft_premain_bottom_link_color', '#5C6BC0' );
	$premain_bottom_link_decoration = get_theme_mod( 'hovercraft_premain_bottom_link_decoration', 'underline' );
    $prefooter_top_background_color = get_theme_mod( 'hovercraft_prefooter_top_background_color', '#eceff1' );
	$prefooter_top_text_color = get_theme_mod( 'hovercraft_prefooter_top_text_color', '#263238' );
	$prefooter_top_link_color = get_theme_mod( 'hovercraft_prefooter_top_link_color', '#5C6BC0' );
	$prefooter_top_link_decoration = get_theme_mod( 'hovercraft_prefooter_top_link_decoration', 'underline' );
    $prefooter_bottom_background_color = get_theme_mod( 'hovercraft_prefooter_bottom_background_color', '#263238' );
	$prefooter_bottom_text_color = get_theme_mod( 'hovercraft_prefooter_bottom_text_color', '#ffffff' );
	$prefooter_bottom_link_color = get_theme_mod( 'hovercraft_prefooter_bottom_link_color', '#5C6BC0' );
	$prefooter_bottom_link_decoration = get_theme_mod( 'hovercraft_prefooter_bottom_link_decoration', 'underline' );
    $footer_background_color = get_theme_mod( 'hovercraft_footer_background_color', '#ffffff' );
	$footer_text_color = get_theme_mod( 'hovercraft_footer_text_color', '#263238' );
	$footer_link_color = get_theme_mod( 'hovercraft_footer_link_color', '#5C6BC0' );
	$footer_link_decoration = get_theme_mod( 'hovercraft_footer_link_decoration', 'underline' );
    $copyright_background_color = get_theme_mod( 'hovercraft_copyright_background_color', '#ffffff' );
	$copyright_text_color = get_theme_mod( 'hovercraft_copyright_text_color', '#263238' );
	$copyright_link_color = get_theme_mod( 'hovercraft_copyright_link_color', '#5C6BC0' );
	$copyright_link_decoration = get_theme_mod( 'hovercraft_copyright_link_decoration', 'underline' );
    ?>

<style type="text/css" id="hovercraft_custom_css">
@media screen and (max-width: 1200px) {
html, body {
	font-family: <?php echo ucwords(str_replace("_", " ", $default_font_family)); ?>;
	font-size: <?php echo $default_mobile_font_size; ?>px;
	color: <?php echo $default_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
html, body {
	font-family: <?php echo ucwords(str_replace("_", " ", $default_font_family)); ?>;
	font-size: <?php echo $default_desktop_font_size; ?>px;
	color: <?php echo $default_text_color; ?>;
	}
}


/* misc */

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

strong {
	font-weight: 700;
}

em {
    font-style: italic;
}

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

ul {
	list-style-position: inside;
}

ol {
	list-style-position: inside;
}

li {
	margin-bottom: 5px;
}

ol > li::marker {
  font-weight: 700;
}

iframe {
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

#content-wrapper iframe {
	aspect-ratio: 16 / 9;
}

#footer iframe {
	aspect-ratio: 1 / 1.5;
}

.tags {
	font-size: 14px;
	color: #607D8B;
}


/* after byline (widget area) */

@media screen and (max-width: 1200px) {
.after-byline {
	background: <?php echo $after_byline_background_color; ?>;
	font-size: <?php echo $after_byline_mobile_font_size; ?>px;
	padding: <?php echo $after_byline_padding; ?>px;
	margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
.after-byline {
	background: <?php echo $after_byline_background_color; ?>;
	font-size: <?php echo $after_byline_desktop_font_size; ?>px;
	padding: <?php echo $after_byline_padding; ?>px;
	margin-bottom: 30px;
	}
}

.after-byline p:last-child {
	margin-bottom: 0;
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
	color: <?php echo $default_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
#header-half-hero {
	width: 100%;
	display: table;
	margin: 0px auto;
	padding: 20px 0px;
	background: #ffffff;
	color: <?php echo $default_text_color; ?>;
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

@media screen and (max-width: 1200px) {
.site-title {
	font-family: <?php echo ucwords(str_replace("_", " ", $site_name_font_family)); ?>;
	font-weight: <?php echo $site_name_font_weight; ?>;
	font-size: <?php echo $site_name_mobile_font_size; ?>px;
	line-height: 1; /* because site-tagline is hidden on mobile */
	display: block;
	}
}

@media screen and (min-width: 1200px) {
.site-title {
	font-family: <?php echo ucwords(str_replace("_", " ", $site_name_font_family)); ?>;
	font-weight: <?php echo $site_name_font_weight; ?>;
	font-size: <?php echo $site_name_desktop_font_size; ?>px;
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

@media screen and (max-width: 1200px) {
.tagline {
	font-size: 14px;
	line-height: 1.5;
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
	font-size: 14px;
	line-height: 1.5;
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
	color: #ffffff;
	}
}

@media screen and (min-width: 1200px) {
.hero-snippet {
	font-size: 18px;
	color: #ffffff;
	}
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
	margin-bottom: 20px;
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
	margin-bottom: 20px;
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
	border: 0;
	cursor: pointer;
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
	padding: 30px 20px;
	}
}

@media screen and (min-width: 1200px) {
#tiles-wide {
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
.tile {
	width: 100%;
	margin-bottom: 30px;
	padding: 30px;
	text-align: center;
	box-shadow: inset 0px 0px 0px 1px <?php echo $default_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.tile {
	max-width: 100%;
	padding: 30px;
  	justify-content: center;
  	align-items: center;
	text-align: center;
	box-shadow: inset 0px 0px 0px 1px <?php echo $default_text_color; ?>;
	display: inline-block;
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

#bullets p {
	font-size: 14px;
	margin-bottom: 40px;
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
	
/* Change this in order to change the Dropdown symbol */
.menu-item-has-children > a:after { 
	font-family: "Material Icons";
	font-size: 24px;
	content:  ' \e5cf'; 
	vertical-align: middle;
}

.main-menu li > a:only-child:after { 
	content: ''; 
}

	
#header-full-hero .menu-desktop > .main-menu ul li ul li { background: <?php echo $default_text_color; ?>; }
	
#header-half-hero .menu-desktop > .main-menu ul li ul li { background: #ffffff; }

#header-mini-hero .menu-desktop > .main-menu ul li ul li { background: #ffffff; }
	
#header-basic .menu-desktop > .main-menu ul li ul li { background: <?php echo $header_basic_background_color; ?>; }



	
#header-full-hero .main-menu ul li a {
	text-decoration: none;
	color: #ffffff; /* correct */
}



#header-full-hero a {
	color: #ffffff; /* correct */
}

#header-half-hero .main-menu ul li a {
	text-decoration: none;
	color: <?php echo $default_text_color; ?>;
}

#header-half-hero a {
	color: <?php echo $default_text_color; ?>;
}

#header-mini-hero .main-menu ul li a {
	text-decoration: none;
	color: <?php echo $mini_hero_header_link_color; ?>;
}

#header-basic .main-menu ul li a {
	text-decoration: none;
	color: <?php echo $basic_hero_header_link_color; ?>;
}


/* topbar */

@media screen and (max-width: 1200px) {
#topbar {
	width: 100%;
	padding: 10px 20px;
	font-size: 14px;
	line-height: 1.5;
	background: <?php echo $topbar_background_color; ?>;
	color: <?php echo $topbar_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
#topbar {
	width: 100%;
	padding: 10px 0px;
	font-size: 14px;
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
	background: <?php echo $header_half_hero_background_color; ?>;
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
	background: <?php echo $header_mini_hero_background_color; ?>;
	color: <?php echo $mini_hero_header_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
#header-mini-hero {
	width: 100%;
	display: table;
	margin: 0px auto;
	padding: 20px 0px;
	background: <?php echo $header_mini_hero_background_color; ?>;
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
	background: <?php echo $header_basic_background_color; ?>;
	color: <?php echo $basic_hero_header_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
#header-basic {
	width: 100%;
	display: table;
	margin: 0px auto;
	padding: 20px 0px;
	background: <?php echo $header_basic_background_color; ?>;
	color: <?php echo $basic_hero_header_text_color; ?>;
	}
}

#header-basic .menu-mobile-wrapper i {
	margin-left: 20px;
	font-size: 36px;
	color: <?php echo $basic_hero_header_text_color; ?>;
}

#header-basic a {
	color: <?php echo $basic_hero_header_link_color; ?>;
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
	padding: 30px 0px;
	background: <?php echo $main_background_color; ?>;
	<?php if ( $sitewide_layout == 'floating_islands' ) { 
			echo "background: $main_background_color;\n"; 
		} else { 
			echo "background: #ffffff;\n"; 
		}  ?>
	}
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


/* featured images */

@media screen and (max-width: 1200px) {
img.featured-image {
	width: 100%;
	height: auto;
	display: block;
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
	}
}

@media screen and (max-width: 1200px) {
.featured-image-wrapper {
	position: relative;
	width: 100%;
	height: auto;
	}
}

@media screen and (min-width: 1200px) {
.featured-image-wrapper {
	position: relative;
	width: 768px;
	height: auto;
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
	color: #607D8B;
	white-space: normal;
	}
}

@media screen and (min-width: 1200px) {
.breadcrumbs {
	margin-bottom: 40px;
	font-size: 14px;
	line-height: 20px !important;
	color: #607D8B;
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
	color: #607D8B;
}


/* content */

@media screen and (max-width: 1200px) {
#content-wrapper {
	background: #ffffff;
	}
}
	
@media screen and (min-width: 1200px) {
#content-wrapper {
	background: #ffffff;
	}
}

@media screen and (max-width: 1200px) {
#content-wrapper {
	background: #ffffff;
	}
}
	
@media screen and (min-width: 1200px) {
#content-wrapper {
	background: #ffffff;
	}
}

#content-wrapper ul {
	margin-left: 30px;
	margin-bottom: 30px;
}

#content-wrapper ol {
	margin-left: 30px;
	margin-bottom: 30px;
}

#content-wrapper ol li {
	margin-bottom: 15px;
}
	

/* content-wide */

@media screen and (max-width: 1200px) {
#content-wide {
	padding: 0px;
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
			echo "padding: 40px 40px 40px 0px;\n"; 
		}  ?>
	display: block;
	overflow: hidden;
	overflow-wrap: break-word;
	}
}

	
/* content-padded */

@media screen and (max-width: 1200px) {
#content-padded {
	padding: 20px;
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
			echo "padding: 40px 40px 40px 0px;\n"; 
		}  ?>
	display: block;
	overflow: hidden;
	overflow-wrap: break-word;
	}
}
	
#content-padded img {
	margin-bottom: 30px;
	max-width: 100%;
	height: auto;
	display: block;
}

#content-padded iframe {
	margin-bottom: 30px;
	max-width: 100%;
	height: auto;
	display: block;
}

.wp-caption {
	max-width: 100%;
	height: auto;
	display: block;
}
	
.wp-caption img {
	margin-bottom: 0;
}

.wp-caption-text {
    text-align: left;
    font-size: 12px;
	line-height: 2;
    color: #444;
}

/* author biography */

.author-biography {
	margin: 40px 0px;
	padding: 40px;
	border: 1px solid #ccc;
	border-radius: 0px;
}

.author-biography p {
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
	box-shadow: inset 0px 0px 0px 1px <?php echo $default_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.column {
	max-width: 100%;
	padding: 30px;
  	justify-content: center;
  	align-items: center;
	text-align: center;
	box-shadow: inset 0px 0px 0px 1px <?php echo $default_text_color; ?>;
	display: inline-block;
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


/* sidebar callout */

#sidebar .widget-callout {
   	background: <?php echo $sidebar_callout_background_color; ?> !important;
	color: <?php echo $sidebar_callout_text_color; ?> !important;
}
	
#sidebar .widget-callout a {
	color: <?php echo $sidebar_callout_link_color; ?> !important;
}

@media screen and (max-width: 1200px) {
.cta-sidebar-callout {
	display: block;
	width: 100%;
	margin-top: 20px;
}
}

@media screen and (min-width: 1200px) {
.cta-sidebar-callout {
	display: block;
	width: 100%;
	margin-top: 30px;
}
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
	color: <?php echo $sidebar_callout_text_color; ?>;
	padding: 10px 0px;
	text-decoration: none;
	display: block;
	background: transparent;
	margin-bottom: 0;
	box-shadow: inset 0px 0px 0px 1px <?php echo $sidebar_callout_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.cta-sidebar-callout ul li a {
	width: 100%;
	font-size: 20px;
	font-weight: 600;
	color: <?php echo $sidebar_callout_text_color; ?>;
	padding: 10px 0px;
	text-decoration: none;
	display: block;
	background: transparent;
	box-shadow: inset 0px 0px 0px 1px <?php echo $sidebar_callout_text_color; ?>;
	}
}

.cta-sidebar-callout ul li:hover a {
	color: <?php echo $default_text_color; ?> !important;
	background: <?php echo $sidebar_callout_text_color; ?>;
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
}

#sidebar .widget-wrapper a {
	color: <?php echo $sidebar_widget_link_color; ?>;
}

@media screen and (max-width: 1200px) {
	#sidebar .widget-wrapper:not(:last-child) {
    margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
	#sidebar .widget-wrapper:not(:last-child) {
    margin-bottom: 40px;
	}
}

#sidebar .widget-wrapper p:last-child {
	margin-bottom: 0;
}

#sidebar ol li {
	margin-bottom: 15px;
}

#sidebar img {
	max-width: 100%;
	height: auto;
	display: block;
}


/* widgets */
	
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
	background: <?php echo $footer_background_color; ?>;
	color: <?php echo $footer_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
#footer {
	width: 100%;
	margin: 0px auto;
	padding: 40px 0px;
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

#copyright {
	background: <?php echo $copyright_background_color; ?>;
	color: <?php echo $copyright_text_color; ?>;
}

#copyright a {
	color: <?php echo $copyright_link_color; ?>;
	text-decoration: <?php echo $copyright_link_decoration; ?>;
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


/* copyright icons */

#copyright i {
	font-size: 24px;
	margin-left: 20px !important;
}

#copyright i:first-child {
	margin-left: 0;
}


/* other stuff */
	
form {
	padding: 0 !important;
}
	
button[type="submit"] {
	font-weight: 600;
	background: <?php echo $default_link_color; ?> !important;
	text-decoration: none;
	color: #ffffff;
	border-radius: 0px;
	border: 0;
	cursor: pointer;
}
	
input, select {
	width: 100%;
	font-size: 18px;
	font-weight: 400;
	display: inline-block;
	padding: 10px 20px !important;
	background: #ffffff;
	border-radius: 0px;
	border: 0;
	outline: none;
	box-shadow: inset 0px 0px 0px 1px #BDBDBD;
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


/* search bar */

.searchinput::placeholder {
	color: #78909C;
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
    height: 100%;
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


/* scroll-to-top */

@media screen and (max-width: 1200px) {
.scrollup-wrapper {
	<?php if ( $scroll_to_top == 'none') { echo "display: none;"; } ?>
	margin-top: 20px;
	}
}
	
@media screen and (min-width: 1200px) {
.scrollup-wrapper {
	<?php if ( $scroll_to_top == 'mobile_only') { echo "display: none;"; } ?>
	margin-top: 20px;
	}
}

.scrollup-link {
	display: block;
	width: 100%;
	
	cursor: pointer;
	font-size: 14px;
	line-height: 1;
	padding: 10px 0px;
	color: rgba(255, 255, 255, 0.5) !important;
	text-decoration: none !important;
	text-align: center;
	vertical-align: middle;
	background: rgba(0, 0, 0, 0.1);
	border-radius: 0px;
}

.scrollup-link:active, .scrollup-link:hover {
	background: rgba(0, 0, 0, 0.2);
	color: #ffffff !important;
	outline: none !important;
	-webkit-tap-highlight-color: transparent;
}

.scrollup-wrapper i {
	font-size: 14px !important;
	line-height: 1 !important;
	vertical-align: middle;
}

.scrollup-wrapper i:first-child {
	margin-left: 10px !important;
}

	
/* bbpress */

.forums {
	border-radius: 0px;
}

#bbpress-forums ul.bbp-forums, #bbpress-forums ul.bbp-lead-topic, #bbpress-forums ul.bbp-replies, #bbpress-forums ul.bbp-search-results, #bbpress-forums ul.bbp-topics {
	border: 1px solid #BDBDBD;
}

#bbpress-forums li.bbp-body ul.forum, #bbpress-forums li.bbp-body ul.topic {
	border-top: 1px solid #BDBDBD;
}

.bbp-template-notice {
	display: none;
}

.bbp-pagination-count {
	display: none;
}

.bbp-header {
	background: #ECEFF1 !important;
	color: #263238 !important;
}

.bbp-body {
	background: #FFF !important;
	color: #263238 !important;
}

.bbp-footer {
	display: none;
}

.bbp-topic-title {
	font-size: 16px !important;
}

.bbp-reply-content {
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


/* woocommerce */

.woocommerce-result-count {
	font-size: 16px;
	font-weight: 600;
}

ul.products {
	margin: 0px !important;
	padding: 30px 0 0 0 !important;
}

select {
	width: 100%;
	font-size: 16px;
	font-weight: 400;
	display: inline-block;
	padding: 10px 47px 10px 20px;
	background: #ffffff;
	border-radius: 0px;
	border: 0;
	box-shadow: inset 0px 0px 0px 1px #263238;
	background: transparent;
	outline: none;
	appearance: none;
}

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

.price {
	font-size: 24px !important;
	font-weight: 700 !important;
	color: #00C853 !important;
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

form.cart {
	margin-bottom: 30px !important;
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

</style>

<?php }
 
add_action( 'wp_head', 'hovercraft_generate_css' );

// https://codex.wordpress.org/Wrapping_Text_Around_Images
// https://blog.logrocket.com/guide-css-word-wrap-overflow-wrap-word-break/
