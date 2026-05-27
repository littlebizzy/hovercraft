<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for general header stuff
?>

#header-basic > .inner,
#header-basic > .full,
#header-basic > .header-layout-stacked > .inner,
#header-basic > .header-layout-stacked > .full,
#header-mini-hero > .inner,
#header-mini-hero > .full,
#header-mini-hero > .header-layout-stacked > .inner,
#header-mini-hero > .header-layout-stacked > .full,
#header-half-hero > .inner,
#header-half-hero > .full,
#header-half-hero > .header-layout-stacked > .inner,
#header-half-hero > .header-layout-stacked > .full,
#header-full-hero > .inner,
#header-full-hero > .full,
#header-full-hero > .header-layout-stacked > .inner,
#header-full-hero > .header-layout-stacked > .full {
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

.header-layout-stacked {
	width: 100%;
}

.header-layout-stacked-bottom .header-layout-stacked-inner {
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
		display: none;
	}
}

@media screen and (min-width: 1200px) {
	.header-layout-stacked {
		display: block;
	}

	.header-layout-stacked-top,
	.header-layout-stacked-bottom {
		width: 100%;
	}

	.header-layout-stacked-bottom {
		margin-top: 20px;
	}
}
