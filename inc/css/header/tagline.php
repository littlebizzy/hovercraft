<?php
// styles for tagline
?>

@media screen and (max-width: 1200px) {
.tagline {
	font-size: 14px;
	line-height: 1;
	display: none;
	}
}

@media screen and (min-width: 1200px) {
.tagline {
	<?php if ( $tagline_display == 'right_of_site_title' ) { 
			echo "margin-left: 30px;\n"; 
		} else { 
			echo "margin-left: 0;\n"; 
		}  ?>
	padding-top: 10px;
	font-size: 14px;
	line-height: 1;
	<?php if ( $tagline_display == 'right_of_site_title' ) { 
			echo "display: inline-block;\n";
		} elseif ( $tagline_display == 'below_site_title' ) {
			echo "display: block;\n";
		} elseif ( $tagline_display == 'none' ) { 
			echo "display: none;\n"; 
		} else { 
			echo "display: inline-block;\n";
		}  ?>
	}
}
