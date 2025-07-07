<?php
// styles for header ctas
?>

/* header primary cta */

.cta-header-primary {
	display: inline-block;
	margin-left: 30px;
}

.cta-header-primary ul li {
	list-style-type: none;
	display: inline-block;
	margin: 0;
	padding: 0;
	vertical-align: middle;
	text-align: center;
}

.cta-header-primary ul li a {
	font-family: <?php echo ucwords(str_replace("_", " ", $main_menu_font_family)); ?>;
	font-size: <?php echo $main_menu_desktop_font_size; ?>px;
	font-weight: 700;
	text-transform: <?php echo $main_menu_text_transform; ?>;
	display: inline-block;
	padding: 10px 20px;
	background: <?php echo $default_link_color; ?>;
	text-decoration: none !important;
	color: #ffffff !important;
}

.cta-header-primary ul li a:hover {
	background: <?php echo $default_hover_color; ?>;
	color: #ffffff !important;
}

/* inline button: primary */
a.button-primary {
	font-family: <?php echo ucwords(str_replace("_", " ", $main_menu_font_family)); ?>;
	font-size: 20px;
	font-weight: 700;
	text-transform: <?php echo $main_menu_text_transform; ?>;
	display: inline-block;
	padding: 10px 20px;
	background: <?php echo $default_link_color; ?>;
	text-decoration: none !important;
	color: #ffffff !important;
	width: 100%;
	box-sizing: border-box;
}

a.button-primary:hover {
	background: <?php echo $default_hover_color; ?>;
	color: #ffffff !important;
}
	

/* header secondary cta */

.cta-header-secondary {
	display: inline-block;
	margin-left: 30px;
}

#header-full-hero .cta-header-secondary ul li {
	list-style-type: none;
	display: inline-block;
	margin: 0;
	padding: 0;
	vertical-align: middle;
	text-align: center;
}

#header-half-hero .cta-header-secondary ul li, #header-mini-hero .cta-header-secondary ul li, #header-basic .cta-header-secondary ul li {
	list-style-type: none;
	display: inline-block;
	margin: 0;
	padding: 0;
	vertical-align: middle;
	text-align: center;
}

#header-full-hero .cta-header-secondary ul li a {
	font-family: <?php echo ucwords(str_replace("_", " ", $main_menu_font_family)); ?>;
	font-size: <?php echo $main_menu_desktop_font_size; ?>px;
	font-weight: 400;
	text-transform: <?php echo $main_menu_text_transform; ?>;
	display: inline-block;
	padding: 10px 20px;
	background: transparent;
	text-decoration: none;
	color: #ffffff;
	box-shadow: inset 0px 0px 0px 1px #ffffff;
}

#header-half-hero .cta-header-secondary ul li a, #header-mini-hero .cta-header-secondary ul li a, #header-basic .cta-header-secondary ul li a {
	font-family: <?php echo ucwords(str_replace("_", " ", $main_menu_font_family)); ?>;
	font-size: <?php echo $main_menu_desktop_font_size; ?>px;
	font-weight: 400;
	text-transform: <?php echo $main_menu_text_transform; ?>;
	display: inline-block;
	padding: 10px 20px;
	background: transparent;
	text-decoration: none;
	color: <?php echo $default_text_color; ?>;
	box-shadow: inset 0px 0px 0px 1px #263238;
}

#header-full-hero .cta-header-secondary ul li a:hover {
	background: #ffffff;
	color: <?php echo $default_text_color; ?> !important;
}

#header-half-hero .cta-header-secondary ul li a:hover, #header-mini-hero .cta-header-secondary ul li a:hover, #header-basic .cta-header-secondary ul li a:hover {
	background: <?php echo $default_text_color; ?>;
	color: #ffffff !important;
}
