<?php
// get current post id safely outside the loop
$post_id = get_queried_object_id();

// skip featured image for products or if none exists
if ( is_singular( 'product' ) || ! has_post_thumbnail( $post_id ) ) {
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
    <?php endif; ?>
    <div class="clear"></div>
</div><!-- featured-image-wrapper -->
<div class="clear"></div>

<?php
// Ref: ChatGPT
// Ref: https://rudrastyh.com/wordpress/image-sizes.html
// Ref: https://wordpress.stackexchange.com/questions/18337/how-to-get-featured-images-width-and-use-elsewhere-in-template
// Ref: https://wordpress.stackexchange.com/questions/27385/whats-the-best-way-to-use-the-featured-image-for-responsive-web-design
// Ref: https://www.smashingmagazine.com/2012/06/responsive-images-with-wordress-featured-images/
// Ref: https://wordpress.stackexchange.com/questions/111937/how-to-show-featured-image-caption-only-if-it-exist
// Ref: https://developer.wordpress.org/reference/functions/wp_get_attachment_image_src/
// Ref: https://wordpress.stackexchange.com/questions/312283/getting-alt-text-of-featured-image
// Ref: https://wordpress.stackexchange.com/questions/193196/how-to-get-image-title-alt-attribute
?>
