<?php

// set sharing variables
$url_raw = get_permalink();
$image_raw = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );
$title_raw = get_the_title();
$url_encoded = urlencode( $url_raw );
$title_encoded = urlencode( $title_raw );

// hide sharing on product pages
// make this conditional later based on Customizer settings
if ( post_type_exists( 'product' ) && is_product() ) {
	return;
}

?>

<div class="social-sharing">
	<span class="social-sharing-label"><?php _e( 'Share: ', 'hovercraft' ); ?></span>
	<a rel="noopener noreferrer nofollow" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url_encoded; ?>" title="Share via Facebook"><i class="fa-brands fa-facebook"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo $url_encoded; ?>" title="Share via X"><i class="fa-brands fa-x-twitter"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url_encoded; ?>" title="Share via LinkedIn"><i class="fa-brands fa-linkedin"></i></a>

	<a rel="noopener noreferrer nofollow" target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php echo esc_url( $url_raw ); ?>&media=<?php echo esc_url( $image_raw ); ?>&description=<?php echo $title_encoded; ?>" title="Share via Pinterest"><i class="fa-brands fa-pinterest"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="mailto:?subject=Check out this article&amp;body=<?php echo esc_url( $url_raw ); ?>" title="Share via Email"><i class="fa-solid fa-envelope"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="https://wa.me/?text=<?php echo esc_url( $url_raw ); ?>" title="Share via WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="https://telegram.me/share/url?url=<?php echo esc_url( $url_raw ); ?>" title="Share via Telegram"><i class="fa-brands fa-telegram"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="https://signal.me/?url=<?php echo esc_url( $url_raw ); ?>" title="Share via Signal"><i class="fa-brands fa-signal-messenger"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="https://social-plugins.line.me/lineit/share?url=<?php echo esc_url( $url_raw ); ?>" title="Share via LINE"><i class="fa-brands fa-line"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="viber://forward?text=<?php echo esc_url( $url_raw ); ?>" title="Share via Viber"><i class="fa-brands fa-viber"></i></a>

	<div class="clear"></div>
</div><!-- social-sharing -->

<!-- Ref: ChatGPT -->
<!-- Ref: https://stackoverflow.com/questions/6768793/get-the-full-url-in-php -->
