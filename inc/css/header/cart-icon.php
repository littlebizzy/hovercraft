<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for cart icon
?>

/* shopping cart icon mobile */
.menu-mobile-wrapper i.shopping_cart {
	font-size: 36px;
}

/* desktop: cart icon wrapper */
.cart-icon-wrapper {
	position: relative;
	display: inline-flex;
	align-items: center;
	justify-content: center;
	min-width: 44px;
	min-height: 44px;
	padding-left: 30px;
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
.cart-icon-wrapper i {
	font-size: 24px;
	padding: 10px 0;
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
	padding: 0 5px;
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
	right: -6px;
}

.notification-dot-offcanvas {
	top: 5px;
	right: 12px;
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
	padding: 10px 44px;
	color: #ffffff;
	background: transparent;
	border-radius: 4px;
	box-shadow: inset 0 0 0 1px #ffffff;
	text-decoration: none;
	vertical-align: middle;
}

/* mobile: cart icon inside button */
.cart-button-offcanvas i {
	padding-right: 10px !important;
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

	.menu-mobile-wrapper .cart-icon-wrapper i {
		font-size: 32px;
	}

	.menu-mobile-wrapper .notification-dot {
		top: 4px;
		right: 4px;
		min-width: 18px;
		height: 18px;
		line-height: 18px;
	}
}