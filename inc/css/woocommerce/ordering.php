<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for woocommerce ordering
?>

@media screen and (max-width: 1200px) {
	form.woocommerce-ordering {
		float: none !important;
		width: 100%;
	} 
}

@media screen and (min-width: 1200px) {
	form.woocommerce-ordering {
		float: right !important;
		width: auto;
	} 
}

form.woocommerce-ordering select {
	vertical-align: middle !important;
	line-height: 1.5 !important;
	font-size: 16px !important;
	background: transparent !important;
	box-shadow: inset 0px 0px 0px 1px <?php echo $breadcrumbs_text_color; ?> !important;
}

form.woocommerce-ordering select:active, form.woocommerce-ordering select:focus {
	positive: relative;
	box-shadow: inset 0px 0px 0px 1px <?php echo $breadcrumbs_text_color; ?> !important;
}

