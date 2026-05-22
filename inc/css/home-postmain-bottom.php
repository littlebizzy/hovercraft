<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for home-postmain-bottom
$home_postmain_bottom_column_count = max( 1, min( 12, absint( $home_postmain_bottom_columns ) ) );
?>

#home-postmain-bottom {
	width: 100%;
	background: <?php echo $postmain_bottom_background_color; ?>;
	color: <?php echo $postmain_bottom_text_color; ?>;
}

@media screen and (max-width: 1199px) {
	#home-postmain-bottom {
		padding: 20px 20px;
	}
}

@media screen and (min-width: 1200px) {
	#home-postmain-bottom {
		margin: 0 auto;
		padding: 30px 0;
	}
}

#home-postmain-bottom .inner {
	width: 100%;
}

@media screen and (max-width: 1199px) {
	#home-postmain-bottom .inner {
		padding: 0 0;
	}
}

@media screen and (min-width: 1200px) {
	#home-postmain-bottom .inner {
		display: grid;
		grid-template-columns: repeat(<?php echo $home_postmain_bottom_column_count; ?>, 1fr);
		gap: 30px;
	}
}

#home-postmain-bottom a {
	color: <?php echo $postmain_bottom_link_color; ?>;
	text-decoration: <?php echo $postmain_bottom_link_decoration; ?>;
}
