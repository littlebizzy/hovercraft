<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for basic header
?>

#header-basic .menu-desktop > .main-menu ul li ul li {
	background: <?php echo $header_basic_hero_background_color; ?>;
}

#header-basic {
	width: 100%;
	display: table;
	background: <?php echo $header_basic_hero_background_color; ?>;
	color: <?php echo $header_basic_hero_text_color; ?>;
}

/* mobile: header container */
@media screen and (max-width: 1199px) {
	#header-basic {
		padding: 0;
	}
}

/* desktop: header container */
@media screen and (min-width: 1200px) {
	#header-basic {
		margin: 0 auto;
		padding: 0;
	}
}

/* general anchor color */
#header-basic a {
	color: <?php echo $header_basic_hero_link_color; ?>;
}

/* menu link style */
#header-basic .main-menu ul li a {
	text-decoration: none;
	color: <?php echo $header_basic_hero_link_color; ?>;
}