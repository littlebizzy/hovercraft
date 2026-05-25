<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for after-byline
?>

.after-byline {
	background: <?php echo $after_byline_background_color; ?>;
	border-radius: 0;
	padding: <?php echo $after_byline_padding; ?>px;
	color: <?php echo $after_byline_text_color; ?>;
}

@media screen and (max-width: 1199px) {
	.after-byline {
		font-size: <?php echo $after_byline_mobile_font_size; ?>px;
		margin-bottom: 20px;
	}
}

@media screen and (min-width: 1200px) {
	.after-byline {
		font-size: <?php echo $after_byline_desktop_font_size; ?>px;
		margin-bottom: 30px;
	}
}

.after-byline p:last-child {
	margin-bottom: 0;
}

.after-byline a {
	color: <?php echo $after_byline_link_color; ?>;
}
