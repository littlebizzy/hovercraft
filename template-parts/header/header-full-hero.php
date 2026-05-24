<?php

// get full hero assets
$hovercraft_header_image_url = get_header_image();
$hovercraft_video_id = absint( get_theme_mod( 'hovercraft_video' ) );
$hovercraft_video_url = wp_get_attachment_url( $hovercraft_video_id );

// get full hero state
$hovercraft_is_front_page = is_front_page();
$hovercraft_hero_window_active = is_active_sidebar( 'hovercraft_hero_window' );
$hovercraft_hero_snippet_active = is_active_sidebar( 'hovercraft_hero_snippet' );
$hovercraft_has_excerpt = has_excerpt();
$hovercraft_title_hidden = hovercraft_is_title_hidden();

// get title display state
$hovercraft_show_primary_title = ! $hovercraft_hero_window_active && ! $hovercraft_title_hidden;
$hovercraft_show_snippet_title = $hovercraft_hero_window_active && ! $hovercraft_title_hidden;
$hovercraft_show_hero_snippet = $hovercraft_hero_snippet_active || $hovercraft_has_excerpt;
$hovercraft_show_hero_window = $hovercraft_hero_window_active || $hovercraft_has_excerpt;

// get title class
$hovercraft_h1_divider_display = get_theme_mod( 'hovercraft_h1_divider_display', 'none' );
$hovercraft_full_hero_title_class = 'full-hero-title';

if ( 'everywhere_possible' === $hovercraft_h1_divider_display ) {
	$hovercraft_full_hero_title_class .= ' divide';
}

?>
<div id="hero-full-container">

	<?php // render background video ?>
	<?php if ( ! empty( $hovercraft_video_url ) ) : ?>
		<video class="hero-background-video" playsinline autoplay muted loop poster="<?php echo esc_url( $hovercraft_header_image_url ); ?>">
			<source src="<?php echo esc_url( $hovercraft_video_url ); ?>" type="video/mp4">
			<?php esc_html_e( 'Your browser does not support the video tag.', 'hovercraft' ); ?>
		</video>
		<div class="hero-background-video-overlay"></div>
	<?php endif; // end background video ?>

	<?php // render full hero header ?>
	<div id="header-full-hero">
		<?php get_template_part( 'template-parts/header/header-preheader' ); ?>
		<?php get_template_part( 'template-parts/header/navigation' ); ?>
	</div><!-- header-full-hero -->

	<?php // render full hero main ?>
	<div class="hero-full-wrapper">
		<div class="hero-full">
			<div class="hero-full-main">
				<div class="inner">

					<?php // render hero content wrapper ?>
					<?php if ( $hovercraft_is_front_page ) : ?>
						<div class="welcome-wrapper">
					<?php else : ?>
						<div class="title-wrapper">
					<?php endif; // end hero content wrapper ?>

						<?php // render primary title ?>
						<?php if ( $hovercraft_show_primary_title ) : ?>
							<h1 class="<?php echo esc_attr( $hovercraft_full_hero_title_class ); ?>"><?php echo esc_html( single_post_title( '', false ) ); ?></h1>
						<?php endif; // end primary title ?>

						<?php // render front page hero content ?>
						<?php if ( $hovercraft_is_front_page ) : ?>

							<?php // render hero snippet ?>
							<?php if ( $hovercraft_show_hero_snippet ) : ?>
								<div class="hero-snippet">
									<?php if ( $hovercraft_show_snippet_title ) : ?>
										<h1 class="<?php echo esc_attr( $hovercraft_full_hero_title_class ); ?>"><?php echo esc_html( single_post_title( '', false ) ); ?></h1>
									<?php endif; // end snippet title ?>
									<?php get_template_part( 'template-parts/hero/hero-snippet' ); ?>
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
						<?php get_template_part( 'template-parts/hero/hero-cta' ); ?>

					<?php if ( $hovercraft_is_front_page ) : ?>
						</div><!-- welcome-wrapper -->
					<?php else : ?>
						</div><!-- title-wrapper -->
					<?php endif; // end hero content wrapper ?>

					<div class="clear"></div>
				</div><!-- inner -->
			</div><!-- hero-full-main -->
		</div><!-- hero-full -->
	</div><!-- hero-full-wrapper -->

	<?php // render hero caption ?>
	<?php get_template_part( 'template-parts/hero/hero-caption' ); ?>

</div><!-- hero-full-container -->
