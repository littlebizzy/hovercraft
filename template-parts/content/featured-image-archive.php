<?php

// renders the content featured image archive template part


$image_id = get_post_thumbnail_id( get_the_ID() );

if ( empty( $image_id ) || is_singular( 'product' ) ) {
    return;
}

$url_featured_image = wp_get_attachment_image_src( $image_id, 'medium_large' );

if ( ! is_array( $url_featured_image ) ) {
    return;
}

$image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
$image_width = $url_featured_image[1];
$image_height = $url_featured_image[2];

if ( ! is_string( $image_alt ) ) {
    $image_alt = '';
}
?>
<a href="<?php echo esc_url( get_permalink() ); ?>"><img width="<?php echo (int) $image_width; ?>" height="<?php echo (int) $image_height; ?>" class="featured-image-archive" src="<?php echo esc_url( $url_featured_image[0] ); ?>" alt="<?php echo esc_attr( $image_alt ); ?>" /></a>
<div class="clear"></div>
