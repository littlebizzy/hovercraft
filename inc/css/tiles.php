<?php
// styles for tiles
?>

@media screen and (max-width: 1200px) {
#tiles {
	width: 100%;
	padding: 30px 20px;
	}
}

@media screen and (min-width: 1200px) {
#tiles {
	width: 100%;
	display: grid;
  	<?php if ( $tiles_across == '3' ) { 
			echo "grid-template-columns: repeat(3, 1fr);\n"; 
		} elseif ( $tiles_across == '4' ) { 
			echo "grid-template-columns: repeat(4, 1fr);\n"; 
	} ?>
  	gap: 30px;
	}
}

@media screen and (max-width: 1200px) {
#tiles-wide {
	width: 100%;
	padding: 0px;
	}
}

@media screen and (min-width: 1200px) {
#tiles-wide {
	width: 100%;
	display: grid;
  	<?php if ( $tiles_across == '3' ) { 
			/* echo "grid-template-columns: repeat(3, 1fr);\n"; */
			echo "grid-template-columns: repeat(3, minmax(200px, 1fr));\n";
		} elseif ( $tiles_across == '4' ) { 
			/* echo "grid-template-columns: repeat(4, 1fr);\n"; */
			echo "grid-template-columns: repeat(4, minmax(200px, 1fr));\n";
	} ?>
  	gap: 30px;
	}
}

@media screen and (max-width: 1200px) {
.tile {
	width: 100%;
	margin-bottom: 30px;
	padding: 30px;
	text-align: center;
	box-shadow: inset 0px 0px 0px 1px <?php echo $tile_border_color; ?>;
	background: <?php echo $tile_background_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.tile {
	max-width: 100%;
	padding: 30px;
  	justify-content: center;
  	align-items: center;
	text-align: center;
	box-shadow: inset 0px 0px 0px 1px <?php echo $tile_border_color; ?>;
	display: inline-block;
	background: <?php echo $tile_background_color; ?>;
	}
}

.tile i {
	margin-bottom: 20px;
	font-size: 48px;
	display: block;
	color: <?php echo $default_link_color; ?>;
}

.tile img {
	display: block;
	margin: 0 auto;
}

.tile p:last-child {
	margin-bottom: 0;
}


.tile p.wp-caption-text {
	<?php if ( $tiles_captions == 'none') { echo "display: none;"; } ?>
}
