<?php
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

.menu-desktop > .main-menu {
	display: inline-block;
}

.menu-desktop > .main-menu ul {
	margin: 0;
	padding: 0;
	list-style-type: none;
	position: relative;
	text-align: right;
	display: inline-block;
}

.menu-desktop > .main-menu ul li {
	margin: 0;
	padding: 0;
	display: inline-block;
	vertical-align: middle;
	position: relative;
}

/* hide all dropdowns by default */
.menu-desktop > .main-menu ul ul,
.menu-desktop > .main-menu ul ul ul {
	display: none;
	position: absolute;
}

/* show submenu only when .open class is present */
.menu-desktop > .main-menu li.open > ul {
	display: block;
	z-index: 100;
}

/* first tier offset */
.menu-desktop > .main-menu ul ul {
	top: 100%;
	left: 0;
	background: #ffffff;
	box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
	min-width: 180px;
	max-width: 280px;
	width: max-content;
	padding: 0;
}

/* deeper tiers */
.menu-desktop > .main-menu ul ul ul {
	top: 0;
	left: 100%;
	background: #ffffff;
	box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
	min-width: 180px;
	max-width: 280px;
	width: max-content;
	padding: 0;
}

/* dropdown links */
.menu-desktop > .main-menu ul ul li {
	width: 100%;
	display: list-item;
	position: relative;
	text-align: left;
}

.menu-desktop > .main-menu ul ul a,
.menu-desktop > .main-menu ul ul ul a {
	display: block;
	white-space: normal;
	background-color: #ffffff;
	transition: background-color 0.2s ease;
	padding: 20px 20px;
	line-height: 1.5;
}

.menu-desktop > .main-menu ul ul a:hover,
.menu-desktop > .main-menu ul ul ul a:hover {
	background-color: #f9f9f9;
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
	text-decoration: none !important;
	position: relative;
}

/* dropdown caret icon inserted by PHP as <span class="toggle"> */
.menu-desktop > .main-menu .menu-item-has-children > a {
	padding-right: 2.5em;
	position: relative;
}

.menu-desktop > .main-menu .menu-item-has-children > a .toggle {
	position: absolute;
	right: 20px;
	top: 50%;
	transform: translateY(-50%);
	font-family: "Font Awesome 5 Free", FontAwesome, sans-serif;
	font-size: 1em;
	pointer-events: none;
	transition: transform 0.2s ease;
}

.menu-desktop > .main-menu .menu-item-has-children.open > a .toggle {
	transform: translateY(-50%) rotate(180deg);
}
