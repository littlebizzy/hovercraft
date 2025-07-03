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

/* hide dropdowns by default */
.menu-desktop > .main-menu ul ul,
.menu-desktop > .main-menu ul ul ul {
	display: none;
	position: absolute;
}

/* show when JS adds .open */
.menu-desktop > .main-menu li.open > ul {
	display: block;
	z-index: 100;
}

/* first tier offset */
.menu-desktop > .main-menu ul ul {
	top: 36px;
}

/* deeper tiers */
.menu-desktop > .main-menu ul ul ul li {
	position: relative;
	top: -56px;
	left: 250px;
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
}

/* toggle icon button */
.main-menu .menu-item-has-children > a.menu-toggle {
	position: relative;
	vertical-align: top;
	padding-left: 10px;
}

.main-menu .menu-item-has-children > a.menu-toggle:after {
	position: relative;
	font-family: FontAwesome;
	font-size: 12px;
	content: "\f078";
	padding-left: 0;
}

/*
dropdown symbol should only appear in .main-menu context in header (not e.g. menu widgets)

.main-menu .menu-item-has-children > a:after {
	font-family: "Material Icons";
	font-size: 24px;
	content: '\e5cf';
	vertical-align: middle;
}

.main-menu li > a:only-child:after {
	content: '';
}
*/
