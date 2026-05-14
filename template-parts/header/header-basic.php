<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div id="header-basic">

	<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) || is_active_sidebar( 'hovercraft_preheader_right' ) ) : ?>
		<div id="preheader">
			<div class="inner">

				<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) && is_active_sidebar( 'hovercraft_preheader_right' ) ) : ?>

					<!-- preheader-left -->
					<div class="preheader-left">
						<?php
						// remove widget titles for this sidebar only
						add_filter( 'widget_title', '__return_false' );
						dynamic_sidebar( 'hovercraft_preheader_left' );
						remove_filter( 'widget_title', '__return_false' );
						?>
						</div><!-- preheader-left -->

					<!-- preheader-right -->
					<div class="preheader-right">
						<?php
						// remove widget titles for this sidebar only
						add_filter( 'widget_title', '__return_false' );
						dynamic_sidebar( 'hovercraft_preheader_right' );
						remove_filter( 'widget_title', '__return_false' );
						?>
						</div><!-- preheader-right -->

				<?php elseif ( is_active_sidebar( 'hovercraft_preheader_left' ) xor is_active_sidebar( 'hovercraft_preheader_right' ) ) : ?>

					<!-- preheader-center -->
					<div class="preheader-center">
						<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) ) : ?>
							<?php
							// remove widget titles for this sidebar only
							add_filter( 'widget_title', '__return_false' );
							dynamic_sidebar( 'hovercraft_preheader_left' );
							remove_filter( 'widget_title', '__return_false' );
							?>
						<?php elseif ( is_active_sidebar( 'hovercraft_preheader_right' ) ) : ?>
							<?php
							// remove widget titles for this sidebar only
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
	<?php endif; ?><!-- end preheader widgets -->

	<?php get_template_part( 'template-parts/header/navigation' ); ?>

</div><!-- header-basic -->

