<?php

// get half hero state
$hovercraft_is_front_page = is_front_page();
$hovercraft_hero_window_active = is_active_sidebar( 'hovercraft_hero_window' );
$hovercraft_hero_snippet_active = is_active_sidebar( 'hovercraft_hero_snippet' );
$hovercraft_has_excerpt = has_excerpt();
$hovercraft_title_hidden = hovercraft_is_title_hidden();

// get title display state
$hovercraft_show_title = ! $hovercraft_title_hidden;
$hovercraft_show_hero_snippet = $hovercraft_hero_snippet_active || $hovercraft_has_excerpt;
$hovercraft_show_hero_window = $hovercraft_hero_window_active || $hovercraft_has_excerpt;

// get title class
$hovercraft_h1_divider_display = get_theme_mod( 'hovercraft_h1_divider_display', 'none' );
$hovercraft_half_hero_title_class = 'half-hero-title';

if ( 'everywhere_possible' === $hovercraft_h1_divider_display ) {
	$hovercraft_half_hero_title_class .= ' divide';
}

?>
<div id="hero-half-container">

	<?php // render half hero header ?>
	<div id="header-half-hero">
		<?php get_template_part( 'template-parts/header/header-preheader' ); ?>
		<?php get_template_part( 'template-parts/header/navigation' ); ?>
	</div><!-- header-half-hero -->

	<?php // render half hero main ?>
	<div class="hero-half-wrapper">
		<div class="hero-half">
			<div class="inner">

				<?php // render hero content wrapper ?>
				<?php if ( $hovercraft_is_front_page ) : ?>
					<div class="welcome-wrapper">
				<?php else : ?>
					<div class="title-wrapper">
				<?php endif; // end hero content wrapper ?>

					<?php // render title ?>
					<?php if ( $hovercraft_show_title ) : ?>
						<h1 class="<?php echo esc_attr( $hovercraft_half_hero_title_class ); ?>"><?php echo esc_html( single_post_title( '', false ) ); ?></h1>
					<?php endif; // end title ?>

					<?php // render front page hero content ?>
					<?php if ( $hovercraft_is_front_page ) : ?>

						<?php // render hero snippet ?>
						<?php if ( $hovercraft_show_hero_snippet ) : ?>
							<div class="hero-snippet">
								<?php get_template_part( 'template-parts/header/hero-snippet' ); ?>
							</div><!-- hero-snippet -->
						<?php endif; // end hero snippet ?>

						<?php // render hero window ?>
						<?php if ( $hovercraft_show_hero_window ) : ?>
							<div class="hero-window">
								<?php if ( $hovercraft_hero_window_active ) : ?>
									<?php
									// render hero window widgets
									add_filter( 'widget_title', '__return_false' );
									dynamic_sidebar( 'hovercraft_hero_window' );
									remove_filter( 'widget_title', '__return_false' );
									?>
								<?php else : ?>
									<?php // render hero window excerpt ?>
									<?php the_excerpt(); ?>
								<?php endif; // end hero window content ?>
							</div><!-- hero-window -->
						<?php endif; // end hero window ?>

					<?php endif; // end front page hero content ?>

					<?php // render hero cta ?>
					<?php get_template_part( 'template-parts/header/hero-cta' ); ?>

				<?php if ( $hovercraft_is_front_page ) : ?>
					</div><!-- welcome-wrapper -->
				<?php else : ?>
					</div><!-- title-wrapper -->
				<?php endif; // end hero content wrapper ?>

				<div class="clear"></div>
			</div><!-- inner -->

			<?php // render hero caption ?>
			<?php get_template_part( 'template-parts/hero/hero-caption' ); ?>
		</div><!-- hero-half -->
	</div><!-- hero-half-wrapper -->

</div><!-- hero-half-container -->
