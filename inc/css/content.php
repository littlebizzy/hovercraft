<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for content.php
?>

/* content wrapper */

#content-wrapper {
	background: <?php echo $content_background_color; ?>;
	<?php if ( $sitewide_layout == 'floating_islands' ) {
		echo "border-radius: 8px;\n";
	} else {
		echo "border-radius: 0;\n";
	} ?>
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

#content-wide,
#content-padded {
	width: 100%;
	max-width: 100%;
	display: block;
	overflow: hidden;
	overflow-wrap: break-word;
}

/* content-wide */

@media screen and (max-width: 1199px) {
	#content-wide {
		padding: 20px;
	}
}

@media screen and (min-width: 1200px) {
	#content-wide {
		<?php if ( $sitewide_layout == 'floating_islands' ) {
			echo "padding: 40px 40px 40px 40px;\n";
		} else {
			echo "padding: 0 0 0 0;\n";
		} ?>
	}
}

/* content-padded */

@media screen and (max-width: 1199px) {
	#content-padded {
		padding: 0 20px 20px 20px;
	}
}

@media screen and (min-width: 1200px) {
	#content-padded {
		<?php if ( $sitewide_layout == 'floating_islands' ) {
			echo "padding: 40px 40px 40px 40px;\n";
		} else {
			echo "padding: 0 0 40px 0;\n";
		} ?>
	}
}

#content-padded iframe {
	margin-bottom: 30px;
	border-radius: 0;
}

#content-padded img {
	margin-bottom: 30px;
	max-width: 100%;
	height: auto;
	display: block;
	border-radius: 0;
}
