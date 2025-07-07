<?php
// styles for hero ctas
?>

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
