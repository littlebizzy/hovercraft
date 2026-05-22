<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for columns
$columns_across_count = max( 3, min( 6, absint( $columns_across ) ) );
?>

/* columns */

.columns {
	width: 100%;
}

@media screen and (max-width: 1199px) {
	.columns {
		padding: 30px 20px;
	}
}

@media screen and (min-width: 1200px) {
	.columns {
		display: grid;
		grid-template-columns: repeat(<?php echo $columns_across_count; ?>, 1fr);
		gap: 30px;
	}
}

.column {
	padding: 30px;
	box-shadow: inset 0 0 0 1px <?php echo $column_border_color; ?>;
	background: <?php echo $column_background_color; ?>;
	border-radius: 8px;
}

@media screen and (max-width: 1199px) {
	.column {
		width: 100%;
		margin-bottom: 30px;
	}
}

@media screen and (min-width: 1200px) {
	.column {
		display: inline-block;
		max-width: 100%;
		justify-content: center;
		align-items: center;
		text-align: center;
	}
}

.column ul {
	font-size: 14px;
}

.column i {
	margin-bottom: 20px;
	font-size: 48px;
	display: block;
	color: <?php echo $default_link_color; ?>;
}

.column img {
	display: block;
	margin: 0 auto;
	border-radius: 0;
}

.column p:last-child {
	margin-bottom: 0;
}

/* postcolumns */

.postcolumns-top,
.postcolumns-bottom {
	width: 100%;
}

.postcolumns-top {
	text-align: <?php echo $postcolumns_top_align; ?>;
	background: <?php echo $postcolumns_top_background_color; ?>;
	color: <?php echo $postcolumns_top_text_color; ?>;
}

.postcolumns-bottom {
	text-align: <?php echo $postcolumns_bottom_align; ?>;
	background: <?php echo $postcolumns_bottom_background_color; ?>;
	color: <?php echo $postcolumns_bottom_text_color; ?>;
}

@media screen and (max-width: 1199px) {
	.postcolumns-top,
	.postcolumns-bottom {
		padding: 30px 20px;
	}
}

@media screen and (min-width: 1200px) {
	.postcolumns-top,
	.postcolumns-bottom {
		padding: 30px 0;
	}
}
