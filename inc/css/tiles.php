<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for tiles
?>

#tiles, #tiles-wide, #tiles-narrow {
	width: 100%;
}

@media screen and (max-width: 1199px) {
	#tiles {
		padding: 30px 20px;
	}
}

@media screen and (min-width: 1200px) {
	#tiles {
		display: grid;
		<?php if ( $tiles_across == '3' ) { 
			echo "grid-template-columns: repeat(3, 1fr);\n"; 
		} elseif ( $tiles_across == '4' ) { 
			echo "grid-template-columns: repeat(4, 1fr);\n"; 
		} ?>
		gap: 30px;
	}
}

@media screen and (max-width: 1199px) {
	#tiles-wide {
		padding: 0;
	}
}

@media screen and (min-width: 1200px) {
	#tiles-wide {
		display: grid;
		<?php if ( $tiles_across == '3' ) { 
			echo "grid-template-columns: repeat(3, minmax(200px, 1fr));\n";
		} elseif ( $tiles_across == '4' ) { 
			echo "grid-template-columns: repeat(4, minmax(200px, 1fr));\n";
		} ?>
		gap: 30px;
	}
}

@media screen and (max-width: 1199px) {
	#tiles-narrow {
		padding: 0;
	}
}

@media screen and (min-width: 1200px) {
	#tiles-narrow {
		display: grid;
		grid-template-columns: repeat(2, minmax(200px, 1fr));
		gap: 30px;
	}
}

.tile {
	padding: 30px;
	text-align: center;
	box-shadow: inset 0 0 0 1px <?php echo $tile_border_color; ?>;
	background: <?php echo $tile_background_color; ?>;
	border-radius: 8px;
}

@media screen and (max-width: 1199px) {
	.tile {
		width: 100%;
		margin-bottom: 30px;
	}
}

@media screen and (min-width: 1200px) {
	.tile {
		max-width: 100%;
		justify-content: center;
		align-items: center;
		display: inline-block;
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
	border-radius: 0;
}

.tile p:last-child {
	margin-bottom: 0;
}

.tile p.wp-caption-text {
	<?php if ( $tiles_captions == 'none') { echo "display: none;"; } ?>
}
