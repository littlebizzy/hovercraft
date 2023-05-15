<div id="hero-mini">

<div id="header-mini-hero">
	
	<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) || is_active_sidebar( 'hovercraft_preheader_right' ) ) { ?>
	<div id="preheader">
		<div class="inner">
			<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) && is_active_sidebar( 'hovercraft_preheader_right' ) ) { ?>
			<div class="preheader-left">
				<?php add_filter( 'widget_title' , 'my_widget_title', 10, 1 ); // default priority and 1 argument in the callback function
				dynamic_sidebar( 'hovercraft_preheader_left' ); remove_filter( 'widget_title', 'my_widget_title' ); ?>
			</div><!-- preheader-left -->
			<div class="preheader-right">
				<?php add_filter( 'widget_title' , 'my_widget_title', 10, 1 ); // default priority and 1 argument in the callback function
				dynamic_sidebar( 'hovercraft_preheader_right' ); remove_filter( 'widget_title', 'my_widget_title' ); ?>
			</div><!-- preheader-right -->
			<?php } elseif ( is_active_sidebar( 'hovercraft_preheader_left' ) xor is_active_sidebar( 'hovercraft_preheader_right' ) ) { ?>
			<div class="preheader-center">
				<?php if ( is_active_sidebar( 'hovercraft_preheader_left' ) ) { ?>
					<?php add_filter( 'widget_title' , 'my_widget_title', 10, 1 ); // default priority and 1 argument in the callback function
					dynamic_sidebar( 'hovercraft_preheader_left' ); remove_filter( 'widget_title', 'my_widget_title' ); ?>
				<?php } elseif ( is_active_sidebar( 'hovercraft_preheader_right' ) ) { ?>
					<?php add_filter( 'widget_title' , 'my_widget_title', 10, 1 ); // default priority and 1 argument in the callback function
					dynamic_sidebar( 'hovercraft_preheader_right' ); remove_filter( 'widget_title', 'my_widget_title' ); ?>
				<?php } ?>
			</div><!-- preheader-center -->
			<?php } ?>
			<div class="clear"></div>
		</div><!-- inner -->
	</div><!-- preheader -->
	<?php } ?><!-- if preheader widgets active -->
	
<?php get_template_part('template-parts/header/navigation'); ?>
</div>
	
<div class="hero-main-mini">
<div class="inner">
		<div class="title-wrapper">
		<h1 class="mini-hero-title"><?php single_post_title(); ?></h1>
		
		<?php if (is_front_page()) : ?>
		
			<?php if ( is_active_sidebar( 'hovercraft_hero_snippet' ) || has_excerpt() ) : ?>
				<div class="hero-snippet">
					<?php if ( is_active_sidebar( 'hovercraft_hero_snippet' ) ) {
						add_filter( 'widget_title' , 'my_widget_title', 10, 1 );
							dynamic_sidebar( 'hovercraft_hero_snippet' ); remove_filter( 'widget_title', 'my_widget_title' );
					} else the_excerpt();
					?>
				</div><!-- hero-snippet -->
			<?php endif; ?>
			
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
</div><!-- hero-main-mini -->
	
</div><!-- hero-mini -->
