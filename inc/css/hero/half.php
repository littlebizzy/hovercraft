<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for half hero
?>

#header-half-hero .menu-desktop > .main-menu ul li ul li {
	background: <?php echo $half_hero_background_color; ?>;
}

#header-half-hero a {
	color: <?php echo $half_hero_header_link_color; ?>;
}

#half-hero-viewport {
	min-height: 50vh;
	min-height: 50svh;
	display: flex;
	flex-direction: column;
}

#half-hero-viewport #topbar {
	flex: 0 0 auto;
}

#hero-half-container {
	width: 100%;
	padding: 0;
	position: relative;
	flex: 1 1 auto;
	min-height: 0;
	display: flex;
	flex-direction: column;
}

.hero-half-wrapper {
	flex: 1 1 auto;
	min-height: 0;
	display: flex;
}

.hero-half {
	width: 100%;
	position: relative;
	display: flex;
	align-items: center;
}

.hero-half {
<?php if ( $hero_gradient_tones == 'two_tones' ) : ?>
	background: linear-gradient(<?php echo $hero_gradient_angle; ?>, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_start_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_start_color_transparency})"; 
		?> <?php echo $hero_gradient_start_color_length; ?>%, <?php 
		list($r2, $g2, $b2) = sscanf($hero_gradient_stop_color, "#%02x%02x%02x");
		echo "rgba({$r2}, {$g2}, {$b2}, {$hero_gradient_stop_color_transparency})"; 
		?> <?php echo $hero_gradient_stop_color_length; ?>%)<?php if ( ! empty( $hero_image ) ) : ?>, url(<?php echo $hero_image; ?>)<?php endif; // end hero image ?>;
<?php elseif ( $hero_gradient_tones == 'three_tones' ) : ?>
	background: linear-gradient(<?php echo $hero_gradient_angle; ?>, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_start_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_start_color_transparency})"; 
		?> <?php echo $hero_gradient_start_color_length; ?>%, <?php 
		list($r1, $g1, $b1) = sscanf($hero_gradient_mid_color, "#%02x%02x%02x");
		echo "rgba({$r1}, {$g1}, {$b1}, {$hero_gradient_mid_color_transparency})"; 
		?> <?php echo $hero_gradient_mid_color_length; ?>%, <?php 
		list($r2, $g2, $b2) = sscanf($hero_gradient_stop_color, "#%02x%02x%02x");
		echo "rgba({$r2}, {$g2}, {$b2}, {$hero_gradient_stop_color_transparency})"; 
		?> <?php echo $hero_gradient_stop_color_length; ?>%)<?php if ( ! empty( $hero_image ) ) : ?>, url(<?php echo $hero_image; ?>)<?php endif; // end hero image ?>;
<?php endif; // end hero-gradient-tones ?>
	background-position: <?php echo str_replace( '_', ' ', $half_hero_background_position ); ?>;
	background-size: cover;
	background-repeat: no-repeat;
}

.hero-half .hero-caption {
	position: absolute;
	right: 0;
	bottom: 0;
	left: 0;
	z-index: 1;
}

#header-half-hero {
	width: 100%;
	flex: 0 0 auto;
	background: <?php echo $half_hero_background_color; ?>;
	color: <?php echo $half_hero_text_color; ?>;
}

#header-half-hero .menu-mobile-wrapper i {
	margin-left: 20px;
	font-size: 36px;
	color: <?php echo $default_text_color; ?>;
}

#header-half-hero .main-menu ul li a {
	text-decoration: none;
	color: <?php echo $half_hero_link_color; ?>;
}

#header-half-hero a {
	color: <?php echo $half_hero_link_color; ?>;
}

@media screen and (max-width: 1199px) {
	#header-half-hero {
		padding: 10px 20px;
	}
}

@media screen and (min-width: 1200px) {
	#header-half-hero {
		margin: 0 auto;
		padding: 20px 0;
	}
}

h1.half-hero-title {
	margin-bottom: 30px;
	color: #ffffff;
	font-weight: 700;
}
