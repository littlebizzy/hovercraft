<?php

// css from customizer
function hovercraft_generate_css(){
	
	$url_header_image = esc_url( get_header_image() );
	
	if(isset($post->ID)) {
	$url_featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' );
        }
	
	if (!empty( $url_featured_image )) { 
		$hero_image = $url_featured_image; 
	} else { 
		$hero_image = $url_header_image; 
	}
    
	$hero_gradient_angle = get_theme_mod( 'hovercraft_hero_gradient_angle', '60deg' );
	$hero_gradient_start_color_transparency = get_theme_mod( 'hovercraft_hero_gradient_start_color_transparency', '0.50' );
	$hero_gradient_stop_color_transparency = get_theme_mod( 'hovercraft_hero_gradient_stop_color_transparency', '0.50' );
	$hero_content_width_desktop = get_theme_mod( 'hovercraft_hero_content_width_desktop', '900px' );
	$hero_gradient_start_color_length = get_theme_mod( 'hovercraft_hero_gradient_start_color_length', '30%' );
	$hero_gradient_stop_color_length = get_theme_mod( 'hovercraft_hero_gradient_stop_color_length', '100%' );
	$topbar_background_color = get_theme_mod( 'hovercraft_topbar_background_color', '#263238' );
	$topbar_font_color = get_theme_mod( 'hovercraft_topbar_font_color', '#ffffff' );
	$topbar_link_color = get_theme_mod( 'hovercraft_topbar_link_color', '#ffffff' );
	$hero_gradient_start_color = get_theme_mod( 'hovercraft_hero_gradient_start_color', '#37474f' );
	$hero_gradient_stop_color = get_theme_mod( 'hovercraft_hero_gradient_stop_color', '#ffffff' );
    $header_half_hero_background_color = get_theme_mod( 'hovercraft_header_half_hero_background_color', '#ffffff' ); 
    $header_mini_hero_background_color = get_theme_mod( 'hovercraft_header_mini_hero_background_color', '#ffffff' );
    $header_basic_background_color = get_theme_mod( 'hovercraft_header_basic_background_color', '#eceff1' );
    $prefooter_top_background_color = get_theme_mod( 'hovercraft_prefooter_top_background_color', '#eceff1' );
    $prefooter_bottom_background_color = get_theme_mod( 'hovercraft_prefooter_bottom_background_color', '#263238' );
    $footer_background_color = get_theme_mod( 'hovercraft_footer_background_color', '#eceff1' );
    $copyright_background_color = get_theme_mod( 'hovercraft_copyright_background_color', '#eceff1' );
     
    ?>

<style type="text/css" id="hovercraft_custom_css">
#topbar {
	background: <?php echo $topbar_background_color; ?>;
	color: <?php echo $topbar_font_color; ?>;
}

#topbar a {
	color: <?php echo $topbar_link_color; ?>;
}

.splash-wide {
	background: linear-gradient(<?php echo $hero_gradient_angle; ?>, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_start_color, "#%02x%02x%02x");
		echo "rgba($r1, $g1, $b1, $hero_gradient_start_color_transparency)"; 
		?> <?php echo $hero_gradient_start_color_length; ?>, <?php 
		list($r2, $g2, $b2) = sscanf($hero_gradient_stop_color, "#%02x%02x%02x");
		echo "rgba($r2, $g2, $b2, $hero_gradient_stop_color_transparency)"; 
		?> <?php echo $hero_gradient_stop_color_length; ?>), url(<?php echo $hero_image; ?>);
	background-position: center center;
	background-size: cover;
	background-repeat: no-repeat;
}

.splash-mini {
	background: linear-gradient(<?php echo $hero_gradient_angle; ?>, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_start_color, "#%02x%02x%02x");
		echo "rgba($r1, $g1, $b1, $hero_gradient_start_color_transparency)"; 
		?> <?php echo $hero_gradient_start_color_length; ?>, <?php 
		list($r2, $g2, $b2) = sscanf($hero_gradient_stop_color, "#%02x%02x%02x");
		echo "rgba($r2, $g2, $b2, $hero_gradient_stop_color_transparency)"; 
		?> <?php echo $hero_gradient_stop_color_length; ?>), url(<?php echo $hero_image; ?>);
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

@media screen and (min-width: 1200px) {
.welcome-wrapper {
	max-width: <?php echo $hero_content_width_desktop; ?>;
	}
}

#prefooter-top {
	background: <?php echo $prefooter_top_background_color; ?>;
}

#prefooter-bottom {
	background: <?php echo $prefooter_bottom_background_color; ?>;
}

#footer {
	background: <?php echo $footer_background_color; ?>;
}

#copyright {
	background: <?php echo $copyright_background_color; ?>;
}
</style>

<?php }
 
add_action( 'wp_head', 'hovercraft_generate_css' );
