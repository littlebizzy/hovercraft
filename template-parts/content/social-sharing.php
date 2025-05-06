<?php

// get canonical permalink
$current_url = get_permalink();

// hide sharing on product pages
if ( post_type_exists( 'product' ) && is_product() ) {
	return;
}

?>

<div class="social-sharing">
	<span class="social-sharing-label"><?php _e( 'Share: ', 'hovercraft' ); ?></span>

	<!-- <a rel="noopener noreferrer nofollow" target="_blank" href="https://twitter.com/intent/post?url=<?php echo esc_url( $current_url ); ?>" title="Share via X"><i class="fa-brands fa-x-twitter"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( $current_url ); ?>" title="Share via Facebook"><i class="fa-brands fa-facebook"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="https://pinterest.com/pin/create/link/?url=<?php echo esc_url( $current_url ); ?>" title="Share via Pinterest"><i class="fa-brands fa-pinterest"></i></a> -->

	<a rel="noopener noreferrer nofollow" target="_blank" href="mailto:?subject=Check out this article&amp;body=<?php echo esc_url( $current_url ); ?>" title="Share via Email"><i class="fa-solid fa-envelope"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="https://wa.me/?text=<?php echo esc_url( $current_url ); ?>" title="Share via WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="https://telegram.me/share/url?url=<?php echo esc_url( $current_url ); ?>" title="Share via Telegram"><i class="fa-brands fa-telegram"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="https://signal.me/?url=<?php echo esc_url( $current_url ); ?>" title="Share via Signal"><i class="fa-brands fa-signal-messenger"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="viber://forward?text=<?php echo esc_url( $current_url ); ?>" title="Share via Viber"><i class="fa-brands fa-viber"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="https://social-plugins.line.me/lineit/share?url=<?php echo esc_url( $current_url ); ?>" title="Share via LINE"><i class="fa-brands fa-line"></i></a>

	<div class="clear"></div>
</div><!-- social-sharing -->

<!-- Ref: ChatGPT -->
<!-- Ref: https://stackoverflow.com/questions/6768793/get-the-full-url-in-php -->
