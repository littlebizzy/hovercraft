<?php
// styles for main menu
?>

/* hide desktop menu on mobile and tablet */
@media screen and (max-width: 1199px) {
	.menu-desktop {
		display: none;
	}
}

/* show desktop menu on large screens */
@media screen and (min-width: 1200px) {
	.menu-desktop {
		display: block;
	}
}

/* wrapper for the desktop main menu container */
.menu-desktop > .main-menu {
	display: inline-block;
}

/* base styles for all main menu unordered lists */
.menu-desktop > .main-menu ul {
	margin: 0;
	padding: 0;
	list-style-type: none;
	position: relative;
	text-align: right;
	display: inline-block;
}

/* base styles for all main menu list items */
.menu-desktop > .main-menu ul li {
	margin: 0;
	padding: 0;
	display: inline-block;
	vertical-align: middle;
	position: relative;
}

/* hide all dropdown menus by default */
.menu-desktop > .main-menu ul ul,
.menu-desktop > .main-menu ul ul ul {
	display: none;
	position: absolute;
}

/* display dropdown when parent li has open class */
.menu-desktop > .main-menu li.open > ul {
	display: block;
	z-index: 100;
}

/* position and layout for first tier dropdown */
.menu-desktop > .main-menu ul ul {
	top: 100%;
	left: 0;
	min-width: 180px;
	max-width: 280px;
	width: max-content;
	padding: 0;
	box-shadow:
		-1px 10px 16px rgba(0, 0, 0, 0.04),
		 1px 10px 16px rgba(0, 0, 0, 0.04),
		 0 12px 16px rgba(0, 0, 0, 0.05);
}

/* position and layout for second tier dropdown */
.menu-desktop > .main-menu ul ul ul {
	top: 0;
	left: 100%;
	min-width: 180px;
	max-width: 280px;
	width: max-content;
	padding: 0;
	box-shadow:
		-1px 8px 14px rgba(0, 0, 0, 0.035),
		 1px 8px 14px rgba(0, 0, 0, 0.035),
		 0 10px 14px rgba(0, 0, 0, 0.045);
}

/* layout for dropdown list items */
.menu-desktop > .main-menu ul ul li {
	width: 100%;
	display: block;
	text-align: left;
}

/* base styles for all main menu links */
.menu-desktop > .main-menu a {
	font-family: <?php 
		echo !empty($main_menu_font_family) 
			? ucwords(str_replace("_", " ", $main_menu_font_family)) 
			: (!empty($default_font_family) 
				? ucwords(str_replace("_", " ", $default_font_family)) 
				: 'sans-serif'); 
	?>;
	font-size: <?php echo $main_menu_desktop_font_size; ?>px;
	text-transform: <?php echo $main_menu_text_transform; ?>;
	font-weight: <?php echo $main_menu_font_weight; ?>;
	display: inline-block;
	padding-left: 30px;
	text-decoration: none !important;
}

/* layout for submenu link elements */
.menu-desktop > .main-menu ul ul a,
.menu-desktop > .main-menu ul ul ul a {
	display: block;
	transition: background-color 0.2s ease;
	padding: 15px 30px;
	line-height: 1.5;
}

/* hover styles applied by header specific rules */
.menu-desktop > .main-menu ul ul a:hover,
.menu-desktop > .main-menu ul ul ul a:hover {}

/* anchor for positioning child indicators */
.menu-desktop > .main-menu .menu-item-has-children > a {
	position: relative;
}

/* base styles for submenu toggle arrow */
.menu-desktop > .main-menu .menu-item-has-children > a .toggle {
	display: inline-block;
	margin-left: 10px;
	font-family: FontAwesome;
	font-size: 0.75em;
	pointer-events: none;
	transition: transform 0.2s ease;
	transform: rotate(0deg);
}

/* rotate toggle arrow when submenu is open */
.menu-desktop > .main-menu .menu-item-has-children.open > a .toggle {
	transform: rotate(180deg);
}

/* colors for basic header top level links */
#header-basic .menu-desktop > .main-menu > ul > li > a {
	color: <?php echo $header_basic_hero_text_color; ?>;
}

/* background for basic header submenu panels */
#header-basic .menu-desktop ul ul,
#header-basic .menu-desktop ul ul ul {
	background-color: #ffffff;
}

/* text color for basic header submenu links */
#header-basic .menu-desktop ul ul a,
#header-basic .menu-desktop ul ul ul a {
	color: <?php echo $header_basic_hero_text_color; ?>;
}

/* hover background for basic header submenu links */
#header-basic .menu-desktop ul ul a:hover,
#header-basic .menu-desktop ul ul ul a:hover {
	background-color: #f5f5f5;
}

/* colors for mini hero header top level links */
#header-mini-hero .menu-desktop > .main-menu > ul > li > a {
	color: <?php echo $header_mini_hero_text_color; ?>;
}

/* background for mini hero header submenu panels */
#header-mini-hero .menu-desktop ul ul,
#header-mini-hero .menu-desktop ul ul ul {
	background-color: #ffffff;
}

/* colors for half hero header top level links */
#header-half-hero .menu-desktop > .main-menu > ul > li > a {
	color: <?php echo $header_half_hero_text_color; ?>;
}

/* background for half hero header submenu panels */
#header-half-hero .menu-desktop ul ul,
#header-half-hero .menu-desktop ul ul ul {
	background-color: #ffffff;
}

/* text color for half hero header submenu links */
#header-half-hero .menu-desktop ul ul a,
#header-half-hero .menu-desktop ul ul ul a {
	color: <?php echo $header_half_hero_text_color; ?>;
}

/* hover background for half hero header submenu links */
#header-half-hero .menu-desktop ul ul a:hover,
#header-half-hero .menu-desktop ul ul ul a:hover {
	background-color: #f5f5f5;
}

/* text color for mini hero header submenu links */
#header-mini-hero .menu-desktop ul ul a,
#header-mini-hero .menu-desktop ul ul ul a {
	color: <?php echo $header_mini_hero_text_color; ?>;
}

/* hover background for mini hero header submenu links */
#header-mini-hero .menu-desktop ul ul a:hover,
#header-mini-hero .menu-desktop ul ul ul a:hover {
	background-color: #f5f5f5;
}

/* colors for full hero header top level links */
#header-full-hero .menu-desktop > .main-menu > ul > li > a {
	color: <?php echo $header_full_hero_text_color; ?>;
}

/* background for full hero header submenu panels */
#header-full-hero .menu-desktop ul ul,
#header-full-hero .menu-desktop ul ul ul {
	background-color: #ffffff;
}

/* text color for full hero header submenu links */
#header-full-hero .menu-desktop ul ul a,
#header-full-hero .menu-desktop ul ul ul a {
	color: <?php echo $header_full_hero_text_color; ?>;
}

/* hover background for full hero header submenu links */
#header-full-hero .menu-desktop ul ul a:hover,
#header-full-hero .menu-desktop ul ul ul a:hover {
	background-color: #f5f5f5;
}
