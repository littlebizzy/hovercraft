<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div id="hero-full-container">

<?php
$url_header_image = get_header_image();
$hovercraft_video_id = absint( get_theme_mod( 'hovercraft_video' ) );
$url_hovercraft_video = wp_get_attachment_url( $hovercraft_video_id );
?>

<?php if ( ! empty( $url_hovercraft_video ) ) : ?>
	<video class="hero-background-video" playsinline autoplay muted loop poster="<?php echo esc_url( $url_header_image ); ?>">
		<source src="<?php echo esc_url( $url_hovercraft_video ); ?>" type="video/mp4">
		<?php esc_html_e( 'Your browser does not support the video tag.', 'hovercraft' ); ?>
	</video>
	<div class="hero-background-video-overlay"></div>
<?php endif; // end url-hovercraft-video ?>

<div id="header-full-hero">
	
	<?php get_template_part( 'template-parts/header/header-preheader' ); ?>
	<?php get_template_part( 'template-parts/header/navigation' ); ?>
</div><!-- header-full-hero -->
	
<div class="hero-full-wrapper">
<div class="hero-full">

<div class="hero-full-main">
<div class="inner">
	<?php if ( is_front_page() ) : ?>
	<div class="welcome-wrapper">
	<?php else : ?>
		<div class="title-wrapper">
	<?php endif; // end is_front_page ?>

		<?php if ( ! is_active_sidebar( 'hovercraft_hero_window' ) && ! hovercraft_is_title_hidden() ) : ?>
			<h1 class="full-hero-title <?php
				$h1_divider_display = get_theme_mod( 'hovercraft_h1_divider_display', 'none' );
				if ( $h1_divider_display === 'everywhere_possible' ) {
					echo esc_attr( 'divide' );
				}
			?>"><?php echo esc_html( single_post_title( '', false ) ); ?></h1>
		<?php endif; // end title display ?>
			
		<?php if ( is_front_page() ) : ?>
		
			<?php if ( is_active_sidebar( 'hovercraft_hero_snippet' ) || has_excerpt() ) : ?>
				<div class="hero-snippet">
					<?php if ( is_active_sidebar( 'hovercraft_hero_window' ) && ! hovercraft_is_title_hidden() ) : ?>
						<h1 class="full-hero-title <?php
							$h1_divider_display = get_theme_mod( 'hovercraft_h1_divider_display', 'none' );
							if ( $h1_divider_display === 'everywhere_possible' ) {
								echo esc_attr( 'divide' );
							}
						?>"><?php echo esc_html( single_post_title( '', false ) ); ?></h1>
					<?php endif; // end title display ?>
					<?php get_template_part( 'template-parts/header/hero-snippet' ); ?>
				</div><!-- hero-snippet -->
			<?php endif; // end hovercraft-hero-snippet sidebar ?>

			<?php if ( is_active_sidebar( 'hovercraft_hero_window' ) || has_excerpt() ) : ?>
				<div class="hero-window">
					<?php if ( is_active_sidebar( 'hovercraft_hero_window' ) ) : ?>
						<?php
						add_filter( 'widget_title', '__return_false' );
						dynamic_sidebar( 'hovercraft_hero_window' );
						remove_filter( 'widget_title', '__return_false' );
						?>
					<?php else : ?>
						<?php the_excerpt(); ?>
					<?php endif; // end hovercraft-hero-window sidebar ?>
				</div><!-- hero-window -->
			<?php endif; // end hovercraft-hero-window sidebar ?>
			
		<?php endif; ?><!-- end is_front_page -->
	
		<?php get_template_part( 'template-parts/header/hero-cta' ); ?>
			
	</div><!-- welcome-wrapper -->
		
	<div class="clear"></div>
</div><!-- inner -->
</div><!-- hero-full-main -->
	
</div><!-- hero-full -->
</div><!-- hero-full-wrapper -->

<?php get_template_part( 'template-parts/header/hero-caption' ); ?>
	
</div><!-- hero-full-container -->
