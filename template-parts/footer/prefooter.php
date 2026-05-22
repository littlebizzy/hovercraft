<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<?php if ( is_active_sidebar( 'hovercraft_prefooter_top' ) ) : ?>
	<div id="prefooter-top">
		<div class="inner">
			<?php dynamic_sidebar( 'hovercraft_prefooter_top' ); ?>
			<div class="clear"></div>
		</div><!-- inner -->
	</div><!-- prefooter-top -->
<?php endif; // end hovercraft-prefooter-top sidebar ?>

<?php if ( is_active_sidebar( 'hovercraft_prefooter_bottom' ) ) : ?>
	<div id="prefooter-bottom">
		<div class="inner">
			<?php dynamic_sidebar( 'hovercraft_prefooter_bottom' ); ?>
			<div class="clear"></div>
		</div><!-- inner -->
	</div><!-- prefooter-bottom -->
<?php endif; // end hovercraft-prefooter-bottom sidebar ?>
