<?php
// styles for content.php
?>

/* content (primary area) */

@media screen and (max-width: 1200px) {
#content-wrapper {
	background: <?php echo $content_background_color; ?>;
	}
}
	
@media screen and (min-width: 1200px) {
#content-wrapper {
	background: <?php echo $content_background_color; ?>;
	}
}

/* content (primary area) unordered and ordered lists */
	
#content-wrapper ul {
	margin-left: 30px;
	margin-bottom: 30px;
}

#content-wrapper ol {
	margin-left: 30px;
	margin-bottom: 30px;
}

#content-wrapper ol li {
	margin-bottom: 5px;
}
	

/* content-wide */

@media screen and (max-width: 1200px) {
#content-wide {
	padding: 20px;
	width: 100%;
	max-width: 100%;
	display: block;
    overflow: hidden;
	overflow-wrap: break-word;
	}
}

@media screen and (min-width: 1200px) {
#content-wide {
	<?php if ( $sitewide_layout == 'floating_islands' ) { 
			echo "padding: 40px 40px 40px 40px;\n"; 
		} else { 
			echo "padding: 0px 0px 0px 0px;\n"; 
		}  ?>
	display: block;
	overflow: hidden;
	overflow-wrap: break-word;
	}
}

	
/* content-padded */

@media screen and (max-width: 1200px) {
#content-padded {
	<?php if ( $sitewide_layout == 'floating_islands' ) { 
			echo "padding: 0px 20px 20px 20px;\n"; 
		} else { 
			echo "padding: 0px 20px 20px 20px;\n"; 
		}  ?>
	width: 100%;
	max-width: 100%;
	display: block;
    overflow: hidden;
	overflow-wrap: break-word;
	}
}

@media screen and (min-width: 1200px) {
#content-padded {
	<?php if ( $sitewide_layout == 'floating_islands' ) { 
			echo "padding: 40px 40px 40px 40px;\n"; 
		} else { 
			echo "padding: 0px 0px 40px 0px;\n"; 
		}  ?>
	display: block;
	overflow: hidden;
	overflow-wrap: break-word;
	}
}

#content-padded iframe {
	margin-bottom: 30px;
}
	
#content-padded img {
	margin-bottom: 30px;
	max-width: 100%;
	height: auto;
	display: block;
}

