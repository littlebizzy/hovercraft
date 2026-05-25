<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for prefooter
$prefooter_top_column_count = max( 1, min( 12, absint( $prefooter_top_columns ) ) );
$prefooter_bottom_column_count = max( 1, min( 12, absint( $prefooter_bottom_columns ) ) );
?>

#prefooter-top,
#prefooter-bottom {
	width: 100%;
}

#prefooter-top {
	background: <?php echo $prefooter_top_background_color; ?>;
	color: <?php echo $prefooter_top_text_color; ?>;
	text-align: <?php echo $prefooter_top_align; ?>;
}

#prefooter-bottom {
	background: <?php echo $prefooter_bottom_background_color; ?>;
	color: <?php echo $prefooter_bottom_text_color; ?>;
	text-align: <?php echo $prefooter_bottom_align; ?>;
}

#prefooter-top .inner,
#prefooter-bottom .inner {
	width: 100%;
}

@media screen and (max-width: 1199px) {
	#prefooter-top {
		padding: 20px 20px;
	}

	#prefooter-bottom {
		padding: 30px 20px;
	}

	#prefooter-top .inner,
	#prefooter-bottom .inner {
		padding: 30px 20px;
	}

	#prefooter-top .widget-wrapper,
	#prefooter-bottom .widget-wrapper {
		width: 100%;
		margin-bottom: 30px;
	}
}

@media screen and (min-width: 1200px) {
	#prefooter-top {
		margin: 0 auto;
		padding: 40px 0;
	}

	#prefooter-bottom {
		padding: 60px 0;
	}

	#prefooter-top .inner,
	#prefooter-bottom .inner {
		display: grid;
		gap: 30px;
	}

	#prefooter-top .inner {
		grid-template-columns: repeat(<?php echo $prefooter_top_column_count; ?>, 1fr);
	}

	#prefooter-bottom .inner {
		grid-template-columns: repeat(<?php echo $prefooter_bottom_column_count; ?>, 1fr);
	}

	#prefooter-top .widget-wrapper,
	#prefooter-bottom .widget-wrapper {
		display: inline-block;
		max-width: 100%;
	}
}

#prefooter-top a {
	color: <?php echo $prefooter_top_link_color; ?>;
	text-decoration: <?php echo $prefooter_top_link_decoration; ?>;
}

#prefooter-bottom a {
	color: <?php echo $prefooter_bottom_link_color; ?>;
	text-decoration: <?php echo $prefooter_bottom_link_decoration; ?>;
}
