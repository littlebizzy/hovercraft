<?php
// only load js if woocommerce is active
if ( ! class_exists( 'WooCommerce' ) ) {
    return;
}
?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/quantity-buttons.js?ver=<?php echo filemtime( get_template_directory() . '/assets/js/quantity-buttons.js' ); ?>"></script>
