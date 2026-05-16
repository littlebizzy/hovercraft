<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for gallery
?>

.gallery {
	column-fill: balance;
}

@media screen and (max-width: 1199px) {
.gallery {
	columns: 1;
	}
}

@media screen and (min-width: 1200px) {
.gallery-narrow-wrapper > .gallery {
	columns: 2;
	column-gap: 20px;
	}
}

@media screen and (min-width: 1200px) {
.gallery-wide-wrapper > .gallery {
	columns: 3;
	column-gap: 2px;
	}
}

.gallery img {
	margin-bottom: 20px;
	border: 0;
}

@media screen and (max-width: 1199px) {
.gallery img {
	width: 100%;
	display: block;
	}
}

@media screen and (min-width: 1200px) {
.gallery img {
	width: 354px;
	}
}

.gallery-caption {
	<?php if ( $gallery_captions == 'none') { echo "display: none;"; } ?>
}
