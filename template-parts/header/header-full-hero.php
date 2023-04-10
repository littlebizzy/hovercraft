<div id="hero-full-container">

<?php 
	$url_hovercraft_video = wp_get_attachment_url(get_theme_mod('hovercraft_video'));
	if (!empty($url_hovercraft_video)){ echo 
		'<video class="hero-background-video" playsinline autoplay muted loop poster="'.$url_header_image.'">
    	<source src="'.$url_hovercraft_video.'" type="video/mp4">
    	Your browser does not support the video tag.</video><div class="hero-background-video-overlay"></div>';
	} ?>

<div id="header-full-hero">
<?php get_template_part('template-parts/header/navigation'); ?>
</div><!-- header-full-hero -->
	
<div class="hero-full-wrapper">
<div class="hero-full">

<div class="hero-full-main">
<div class="inner">
	<?php if (is_front_page()) { ?>
	<div class="welcome-wrapper">
	<?php } else { ?>
		<div class="title-wrapper">
	<?php } ?>
		<h1 class="full-hero-title"><?php single_post_title(); ?></h1>
			
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
		<?php if ( has_nav_menu( 'cta-hero-primary' ) || has_nav_menu( 'cta-hero-secondary' ) ) : ?>
		
			<div class="cta-hero-wrapper">
				<?php if ( has_nav_menu( 'cta-hero-primary' ) ) : ?>
    				<?php wp_nav_menu( array( 
        				'theme_location' => 'cta-hero-primary', 
        				'menu_class' => 'cta', 
        				'container_class' => 'cta-hero-primary'
    					) ); ?>
				<?php endif; ?>
				<?php if ( has_nav_menu( 'cta-hero-secondary' ) ) : ?>
    				<?php wp_nav_menu( array( 
        				'theme_location' => 'cta-hero-secondary', 
        				'menu_class' => 'cta', 
        				'container_class' => 'cta-hero-secondary'
    					) );
				<?php endif; ?>
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

<!-- https://wordpress.stackexchange.com/questions/32739/wp-nav-menu-show-menu-only-if-one-exists-otherwise-show-nothing -->
