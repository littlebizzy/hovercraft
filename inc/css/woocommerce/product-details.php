<?php
// styles for woocommerce product details
?>

.price {
	font-size: 24px !important;
	font-weight: 600 !important;
	color: <?php echo $woocommerce_price_text_color; ?> !important;
}

p.stock {
	font-size: 12px !important;
	font-weight: 400 !important;
	color: <?php echo $woocommerce_price_text_color; ?> !important;
}

.woocommerce .summary ul {
	margin-left: 0 !important;
}

@media screen and (max-width: 1200px) {
.product_meta {
	display: block;
	font-size: 14px;
	line-height: 2;
	margin: 20px 0;
	color: <?php echo $breadcrumbs_text_color; ?>;
	}
}

@media screen and (min-width: 1200px) {
.product_meta {
	display: block;
	font-size: 14px;
	line-height: 2;
	margin: 30px 0;
	color: <?php echo $breadcrumbs_text_color; ?>;
	}
}

.sku_wrapper {
	display: block;
}

.posted_in {
	display: block;
}

section.related {
	clear: both;
	display: block;
	margin-top: 30px !important;
}

section.upsells {
	clear: both;
	display: block;
}

.woo-related-products-container {
	clear: both;
	display: block;
}
