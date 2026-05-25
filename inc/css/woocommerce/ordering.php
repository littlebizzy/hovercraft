<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for woocommerce ordering
$woocommerce_ordering_select_arrow_color = rawurlencode( $default_text_color );
?>

form.woocommerce-ordering, .woocommerce form.woocommerce-ordering {
	clear: none;
	margin: 0 0 30px;
}

form.woocommerce-ordering select, .woocommerce form.woocommerce-ordering select {
	appearance: none !important;
	-webkit-appearance: none !important;
	-moz-appearance: none !important;
	min-width: 220px !important;
	height: 46px !important;
	min-height: 46px !important;
	padding: 10px 44px 10px 16px !important;
	background-color: #ffffff !important;
	background-image: url('data:image/svg+xml;utf8,<svg height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" fill="none" stroke="<?php echo $woocommerce_ordering_select_arrow_color; ?>" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>') !important;
	background-position: right 14px center !important;
	background-repeat: no-repeat !important;
	background-size: 16px !important;
	border: 0 !important;
	border-radius: 4px !important;
	box-shadow: inset 0 0 0 1px #e0e0e0 !important;
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
