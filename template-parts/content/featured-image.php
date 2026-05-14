<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// get current post id safely outside the loop
$post_id = get_queried_object_id();

$is_woocommerce = function_exists( 'is_woocommerce' ) && is_woocommerce();
$is_shop = function_exists( 'is_shop' ) && is_shop();
$is_product_taxonomy = function_exists( 'is_product_taxonomy' ) && is_product_taxonomy();
$is_product = is_singular( 'product' );

// skip featured image anywhere in woocommerce
if ( $is_woocommerce || $is_shop || $is_product_taxonomy || $is_product ) {
    return;
}

// skip featured image if none exists
if ( ! has_post_thumbnail( $post_id ) ) {
    return;
}

// get featured image id
$image_id = get_post_thumbnail_id( $post_id );
if ( ! $image_id ) {
    return;
}

// get alt text and image source
$image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
$image_src = wp_get_attachment_image_src( $image_id, 'medium_large' );

// force alt to blank if not a string
if ( ! is_string( $image_alt ) ) {
    $image_alt = '';
}

// exit if no valid image source
if ( ! is_array( $image_src ) ) {
    return;
}
?>

<div class="featured-image-wrapper">
    <img class="featured-image" src="<?php echo esc_url( $image_src[0] ); ?>" width="<?php echo (int) $image_src[1]; ?>" height="<?php echo (int) $image_src[2]; ?>" alt="<?php echo esc_attr( $image_alt ); ?>">
    <?php if ( get_the_post_thumbnail_caption( $post_id ) ) : ?>
        <div class="featured-image-caption"><?php echo esc_html( get_the_post_thumbnail_caption( $post_id ) ); ?></div>
    <?php endif; // end post-id ?>
    <div class="clear"></div>
</div><!-- featured-image-wrapper -->
<div class="clear"></div>

<?php
?>
