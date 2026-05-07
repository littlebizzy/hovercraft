<div id="hero-full-container">

<?php
$url_header_image = get_header_image();
$hovercraft_video_id = absint( get_theme_mod( 'hovercraft_video' ) );
$url_hovercraft_video = wp_get_attachment_url( $hovercraft_video_id );

if ( ! empty( $url_hovercraft_video ) ) {
	?>
	<video class="hero-background-video" playsinline autoplay muted loop poster="<?php echo esc_url( $url_header_image ); ?>">
		<source src="<?php echo esc_url( $url_hovercraft_video ); ?>" type="video/mp4">
		<?php esc_html_e( 'Your browser does not support the video tag.', 'hovercraft' ); ?>
	</video>
	<div class="hero-background-video-overlay"></div>
	<?php
}
?>

<div id="header-full-hero">
	
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
				<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) ) {
					add_filter( 'widget_title', '__return_false' );
					dynamic_sidebar( 'hovercraft_preheader_left' );
					remove_filter( 'widget_title', '__return_false' );
				} elseif ( is_active_sidebar( 'hovercraft_preheader_right' ) ) {
					add_filter( 'widget_title', '__return_false' );
					dynamic_sidebar( 'hovercraft_preheader_right' );
					remove_filter( 'widget_title', '__return_false' );
				} ?>
			</div><!-- preheader-center -->
			<?php endif; ?>
			<div class="clear"></div>
		</div><!-- inner -->
	</div><!-- preheader -->
	<?php endif; ?><!-- if preheader widgets active -->
	
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
	<?php endif; ?>

		<?php if ( ! is_active_sidebar( 'hovercraft_hero_window' ) && ! hovercraft_is_title_hidden() ) : ?>
			<h1 class="full-hero-title <?php
				$h1_divider_display = get_theme_mod( 'hovercraft_h1_divider_display', 'none' );
				if ( $h1_divider_display === 'everywhere_possible' ) {
					echo esc_attr( 'divide' );
				}
			?>"><?php echo esc_html( single_post_title( '', false ) ); ?></h1>
		<?php endif; ?>
			
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
					<?php endif; ?>
					<?php
					if ( is_active_sidebar( 'hovercraft_hero_snippet' ) ) {
						add_filter( 'widget_title', '__return_false' );
						dynamic_sidebar( 'hovercraft_hero_snippet' );
						remove_filter( 'widget_title', '__return_false' );
					} else {
						the_excerpt();
					}
					?>
				</div><!-- hero-snippet -->
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'hovercraft_hero_window' ) || has_excerpt() ) : ?>
				<div class="hero-window">
					<?php
					if ( is_active_sidebar( 'hovercraft_hero_window' ) ) {
						add_filter( 'widget_title', '__return_false' );
						dynamic_sidebar( 'hovercraft_hero_window' );
						remove_filter( 'widget_title', '__return_false' );
					} else {
						the_excerpt();
					}
					?>
				</div><!-- hero-window -->
			<?php endif; ?>
			
		<?php endif; ?><!-- is_front_page -->
	
		<?php if ( is_front_page() ) : ?>
		<?php if ( has_nav_menu( 'cta-hero-primary' ) || has_nav_menu( 'cta-hero-secondary' ) ) : ?>
		
			<div class="cta-hero-wrapper">
				<?php
				if ( has_nav_menu( 'cta-hero-primary' ) ) {
					wp_nav_menu( array(
						'theme_location'  => 'cta-hero-primary',
						'menu_class'      => 'cta',
						'container_class' => 'cta-hero-primary',
					) );
				}
				if ( has_nav_menu( 'cta-hero-secondary' ) ) {
					wp_nav_menu( array(
						'theme_location'  => 'cta-hero-secondary',
						'menu_class'      => 'cta',
						'container_class' => 'cta-hero-secondary',
					) );
				}
				?>
			</div><!-- cta-hero-wrapper -->
		
		<?php endif; ?>
		<?php endif; ?>
			
	</div><!-- welcome-wrapper -->
		
	<div class="clear"></div>
</div><!-- inner -->
</div><!-- hero-full-main -->
	
</div><!-- hero-full -->
</div><!-- hero-full-wrapper -->
	
</div><!-- hero-full-container -->
