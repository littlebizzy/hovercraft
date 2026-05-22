<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for prefooter bottom
$prefooter_bottom_column_count = max( 1, min( 12, absint( $prefooter_bottom_columns ) ) );
?>

#prefooter-bottom {
	width: 100%;
	background: <?php echo $prefooter_bottom_background_color; ?>;
	color: <?php echo $prefooter_bottom_text_color; ?>;
	text-align: <?php echo $prefooter_bottom_align; ?>;
}

@media screen and (max-width: 1199px) {
	#prefooter-bottom {
		padding: 30px 20px;
	}
}

@media screen and (min-width: 1200px) {
	#prefooter-bottom {
		padding: 60px 0;
	}
}

#prefooter-bottom .inner {
	width: 100%;
}

@media screen and (max-width: 1199px) {
	#prefooter-bottom .inner {
		padding: 30px 20px;
	}
}

@media screen and (min-width: 1200px) {
	#prefooter-bottom .inner {
		display: grid;
		grid-template-columns: repeat(<?php echo $prefooter_bottom_column_count; ?>, 1fr);
		gap: 30px;
	}
}

@media screen and (max-width: 1199px) {
	#prefooter-bottom .widget-wrapper {
		width: 100%;
		margin-bottom: 30px;
	}
}

@media screen and (min-width: 1200px) {
	#prefooter-bottom .widget-wrapper {
		display: inline-block;
		max-width: 100%;
	}
}

#prefooter-bottom a {
	color: <?php echo $prefooter_bottom_link_color; ?>;
	text-decoration: <?php echo $prefooter_bottom_link_decoration; ?>;
}
