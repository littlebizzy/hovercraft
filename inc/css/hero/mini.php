<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for mini hero
?>

#header-mini-hero .menu-desktop > .main-menu ul li ul li {
	background: <?php echo $mini_hero_background_color; ?>;
}

#hero-mini {
	width: 100%;
	padding: 0;
	display: block;
}

.hero-main-mini {
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
	background-position: <?php echo str_replace( '_', ' ', $mini_hero_background_position ); ?>;
	background-size: cover;
	background-repeat: no-repeat;
	position: relative;
}

@media screen and (max-width: 1199px) {
	.hero-main-mini {
		padding: 60px 20px;
	}
}

@media screen and (min-width: 1200px) {
	.hero-main-mini {
		padding: <?php echo $mini_hero_vertical_padding; ?>px 0;
	}
}

#hero-mini .hero-image-caption {
	z-index: 2;
}

#header-mini-hero {
	width: 100%;
	display: block;
	background: <?php echo $mini_hero_background_color; ?>;
	color: <?php echo $mini_hero_header_text_color; ?>;
}

@media screen and (max-width: 1199px) {
	#header-mini-hero {
		padding: 10px 20px;
	}
}

@media screen and (min-width: 1200px) {
	#header-mini-hero {
		margin: 0 auto;
		padding: 20px 0;
	}
}

h1.mini-hero-title {
	margin-bottom: 0;
	color: #ffffff;
	font-weight: 700;
}

.hero-main-mini .search-input {
	background: #ffffff !important;
	box-shadow: inset 0 0 0 1px #ffffff !important;
}

@media screen and (max-width: 1199px) {
	#header-mini-hero .menu-mobile-wrapper i {
		margin-left: 20px;
		font-size: 36px;
		color: <?php echo $mini_hero_header_text_color; ?>;
	}
}

#header-mini-hero a {
	color: <?php echo $mini_hero_header_link_color; ?>;
}

#header-mini-hero .main-menu ul li a {
	text-decoration: none;
	color: <?php echo $mini_hero_header_link_color; ?>;
}
