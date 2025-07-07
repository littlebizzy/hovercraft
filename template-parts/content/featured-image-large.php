<?php
global $post;

// fallback to global post id if currentID is missing or invalid
if ( empty( $currentID ) || ! is_numeric( $currentID ) || $currentID < 1 ) {
	$currentID = isset( $post ) && is_object( $post ) ? $post->ID : 0;
}

// skip if single product page
if ( is_singular( 'product' ) ) {
	return;
}

// get featured image data
$url_featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $currentID ), 'large' );

// skip if no image
if ( ! is_array( $url_featured_image ) ) {
	return;
}

// output image
$image_url = $url_featured_image[0];
$image_width = $url_featured_image[1];
$image_height = $url_featured_image[2];
?>
<img width="<?php echo esc_attr( $image_width ); ?>" height="<?php echo esc_attr( $image_height ); ?>" class="featured-image" src="<?php echo esc_url( $image_url ); ?>" />

<?php
// Ref: ChatGPT
// Ref: https://wordpress.stackexchange.com/questions/18337/how-to-get-featured-images-width-and-use-elsewhere-in-template
// Ref: https://wordpress.stackexchange.com/questions/27385/whats-the-best-way-to-use-the-featured-image-for-responsive-web-design
// Ref: https://www.smashingmagazine.com/2012/06/responsive-images-with-wordress-featured-images/
