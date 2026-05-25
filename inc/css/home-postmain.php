<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for home postmain
$home_postmain_top_column_count = max( 1, min( 12, absint( $home_postmain_top_columns ) ) );
$home_postmain_bottom_column_count = max( 1, min( 12, absint( $home_postmain_bottom_columns ) ) );
?>

#home-postmain-top,
#home-postmain-bottom {
	width: 100%;
}

#home-postmain-top {
	background: <?php echo $postmain_top_background_color; ?>;
	color: <?php echo $postmain_top_text_color; ?>;
}

#home-postmain-bottom {
	background: <?php echo $postmain_bottom_background_color; ?>;
	color: <?php echo $postmain_bottom_text_color; ?>;
}

#home-postmain-top .inner,
#home-postmain-bottom .inner {
	width: 100%;
}

@media screen and (max-width: 1199px) {
	#home-postmain-top,
	#home-postmain-bottom {
		padding: 20px 20px;
	}

	#home-postmain-top .inner,
	#home-postmain-bottom .inner {
		padding: 0 0;
	}
}

@media screen and (min-width: 1200px) {
	#home-postmain-top,
	#home-postmain-bottom {
		margin: 0 auto;
		padding: 30px 0;
	}

	#home-postmain-top .inner,
	#home-postmain-bottom .inner {
		display: grid;
		gap: 30px;
	}

	#home-postmain-top .inner {
		grid-template-columns: repeat(<?php echo $home_postmain_top_column_count; ?>, 1fr);
	}

	#home-postmain-bottom .inner {
		grid-template-columns: repeat(<?php echo $home_postmain_bottom_column_count; ?>, 1fr);
	}
}

#home-postmain-top a {
	color: <?php echo $postmain_top_link_color; ?>;
	text-decoration: <?php echo $postmain_top_link_decoration; ?>;
}

#home-postmain-bottom a {
	color: <?php echo $postmain_bottom_link_color; ?>;
	text-decoration: <?php echo $postmain_bottom_link_decoration; ?>;
}
