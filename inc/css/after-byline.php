<?php
// styles for after-byline
?>

@media screen and (max-width: 1200px) {
.after-byline {
	background: <?php echo $after_byline_background_color; ?>;
	font-size: <?php echo $after_byline_mobile_font_size; ?>px;
	padding: <?php echo $after_byline_padding; ?>px;
	margin-bottom: 20px;
	color: <?php echo $after_byline_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.after-byline {
	background: <?php echo $after_byline_background_color; ?>;
	font-size: <?php echo $after_byline_desktop_font_size; ?>px;
	padding: <?php echo $after_byline_padding; ?>px;
	margin-bottom: 30px;
	color: <?php echo $after_byline_text_color; ?>;
	}
}

.after-byline p:last-child {
	margin-bottom: 0;
}

.after-byline a {
	color: <?php echo $after_byline_link_color; ?>;
}
