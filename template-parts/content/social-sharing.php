<?php 

$social_sharing = get_theme_mod( 'hovercraft_social_sharing', 'top_of_post' );
$urlnow = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// https://stackoverflow.com/questions/6768793/get-the-full-url-in-php

if ( $social_sharing == 'top_of_post' ) { ?>

<div id="social-sharing">
    <a rel="noopener noreferrer nofollow" target="_blank" href="https://twitter.com/intent/post?url=<?php echo $urlnow; ?>"><i class="fa-brands fa-x-twitter"></i></a>
    <a rel="noopener noreferrer nofollow" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $urlnow; ?>"><i class="fa-brands fa-facebook"></i></a>
    <a rel="noopener noreferrer nofollow" target="_blank" href="https://pinterest.com/pin/create/link/?url=<?php echo $urlnow; ?>"><i class="fa-brands fa-pinterest"></i></a>
    <a rel="noopener noreferrer nofollow" target="_blank" href="https://telegram.me/share/url?url=<?php echo $urlnow; ?>"><i class="fa-brands fa-telegram"></i></a>
    <a rel="noopener noreferrer nofollow" target="_blank" href="viber://forward?text=<?php echo $urlnow; ?>"><i class="fa-brands fa-viber"></i></a>
    <a rel="noopener noreferrer nofollow" target="_blank" href="https://signal.me/?url=<?php echo $urlnow; ?>"><i class="fa-brands fa-signal-messenger"></i></a>
    <a rel="noopener noreferrer nofollow" target="_blank" href="https://wa.me/?text=<?php echo $urlnow; ?>"><i class="fa-brands fa-whatsapp"></i></a>
    <a rel="noopener noreferrer nofollow" target="_blank" href="https://social-plugins.line.me/lineit/share?url=<?php echo $urlnow; ?>"><i class="fa-brands fa-line"></i></a>
<div class="clear"></div>
</div><!-- social-sharing -->

<?php } ?>
