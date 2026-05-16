<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for hero-title.php
?>

/* hero title */

@media screen and (max-width: 1199px) {
	.welcome-wrapper {
		width: 100%;
		padding: 30px 20px;
	}
}

@media screen and (min-width: 1200px) {
	.welcome-wrapper {
		max-width: 900px;
	}
}

.title-wrapper {
	width: 100%;
	text-align: center;
}

@media screen and (max-width: 1199px) {
	.title-wrapper {
		padding: 0 20px;
	}
}

.hero-image-caption {
	position: absolute;
	bottom: 0;
	right: 0;
	background: rgba(0, 0, 0, 0.5);
	color: #ffffff;
	padding: 5px 10px;
	z-index: 10;
	text-align: right;
	max-width: 90%;
}

@media screen and (max-width: 1199px) {
	.hero-image-caption {
		font-size: 12px;
	}
}

@media screen and (min-width: 1200px) {
	.hero-image-caption {
		font-size: 14px;
	}
}
