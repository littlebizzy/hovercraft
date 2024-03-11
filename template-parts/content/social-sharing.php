<?php 

$social_sharing = get_theme_mod( 'hovercraft_social_sharing', 'none' );
$urlnow = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// https://stackoverflow.com/questions/6768793/get-the-full-url-in-php

if ( $social_sharing == 'top_of_post' ) { ?>

<div id="social-sharing">
    <a rel="noopener noreferrer nofollow" target="_blank" href="https://twitter.com/intent/post?url=<?php echo $urlnow; ?>"><i class="fa-brands fa-x-twitter"></i></a>
    <i class="fa-brands fa-facebook"></i>
    <i class="fa-brands fa-pinterest"></i>
    <i class="fa-brands fa-telegram"></i>
    <i class="fa-brands fa-viber"></i>
    <i class="fa-brands fa-signal-messenger"></i>
    <i class="fa-brands fa-whatsapp"></i>
    <i class="fa-brands fa-snapchat"></i>
    <i class="fa-brands fa-line"></i>
<div class="clear"></div>
</div><!-- social-sharing -->

<?php } ?>
