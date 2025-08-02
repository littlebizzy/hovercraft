<?php
// styles for posthero
?>

/* no bottom margin if the only thing in posthero is a paragraph or heading title */
#posthero p:last-child, #posthero h2:last-child, #posthero h3:last-child, #posthero h4:last-child, #posthero h5:last-child {
	margin-bottom: 0;
}

@media screen and (max-width: 1200px) {
#posthero {
	width: 100%;
	padding: 30px 20px;
	text-align: center;
	background: <?php echo $posthero_background_color; ?>;
	color: <?php echo $posthero_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
#posthero {
	width: 100%;
	padding: 30px 0px;
	text-align: center;
	background: <?php echo $posthero_background_color; ?>;
	color: <?php echo $posthero_text_color; ?>;
	}
}

#posthero .widget-wrapper {
	display: inline-block;
}

#posthero .widget_text {
	display: block;
}
	
#posthero img {
	margin-right: 30px;
}
	
#posthero img:last-of-type {
	margin-right: 0;
}

#posthero a {
	color: <?php echo $posthero_link_color; ?>;
	text-decoration: <?php echo $posthero_link_decoration; ?>;
}
