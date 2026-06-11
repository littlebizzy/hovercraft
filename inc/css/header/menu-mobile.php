<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for mobile menu
?>

/* mobile nav container */
@media screen and (max-width: 1199px) {
	.mobile-nav {
		display: none;
		clear: both;
		width: 100%;
		list-style: none;
		background: #212121;
		padding: 20px;
	}

	/* mobile nav list items */
	.mobile-nav ul li {
		font-size: 18px;
		list-style-type: none;
		vertical-align: middle;
		display: block;
		margin: 0;
		padding: 0;
		border-bottom: 1px solid rgba(255,255,255, 0.2);
	}

	/* remove border on last item */
	.mobile-nav ul li:last-child {
		border-bottom: 0;
	}

	/* mobile nav links */
	.mobile-nav a {
		display: block;
		width: 100%;
		line-height: 40px;
		color: #ffffff !important;
		font-size: 18px;
		text-decoration: none;
	}

	/* hide submenus by default */
	.mobile-nav li > ul {
		display: none;
		width: 100%;
		position: relative;
	}
}

/* hide mobile nav on desktop */
@media screen and (min-width: 1200px) {
	.mobile-nav {
		display: none !important;
	}
}

/* mobile menu wrapper */
@media screen and (max-width: 1199px) {
	.menu-mobile-wrapper {
		display: inline-flex;
		justify-content: center;
		align-items: center;
		padding: 8px;
		min-width: 44px;
		min-height: 44px;
		text-align: right;
		vertical-align: middle;
	}
}

/* hide mobile menu wrapper on desktop */
@media screen and (min-width: 1200px) {
	.menu-mobile-wrapper {
		display: none;
	}
}

/* start mobile menu overlay */
.mobile-menu-trig {
	background: transparent;
	border: 0;
	border-radius: 4px;
	padding: 0;
}

@media screen and (max-width: 1199px) {
	.mobile-menu-trig {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		width: 44px;
		height: 44px;
		color: inherit;
		line-height: 1;
	}

	.mobile-menu-trig i,
	.mobile-menu-trig .material-icons,
	.mobile-menu-trig .fa,
	.mobile-menu-trig .fa-solid {
		display: block;
		font-size: 32px;
		line-height: 1;
		color: inherit;
	}
}

.mobile-menu-trig:hover {
	cursor: pointer;
}

.overlay {
	position: fixed;
	overflow-x: hidden;
	overflow-y: scroll;
	overscroll-behavior: contain;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	height: 0;
	visibility: hidden;
	z-index: 999999;
	background-color: rgba(0,0,0, 0.9);
	transition: height 0.5s ease, visibility 0.5s ease;
}

.overlay.active {
	height: 100%;
	visibility: visible;
}

.overlay-content {
	max-width: 768px;
	width: 100%;
	height: 100%;
	position: relative;
	text-align: center;
}

.overlay ul.menu {
	list-style: none;
	margin: 0;
	padding: 40px 0;
}

.overlay ul a {
	display: block;
	padding: 8px 0;
	font-size: 18px;
}

.overlay ul.sub-menu {
	list-style: none;
	margin-left: 0;
	padding-left: 0;
	font-style: italic;
}

.overlay a {
	text-decoration: none;
	color: #818181;
	transition: color 0.3s ease;
}

.overlay li.current-menu-item a {
	color: #ffffff;
}

.overlay a:hover,
.overlay a:focus {
	color: #f1f1f1;
	text-decoration: none;
}

.overlay .closebtn {
	background: transparent;
	border: 0;
	border-radius: 4px;
	cursor: pointer;
	padding: 0;
}

.overlay .closebtn i {
	position: absolute;
	top: 20px;
	right: 20px;
	font-size: 36px;
	z-index: 999999;
}

.overlay .closebtn i:hover,
.overlay .closebtn i:focus {
	text-decoration: none;
}

@media screen and (max-width: 800px) {
	nav#site-navigation {
		display: none;
	}

	.mobile-menu-trig {
		display: inline-flex;
	}
}

/* end mobile menu overlay */

.mobile-menu-search {
	padding: 0 20px 20px;
}

.mobile-menu-search .searchform {
	width: 100%;
}

.overlay .mobile-menu-search {
	padding: 72px 20px 0;
}

.overlay .mobile-menu-search + .mobile-menu ul.menu,
.overlay .mobile-menu-search + ul.menu {
	padding-top: 24px;
}

#hovercraft-offcanvas-menu .mobile-menu-search {
	padding-top: 0;
}

#hovercraft-offcanvas-menu .mobile-menu-search .input-container {
	display: flex;
}

#hovercraft-offcanvas-menu {
	top: 0;
	left: -100%;
	width: 100%;
	max-width: 75vw;
	background: <?php echo $offcanvas_background_color; ?>;
	color: <?php echo $default_text_color; ?>;
	height: 100%;
	position: fixed;
	visibility: hidden;
	z-index: 9997;
	overflow-y: auto;
	transform: translate3d(0, 0, 205px);
	transition: left 500ms ease-in-out, transform 500ms ease-in-out, visibility 500ms ease-in-out;
	padding: 20px 0 0 0;
}

#hovercraft-offcanvas-menu ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	font-weight: <?php echo $offcanvas_font_weight; ?>;
	font-size: <?php echo $offcanvas_font_size; ?>px;
	text-transform: <?php echo $offcanvas_menu_text_transform; ?>;
}

#hovercraft-offcanvas-menu li {
	border-top: 1px dotted rgba(0, 0, 0, 0.0980392);
	position: relative;
	width: 100%;
	user-select: none;
	margin: 0;
	padding: 0;
}

#hovercraft-offcanvas-menu a {
	color: rgba(0, 0, 0, 0.701961);
	padding: 8px 0 8px 20px;
	display: inline-block;
	width: calc(100% - 48px);
	text-decoration: none;
	vertical-align: middle;
}

#hovercraft-offcanvas-menu a:hover {
	text-decoration: none;
}

#hovercraft-offcanvas-menu li.current-menu-item a {
	font-weight: 600;
}

#hovercraft-offcanvas-menu li.current-menu-item ul a {
	font-weight: 400;
}

#hovercraft-offcanvas-menu a.menu-toggle {
	position: relative;
	width: 48px;
	min-width: 48px;
	padding: 0;
	text-align: center;
	vertical-align: middle;
	background: transparent;
	border-radius: 0;
	color: inherit;
	opacity: 0.75;
}

#hovercraft-offcanvas-menu a.menu-toggle:after {
	position: relative;
	right: 0;
	text-align: center;
	vertical-align: middle;
	font-family: FontAwesome;
	font-size: 13px;
	line-height: 1;
	content: "\f078";
}

#hovercraft-offcanvas-menu a.menu-toggle:focus,
#hovercraft-offcanvas-menu a.menu-toggle:hover {
	background: transparent;
	opacity: 1;
}

#hovercraft-offcanvas-menu a.menu-toggle:focus,
#hovercraft-offcanvas-menu a.menu-toggle:hover,
#hovercraft-offcanvas-menu a.menu-toggle:visited,
#hovercraft-offcanvas-menu a.menu-toggle:link {
	border-bottom: 0;
	text-decoration: none;
}

#hovercraft-offcanvas-menu a.menu-toggle.rotate {
	transform: rotate(180deg);
}

#hovercraft-offcanvas-menu ul.sub-menu {
	display: none;
	text-transform: <?php echo $offcanvas_submenu_text_transform; ?>;
	font-weight: <?php echo $offcanvas_font_weight; ?>;
	font-size: <?php echo $offcanvas_submenu_font_size; ?>px;
	background: <?php echo $offcanvas_toggle_background_color; ?>;
}

#hovercraft-offcanvas-menu ul.sub-menu li {
	padding-left: 0;
}

#hovercraft-offcanvas-menu.active {
	left: 0;
	visibility: visible;
	transform: translate3d(0, 0, 0);
}

.hovercraft-offcanvas-overlay {
	background-color: #000000c2;
	position: absolute;
	visibility: hidden;
	opacity: 0;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	transition: opacity 0.3s ease, visibility 0.3s ease;
	z-index: 99;
}

.hovercraft-offcanvas-overlay.active {
	visibility: visible;
	opacity: 1;
}