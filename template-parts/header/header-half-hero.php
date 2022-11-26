<div id="splash-wrapper">
<div class="splash-wide" style="background: 
	linear-gradient(60deg,
    rgba(55, 71, 79, 0.7777485994397759) 30%, 
    rgba(255, 255, 255, 0) 100%), url(<?php 
	$url_header_image = esc_url( get_header_image() );
	$url_featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); 
	if (!empty($url_featured_image)){ echo $url_featured_image; } else { echo $url_header_image; } ?>);		
	background-position: center center;
	background-size: cover;
	background-repeat: no-repeat;
">

<div id="header-half-hero">
<?php get_template_part('template-parts/header/navigation'); ?>
</div>
	
<div class="splash-main">
<div class="inner">
	<?php if (is_front_page()) { ?>
	<div class="welcome-wrapper">
	<?php } else { ?>
		<div class="title-wrapper">
	<?php } ?>
		<h1 class="half-hero-title"><?php single_post_title(); ?></h1>
			
		<div class="welcome-text">
			
			<div class="welcome-text">
			
			<?php if ( has_excerpt() ) { ?>
					<div class="full-hero-snippet">
			 			<?php the_excerpt(); ?>
					</div><!--full-hero-snippet -->
				<?php } elseif ( is_active_sidebar( 'hovercraft_full_hero' ) ) { ?>
					<div class="full-hero-snippet">
						<?php add_filter( 'widget_title' , 'my_widget_title', 10, 1 );
							dynamic_sidebar( 'hovercraft_full_hero' ); remove_filter( 'widget_title', 'my_widget_title' ); ?>
				</div><!--full-hero-snippet -->
				<?php } ?>
			
		</div><!-- welcome-text -->
	
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
</div><!-- splash-main -->
	
</div><!-- splash-wide -->
</div><!-- splash-wrapper -->
