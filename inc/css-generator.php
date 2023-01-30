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
    
	$default_font_family = get_theme_mod( 'hovercraft_default_font', 'noto_sans' );
	$site_name_font_family = get_theme_mod( 'hovercraft_site_name_font', 'noto_sans' );
	$site_name_font_weight = get_theme_mod( 'hovercraft_site_name_font_weight', '700' );
	$hero_gradient_angle = get_theme_mod( 'hovercraft_hero_gradient_angle', '60deg' );
	$hero_gradient_start_color_transparency = get_theme_mod( 'hovercraft_hero_gradient_start_color_transparency', '0.50' );
	$hero_gradient_stop_color_transparency = get_theme_mod( 'hovercraft_hero_gradient_stop_color_transparency', '0.50' );
	$hero_gradient_start_color_length = get_theme_mod( 'hovercraft_hero_gradient_start_color_length', '30' );
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
	$hero_gradient_stop_color = get_theme_mod( 'hovercraft_hero_gradient_stop_color', '#ffffff' );
    $header_half_hero_background_color = get_theme_mod( 'hovercraft_header_half_hero_background_color', '#ffffff' ); 
    $header_mini_hero_background_color = get_theme_mod( 'hovercraft_header_mini_hero_background_color', '#ffffff' );
    $header_basic_background_color = get_theme_mod( 'hovercraft_header_basic_background_color', '#eceff1' );
	$main_begin_background_color = get_theme_mod( 'hovercraft_main_begin_background_color', '#eceff1' );
	$main_begin_text_color = get_theme_mod( 'hovercraft_main_begin_text_color', '#263238' );
	$main_begin_link_color = get_theme_mod( 'hovercraft_main_begin_link_color', '#5C6BC0' );
	$main_begin_link_decoration = get_theme_mod( 'hovercraft_main_begin_link_decoration', 'underline' );
    $prefooter_top_background_color = get_theme_mod( 'hovercraft_prefooter_top_background_color', '#eceff1' );
	$prefooter_top_text_color = get_theme_mod( 'hovercraft_prefooter_top_text_color', '#263238' );
	$prefooter_top_link_color = get_theme_mod( 'hovercraft_prefooter_top_link_color', '#5C6BC0' );
	$prefooter_top_link_decoration = get_theme_mod( 'hovercraft_prefooter_top_link_decoration', 'underline' );
    $prefooter_bottom_background_color = get_theme_mod( 'hovercraft_prefooter_bottom_background_color', '#263238' );
	$prefooter_bottom_text_color = get_theme_mod( 'hovercraft_prefooter_bottom_text_color', '#ffffff' );
	$prefooter_bottom_link_color = get_theme_mod( 'hovercraft_prefooter_bottom_link_color', '#5C6BC0' );
	$prefooter_bottom_link_decoration = get_theme_mod( 'hovercraft_prefooter_bottom_link_decoration', 'underline' );
    $footer_background_color = get_theme_mod( 'hovercraft_footer_background_color', '#eceff1' );
	$footer_text_color = get_theme_mod( 'hovercraft_footer_text_color', '#263238' );
	$footer_link_color = get_theme_mod( 'hovercraft_footer_link_color', '#5C6BC0' );
	$footer_link_decoration = get_theme_mod( 'hovercraft_footer_link_decoration', 'underline' );
    $copyright_background_color = get_theme_mod( 'hovercraft_copyright_background_color', '#eceff1' );
	$copyright_text_color = get_theme_mod( 'hovercraft_copyright_text_color', '#263238' );
	$copyright_link_color = get_theme_mod( 'hovercraft_copyright_link_color', '#5C6BC0' );
	$copyright_link_decoration = get_theme_mod( 'hovercraft_copyright_link_decoration', 'underline' );
     
    ?>

<style type="text/css" id="hovercraft_custom_css">
html, body {
	font-family: <?php echo ucwords(str_replace("_", " ", $default_font_family)); ?>;
	color: <?php echo $default_text_color; ?>;
}

.site-name {
	font-family: <?php echo ucwords(str_replace("_", " ", $site_name_font_family)); ?>;
	font-weight: <?php echo $site_name_font_weight; ?>;
}

a {
	color: <?php echo $default_link_color; ?>;
	text-decoration: <?php echo $default_link_decoration; ?>;
}
	
.cta-hero-primary ul li a {
	background: <?php echo $default_link_color; ?>;
}
	
a:hover {
	color: <?php echo $default_hover_color; ?>;
}
	
.cta-hero-primary ul li a:hover {
	background: <?php echo $default_hover_color; ?>;
}
	
.tile i {
	color: <?php echo $default_hover_color; ?>;
}

#topbar {
	background: <?php echo $topbar_background_color; ?>;
	color: <?php echo $topbar_text_color; ?>;
}

#topbar a {
	color: <?php echo $topbar_link_color; ?>;
	text-decoration: <?php echo $topbar_link_decoration; ?>;
}

#hero-full-container {
	background: linear-gradient(<?php echo $hero_gradient_angle; ?>, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_start_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_start_color_transparency})"; 
		?> <?php echo $hero_gradient_start_color_length; ?>%, <?php 
		list($r2, $g2, $b2) = sscanf($hero_gradient_stop_color, "#%02x%02x%02x");
		echo "rgba({$r2}, {$g2}, {$b2}, {$hero_gradient_stop_color_transparency})"; 
		?> <?php echo $hero_gradient_stop_color_length; ?>%)<?php if (!empty( $hero_image )) echo ", url({$hero_image})" ?>;
	background-position: center center;
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
	background: linear-gradient(<?php echo $hero_gradient_angle; ?>, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_start_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_start_color_transparency})"; 
		?> <?php echo $hero_gradient_start_color_length; ?>%, <?php 
		list($r2, $g2, $b2) = sscanf($hero_gradient_stop_color, "#%02x%02x%02x");
		echo "rgba({$r2}, {$g2}, {$b2}, {$hero_gradient_stop_color_transparency})"; 
		?> <?php echo $hero_gradient_stop_color_length; ?>%);
	background-position: top center;
	background-size: cover;
	background-repeat: no-repeat;
}
	
.hero-half {
	background: linear-gradient(<?php echo $hero_gradient_angle; ?>, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_start_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_start_color_transparency})"; 
		?> <?php echo $hero_gradient_start_color_length; ?>%, <?php 
		list($r2, $g2, $b2) = sscanf($hero_gradient_stop_color, "#%02x%02x%02x");
		echo "rgba({$r2}, {$g2}, {$b2}, {$hero_gradient_stop_color_transparency})"; 
		?> <?php echo $hero_gradient_stop_color_length; ?>%)<?php if (!empty( $hero_image )) echo ", url({$hero_image})" ?>;
	background-position: top center;
	background-size: cover;
	background-repeat: no-repeat;
}

#hero-mini {
	background: linear-gradient(<?php echo $hero_gradient_angle; ?>, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_start_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_start_color_transparency})"; 
		?> <?php echo $hero_gradient_start_color_length; ?>%, <?php 
		list($r2, $g2, $b2) = sscanf($hero_gradient_stop_color, "#%02x%02x%02x");
		echo "rgba({$r2}, {$g2}, {$b2}, {$hero_gradient_stop_color_transparency})"; 
		?> <?php echo $hero_gradient_stop_color_length; ?>%)<?php if (!empty( $hero_image )) echo ", url({$hero_image})" ?>;
	background-position: center center;
	background-size: cover;
	background-repeat: no-repeat;
}
	
.hero-main-mini {
	background: linear-gradient(<?php echo $hero_gradient_angle; ?>, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_start_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_start_color_transparency})"; 
		?> <?php echo $hero_gradient_start_color_length; ?>%, <?php 
		list($r2, $g2, $b2) = sscanf($hero_gradient_stop_color, "#%02x%02x%02x");
		echo "rgba({$r2}, {$g2}, {$b2}, {$hero_gradient_stop_color_transparency})"; 
		?> <?php echo $hero_gradient_stop_color_length; ?>%), url(<?php echo $hero_image; ?>);
	background-position: center center;
	background-size: cover;
	background-repeat: no-repeat;
}

#header-half-hero {
	background: <?php echo $header_half_hero_background_color; ?>;
}

#header-mini-hero {
	background: <?php echo $header_mini_hero_background_color; ?>;
}

#header-basic {
	background: <?php echo $header_basic_background_color; ?>;
}
	
.cta-header-primary ul li a {
	font-size: 18px;
	font-weight: 700;
	display: inline-block;
	padding: 10px 20px;
	background: <?php echo $default_link_color; ?>;
	text-decoration: none !important;
	border-radius: 5px;
}

.cta-header-primary ul li a:hover {
	background: <?php echo $default_hover_color; ?>;
}

@media screen and (min-width: 1200px) {
.welcome-wrapper {
	max-width: <?php echo $hero_content_width_desktop; ?>;
	}
}
	
.main-begin {
	background: <?php echo $main_begin_background_color; ?>;
	color: <?php echo $main_begin_text_color; ?>;
}

.main-begin a {
	color: <?php echo $main_begin_link_color; ?>;
	text-decoration: <?php echo $main_begin_link_decoration; ?>;
}

#prefooter-top {
	background: <?php echo $prefooter_top_background_color; ?>;
	color: <?php echo $prefooter_top_text_color; ?>;
}
	
#prefooter-top a {
	color: <?php echo $prefooter_top_link_color; ?>;
	text-decoration: <?php echo $prefooter_top_link_decoration; ?>;
}

#prefooter-bottom {
	background: <?php echo $prefooter_bottom_background_color; ?>;
	color: <?php echo $prefooter_bottom_text_color; ?>;
}
	
#prefooter-bottom a {
	color: <?php echo $prefooter_bottom_link_color; ?>;
	text-decoration: <?php echo $prefooter_bottom_link_decoration; ?>;
}

#footer {
	background: <?php echo $footer_background_color; ?>;
	color: <?php echo $footer_text_color; ?>;
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
	
form {
	padding: 0 !important;
}

textarea {
	width: 100%;
	font-size: 18px;
	font-weight: 400;
	display: inline-block;
	padding: 10px 20px !important;
	background: #ffffff;
	border-radius: 5px;
	border: 0;
	box-shadow: inset 0px 0px 0px 1px #BDBDBD;
}
	
select {
	width: 100%;
	font-size: 18px;
	font-weight: 400;
	display: inline-block;
	background: #ffffff;
	border-radius: 5px;
	border: 0;
	outline: none;
	box-shadow: inset 0px 0px 0px 1px #BDBDBD;
}
	
input[type="text"], input[type="email"], select {
	width: 100%;
	font-size: 18px;
	font-weight: 400;
	display: inline-block;
	padding: 10px 20px !important;
	background: #ffffff;
	border-radius: 5px;
	border: 0;
	outline: none;
	box-shadow: inset 0px 0px 0px 1px #BDBDBD;
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
	border-radius: 5px;
	border: 0;
	cursor: pointer;
}
	
input[type="submit"]:hover {
	background: <?php echo $default_hover_color; ?>;
}
</style>

<?php }
 
add_action( 'wp_head', 'hovercraft_generate_css' );
