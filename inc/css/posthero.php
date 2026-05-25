<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for posthero
?>

/* no bottom margin if the only thing in posthero is a paragraph or heading title */
#posthero p:last-child,
#posthero h2:last-child,
#posthero h3:last-child,
#posthero h4:last-child,
#posthero h5:last-child {
	margin-bottom: 0;
}

#posthero {
	width: 100%;
	text-align: center;
	background: <?php echo $posthero_background_color; ?>;
	color: <?php echo $posthero_text_color; ?>;
}

@media screen and (max-width: 1199px) {
	#posthero {
		padding: 30px 20px;
	}
}

@media screen and (min-width: 1200px) {
	#posthero {
		padding: 30px 0;
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
	border-radius: 0;
}

#posthero img:last-of-type {
	margin-right: 0;
}

#posthero a {
	color: <?php echo $posthero_link_color; ?>;
	text-decoration: <?php echo $posthero_link_decoration; ?>;
}
