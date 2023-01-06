<div id="hero-wrapper">
<div class="hero-wide">

<div id="header-half-hero">
<?php get_template_part('template-parts/header/navigation'); ?>
</div>
	
<div class="hero-main">
<div class="inner">
	<?php if (is_front_page()) { ?>
	<div class="welcome-wrapper">
	<?php } else { ?>
		<div class="title-wrapper">
	<?php } ?>
		<h1 class="half-hero-title"><?php single_post_title(); ?></h1>
			
		<?php if (is_front_page()) : ?>
		<div class="welcome-text">
			<?php if ( has_excerpt() ) { ?>
					<div class="full-hero-snippet">
			 			<?php the_excerpt(); ?>
					</div><!--full-hero-snippet -->
				<?php } elseif ( is_active_sidebar( 'hovercraft_hero_snippet' ) ) { ?>
					<div class="full-hero-snippet">
						<?php add_filter( 'widget_title' , 'my_widget_title', 10, 1 );
							dynamic_sidebar( 'hovercraft_hero_snippet' ); remove_filter( 'widget_title', 'my_widget_title' ); ?>
				</div><!--full-hero-snippet -->
				<?php } ?>
		</div><!-- welcome-text -->
		<?php endif; ?><!-- is_front_page -->
	
		<?php if (is_front_page()) : ?>
		<div class="cta-hero-wrapper">
		<?php
			if ( has_nav_menu( 'cta-hero-primary' ) ) {
    		// User has assigned menu to this location;
    		// https://wordpress.stackexchange.com/questions/32739/wp-nav-menu-show-menu-only-if-one-exists-otherwise-show-nothing
    		wp_nav_menu( array( 
        	'theme_location' => 'cta-hero-primary', 
        	'menu_class' => 'cta', 
        	'container_class' => 'cta-hero-primary'
    		) );
			}
		?>
		<?php
			if ( has_nav_menu( 'cta-hero-secondary' ) ) {
    		// User has assigned menu to this location;
    		// https://wordpress.stackexchange.com/questions/32739/wp-nav-menu-show-menu-only-if-one-exists-otherwise-show-nothing
    		wp_nav_menu( array( 
        	'theme_location' => 'cta-hero-secondary', 
        	'menu_class' => 'cta', 
        	'container_class' => 'cta-hero-secondary'
    		) );
			}
		?>
		</div><!-- cta-hero-wrapper -->
		<?php endif; ?>
			
	</div><!-- welcome-wrapper -->
		
<div class="clear"></div>
</div><!-- inner -->
</div><!-- hero-main -->
	
</div><!-- hero-wide -->
</div><!-- hero-wrapper -->
