<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) || is_active_sidebar( 'hovercraft_preheader_right' ) ) : ?>
<div id="preheader">
	<div class="inner">
		<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) && is_active_sidebar( 'hovercraft_preheader_right' ) ) : ?>
		<div class="preheader-left">
			<?php add_filter( 'widget_title', '__return_false' );
			dynamic_sidebar( 'hovercraft_preheader_left' );
			remove_filter( 'widget_title', '__return_false' ); ?>
		</div><!-- preheader-left -->
		<div class="preheader-right">
			<?php add_filter( 'widget_title', '__return_false' );
			dynamic_sidebar( 'hovercraft_preheader_right' );
			remove_filter( 'widget_title', '__return_false' ); ?>
		</div><!-- preheader-right -->
		<?php elseif ( is_active_sidebar( 'hovercraft_preheader_left' ) xor is_active_sidebar( 'hovercraft_preheader_right' ) ) : ?>
		<div class="preheader-center">
			<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) ) : ?>
				<?php
				add_filter( 'widget_title', '__return_false' );
				dynamic_sidebar( 'hovercraft_preheader_left' );
				remove_filter( 'widget_title', '__return_false' );
				?>
			<?php elseif ( is_active_sidebar( 'hovercraft_preheader_right' ) ) : ?>
				<?php
				add_filter( 'widget_title', '__return_false' );
				dynamic_sidebar( 'hovercraft_preheader_right' );
				remove_filter( 'widget_title', '__return_false' );
				?>
			<?php endif; // end hovercraft-preheader-left sidebar ?>
		</div><!-- preheader-center -->
		<?php endif; // end hovercraft-preheader-left sidebar ?>
		<div class="clear"></div>
	</div><!-- inner -->
</div><!-- preheader -->
<?php endif; // end hovercraft-preheader-left sidebar ?>
