<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// restored css includes
$hovercraft_restored_css_files = array(
	'/inc/css/archives.php',
	'/inc/css/content.php',
	'/inc/css/author-box.php',
	'/inc/css/columns.php',
	'/inc/css/captions.php',
	'/inc/css/zigzag.php',
	'/inc/css/widgets.php',
	'/inc/css/footer-layout.php',
	'/inc/css/gallery.php',
	'/inc/css/forms.php',
	'/inc/css/header/searchform.php',
	'/inc/css/header/search-modal.php',
	'/inc/css/woocommerce/cart.php',
	'/inc/css/woocommerce/checkout.php',
	'/inc/css/woocommerce/general.php',
	'/inc/css/woocommerce/ordering.php',
	'/inc/css/woocommerce/products.php',
	'/inc/css/woocommerce/product-details.php',
	'/inc/css/woocommerce/add-to-cart.php',
	'/inc/css/woocommerce/messages.php',
	'/inc/css/woocommerce/login.php',
	'/inc/css/woocommerce/widget-products.php',
	'/inc/css/header/cart-icon.php',
);

foreach ( $hovercraft_restored_css_files as $hovercraft_restored_css_file ) {
	$hovercraft_restored_css_path = get_template_directory() . $hovercraft_restored_css_file;

	if ( file_exists( $hovercraft_restored_css_path ) ) {
		include $hovercraft_restored_css_path;
	}
}
