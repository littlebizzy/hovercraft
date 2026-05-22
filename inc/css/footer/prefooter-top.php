<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for prefooter top
$prefooter_top_column_count = max( 1, min( 12, absint( $prefooter_top_columns ) ) );
?>

#prefooter-top {
	width: 100%;
	background: <?php echo $prefooter_top_background_color; ?>;
	color: <?php echo $prefooter_top_text_color; ?>;
	text-align: <?php echo $prefooter_top_align; ?>;
}

@media screen and (max-width: 1199px) {
	#prefooter-top {
		padding: 20px 20px;
	}
}

@media screen and (min-width: 1200px) {
	#prefooter-top {
		margin: 0 auto;
		padding: 40px 0;
	}
}

#prefooter-top .inner {
	width: 100%;
}

@media screen and (max-width: 1199px) {
	#prefooter-top .inner {
		padding: 30px 20px;
	}
}

@media screen and (min-width: 1200px) {
	#prefooter-top .inner {
		display: grid;
		grid-template-columns: repeat(<?php echo $prefooter_top_column_count; ?>, 1fr);
		gap: 30px;
	}
}

@media screen and (max-width: 1199px) {
	#prefooter-top .widget-wrapper {
		width: 100%;
		margin-bottom: 30px;
	}
}

@media screen and (min-width: 1200px) {
	#prefooter-top .widget-wrapper {
		display: inline-block;
		max-width: 100%;
	}
}

#prefooter-top a {
	color: <?php echo $prefooter_top_link_color; ?>;
	text-decoration: <?php echo $prefooter_top_link_decoration; ?>;
}
