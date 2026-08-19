<?php

// block direct access
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
	border-radius: 0;
	display: block;
}

@media screen and (max-width: 1199px) {
	.gallery img {
		width: 100%;
	}
}

@media screen and (min-width: 1200px) {
	.gallery img {
		width: 354px;
	}
}

<?php if ( $gallery_captions == 'none' ) : ?>
.gallery-caption {
	display: none;
}
<?php elseif ( $gallery_captions == 'inside_image' ) : ?>
.gallery .gallery-item {
	position: relative;
	margin-bottom: 20px;
}

.gallery .gallery-item img {
	margin-bottom: 0;
}

.gallery .gallery-caption {
	position: absolute;
	right: 0;
	bottom: 0;
	left: 0;
	margin: 0;
	padding: 8px 12px;
	background: rgba(0, 0, 0, 0.65);
	color: #ffffff;
	text-align: left;
}
<?php endif; ?>
