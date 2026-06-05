<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for search form
?>

.input-container,
.wp-block-search__inside-wrapper,
.woocommerce-product-search {
	position: relative;
	display: inline-flex;
	align-items: stretch;
	width: 100%;
	border: 0;
	border-radius: 4px;
	box-shadow: none;
	overflow: hidden;
}

.input-container::after,
.wp-block-search__inside-wrapper::after,
.woocommerce-product-search::after {
	content: "";
	pointer-events: none;
	position: absolute;
	inset: 0;
	border-radius: 4px;
	box-shadow: inset 0 0 0 1px <?php echo $search_bar_border_color; ?>;
	transition: box-shadow 0.15s ease-in-out;
}

.input-container:focus-within::after,
.wp-block-search__inside-wrapper:focus-within::after,
.woocommerce-product-search:focus-within::after {
	box-shadow: inset 0 0 0 2px <?php echo $default_link_color; ?>;
}

/* header center search */

@media screen and (min-width: 1200px) {
	.header-center .input-container,
	.header-center .wp-block-search__inside-wrapper,
	.header-center .woocommerce-product-search {
		display: flex;
		width: 100%;
		max-width: 392px;
		margin-right: auto;
		margin-left: 0;
	}
}

.search-input,
.wp-block-search__input,
.woocommerce-product-search .search-field {
	flex: 1 1 auto;
	min-width: 0;
	height: 48px;
	padding: 0 16px !important;
	border: 0 !important;
	border-radius: 4px 0 0 4px !important;
	box-shadow: none !important;
	background: <?php echo $search_bar_background_color; ?>;
	color: <?php echo $search_input_text_color; ?>;
	font-size: 16px;
	appearance: none;
	-webkit-appearance: none;
}

#header-mini-hero .search-input,
#header-mini-hero .wp-block-search__input,
#header-mini-hero .woocommerce-product-search .search-field,
#header-mini-hero input[type="search"],
#header-half-hero .search-input,
#header-half-hero .wp-block-search__input,
#header-half-hero .woocommerce-product-search .search-field,
#header-half-hero input[type="search"] {
	background: #f5f5f5 !important;
	background-color: #f5f5f5 !important;
}

#header-mini-hero .input-container::after,
#header-mini-hero .wp-block-search__inside-wrapper::after,
#header-mini-hero .woocommerce-product-search::after,
#header-half-hero .input-container::after,
#header-half-hero .wp-block-search__inside-wrapper::after,
#header-half-hero .woocommerce-product-search::after {
	box-shadow: inset 0 0 0 1px #eceff1;
}

#header-mini-hero .input-container:focus-within::after,
#header-mini-hero .wp-block-search__inside-wrapper:focus-within::after,
#header-mini-hero .woocommerce-product-search:focus-within::after,
#header-half-hero .input-container:focus-within::after,
#header-half-hero .wp-block-search__inside-wrapper:focus-within::after,
#header-half-hero .woocommerce-product-search:focus-within::after {
	box-shadow: inset 0 0 0 2px <?php echo $default_link_color; ?>;
}

#header-mini-hero .input-container:focus-within .search-input,
#header-mini-hero .wp-block-search__inside-wrapper:focus-within .wp-block-search__input,
#header-mini-hero .woocommerce-product-search:focus-within .search-field,
#header-mini-hero input[type="search"]:focus,
#header-half-hero .input-container:focus-within .search-input,
#header-half-hero .wp-block-search__inside-wrapper:focus-within .wp-block-search__input,
#header-half-hero .woocommerce-product-search:focus-within .search-field,
#header-half-hero input[type="search"]:focus {
	background: #f5f5f5 !important;
	background-color: #f5f5f5 !important;
}

.search-input::placeholder,
.wp-block-search__input::placeholder,
.woocommerce-product-search .search-field::placeholder {
	color: <?php echo $search_input_placeholder_color; ?>;
	opacity: 1;
}

.search-submit,
.wp-block-search__button,
.woocommerce-product-search button {
	flex: 0 0 64px;
	width: auto;
	height: 48px;
	padding: 0 !important;
	border: 0;
	border-radius: 0 4px 4px 0 !important;
	box-shadow: none;
	background: <?php echo $default_link_color; ?>;
	color: #ffffff;
	display: inline-flex;
	align-items: center;
	justify-content: center;
	cursor: pointer;
	transition: background-color 0.15s ease;
	appearance: none;
	-webkit-appearance: none;
}

.search-submit:hover,
.wp-block-search__button:hover,
.woocommerce-product-search button:hover {
	background: <?php echo $default_hover_color; ?> !important;
}

.search-submit svg, .search-submit i,
.wp-block-search__button svg, .wp-block-search__button i,
.woocommerce-product-search button svg, .woocommerce-product-search button i {
	display: block;
	width: 20px;
	height: 20px;
	font-size: 20px;
	line-height: 1;
}
