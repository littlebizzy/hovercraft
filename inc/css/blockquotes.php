<?php
// styles for blockquotes
?>

blockquote {
	margin: 30px 0px 30px 30px;
	padding: 30px 30px;
	border-left: 5px solid <?php echo $blockquote_border_color; ?>;
	color: <?php echo $blockquote_text_color; ?>;
}

blockquote p {
	font-size: 18px;
	line-height: 2;
	color: <?php echo $blockquote_text_color; ?>;
}

blockquote p:last-child {
	margin-bottom: 0;
}

blockquote .wp-caption-text {
	<?php if ( $blockquote_captions == 'none') { echo "display: none;"; } ?>
}
