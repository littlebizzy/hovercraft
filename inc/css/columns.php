<?php
// styles for columns
?>

/* columns */

@media screen and (max-width: 1200px) {
.columns {
	width: 100%;
	padding: 30px 20px;
	}
}

@media screen and (min-width: 1200px) {
.columns {
	width: 100%;
	display: grid;
  	<?php if ( $columns_across == '3' ) { 
			echo "grid-template-columns: repeat(3, 1fr);\n"; 
		} elseif ( $columns_across == '4' ) { 
			echo "grid-template-columns: repeat(4, 1fr);\n"; 
		} elseif ( $columns_across == '5' ) { 
			echo "grid-template-columns: repeat(5, 1fr);\n"; 
		} elseif ( $columns_across == '6' ) { 
			echo "grid-template-columns: repeat(6, 1fr);\n"; 
		} ?>
  	gap: 30px;
	}
}

@media screen and (max-width: 1200px) {
.column {
	width: 100%;
	margin-bottom: 30px;
	padding: 30px;
	box-shadow: inset 0px 0px 0px 1px <?php echo $column_border_color; ?>;
	background: <?php echo $column_background_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.column {
	display: inline-block;
	max-width: 100%;
	padding: 30px;
  	justify-content: center;
  	align-items: center;
	text-align: center;
	box-shadow: inset 0px 0px 0px 1px <?php echo $column_border_color; ?>;
	background: <?php echo $column_background_color; ?>;
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
}

.column p:last-child {
	margin-bottom: 0;
}

/* postcolumns */
	
@media screen and (max-width: 1200px) {
.postcolumns-top {
	width: 100%;
	padding: 30px 20px;
	text-align: <?php echo $postcolumns_top_align; ?>;
	background: <?php echo $postcolumns_top_background_color; ?>;
	color: <?php echo $postcolumns_top_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.postcolumns-top {
	width: 100%;
	padding: 30px 0px;
	text-align: <?php echo $postcolumns_top_align; ?>;
	background: <?php echo $postcolumns_top_background_color; ?>;
	color: <?php echo $postcolumns_top_text_color; ?>;
	}
}

@media screen and (max-width: 1200px) {
.postcolumns-bottom {
	width: 100%;
	padding: 30px 20px;
	text-align: <?php echo $postcolumns_bottom_align; ?>;
	background: <?php echo $postcolumns_bottom_background_color; ?>;
	color: <?php echo $postcolumns_bottom_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.postcolumns-bottom {
	width: 100%;
	padding: 30px 0px;
	text-align: <?php echo $postcolumns_bottom_align; ?>;
	background: <?php echo $postcolumns_bottom_background_color; ?>;
	color: <?php echo $postcolumns_bottom_text_color; ?>;
	}
}
