<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for woocommerce messages
?>

.woocommerce-notices-wrapper {
	clear: both;
}

.woocommerce-notices-wrapper:empty {
	display: none;
}

.woocommerce-message, .woocommerce-info, .woocommerce-error {
	position: relative;
	clear: both;
	box-sizing: border-box;
	width: 100%;
	margin: 0 0 30px !important;
	padding: 16px 18px !important;
	background: <?php echo $search_bar_background_color; ?>;
	border: 0 !important;
	border-left: 4px solid <?php echo $default_link_color; ?> !important;
	border-radius: 4px;
	box-shadow: none !important;
	color: <?php echo $default_text_color; ?> !important;
	font-size: 16px;
	line-height: 1.5;
	list-style: none;
}

.woocommerce-message::before, .woocommerce-message::after, .woocommerce-info::before, .woocommerce-info::after, .woocommerce-error::before, .woocommerce-error::after {
	content: none !important;
	display: none !important;
	border: 0 !important;
}

.woocommerce-message {
	display: flex !important;
	align-items: center;
	justify-content: space-between;
	flex-wrap: wrap;
	gap: 14px;
}

.woocommerce-info {
	background: <?php echo $search_bar_background_color; ?>;
}

.woocommerce-error {
	background: #fff5f5;
	border-left-color: #ff1744 !important;
}

.woocommerce-message ul, .woocommerce-info ul, .woocommerce-error ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

.woocommerce-message li, .woocommerce-info li, .woocommerce-error li {
	margin: 0 0 8px;
	padding: 0;
	list-style: none;
}

.woocommerce-message li:last-child, .woocommerce-info li:last-child, .woocommerce-error li:last-child {
	margin-bottom: 0;
}

.woocommerce-message a, .woocommerce-info a, .woocommerce-error a {
	color: <?php echo $default_link_color; ?>;
	font-weight: 600;
}

.woocommerce-message a:hover, .woocommerce-info a:hover, .woocommerce-error a:hover {
	color: <?php echo $default_hover_color; ?>;
}

.woocommerce-message .button, .woocommerce-info .button, .woocommerce-error .button {
	display: inline-block;
	float: none !important;
	margin: 0 0 0 auto !important;
	padding: 8px 20px !important;
	background: <?php echo $default_link_color; ?> !important;
	border: 0 !important;
	border-radius: 4px;
	box-shadow: none !important;
	color: #ffffff !important;
	font-size: 14px !important;
	font-weight: 600;
	line-height: 1.5 !important;
	opacity: 1 !important;
	order: 2;
	text-decoration: none;
}

.woocommerce-message .button:hover, .woocommerce-message .button:focus, .woocommerce-info .button:hover, .woocommerce-info .button:focus, .woocommerce-error .button:hover, .woocommerce-error .button:focus {
	background: <?php echo $default_hover_color; ?> !important;
	color: #ffffff !important;
}

.woocommerce-message p:last-child, .woocommerce-info p:last-child, .woocommerce-error p:last-child {
	margin-bottom: 0;
}

.woocommerce .woocommerce-form-login-toggle, .woocommerce .woocommerce-form-coupon-toggle {
	clear: both;
}

@media screen and (max-width: 1199px) {
	.woocommerce-message, .woocommerce-info, .woocommerce-error {
		display: block !important;
		margin-bottom: 20px !important;
	}

	.woocommerce-message .button, .woocommerce-info .button, .woocommerce-error .button {
		display: block;
		width: 100%;
		margin: 12px 0 0 !important;
		text-align: center;
	}
}
