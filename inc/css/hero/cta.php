<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for hero ctas
?>

/* hero cta primary */

.cta-hero-wrapper {
	margin-top: 30px;
}

@media screen and (max-width: 1199px) {
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

.cta-hero-primary ul li,
.cta-hero-secondary ul li {
	list-style-type: none;
	margin: 0;
	padding: 0;
	vertical-align: middle;
	text-align: center;
}

@media screen and (max-width: 1199px) {
	.cta-hero-primary ul li,
	.cta-hero-secondary ul li {
		display: block;
	}
}

@media screen and (min-width: 1200px) {
	.cta-hero-primary ul li,
	.cta-hero-secondary ul li {
		display: inline-block;
	}
}

.cta-hero-primary ul li a {
	font-family: <?php echo hovercraft_format_css_font_family( $main_menu_font_family, $default_font_family ); ?>;
	font-size: 20px;
	font-weight: 700;
	color: #ffffff;
	text-decoration: none;
	background: <?php echo $default_link_color; ?>;
}

@media screen and (max-width: 1199px) {
	.cta-hero-primary ul li a {
		width: 100%;
		padding: 10px 0;
		display: block;
		margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
	.cta-hero-primary ul li a {
		<?php if ( has_nav_menu( 'cta-hero-secondary' ) ) { echo "width: 200px;"; } else { echo "width: auto;"; } ?>
		<?php if ( has_nav_menu( 'cta-hero-secondary' ) ) { echo "padding: 10px 0;"; } else { echo "padding: 10px 20px;"; } ?>
		display: inline-block;
	}
}

.cta-hero-primary ul li a:hover {
	background: <?php echo $default_hover_color; ?>;
}

/* hero cta secondary */

@media screen and (max-width: 1199px) {
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

.cta-hero-secondary ul li a {
	font-family: <?php echo hovercraft_format_css_font_family( $main_menu_font_family, $default_font_family ); ?>;
	font-size: 20px;
	font-weight: 400;
	color: #ffffff;
	padding: 10px 0;
	text-decoration: none;
	background: transparent;
	box-shadow: inset 0 0 0 1px #ffffff;
}

@media screen and (max-width: 1199px) {
	.cta-hero-secondary ul li a {
		width: 100%;
		display: block;
		margin-bottom: 0;
	}
}

@media screen and (min-width: 1200px) {
	.cta-hero-secondary ul li a {
		width: 200px;
		display: inline-block;
	}
}

.cta-hero-secondary ul li:hover a {
	color: <?php echo $default_text_color; ?>;
	background: #ffffff;
}
