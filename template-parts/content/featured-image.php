<?php global $post; 
$url_featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $currentID ), 'medium_large' );
// https://rudrastyh.com/wordpress/image-sizes.html
$image_width = $url_featured_image[1];
$image_height = $url_featured_image[2];
if ( !empty( $url_featured_image ) && ( !is_singular('product') ) ) { ?>
<div class="featured-image-wrapper">
<img width="<?php echo $image_width; ?>" height="<?php echo $image_height; ?>" class="featured-image" src="<?php echo $url_featured_image[0]; ?>" />
<div class="featured-image-caption"><?php echo the_post_thumbnail_caption(); ?></div>
</div><!-- featured-image-wrapper -->
<br><br>
<?php }

// https://wordpress.stackexchange.com/questions/18337/how-to-get-featured-images-width-and-use-elsewhere-in-template
// https://wordpress.stackexchange.com/questions/27385/whats-the-best-way-to-use-the-featured-image-for-responsive-web-design
// https://www.smashingmagazine.com/2012/06/responsive-images-with-wordress-featured-images/
// https://wordpress.stackexchange.com/questions/111937/how-to-show-featured-image-caption-only-if-it-exist
