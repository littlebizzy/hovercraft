<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for full hero
?>

<?php
// build full hero background image css
function hovercraft_get_hero_background(
    $gradient_tones,
    $gradient_angle,
    $gradient_start_color,
    $gradient_start_opacity,
    $gradient_start_position,
    $gradient_mid_color,
    $gradient_mid_opacity,
    $gradient_mid_position,
    $gradient_stop_color,
    $gradient_stop_opacity,
    $gradient_stop_position,
    $background_image_url
) {
    if ($gradient_tones === 'two_tones') {
        list($r1, $g1, $b1) = sscanf($gradient_start_color, "#%02x%02x%02x");
        $start = "rgba({$r1}, {$g1}, {$b1}, {$gradient_start_opacity}) {$gradient_start_position}%";

        list($r2, $g2, $b2) = sscanf($gradient_stop_color, "#%02x%02x%02x");
        $stop = "rgba({$r2}, {$g2}, {$b2}, {$gradient_stop_opacity}) {$gradient_stop_position}%";

        $background = "linear-gradient({$gradient_angle}, {$start}, {$stop})";
    } elseif ($gradient_tones === 'three_tones') {
        list($r1, $g1, $b1) = sscanf($gradient_start_color, "#%02x%02x%02x");
        $start = "rgba({$r1}, {$g1}, {$b1}, {$gradient_start_opacity}) {$gradient_start_position}%";

        list($r2, $g2, $b2) = sscanf($gradient_mid_color, "#%02x%02x%02x");
        $mid = "rgba({$r2}, {$g2}, {$b2}, {$gradient_mid_opacity}) {$gradient_mid_position}%";

        list($r3, $g3, $b3) = sscanf($gradient_stop_color, "#%02x%02x%02x");
        $stop = "rgba({$r3}, {$g3}, {$b3}, {$gradient_stop_opacity}) {$gradient_stop_position}%";

        $background = "linear-gradient({$gradient_angle}, {$start}, {$mid}, {$stop})";
    } else {
        return '';
    }

    if (!empty($background_image_url)) {
        $background .= ", url({$background_image_url})";
    }

    return $background;
}
?>

#header-full-hero .menu-desktop > .main-menu ul li ul li {
	background: <?php echo $default_text_color; ?>;
}

body.page-template-full-hero-no-sidebar #container,
body.page-template-full-hero-sidebar #container,
body.page-template-full-hero-columns-no-sidebar #container,
body.page-template-full-hero-gallery-no-sidebar #container,
body.page-template-full-hero-tiles-no-sidebar #container,
body.page-template-full-hero-tiles-sidebar #container {
	min-height: 100vh;
	min-height: 100svh;
	display: flex;
	flex-direction: column;
}

body.page-template-full-hero-no-sidebar #topbar,
body.page-template-full-hero-sidebar #topbar,
body.page-template-full-hero-columns-no-sidebar #topbar,
body.page-template-full-hero-gallery-no-sidebar #topbar,
body.page-template-full-hero-tiles-no-sidebar #topbar,
body.page-template-full-hero-tiles-sidebar #topbar {
	flex: 0 0 auto;
}

#hero-full-container {
	background: <?php echo hovercraft_get_hero_background(
		$hero_gradient_tones,
		$hero_gradient_angle,
		$hero_gradient_start_color,
		$hero_gradient_start_color_transparency,
		$hero_gradient_start_color_length,
		$hero_gradient_mid_color,
		$hero_gradient_mid_color_transparency,
		$hero_gradient_mid_color_length,
		$hero_gradient_stop_color,
		$hero_gradient_stop_color_transparency,
		$hero_gradient_stop_color_length,
		$hero_image
	); ?>;
	background-position: <?php echo str_replace( '_', ' ', $full_hero_background_position ); ?>;
	background-size: cover;
	background-repeat: no-repeat;
	width: 100%;
	padding: 0;
	position: relative;
	flex: 1 1 auto;
	min-height: 0;
	display: flex;
	flex-direction: column;
}

video.hero-background-video {
	width: 100%;
	height: 100%;
	object-fit: cover;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 0;
}

.hero-background-video-overlay {
	width: 100%;
	height: 100%;
	object-fit: cover;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 0;
	background: <?php echo hovercraft_get_hero_background(
		$hero_gradient_tones,
		$hero_gradient_angle,
		$hero_gradient_start_color,
		$hero_gradient_start_color_transparency,
		$hero_gradient_start_color_length,
		$hero_gradient_mid_color,
		$hero_gradient_mid_color_transparency,
		$hero_gradient_mid_color_length,
		$hero_gradient_stop_color,
		$hero_gradient_stop_color_transparency,
		$hero_gradient_stop_color_length,
		$hero_image
	); ?>;
	background-position: top center;
	background-size: cover;
	background-repeat: no-repeat;
}

.hero-full-wrapper {
	position: relative;
	z-index: 1;
	flex: 1 1 auto;
	min-height: 0;
	display: flex;
	align-items: center;
}

.hero-full {
	width: 100%;
}

.hero-full-main {
	width: 100%;
	position: relative;
}

#header-full-hero .main-menu ul li a {
	text-decoration: none;
	color: #ffffff;
}

#header-full-hero a {
	color: #ffffff;
}

#header-full-hero {
	width: 100%;
	background: <?php list( $r1, $g1, $b1 ) = sscanf( $full_hero_header_background_color, "#%02x%02x%02x" ); echo "rgba({$r1}, {$g1}, {$b1}, {$full_hero_header_background_transparency})"; ?>;
	position: relative;
	z-index: 1;
	flex: 0 0 auto;
	color: #ffffff;
}

#hero-full-container .hero-image-caption {
	z-index: 2;
}

@media screen and (max-width: 1199px) {
	#header-full-hero {
		padding: 10px 20px;
	}
}

@media screen and (min-width: 1200px) {
	#header-full-hero {
		margin: 0 auto;
		padding: 20px 0;
	}
}

h1.full-hero-title {
	margin-bottom: 30px;
	color: #ffffff;
	font-weight: 700;
}
