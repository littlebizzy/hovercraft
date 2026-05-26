<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for general header stuff
?>

#header-basic > .inner,
#header-basic > .full,
#header-mini-hero > .inner,
#header-mini-hero > .full,
#header-half-hero > .inner,
#header-half-hero > .full,
#header-full-hero > .inner,
#header-full-hero > .full {
	display: flex;
	align-items: center;
}

.header-left {
	flex: 0 0 auto;
	min-width: auto;
	white-space: nowrap;
}

.header-right {
	flex: 1 1 auto;
	min-width: 0;
	text-align: right;
}

.header-layout-stacked-bottom {
	justify-content: flex-start;
}

.header-layout-stacked-bottom .menu-desktop {
	width: 100%;
	text-align: left;
}

.header-layout-stacked-bottom .menu-desktop > .main-menu ul {
	text-align: left;
}

.header-layout-stacked-bottom .menu-desktop > .main-menu > ul > li:first-child > a {
	padding-left: 0;
}

@media screen and (max-width: 1199px) {
	.header-layout-stacked-bottom {
		display: none !important;
	}
}

@media screen and (min-width: 1200px) {
	.header-layout-stacked-bottom {
		margin-top: 20px;
	}
}
