<?php

// block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// styles for search form

// convert hex to rgb for focus glow
$hovercraft_hex = ltrim( $default_link_color, '#' );

if ( strlen( $hovercraft_hex ) === 3 ) {
	$hovercraft_hex = $hovercraft_hex[0] . $hovercraft_hex[0]
		. $hovercraft_hex[1] . $hovercraft_hex[1]
		. $hovercraft_hex[2] . $hovercraft_hex[2];
}

$hovercraft_r = hexdec( substr( $hovercraft_hex, 0, 2 ) );
$hovercraft_g = hexdec( substr( $hovercraft_hex, 2, 2 ) );
$hovercraft_b = hexdec( substr( $hovercraft_hex, 4, 2 ) );
?>

.input-container,
.wp-block-search__inside-wrapper,
.woocommerce-product-search {
	display: inline-flex;
	align-items: stretch;
	width: 100%;
	border-radius: 4px;
	overflow: hidden;
	transition: box-shadow 0.18s ease;
}

.input-container:hover,
.wp-block-search__inside-wrapper:hover,
.woocommerce-product-search:hover {
	box-shadow: 0 0 16px rgba(0, 0, 0, 0.10);
}

.input-container:focus-within,
.wp-block-search__inside-wrapper:focus-within,
.woocommerce-product-search:focus-within {
	box-shadow: 0 0 16px rgba(<?php echo $hovercraft_r; ?>, <?php echo $hovercraft_g; ?>, <?php echo $hovercraft_b; ?>, 0.45);
}

.search-input,
.wp-block-search__input,
.woocommerce-product-search .search-field {
	flex: 1 1 auto;
	min-width: 0;
	height: 48px;
	padding: 0 16px !important;
	border: 1px solid <?php echo $search_bar_border_color; ?> !important;
	border-right: 0 !important;
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
#header-mini-hero .dgwt-wcas-search-input,
#header-mini-hero input[type="search"],
#header-half-hero .search-input,
#header-half-hero .wp-block-search__input,
#header-half-hero .woocommerce-product-search .search-field,
#header-half-hero .dgwt-wcas-search-input,
#header-half-hero input[type="search"] {
	background: #f5f5f5 !important;
	background-color: #f5f5f5 !important;
	border-color: #eceff1 !important;
}

.input-container:hover .search-input,
.input-container:focus-within .search-input,
.wp-block-search__inside-wrapper:hover .wp-block-search__input,
.wp-block-search__inside-wrapper:focus-within .wp-block-search__input,
.woocommerce-product-search:hover .search-field,
.woocommerce-product-search:focus-within .search-field {
	border-color: <?php echo $search_bar_border_color; ?> !important;
}

#header-mini-hero .input-container:hover .search-input,
#header-mini-hero .input-container:focus-within .search-input,
#header-mini-hero .wp-block-search__inside-wrapper:hover .wp-block-search__input,
#header-mini-hero .wp-block-search__inside-wrapper:focus-within .wp-block-search__input,
#header-mini-hero .woocommerce-product-search:hover .search-field,
#header-mini-hero .woocommerce-product-search:focus-within .search-field,
#header-mini-hero .dgwt-wcas-search-wrapp:hover .dgwt-wcas-search-input,
#header-mini-hero .dgwt-wcas-search-wrapp:focus-within .dgwt-wcas-search-input,
#header-mini-hero input[type="search"]:hover,
#header-mini-hero input[type="search"]:focus,
#header-half-hero .input-container:hover .search-input,
#header-half-hero .input-container:focus-within .search-input,
#header-half-hero .wp-block-search__inside-wrapper:hover .wp-block-search__input,
#header-half-hero .wp-block-search__inside-wrapper:focus-within .wp-block-search__input,
#header-half-hero .woocommerce-product-search:hover .search-field,
#header-half-hero .woocommerce-product-search:focus-within .search-field,
#header-half-hero .dgwt-wcas-search-wrapp:hover .dgwt-wcas-search-input,
#header-half-hero .dgwt-wcas-search-wrapp:focus-within .dgwt-wcas-search-input,
#header-half-hero input[type="search"]:hover,
#header-half-hero input[type="search"]:focus {
	background: #f5f5f5 !important;
	background-color: #f5f5f5 !important;
	border-color: #eceff1 !important;
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
