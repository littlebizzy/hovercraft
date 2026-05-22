<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for home premain
$home_premain_top_column_count = max( 1, min( 12, absint( $home_premain_top_columns ) ) );
$home_premain_bottom_column_count = max( 1, min( 12, absint( $home_premain_bottom_columns ) ) );
?>

#home-premain-top,
#home-premain-bottom {
	width: 100%;
}

#home-premain-top {
	background: <?php echo $premain_top_background_color; ?>;
	color: <?php echo $premain_top_text_color; ?>;
}

#home-premain-bottom {
	background: <?php echo $premain_bottom_background_color; ?>;
	color: <?php echo $premain_bottom_text_color; ?>;
}

#home-premain-top .inner,
#home-premain-bottom .inner {
	width: 100%;
}

@media screen and (max-width: 1199px) {
	#home-premain-top,
	#home-premain-bottom {
		padding: 20px 20px;
	}

	#home-premain-top .inner,
	#home-premain-bottom .inner {
		padding: 0 0;
	}
}

@media screen and (min-width: 1200px) {
	#home-premain-top,
	#home-premain-bottom {
		margin: 0 auto;
		padding: 30px 0;
	}

	#home-premain-top .inner,
	#home-premain-bottom .inner {
		display: grid;
		gap: 30px;
	}

	#home-premain-top .inner {
		grid-template-columns: repeat(<?php echo $home_premain_top_column_count; ?>, 1fr);
	}

	#home-premain-bottom .inner {
		grid-template-columns: repeat(<?php echo $home_premain_bottom_column_count; ?>, 1fr);
	}
}

#home-premain-top a {
	color: <?php echo $premain_top_link_color; ?>;
	text-decoration: <?php echo $premain_top_link_decoration; ?>;
}

#home-premain-bottom a {
	color: <?php echo $premain_bottom_link_color; ?>;
	text-decoration: <?php echo $premain_bottom_link_decoration; ?>;
}
