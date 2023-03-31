<?php global $post; 
$url_featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $currentID ), 'medium_large' );
// https://rudrastyh.com/wordpress/image-sizes.html
if ( !empty( $url_featured_image ) && ( !is_singular('product') ) ) { ?>
<img class="featured-image" src="<?php echo $url_featured_image[0]; ?>" />
<?php } ?>
