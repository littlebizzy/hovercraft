<?php

// limit output to front page
if ( ! is_front_page() ) {
	return;
}

// render home postmain top widget area
if ( is_active_sidebar( 'hovercraft_home_postmain_top' ) ) : ?>
	<div id="home-postmain-top">
		<div class="inner">
			<?php dynamic_sidebar( 'hovercraft_home_postmain_top' ); ?>
		</div><!-- inner -->
	</div><!-- home-postmain-top -->
<?php endif; // end home postmain top ?>

<?php
// render home postmain bottom widget area
if ( is_active_sidebar( 'hovercraft_home_postmain_bottom' ) ) : ?>
	<div id="home-postmain-bottom">
		<div class="inner">
			<?php dynamic_sidebar( 'hovercraft_home_postmain_bottom' ); ?>
		</div><!-- inner -->
	</div><!-- home-postmain-bottom -->
<?php endif; // end home postmain bottom ?>
