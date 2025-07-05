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
	list-style-type: none;
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
	top: 36px;
	left: 0;
	background: #fff;
	box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
	min-width: 250px;
}

/* deeper tiers */
.menu-desktop > .main-menu ul ul ul {
	top: 0;
	left: 250px;
	background: #fff;
	box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
	min-width: 250px;
}

/* dropdown links */
.menu-desktop > .main-menu ul ul li {
	width: 250px;
	display: list-item;
	position: relative;
	text-align: left;
}

.menu-desktop > .main-menu ul ul a,
.main-menu ul ul ul a {
	display: block !important;
	line-height: 60px;
	white-space: normal;
	font-size: 90%;
	background-color: #fff;
	transition: background-color 0.2s ease;
	padding-right: 20px;
	padding-left: 20px;
}

.menu-desktop > .main-menu ul ul a:hover,
.main-menu ul ul ul a:hover {
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

/* dropdown caret icon for items with children */
.main-menu .menu-item-has-children > a {
	padding-right: 25px;
}

.main-menu .menu-item-has-children > a:after {
	content: "\f078";
	font-family: FontAwesome;
	font-size: 12px;
	position: absolute;
	right: 5px;
	top: 50%;
	transform: translateY(-50%);
	pointer-events: none;
}

/* prevent legacy or duplicate caret styles */
.main-menu .menu-item-has-children > a.menu-toggle,
.main-menu .menu-item-has-children > a.menu-toggle:after {
	display: none !important;
}
