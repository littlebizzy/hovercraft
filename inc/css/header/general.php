<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$navbar_background_color = get_theme_mod( 'hovercraft_navbar_background_color', '' );

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

@media screen and (max-width: 1199px) {
	.header-layout-stacked-bottom,
	.header-center,
	.header-aside {
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

	.header-layout-stacked-top .header-layout-stacked-inner {
		gap: 30px;
	}

	.header-center {
		flex: 1 1 auto;
		min-width: 0;
		text-align: center;
	}

	.header-aside {
		display: inline-block;
		vertical-align: middle;
	}

	.header-center p,
	.header-aside p {
		margin-bottom: 0;
	}

	.header-center ul,
	.header-aside ul {
		margin: 0;
		list-style-type: none;
	}

	.header-center ul li,
	.header-aside ul li {
		list-style-type: none;
		display: inline-block;
		margin: 0 0 0 10px;
	}

	.header-center ul li:first-child,
	.header-aside ul li:first-child {
		margin-left: 0;
	}

	.header-layout-stacked-bottom {
		margin-top: 20px;
		<?php if ( ! empty( $navbar_background_color ) ) : ?>
			background: <?php echo $navbar_background_color; ?>;
		<?php endif; ?>
	}

	.header-layout-stacked-bottom .menu-desktop {
		display: flex;
		align-items: center;
		gap: 30px;
	}

	.header-layout-stacked-bottom .menu-desktop > .main-menu {
		flex: 1 1 auto;
		min-width: 0;
	}

	.header-layout-stacked-bottom .menu-desktop > .main-menu > ul > li {
		transition: background-color 0.2s ease;
	}

	.header-layout-stacked-bottom .menu-desktop > .main-menu > ul > li > a {
		display: block;
		padding: 12px 18px;
	}

	.header-layout-stacked-bottom .menu-desktop > .main-menu > ul > li:hover,
	.header-layout-stacked-bottom .menu-desktop > .main-menu > ul > li.open {
		background: rgba(0, 0, 0, 0.08);
	}

	.header-layout-stacked-bottom .menu-desktop-right {
		flex: 0 0 auto;
		margin-left: auto;
		text-align: right;
		white-space: nowrap;
	}
}