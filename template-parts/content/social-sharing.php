<?php

// hide sharing on product pages
// make this conditional later based on customizer settings
if ( function_exists( 'is_product' ) && is_product() ) {
	return;
}

// set sharing variables
$url_raw = get_permalink();
$image_raw = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );
$title_raw = get_the_title();

$url_encoded = rawurlencode( $url_raw );
$image_encoded = $image_raw ? rawurlencode( $image_raw ) : '';
$title_encoded = rawurlencode( $title_raw );
$email_subject = rawurlencode( __( 'Check out this article', 'hovercraft' ) );
$viber_protocols = array_merge( wp_allowed_protocols(), array( 'viber' ) );

$facebook_url = 'https://www.facebook.com/sharer/sharer.php?u=' . $url_encoded;
$x_url = 'https://twitter.com/intent/tweet?url=' . $url_encoded;
$linkedin_url = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $url_encoded;
$pinterest_url = 'https://pinterest.com/pin/create/link/?url=' . $url_encoded . '&media=' . $image_encoded . '&description=' . $title_encoded;
$email_url = 'mailto:?subject=' . $email_subject . '&body=' . $url_encoded;
$whatsapp_url = 'https://wa.me/?text=' . $url_encoded;
$telegram_url = 'https://t.me/share/url?url=' . $url_encoded;
$line_url = 'https://line.me/R/share?text=' . $url_encoded;
$viber_url = 'viber://forward?text=' . $url_encoded;

?>

<div class="social-sharing">
	<span class="social-sharing-label"><?php esc_html_e( 'Share: ', 'hovercraft' ); ?></span>
	<a rel="noopener noreferrer nofollow" target="_blank" href="<?php echo esc_url( $facebook_url ); ?>" title="<?php esc_attr_e( 'Share via Facebook', 'hovercraft' ); ?>"><i class="fa-brands fa-facebook"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="<?php echo esc_url( $x_url ); ?>" title="<?php esc_attr_e( 'Share via X', 'hovercraft' ); ?>"><i class="fa-brands fa-x-twitter"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="<?php echo esc_url( $linkedin_url ); ?>" title="<?php esc_attr_e( 'Share via LinkedIn', 'hovercraft' ); ?>"><i class="fa-brands fa-linkedin"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="<?php echo esc_url( $pinterest_url ); ?>" title="<?php esc_attr_e( 'Share via Pinterest', 'hovercraft' ); ?>"><i class="fa-brands fa-pinterest"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="<?php echo esc_url( $email_url ); ?>" title="<?php esc_attr_e( 'Share via Email', 'hovercraft' ); ?>"><i class="fa-solid fa-envelope"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="<?php echo esc_url( $whatsapp_url ); ?>" title="<?php esc_attr_e( 'Share via WhatsApp', 'hovercraft' ); ?>"><i class="fa-brands fa-whatsapp"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="<?php echo esc_url( $telegram_url ); ?>" title="<?php esc_attr_e( 'Share via Telegram', 'hovercraft' ); ?>"><i class="fa-brands fa-telegram"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="<?php echo esc_url( $line_url ); ?>" title="<?php esc_attr_e( 'Share via LINE', 'hovercraft' ); ?>"><i class="fa-brands fa-line"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="<?php echo esc_url( $viber_url, $viber_protocols ); ?>" title="<?php esc_attr_e( 'Share via Viber', 'hovercraft' ); ?>"><i class="fa-brands fa-viber"></i></a>
	<div class="clear"></div>
</div><!-- social-sharing -->

