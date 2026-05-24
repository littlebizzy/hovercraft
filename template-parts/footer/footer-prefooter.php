<?php

// render prefooter top widget area
if ( is_active_sidebar( 'hovercraft_prefooter_top' ) ) : ?>
	<div id="prefooter-top">
		<div class="inner">
			<?php dynamic_sidebar( 'hovercraft_prefooter_top' ); ?>
		</div><!-- inner -->
	</div><!-- prefooter-top -->
<?php endif; // end prefooter top widget area ?>

<?php
// render prefooter bottom widget area
if ( is_active_sidebar( 'hovercraft_prefooter_bottom' ) ) : ?>
	<div id="prefooter-bottom">
		<div class="inner">
			<?php dynamic_sidebar( 'hovercraft_prefooter_bottom' ); ?>
		</div><!-- inner -->
	</div><!-- prefooter-bottom -->
<?php endif; // end prefooter bottom widget area ?>
