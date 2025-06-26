<?php
// styles for prefooter top
?>

@media screen and (max-width: 1200px) {
#prefooter-top {
	width: 100%;
	background: <?php echo $prefooter_top_background_color; ?>;
	color: <?php echo $prefooter_top_text_color; ?>;
	padding: 20px 20px;
	text-align: center;
	}
}

@media screen and (min-width: 1200px) {
#prefooter-top {
	width: 100%;
	margin: 0px auto;
	background: <?php echo $prefooter_top_background_color; ?>;
	color: <?php echo $prefooter_top_text_color; ?>;
	padding: 40px 0px;
	text-align: center;
	}
}

@media screen and (max-width: 1200px) {
#prefooter-top .inner {
	width: 100%;
	padding: 30px 20px;
	}
}

@media screen and (min-width: 1200px) {
#prefooter-top .inner {
	width: 100%;
	display: grid;
	<?php
	if ( $prefooter_top_columns == '1' ) { echo "grid-template-columns: repeat(1, 1fr);\n"; } 
	elseif ( $prefooter_top_columns == '2' ) { echo "grid-template-columns: repeat(2, 1fr);\n"; } 
	elseif ( $prefooter_top_columns == '3' ) { echo "grid-template-columns: repeat(3, 1fr);\n"; } 
	elseif ( $prefooter_top_columns == '4' ) { echo "grid-template-columns: repeat(4, 1fr);\n"; } 
	elseif ( $prefooter_top_columns == '5' ) { echo "grid-template-columns: repeat(5, 1fr);\n"; } 
	elseif ( $prefooter_top_columns == '6' ) { echo "grid-template-columns: repeat(6, 1fr);\n"; } 
	elseif ( $prefooter_top_columns == '7' ) { echo "grid-template-columns: repeat(7, 1fr);\n"; } 
	elseif ( $prefooter_top_columns == '8' ) { echo "grid-template-columns: repeat(8, 1fr);\n"; } 
	elseif ( $prefooter_top_columns == '9' ) { echo "grid-template-columns: repeat(9, 1fr);\n"; } 
	elseif ( $prefooter_top_columns == '10' ) { echo "grid-template-columns: repeat(10, 1fr);\n"; } 
	elseif ( $prefooter_top_columns == '11' ) { echo "grid-template-columns: repeat(11, 1fr);\n"; } 
	elseif ( $prefooter_top_columns == '12' ) { echo "grid-template-columns: repeat(12, 1fr);\n"; } 
	?>
  	gap: 30px;
	}
}

@media screen and (max-width: 1200px) {
#prefooter-top .widget-wrapper {
	width: 100%;
	margin-bottom: 30px;
	}
}

@media screen and (min-width: 1200px) {
#prefooter-top .widget-wrapper {
	max-width: 100%;
	display: inline-block;
	}
}
	
#prefooter-top a {
	color: <?php echo $prefooter_top_link_color; ?>;
	text-decoration: <?php echo $prefooter_top_link_decoration; ?>;
}
