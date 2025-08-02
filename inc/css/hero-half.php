<?php
// styles for half hero
?>

#header-half-hero .menu-desktop > .main-menu ul li ul li { background: <?php echo $half_hero_background_color; ?>; }

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

#header-half-hero .main-menu ul li a {
	text-decoration: none;
	color: <?php echo $half_hero_link_color; ?>;
}

#header-half-hero a {
	color: <?php echo $half_hero_link_color; ?>;
}

@media screen and (max-width: 1200px) {
	#header-half-hero {
		width: 100%;
		display: table;
		padding: 10px 20px;
		color: <?php echo $half_hero_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
	#header-half-hero {
		width: 100%;
		display: table;
		margin: 0px auto;
		padding: 20px 0px;
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
