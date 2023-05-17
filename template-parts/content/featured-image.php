<?php global $post; 
$image_id = get_post_thumbnail_id();
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
$image_title = get_the_title($image_id);
$url_featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $currentID ), 'medium_large' );
$image_width = $url_featured_image[1];
$image_height = $url_featured_image[2];
if ( !empty( $url_featured_image ) && ( !is_singular('product') ) ) { ?>
<div class="featured-image-wrapper">
<img width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>" class="featured-image" src="<?php echo $url_featured_image[0]; ?>" alt="<?php echo $image_alt; ?>" />
<div class="featured-image-caption"><?php echo the_post_thumbnail_caption(); ?></div>
</div><!-- featured-image-wrapper -->
<?php }

// https://rudrastyh.com/wordpress/image-sizes.html
// https://wordpress.stackexchange.com/questions/18337/how-to-get-featured-images-width-and-use-elsewhere-in-template
// https://wordpress.stackexchange.com/questions/27385/whats-the-best-way-to-use-the-featured-image-for-responsive-web-design
// https://www.smashingmagazine.com/2012/06/responsive-images-with-wordress-featured-images/
// https://wordpress.stackexchange.com/questions/111937/how-to-show-featured-image-caption-only-if-it-exist
// https://developer.wordpress.org/reference/functions/wp_get_attachment_image_src/
// https://wordpress.stackexchange.com/questions/312283/getting-alt-text-of-featured-image
// https://wordpress.stackexchange.com/questions/193196/how-to-get-image-title-alt-attribute
