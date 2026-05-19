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
	height: 44px !important;
	padding: 0 44px 0 16px !important;
	background-color: #ffffff !important;
	border-radius: 4px !important;
	box-shadow: inset 0 0 0 1px <?php echo $breadcrumbs_text_color; ?> !important;
	color: <?php echo $default_text_color; ?> !important;
	cursor: pointer !important;
	font-size: 16px !important;
	font-weight: 400 !important;
	line-height: 44px !important;
	vertical-align: middle !important;
}

form.woocommerce-ordering select:active, form.woocommerce-ordering select:focus, .woocommerce form.woocommerce-ordering select:active, .woocommerce form.woocommerce-ordering select:focus {
	box-shadow: inset 0 0 0 1px <?php echo $default_link_color; ?> !important;
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
