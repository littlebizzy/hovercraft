<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for archives
?>

/* archives */

.post-tease-archive {
	margin-bottom: 40px;
}

.post-excerpt-archive p {
	margin: 0;
}

img.featured-image-archive {
	height: auto;
	display: block;
	margin-bottom: 20px;
	border-radius: 0;
}

@media screen and (max-width: 1199px) {
	img.featured-image-archive {
		width: 100%;
	}
}

@media screen and (min-width: 1200px) {
	img.featured-image-archive {
		width: 768px;
	}
}
