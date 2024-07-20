<?php 

$social_sharing = get_theme_mod( 'hovercraft_social_sharing', 'top_of_post' );
$urlnow = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// https://stackoverflow.com/questions/6768793/get-the-full-url-in-php

if ( $social_sharing == 'top_of_post' ) {

// needs to be cleaner
if ( post_type_exists( 'product' ) && is_product() ) {
	echo(null);
} else { ?>
<div class="social-sharing">
	<span class="social-sharing-label"><?php _e( 'Share this: ', 'hovercraft' ); ?></span>
    <!-- <a rel="noopener noreferrer nofollow" target="_blank" href="https://twitter.com/intent/post?url=<?php echo $urlnow; ?>" title="Share via X"><i class="fa-brands fa-x-twitter"></i></a>
    <a rel="noopener noreferrer nofollow" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $urlnow; ?>" title="Share via Facebook"><i class="fa-brands fa-facebook"></i></a>
    <a rel="noopener noreferrer nofollow" target="_blank" href="https://pinterest.com/pin/create/link/?url=<?php echo $urlnow; ?>" title="Share via Pinterest"><i class="fa-brands fa-pinterest"></i></a> -->
	<a rel="noopener noreferrer nofollow" target="_blank" href="mailto:?subject=Check out this article&body=<?php echo $urlnow; ?>" title="Share via Email"><i class="fa-solid fa-envelope"></i></a>
	 <a rel="noopener noreferrer nofollow" target="_blank" href="https://wa.me/?text=<?php echo $urlnow; ?>" title="Share via WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
    <a rel="noopener noreferrer nofollow" target="_blank" href="https://telegram.me/share/url?url=<?php echo $urlnow; ?>" title="Share via Telegram"><i class="fa-brands fa-telegram"></i></a>
	<a rel="noopener noreferrer nofollow" target="_blank" href="https://signal.me/?url=<?php echo $urlnow; ?>" title="Share via Signal"><i class="fa-brands fa-signal-messenger"></i></a>
    <a rel="noopener noreferrer nofollow" target="_blank" href="viber://forward?text=<?php echo $urlnow; ?>" title="Share via Viber"><i class="fa-brands fa-viber"></i></a>
    <a rel="noopener noreferrer nofollow" target="_blank" href="https://social-plugins.line.me/lineit/share?url=<?php echo $urlnow; ?>" title="Share via LINE"><i class="fa-brands fa-line"></i></a>
<div class="clear"></div>
</div><!-- social-sharing -->
<?php } 

} ?>
