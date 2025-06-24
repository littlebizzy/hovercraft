<?php
// styles for home-postmain-bottom
?>

@media screen and (max-width: 1200px) {
#home-postmain-bottom {
	width: 100%;
	background: <?php echo $postmain_bottom_background_color; ?>;
	color: <?php echo $postmain_bottom_text_color; ?>;
	padding: 20px 20px;
	}
}

@media screen and (min-width: 1200px) {
#home-postmain-bottom {
	width: 100%;
	margin: 0px auto;
	background: <?php echo $postmain_bottom_background_color; ?>;
	color: <?php echo $postmain_bottom_text_color; ?>;
	padding: 30px 0px;
	}
}

@media screen and (max-width: 1200px) {
#home-postmain-bottom .inner {
	width: 100%;
	padding: 0px 0px;
	}
}

@media screen and (min-width: 1200px) {
#home-postmain-bottom .inner {
	width: 100%;
	display: grid;
	<?php
	if ( $home_postmain_bottom_columns == '1' ) { echo "grid-template-columns: repeat(1, 1fr);\n"; } 
	elseif ( $home_postmain_bottom_columns == '2' ) { echo "grid-template-columns: repeat(2, 1fr);\n"; } 
	elseif ( $home_postmain_bottom_columns == '3' ) { echo "grid-template-columns: repeat(3, 1fr);\n"; } 
	elseif ( $home_postmain_bottom_columns == '4' ) { echo "grid-template-columns: repeat(4, 1fr);\n"; } 
	elseif ( $home_postmain_bottom_columns == '5' ) { echo "grid-template-columns: repeat(5, 1fr);\n"; } 
	elseif ( $home_postmain_bottom_columns == '6' ) { echo "grid-template-columns: repeat(6, 1fr);\n"; } 
	elseif ( $home_postmain_bottom_columns == '7' ) { echo "grid-template-columns: repeat(7, 1fr);\n"; } 
	elseif ( $home_postmain_bottom_columns == '8' ) { echo "grid-template-columns: repeat(8, 1fr);\n"; } 
	elseif ( $home_postmain_bottom_columns == '9' ) { echo "grid-template-columns: repeat(9, 1fr);\n"; } 
	elseif ( $home_postmain_bottom_columns == '10' ) { echo "grid-template-columns: repeat(10, 1fr);\n"; } 
	elseif ( $home_postmain_bottom_columns == '11' ) { echo "grid-template-columns: repeat(11, 1fr);\n"; } 
	elseif ( $home_postmain_bottom_columns == '12' ) { echo "grid-template-columns: repeat(12, 1fr);\n"; } 
	?>
  	gap: 30px;
	}
}

#home-postmain-bottom a {
	color: <?php echo $postmain_bottom_link_color; ?>;
	text-decoration: <?php echo $postmain_bottom_link_decoration; ?>;
}
