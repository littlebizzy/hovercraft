<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<?php if ( is_active_sidebar( 'hovercraft_home_postmain_top' ) && is_front_page() ) : ?>
	<div id="home-postmain-top">
		<div class="inner">
			<?php dynamic_sidebar( 'hovercraft_home_postmain_top' ); ?>
		</div><!-- inner -->
	</div><!-- home-postmain-top -->
<?php endif; // end is_front_page ?>

<?php if ( is_active_sidebar( 'hovercraft_home_postmain_bottom' ) && is_front_page() ) : ?>
	<div id="home-postmain-bottom">
		<div class="inner">
			<?php dynamic_sidebar( 'hovercraft_home_postmain_bottom' ); ?>
		</div><!-- inner -->
	</div><!-- home-postmain-bottom -->
<?php endif; // end is_front_page ?>
