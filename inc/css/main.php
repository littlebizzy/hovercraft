<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for main
?>

/* main */
/* main refers to everything between header/splash and footer */

#main {
	width: 100%;
	background: <?php echo $main_background_color; ?>;
}

@media screen and (max-width: 1199px) {
	#main {
		padding: 0;
	}
}

@media screen and (min-width: 1200px) {
	#main {
		padding: 40px 0;
	}
}

body.home #main {
	background: <?php echo $main_background_color_homepage; ?>;
}

body.home #content-wide {
	background: <?php echo $main_background_color_homepage; ?>;
}
