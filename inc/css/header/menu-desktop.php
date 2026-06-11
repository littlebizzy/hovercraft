<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for main menu
?>

@media screen and (max-width: 1199px) {
	.menu-desktop {
		display: none;
	}
}

@media screen and (min-width: 1200px) {
	.menu-desktop {
		display: block;
	}
}

/* main menu container */

.menu-desktop > .main-menu {
	display: inline-block;
}

.menu-desktop > .main-menu ul {
	display: inline-block;
	position: relative;
	margin: 0;
	padding: 0;
	list-style-type: none;
	text-align: right;
}

.menu-desktop > .main-menu ul li {
	display: inline-block;
	position: relative;
	vertical-align: middle;
	margin: 0;
	padding: 0;
}

/* main menu links */

.menu-desktop > .main-menu a {
	display: inline-block;
	padding-left: 32px;
	font-family: <?php echo hovercraft_format_css_font_family( $main_menu_font_family, $default_font_family ); ?>;
	font-size: <?php echo $main_menu_desktop_font_size; ?>px;
	font-weight: <?php echo $main_menu_font_weight; ?>;
	text-transform: <?php echo $main_menu_text_transform; ?>;
	text-decoration: none !important;
}

/* dropdown menus */

.menu-desktop > .main-menu ul ul {
	display: none;
	position: absolute;
	top: 100%;
	left: 0;
	min-width: 180px;
	max-width: 280px;
	width: max-content;
	padding: 0;
	box-shadow:
		-1px 8px 16px rgba(0, 0, 0, 0.04),
		 1px 8px 16px rgba(0, 0, 0, 0.04),
		 0 12px 16px rgba(0, 0, 0, 0.05);
}

.menu-desktop > .main-menu ul ul ul {
	top: 0;
	left: 100%;
	min-width: 180px;
	max-width: 280px;
	width: max-content;
	padding: 0;
	box-shadow:
		-1px 8px 16px rgba(0, 0, 0, 0.035),
		 1px 8px 16px rgba(0, 0, 0, 0.035),
		 0 8px 16px rgba(0, 0, 0, 0.045);
}

.menu-desktop > .main-menu li:hover > ul,
.menu-desktop > .main-menu li:focus-within > ul,
.menu-desktop > .main-menu li.open > ul {
	display: block;
	z-index: 100;
}

.menu-desktop > .main-menu ul ul li {
	display: block;
	width: 100%;
	text-align: left;
}

.menu-desktop > .main-menu ul ul a {
	display: block;
	padding: 16px 32px;
	line-height: 1.5;
	transition: background-color 0.2s ease;
}

/* dropdown toggles */

.menu-desktop > .main-menu .menu-item-has-children > a {
	position: relative;
}

.menu-desktop > .main-menu .menu-item-has-children > a .toggle {
	display: inline-flex;
	align-items: center;
	justify-content: center;
	margin-left: 8px;
	pointer-events: none;
	transition: transform 0.2s ease;
	transform: rotate(0deg);
	vertical-align: middle;
}

.menu-desktop > .main-menu .menu-item-has-children > a .toggle svg {
	display: block;
	width: 20px;
	height: 20px;
}

.menu-desktop > .main-menu .menu-item-has-children:hover > a .toggle,
.menu-desktop > .main-menu .menu-item-has-children:focus-within > a .toggle,
.menu-desktop > .main-menu .menu-item-has-children.open > a .toggle {
	transform: rotate(180deg);
}

/* light header dropdowns */

#header-basic .menu-desktop ul ul,
#header-mini-hero .menu-desktop ul ul,
#header-half-hero .menu-desktop ul ul {
	background-color: #ffffff;
}

#header-basic .menu-desktop ul ul a:hover,
#header-mini-hero .menu-desktop ul ul a:hover,
#header-half-hero .menu-desktop ul ul a:hover {
	background-color: #f5f5f5;
}

/* basic header */

#header-basic .menu-desktop > .main-menu > ul > li > a {
	color: <?php echo $header_basic_hero_text_color; ?>;
}

#header-basic .menu-desktop ul ul a {
	color: <?php echo $header_basic_hero_text_color; ?>;
}

/* mini hero header */

#header-mini-hero .menu-desktop > .main-menu > ul > li > a {
	color: <?php echo $mini_hero_header_text_color; ?>;
}

#header-mini-hero .menu-desktop ul ul a {
	color: <?php echo $mini_hero_header_text_color; ?>;
}

/* half hero header */

#header-half-hero .menu-desktop > .main-menu > ul > li > a {
	color: <?php echo $half_hero_text_color; ?>;
}

#header-half-hero .menu-desktop ul ul a {
	color: <?php echo $half_hero_text_color; ?>;
}

/* full hero header */

#header-full-hero .menu-desktop > .main-menu > ul > li > a {
	color: #ffffff;
}

#header-full-hero .menu-desktop ul ul {
	background-color: <?php echo $full_hero_header_background_color; ?>;
}

#header-full-hero .menu-desktop ul ul a {
	color: #ffffff;
}

#header-full-hero .menu-desktop ul ul a:hover {
	background-color: <?php echo $full_hero_header_background_color; ?>;
}
