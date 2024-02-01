<?php 

$social_sharing = get_theme_mod( 'hovercraft_social_sharing', 'none' );

if ( $social_sharing == 'top_of_post' ) { ?>

<div id="social-sharing">
<i class="fa-brands fa-pinterest"></i>
<i class="fa-brands fa-facebook"></i>
<i class="fa-brands fa-twitter"></i>
<i class="fa-brands fa-whatsapp"></i>
<i class="fa-brands fa-telegram"></i>
<i class="fa-brands fa-viber"></i>
<div class="clear"></div>
</div><!-- social-sharing -->

<?php } ?>
