<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for prefooter bottom
?>

#prefooter-bottom {
	width: 100%;
	background: <?php echo $prefooter_bottom_background_color; ?>;
	color: <?php echo $prefooter_bottom_text_color; ?>;
	text-align: center;
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
		<?php
		if ( $prefooter_bottom_columns == '1' ) { echo "grid-template-columns: repeat(1, 1fr);\n"; } 
		elseif ( $prefooter_bottom_columns == '2' ) { echo "grid-template-columns: repeat(2, 1fr);\n"; } 
		elseif ( $prefooter_bottom_columns == '3' ) { echo "grid-template-columns: repeat(3, 1fr);\n"; } 
		elseif ( $prefooter_bottom_columns == '4' ) { echo "grid-template-columns: repeat(4, 1fr);\n"; } 
		elseif ( $prefooter_bottom_columns == '5' ) { echo "grid-template-columns: repeat(5, 1fr);\n"; } 
		elseif ( $prefooter_bottom_columns == '6' ) { echo "grid-template-columns: repeat(6, 1fr);\n"; } 
		elseif ( $prefooter_bottom_columns == '7' ) { echo "grid-template-columns: repeat(7, 1fr);\n"; } 
		elseif ( $prefooter_bottom_columns == '8' ) { echo "grid-template-columns: repeat(8, 1fr);\n"; } 
		elseif ( $prefooter_bottom_columns == '9' ) { echo "grid-template-columns: repeat(9, 1fr);\n"; } 
		elseif ( $prefooter_bottom_columns == '10' ) { echo "grid-template-columns: repeat(10, 1fr);\n"; } 
		elseif ( $prefooter_bottom_columns == '11' ) { echo "grid-template-columns: repeat(11, 1fr);\n"; } 
		elseif ( $prefooter_bottom_columns == '12' ) { echo "grid-template-columns: repeat(12, 1fr);\n"; } 
		?>
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
		max-width: 100%;
		display: inline-block;
	}
}

#prefooter-bottom a {
	color: <?php echo $prefooter_bottom_link_color; ?>;
	text-decoration: <?php echo $prefooter_bottom_link_decoration; ?>;
}
