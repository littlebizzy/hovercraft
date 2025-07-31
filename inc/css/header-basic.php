<?php
// styles for basic header
?>

@media screen and (max-width: 1200px) {
#header-basic {
	width: 100%;
	display: table;
	padding: 10px 20px;
	background: <?php echo $header_basic_hero_background_color; ?>;
	color: <?php echo $header_basic_hero_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
#header-basic {
	width: 100%;
	display: table;
	margin: 0px auto;
	padding: 20px 0px;
	background: <?php echo $header_basic_hero_background_color; ?>;
	color: <?php echo $header_basic_hero_text_color; ?>;
	}
}

#header-basic .menu-mobile-wrapper i {
	margin-left: 20px;
	font-size: 36px;
	color: <?php echo $header_basic_hero_text_color; ?>;
}

#header-basic a {
	color: <?php echo $header_basic_hero_link_color; ?>;
}


@media screen and (max-width: 1199px) {
	#header-basic .main-menu ul li a {
		text-decoration: none;
		color: <?php echo $header_basic_hero_link_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
	#header-basic .main-menu ul li a {
		text-decoration: none;
		color: <?php echo $header_basic_hero_link_color; ?>;
	}
}
