<?php
// styles for main menu
?>

@media screen and (max-width: 1200px) {
	.menu-desktop {
		display: none;
	}
}

.menu-desktop > .main-menu {
	display: inline-block;
}

.menu-desktop > .main-menu:after {
	content: "";
	display: table;
	clear: both;
}

.menu-desktop > .main-menu ul {
	margin: 0;
	padding: 0;
	list-style-type: none;
	position: relative;
	text-align: right;
	display: inline-table;
}

.menu-desktop > .main-menu ul li {
	margin: 0;
	padding: 0;
	list-style-type: none;
	display: inline-block;
	vertical-align: middle;
	position: relative;
}

/* hide all dropdowns by default */
.menu-desktop > .main-menu ul ul,
.menu-desktop > .main-menu ul ul ul {
	display: block;
	opacity: 0;
	visibility: hidden;
	pointer-events: none;
	position: absolute;
	transition: opacity 0.2s ease, transform 0.2s ease;
	transform: translateY(10px);
}

/* show submenu when open */
.menu-desktop > .main-menu li.open > ul {
	opacity: 1;
	visibility: visible;
	pointer-events: auto;
	transform: translateY(0);
	z-index: 100;
}

/* first tier offset */
.menu-desktop > .main-menu ul ul {
	top: 36px;
	min-width: 250px;
	background: #fff;
	box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
	border: 1px solid #eee;
	border-radius: 4px;
}

/* deeper tiers */
.menu-desktop > .main-menu ul ul ul {
	top: 0;
	left: 100%;
	min-width: 250px;
}

/* dropdown links */
.menu-desktop > .main-menu ul ul li {
	display: list-item;
	position: relative;
	text-align: left;
	max-width: 300px;
}

.menu-desktop > .main-menu ul ul a,
.main-menu ul ul ul a {
	display: block !important;
	line-height: 50px;
	white-space: normal;
	font-size: 14px;
	padding: 0 15px;
	text-align: left;
	text-decoration: none;
}

/* hover background for submenu */
.menu-desktop > .main-menu ul ul a:hover {
	background: #f9f9f9;
}

/* top-level links */
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
	padding-right: 25px;
	text-decoration: none !important;
	position: relative;
}

/* caret icon */
.main-menu .menu-item-has-children > a:after {
	content: "\f078";
	font-family: FontAwesome;
	font-size: 12px;
	position: absolute;
	right: 10px;
	top: 50%;
	transform: translateY(-50%);
	transition: transform 0.3s ease;
}

/* caret rotates when open */
.main-menu .menu-item-has-children.open > a:after {
	transform: translateY(-50%) rotate(180deg);
}

/* accessibility focus */
.menu-desktop > .main-menu a:focus {
	outline: 2px solid #0073aa;
	outline-offset: 2px;
}

/* hide legacy toggle links if any */
.main-menu .menu-item-has-children > a.menu-toggle,
.main-menu .menu-item-has-children > a.menu-toggle:after {
	display: none !important;
}
