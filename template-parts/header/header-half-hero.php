<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div id="hero-half-container">
	
<div id="header-half-hero">
	
	<?php get_template_part( 'template-parts/header/preheader' ); ?>
	<?php get_template_part( 'template-parts/header/navigation' ); ?>
</div><!-- header-half-hero -->

<div class="hero-half-wrapper">
<div class="hero-half">
	
	<div class="inner">
		
	<?php if ( is_front_page() ) : ?>
		<div class="welcome-wrapper">
	<?php else : ?>
		<div class="title-wrapper">
	<?php endif; ?>
			
		<?php if ( ! hovercraft_is_title_hidden() ) : ?>
		<h1 class="half-hero-title <?php
			$h1_divider_display = get_theme_mod( 'hovercraft_h1_divider_display', 'none' );
			if ( $h1_divider_display === 'everywhere_possible' ) {
				echo esc_attr( 'divide' );
			}
		?>"><?php echo esc_html( single_post_title( '', false ) ); ?></h1>
		<?php endif; ?>
			
		<?php if ( is_front_page() ) : ?>
		
			<?php if ( is_active_sidebar( 'hovercraft_hero_snippet' ) || has_excerpt() ) : ?>
				<div class="hero-snippet">
					<?php if ( is_active_sidebar( 'hovercraft_hero_snippet' ) ) : ?>
						<?php
						add_filter( 'widget_title', '__return_false' );
						dynamic_sidebar( 'hovercraft_hero_snippet' );
						remove_filter( 'widget_title', '__return_false' );
						?>
					<?php else : ?>
						<?php the_excerpt(); ?>
					<?php endif; ?>
				</div><!-- hero-snippet -->
			<?php endif; ?>

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
					<?php endif; ?>
				</div><!-- hero-window -->
			<?php endif; ?>
			
		<?php endif; ?><!-- is_front_page -->
	
		<?php get_template_part( 'template-parts/header/hero-cta' ); ?>
			
	</div><!-- welcome-wrapper -->
		
	<div class="clear"></div>
	</div><!-- inner -->

</div><!-- hero-half -->
</div><!-- hero-half-wrapper -->

</div><!-- hero-half-container -->
