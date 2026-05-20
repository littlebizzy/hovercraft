<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for woocommerce ordering
?>

form.woocommerce-ordering, .woocommerce form.woocommerce-ordering {
	clear: none;
	margin: 0 0 30px;
}

form.woocommerce-ordering select, .woocommerce form.woocommerce-ordering select {
	min-width: 220px !important;
	height: 46px !important;
	min-height: 46px !important;
	padding: 10px 44px 10px 16px !important;
	background-color: #ffffff !important;
	border: 0 !important;
	border-radius: 4px !important;
	box-shadow: inset 0 0 0 1px <?php echo $default_text_color; ?> !important;
	color: <?php echo $default_text_color; ?> !important;
	cursor: pointer !important;
	font-size: 16px !important;
	font-weight: 400 !important;
	line-height: 1.5 !important;
	vertical-align: middle !important;
}

form.woocommerce-ordering select:active, form.woocommerce-ordering select:focus, .woocommerce form.woocommerce-ordering select:active, .woocommerce form.woocommerce-ordering select:focus {
	background-color: #ffffff !important;
	box-shadow: inset 0 0 0 2px <?php echo $default_link_color; ?> !important;
	color: <?php echo $default_text_color; ?> !important;
	outline: 0 !important;
}

.woocommerce .woocommerce-ordering::after {
	clear: both;
	content: "";
	display: table;
}

@media screen and (max-width: 1199px) {
	form.woocommerce-ordering, .woocommerce form.woocommerce-ordering {
		float: none !important;
		width: 100%;
	}

	form.woocommerce-ordering select, .woocommerce form.woocommerce-ordering select {
		width: 100% !important;
	}
}

@media screen and (min-width: 1200px) {
	form.woocommerce-ordering, .woocommerce form.woocommerce-ordering {
		float: right !important;
		width: auto;
	}
}
