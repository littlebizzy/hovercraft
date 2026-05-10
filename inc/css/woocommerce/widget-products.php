<?php
// styles for woocommerce widget (products)
?>

@media screen and (max-width: 1199px) {
	ul.product_list_widget {
		width: 100%;
		list-style: none;
		display: grid;
		grid-template-columns: repeat(2, 1fr);
		gap: 20px;
		padding: 0;
		margin: 0;
	}
}

@media screen and (min-width: 1200px) {
	ul.product_list_widget {
		width: 100%;
		list-style: none;
		display: grid;
		grid-template-columns: repeat(4, 1fr);
		gap: 60px;
		padding: 0;
		margin: 0;
	}
}

ul.product_list_widget {
	list-style: none;
	padding: 0;
	margin: 0;
}

ul.product_list_widget li {
	background: #fff;
	border-radius: 0px;
	box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
	overflow: hidden;
	padding: 0 !important;
	position: relative;
	transition: box-shadow 0.2s ease;
}

ul.product_list_widget li:hover {
	box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

ul.product_list_widget li a {
	display: block;
	position: relative;
}

ul.product_list_widget li img {
	width: 100% !important;
	height: auto !important;
	aspect-ratio: 1 / 1 !important;
	object-fit: cover !important;
	display: block !important;
	float: none !important;
	margin-left: 0 !important;
	box-shadow: none !important;
}

ul.product_list_widget .product-title {
	position: absolute;
	bottom: 0;
	left: 0;
	width: 100%;
	padding: 8px 10px;
	font-size: 14px;
	line-height: 1.2;
	background: rgba(0, 0, 0, 0.6);
	color: #fff;
	text-align: center;
	box-sizing: border-box;
	z-index: 2;
}

ul.product_list_widget .wcpbc-price {
	display: block;
	margin-top: 0;
	font-size: 24px;
	font-weight: 600;
	text-align: center;
	color: #444;
	background: #f0f0f0;
	padding: 8px 10px;
}

ul.product_list_widget .wcpbc-price del {
    display: none;
}

ul.product_list_widget li a::before {
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgba(0, 0, 0, 0.05);
	z-index: 1;
	pointer-events: none;
	transition: background 0.3s ease;
}

ul.product_list_widget li a:hover::before {
	background: rgba(0, 0, 0, 0);
}
