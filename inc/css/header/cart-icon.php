<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for cart icon
?>

/* desktop: cart icon wrapper */
.cart-icon-wrapper {
	position: relative;
	display: inline-flex;
	align-items: center;
	justify-content: center;
	min-width: 44px;
	min-height: 44px;
	padding-left: 32px;
	text-align: center;
	vertical-align: middle;
	user-select: none;
}

/* desktop: cart icon link */
.cart-icon-wrapper > a {
	display: inline-flex;
	align-items: center;
	justify-content: center;
	min-width: 44px;
	min-height: 44px;
	line-height: 1;
	text-decoration: none !important;
	cursor: pointer;
	user-select: none;
}

/* desktop: cart icon */
.cart-icon-wrapper svg {
	display: block;
	width: 24px;
	height: 24px;
	padding: 0;
	line-height: 1;
	text-decoration: none !important;
	pointer-events: none;
	user-select: none;
}

/* cart notification dots */
.notification-dot,
.notification-dot-offcanvas {
	position: absolute;
	display: inline-flex;
	align-items: center;
	justify-content: center;
	min-width: 18px;
	height: 18px;
	padding: 0 4px;
	background-color: #f44336;
	border-radius: 999px;
	box-shadow: 0 0 0 2px #ffffff;
	color: #ffffff;
	font-size: 11px;
	font-weight: 700;
	line-height: 18px;
	text-align: center;
	white-space: nowrap;
	pointer-events: none;
	user-select: none;
}

.notification-dot {
	top: 4px;
	right: -8px;
}

.notification-dot-offcanvas {
	top: 4px;
	right: 12px;
}

/* desktop: header cart nav item */
.header-cart-nav-item {
	display: inline-flex;
	align-items: stretch;
	margin-left: 0;
	vertical-align: middle;
}

.header-cart-nav-item a {
	display: flex;
	align-items: center;
	gap: 8px;
	padding: 12px 16px;
	background: transparent;
	border-radius: 0;
	color: <?php echo $default_text_color; ?> !important;
	font-family: <?php echo hovercraft_format_css_font_family( $main_menu_font_family, $default_font_family ); ?>;
	font-size: <?php echo $main_menu_desktop_font_size; ?>px;
	font-weight: <?php echo $main_menu_font_weight; ?>;
	line-height: 1.25;
	text-align: center;
	text-decoration: none !important;
	text-transform: <?php echo $main_menu_text_transform; ?>;
	white-space: nowrap;
}

.header-layout-stacked-bottom .header-cart-nav-item:last-child a {
	padding-right: 0;
}

.header-cart-nav-item a:hover {
	background: transparent;
	color: <?php echo $default_text_color; ?> !important;
}

#header-basic .header-cart-nav-item a, #header-basic .header-cart-nav-item a:hover {
	color: <?php echo $header_basic_hero_text_color; ?> !important;
}

#header-mini-hero .header-cart-nav-item a, #header-mini-hero .header-cart-nav-item a:hover {
	color: <?php echo $mini_hero_header_text_color; ?> !important;
}

#header-half-hero .header-cart-nav-item a, #header-half-hero .header-cart-nav-item a:hover {
	color: <?php echo $half_hero_text_color; ?> !important;
}

#header-full-hero .header-cart-nav-item a, #header-full-hero .header-cart-nav-item a:hover {
	color: #ffffff !important;
}

.header-cart-nav-count {
	display: inline-flex;
	align-items: center;
	justify-content: center;
	min-width: 18px;
	height: 18px;
	padding: 0 4px;
	background: #f44336;
	border-radius: 999px;
	color: #ffffff;
	font-size: 11px;
	font-weight: 700;
	line-height: 18px;
	text-align: center;
}

/* mobile: cart button wrapper */
.cart-button-offcanvas-wrapper {
	width: 100%;
	padding: 0 20px;
	margin-bottom: 20px;
}

/* mobile: cart button */
.cart-button-offcanvas {
	position: relative;
	width: 100%;
	display: inline-flex;
	align-items: center;
	justify-content: center;
	min-height: 44px;
	box-sizing: border-box;
	text-align: center;
	font-size: 18px;
	font-weight: 700;
	padding: 8px 44px;
	color: #ffffff;
	background: transparent;
	border-radius: 4px;
	box-shadow: inset 0 0 0 1px #ffffff;
	text-decoration: none;
	vertical-align: middle;
}

/* mobile: cart icon inside button */
.cart-button-offcanvas i {
	padding-right: 8px !important;
	line-height: 1;
	text-decoration: none !important;
}

@media screen and (max-width: 1199px) {
	.cart-icon-wrapper {
		position: relative;
		min-width: 44px;
		min-height: 44px;
		padding-left: 0;
		overflow: visible;
	}

	.menu-mobile-wrapper .cart-icon-wrapper svg {
		width: 32px;
		height: 32px;
	}

	.menu-mobile-wrapper .notification-dot {
		top: 4px;
		right: 4px;
		min-width: 18px;
		height: 18px;
		line-height: 18px;
	}
}
