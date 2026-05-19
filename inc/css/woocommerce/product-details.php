<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for woocommerce product details
?>

.woocommerce div.product {
	clear: both;
}

.woocommerce div.product::after, .woocommerce div.product .woocommerce-tabs::after, .woocommerce div.product .woocommerce-product-gallery::after, .woocommerce div.product .summary::after, .woocommerce #reviews::after {
	clear: both;
	content: "";
	display: table;
}

.woocommerce div.product div.images, .woocommerce div.product div.summary {
	margin-bottom: 30px;
}

.woocommerce div.product div.images {
	position: relative;
}

.woocommerce div.product div.images img {
	display: block;
	width: 100%;
	height: auto;
	box-shadow: none;
}

.woocommerce div.product div.images .woocommerce-product-gallery__wrapper {
	margin: 0;
	padding: 0;
}

.woocommerce div.product div.images .woocommerce-product-gallery__image {
	margin: 0;
	padding: 0;
}

.woocommerce div.product div.images .flex-control-thumbs {
	clear: both;
	display: grid;
	grid-template-columns: repeat(4, minmax(0, 1fr));
	gap: 5px;
	margin: 10px 0 0;
	padding: 0;
	list-style: none;
}

.woocommerce div.product div.images .flex-control-thumbs li {
	width: 100%;
	margin: 0;
	padding: 0;
	list-style: none;
	cursor: pointer;
}

.woocommerce div.product div.images .flex-control-thumbs li img {
	display: block;
	width: 100%;
	height: auto;
	opacity: 0.75;
}

.woocommerce div.product div.images .flex-control-thumbs li img.flex-active, .woocommerce div.product div.images .flex-control-thumbs li img:hover {
	opacity: 1;
}

.woocommerce div.product .woocommerce-product-gallery__trigger {
	position: absolute;
	top: 10px;
	right: 10px;
	z-index: 2;
}

.woocommerce span.onsale, .woocommerce div.product span.onsale {
	display: inline-block;
	position: absolute;
	top: 10px;
	left: 10px;
	z-index: 2;
	min-width: 0;
	min-height: 0;
	padding: 5px 10px;
	background: <?php echo $woocommerce_price_text_color; ?>;
	border-radius: 0;
	color: #ffffff;
	font-size: 12px;
	font-weight: 600;
	line-height: 1.5;
	text-align: center;
	text-transform: uppercase;
}

.woocommerce div.product .summary {
	position: relative;
}

.woocommerce div.product .product_title {
	clear: none;
	margin: 0 0 20px;
	padding: 0;
}

.woocommerce div.product p.price, .woocommerce div.product span.price, .price {
	margin: 0 0 20px;
	font-size: 24px !important;
	font-weight: 600 !important;
	line-height: 1.3 !important;
	color: <?php echo $woocommerce_price_text_color; ?> !important;
}

.woocommerce div.product p.price del, .woocommerce div.product span.price del, .price del {
	color: <?php echo $default_text_color; ?>;
	opacity: 0.6;
}

.woocommerce div.product p.price ins, .woocommerce div.product span.price ins, .price ins {
	background: transparent;
	font-weight: 600;
	text-decoration: none;
}

.woocommerce div.product p.stock, p.stock {
	margin: 0 0 20px;
	font-size: 12px !important;
	font-weight: 400 !important;
	line-height: 1.5 !important;
	color: <?php echo $woocommerce_price_text_color; ?> !important;
}

.woocommerce div.product .woocommerce-product-details__short-description {
	clear: both;
	margin: 0 0 20px;
}

.woocommerce div.product .woocommerce-product-details__short-description p:last-child {
	margin-bottom: 0;
}

.woocommerce div.product form.cart {
	clear: both;
	margin: 0 0 30px;
}

.woocommerce div.product form.cart::after {
	clear: both;
	content: "";
	display: table;
}

.woocommerce div.product form.cart .variations {
	width: 100%;
	margin: 0 0 20px;
	border: 0;
}

.woocommerce div.product form.cart .variations th, .woocommerce div.product form.cart .variations td {
	padding: 0 0 10px;
	background: transparent;
	border: 0;
	text-align: left;
	vertical-align: top;
}

.woocommerce div.product form.cart .variations label {
	margin: 0;
	font-weight: 600;
}

.woocommerce div.product form.cart .variations select {
	max-width: 100%;
}

.woocommerce div.product form.cart .reset_variations {
	display: inline-block;
	margin-top: 8px;
	font-size: 12px;
}

.woocommerce div.product form.cart .single_variation {
	clear: both;
	margin: 0 0 20px;
}

.woocommerce div.product form.cart .woocommerce-variation-description p:last-child {
	margin-bottom: 0;
}

.woocommerce .summary ul, .woocommerce div.product .summary ul {
	margin-left: 0 !important;
}

.product_meta, .woocommerce div.product .product_meta {
	clear: both;
	display: block;
	padding: 16px 0 0;
	border-top: 1px solid #e0e0e0;
	color: <?php echo $breadcrumbs_text_color; ?>;
	font-size: 13px;
	line-height: 1.8;
}

.woocommerce div.product .product_meta a {
	color: <?php echo $breadcrumbs_link_color; ?>;
	font-weight: 600;
	text-decoration: none;
}

.woocommerce div.product .product_meta a:hover {
	color: <?php echo $breadcrumbs_link_color; ?>;
	text-decoration: underline;
}

.sku_wrapper, .posted_in, .tagged_as {
	display: block;
}

.woocommerce div.product .woocommerce-tabs {
	clear: both;
	margin: 40px 0;
}

.woocommerce div.product .woocommerce-tabs ul.tabs {
	clear: both;
	display: flex;
	flex-wrap: wrap;
	gap: 0;
	margin: 0 0 24px;
	padding: 0;
	border: 0;
	border-bottom: 1px solid #e0e0e0;
	list-style: none;
}

.woocommerce div.product .woocommerce-tabs ul.tabs li {
	display: block;
	margin: 0 24px -1px 0;
	padding: 0;
	background: transparent;
	border: 0;
	list-style: none;
}

.woocommerce div.product .woocommerce-tabs ul.tabs li a {
	display: block;
	padding: 0 0 12px;
	background: transparent;
	border-bottom: 2px solid transparent;
	color: <?php echo $default_text_color; ?>;
	font-size: 14px;
	font-weight: 700;
	line-height: 1.5;
	text-decoration: none;
}

.woocommerce div.product .woocommerce-tabs ul.tabs li.active a, .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover {
	border-bottom-color: <?php echo $default_link_color; ?>;
	color: <?php echo $default_link_color; ?>;
}

.woocommerce div.product .woocommerce-tabs .panel {
	clear: both;
	margin: 0 0 30px;
	padding: 0;
}

.woocommerce div.product .woocommerce-tabs .panel h2:first-child {
	margin-top: 0;
}

.woocommerce div.product .woocommerce-tabs .panel p:last-child {
	margin-bottom: 0;
}

.woocommerce div.product .woocommerce-tabs table.shop_attributes, .woocommerce div.product .woocommerce-tabs table.woocommerce-product-attributes {
	margin: 0 0 30px;
	border: 1px solid #e0e0e0;
	border-collapse: collapse;
}

.woocommerce div.product .woocommerce-tabs table.shop_attributes th, .woocommerce div.product .woocommerce-tabs table.shop_attributes td, .woocommerce div.product .woocommerce-tabs table.woocommerce-product-attributes th, .woocommerce div.product .woocommerce-tabs table.woocommerce-product-attributes td {
	padding: 12px 15px;
	background: #ffffff;
	border: 1px solid #e0e0e0;
	font-style: normal;
	line-height: 1.5;
	text-align: left;
	vertical-align: top;
}

.woocommerce div.product .woocommerce-tabs table.shop_attributes th, .woocommerce div.product .woocommerce-tabs table.woocommerce-product-attributes th {
	width: 35%;
	font-weight: 700;
}

.woocommerce div.product .woocommerce-tabs table.shop_attributes p, .woocommerce div.product .woocommerce-tabs table.woocommerce-product-attributes p {
	margin: 0;
}

.woocommerce .woocommerce-product-rating {
	clear: both;
	margin: 0 0 20px;
	line-height: 1.5;
}

.woocommerce .woocommerce-product-rating::after {
	clear: both;
	content: "";
	display: table;
}

.woocommerce .star-rating {
	position: relative;
	display: inline-block;
	width: 5.4em;
	height: 1em;
	color: <?php echo $woocommerce_price_text_color; ?>;
	font-size: 12px;
	line-height: 1;
	overflow: hidden;
}

.woocommerce .star-rating::before {
	content: "★★★★★";
	opacity: 0.35;
}

.woocommerce .star-rating span {
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	overflow: hidden;
}

.woocommerce .star-rating span::before {
	content: "★★★★★";
}

.woocommerce .woocommerce-review-link {
	display: inline-block;
	margin-left: 10px;
	font-size: 12px;
	line-height: 1.5;
}

.woocommerce #reviews {
	clear: both;
}

.woocommerce #reviews #comments {
	clear: both;
	margin: 0 0 30px;
}

.woocommerce #reviews #comments ol.commentlist {
	margin: 0;
	padding: 0;
	list-style: none;
}

.woocommerce #reviews #comments ol.commentlist li {
	clear: both;
	margin: 0 0 20px;
	padding: 0;
	list-style: none;
}

.woocommerce #reviews #comments ol.commentlist li img.avatar {
	float: left;
	width: 50px;
	height: auto;
	margin: 0 15px 10px 0;
	padding: 0;
	border: 0;
}

.woocommerce #reviews #comments ol.commentlist li .comment-text {
	margin: 0 0 0 65px;
	padding: 0;
	border: 0;
}

.woocommerce #reviews #comments ol.commentlist li .comment-text p.meta {
	margin: 0 0 10px;
	font-size: 12px;
	line-height: 1.5;
}

.woocommerce #reviews #comments ol.commentlist li .comment-text p:last-child {
	margin-bottom: 0;
}

.woocommerce #review_form_wrapper {
	clear: both;
}

.woocommerce #review_form #respond {
	margin: 0;
	padding: 0;
}

.woocommerce #review_form #respond p {
	margin: 0 0 16px;
}

.woocommerce #review_form #respond .form-submit {
	margin-bottom: 0;
}

section.related, section.upsells, .woocommerce section.related, .woocommerce section.upsells {
	clear: both;
	display: block;
	margin-top: 30px !important;
}

.woo-related-products-container {
	clear: both;
	display: block;
}

@media screen and (max-width: 1199px) {
	.woocommerce div.product div.images, .woocommerce div.product div.summary {
		float: none;
		width: 100%;
	}

	.product_meta, .woocommerce div.product .product_meta {
		margin: 20px 0;
	}

	.woocommerce div.product .woocommerce-tabs ul.tabs {
		display: flex !important;
		flex-wrap: nowrap !important;
		overflow-x: auto;
		margin: 0 0 20px !important;
		padding: 0 !important;
		border-bottom: 1px solid #e0e0e0 !important;
		white-space: nowrap;
		-webkit-overflow-scrolling: touch;
	}

	.woocommerce div.product .woocommerce-tabs ul.tabs li {
		flex: 0 0 auto;
		margin: 0 20px -1px 0 !important;
		background: transparent !important;
		border: 0 !important;
	}

	.woocommerce div.product .woocommerce-tabs ul.tabs li a {
		padding: 0 0 10px !important;
		background: transparent !important;
		border-bottom: 2px solid transparent !important;
		box-shadow: none !important;
		font-size: 14px !important;
		line-height: 1.5 !important;
	}

	.woocommerce div.product .woocommerce-tabs ul.tabs li.active a, .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover {
		background: transparent !important;
		border-bottom-color: <?php echo $default_link_color; ?> !important;
		box-shadow: none !important;
	}

	.woocommerce #reviews #comments ol.commentlist li .comment-text {
		margin-left: 0;
	}
}

@media screen and (min-width: 1200px) {
	.single-product .woocommerce-breadcrumb, body.single-product.woocommerce .woocommerce-breadcrumb {
		margin-bottom: 30px;
	}

	.single-product div.product, body.single-product.woocommerce div.product {
		max-width: 1200px;
		margin: 0 auto;
	}

	.woocommerce div.product div.images {
		float: left;
		width: 48%;
	}

	.woocommerce div.product div.summary {
		float: right;
		width: 48%;
	}

	.single-product div.product div.images, body.single-product.woocommerce div.product div.images {
		width: 392px;
		max-width: 392px;
		margin-right: 40px;
	}

	.single-product div.product div.summary, body.single-product.woocommerce div.product div.summary {
		width: 768px;
		max-width: 768px;
	}

	.single-product div.product div.images .woocommerce-product-gallery__image img, body.single-product.woocommerce div.product div.images .woocommerce-product-gallery__image img {
		max-height: 520px;
		object-fit: contain;
	}

	.single-product div.product .woocommerce-tabs, body.single-product.woocommerce div.product .woocommerce-tabs {
		max-width: 1200px;
		margin: 40px auto;
	}

	.single-product section.related, .single-product section.upsells, body.single-product.woocommerce section.related, body.single-product.woocommerce section.upsells {
		max-width: 1200px;
		margin-right: auto !important;
		margin-left: auto !important;
	}

	.single-product section.related ul.products, .single-product section.upsells ul.products, body.single-product.woocommerce section.related ul.products, body.single-product.woocommerce section.upsells ul.products {
		grid-template-columns: repeat(4, minmax(0, 1fr));
		gap: 30px 4%;
	}

	.single-product section.related ul.products li.product, .single-product section.upsells ul.products li.product, body.single-product.woocommerce section.related ul.products li.product, body.single-product.woocommerce section.upsells ul.products li.product {
		clear: none !important;
		float: none !important;
		width: 100% !important;
		margin: 0 !important;
	}

	.single-product section.related ul.products li.product a img, .single-product section.upsells ul.products li.product a img, body.single-product.woocommerce section.related ul.products li.product a img, body.single-product.woocommerce section.upsells ul.products li.product a img {
		height: 220px !important;
		max-height: 220px !important;
		object-fit: contain !important;
		object-position: center center !important;
	}

	.product_meta, .woocommerce div.product .product_meta {
		margin: 30px 0;
	}
}
