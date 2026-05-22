<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for home-postmain-top
$home_postmain_top_column_count = max( 1, min( 12, absint( $home_postmain_top_columns ) ) );
?>

#home-postmain-top {
	width: 100%;
	background: <?php echo $postmain_top_background_color; ?>;
	color: <?php echo $postmain_top_text_color; ?>;
}

@media screen and (max-width: 1199px) {
	#home-postmain-top {
		padding: 20px 20px;
	}
}

@media screen and (min-width: 1200px) {
	#home-postmain-top {
		margin: 0 auto;
		padding: 30px 0;
	}
}

#home-postmain-top .inner {
	width: 100%;
}

@media screen and (max-width: 1199px) {
	#home-postmain-top .inner {
		padding: 0 0;
	}
}

@media screen and (min-width: 1200px) {
	#home-postmain-top .inner {
		display: grid;
		grid-template-columns: repeat(<?php echo $home_postmain_top_column_count; ?>, 1fr);
		gap: 30px;
	}
}

#home-postmain-top a {
	color: <?php echo $postmain_top_link_color; ?>;
	text-decoration: <?php echo $postmain_top_link_decoration; ?>;
}
