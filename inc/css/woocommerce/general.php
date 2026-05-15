<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for woocommerce general styles
?>

/* woocommerce other */

div.coupon {
	display: flex;
}


.term-description {
	font-size: 18px;
	color: #607D8B;
}

@media screen and (max-width: 1199px) {
p.woocommerce-result-count {
	float: none !important;
	display: block;
	margin: 0 0 20px 0 !important;
	padding: 0 !important;
	font-size: 16px;
	font-weight: 600;
	color: <?php echo $breadcrumbs_text_color; ?>;
	line-height: 1.5 !important;
	}
}

@media screen and (min-width: 1200px) {
p.woocommerce-result-count {
	float: left !important;
	margin: 0 !important;
	padding: 5px 0px !important;
	font-size: 16px;
	font-weight: 600;
	color: <?php echo $breadcrumbs_text_color; ?>;
	line-height: 1.5 !important;
	}
}
