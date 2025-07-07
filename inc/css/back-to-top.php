<?php
// styles for back to top
?>

/* back to top (scrollup) */

@media screen and (max-width: 1200px) {
.scrollup-wrapper {
	<?php if ( $scroll_to_top == 'none') { echo "display: none;"; } ?>
	margin-top: 20px;
	}
}
	
@media screen and (min-width: 1200px) {
.scrollup-wrapper {
	<?php if ( $scroll_to_top == 'mobile_only') { echo "display: none;"; } ?>
	margin-top: 30px;
	}
}

@media screen and (max-width: 1200px) {
.scrollup-link {
	display: block;
	width: 100%;
	cursor: pointer;
	text-transform: <?php echo $back_to_top_text_transform; ?>;
	font-size: <?php echo $back_to_top_mobile_font_size; ?>px;
	font-weight: <?php echo $back_to_top_font_weight; ?>;
	line-height: 1;
	padding: 10px 0px;
	color: rgba(255, 255, 255, 0.5);
	color: <?php echo $back_to_top_link_color; ?>;
	text-decoration: none !important;
	text-align: center;
	vertical-align: middle;
	background: rgba(0, 0, 0, 0.1);
	background: <?php echo $back_to_top_background_color; ?>;
	}
}
	
@media screen and (min-width: 1200px) {
.scrollup-link {
	display: block;
	width: 100%;
	cursor: pointer;
	text-transform: <?php echo $back_to_top_text_transform; ?>;
	font-size: <?php echo $back_to_top_desktop_font_size; ?>px;
	font-weight: <?php echo $back_to_top_font_weight; ?>;
	line-height: 1;
	padding: 10px 0px;
	color: rgba(255, 255, 255, 0.5);
	color: <?php echo $back_to_top_link_color; ?>;
	text-decoration: none !important;
	text-align: center;
	vertical-align: middle;
	background: rgba(0, 0, 0, 0.1);
	background: <?php echo $back_to_top_background_color; ?>;
	}
}

.scrollup-link:active, .scrollup-link:hover {
	background: rgba(0, 0, 0, 0.2);
	background: <?php echo $back_to_top_background_hover_color; ?>;
	color: #ffffff;
	color: <?php echo $back_to_top_link_color; ?>;
	outline: none !important;
}
