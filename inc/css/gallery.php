<?php
// styles for gallery
?>

@media screen and (max-width: 1200px) {
.gallery {
	columns: 1;
	column-fill: balance;
	}
}

@media screen and (min-width: 1200px) {
.gallery-narrow-wrapper > .gallery {
	columns: 2;
	column-fill: balance;
	column-gap: 20px;
	}
}

@media screen and (min-width: 1200px) {
.gallery-wide-wrapper > .gallery {
	columns: 3;
	column-fill: balance;
	column-gap: 2px;
	}
}

@media screen and (max-width: 1200px) {
.gallery img {
	width: 100%;
	display: block;
	margin-bottom: 20px;
	border: 0;
	}
}

@media screen and (min-width: 1200px) {
.gallery img {
	width: 354px;
	margin-bottom: 20px;
	border: 0;
	}
}

.gallery-caption {
	<?php if ( $gallery_captions == 'none') { echo "display: none;"; } ?>
}
