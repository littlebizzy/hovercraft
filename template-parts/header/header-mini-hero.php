<div class="splash-mini" style="background: 
	linear-gradient(60deg,
    rgba(55, 71, 79, 0.7777485994397759) 30%, 
    rgba(255, 255, 255, 0) 100%), url(<?php 
	$url_header_image = esc_url( get_header_image() );
	$url_featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); 
	$url_random_unsplash = "https://source.unsplash.com/featured/1600x900?mountains,people,city";
	if (!empty($url_featured_image)){ echo $url_featured_image; } else { echo $url_random_unsplash; } ?>);		
background-position: center center;
background-size:cover;
background-repeat:no-repeat;
">

<div id="header-mini-hero">
<?php get_template_part('template-parts/header/navigation'); ?>
</div>
	
<div class="splash-main-mini">
<div class="inner">
		<div class="title-wrapper">
		<h1 class="splash-mini-title"><?php single_post_title(); ?></h1>
		<div class="welcome-text"><?php 
			$my_excerpt = get_the_excerpt();
			if (strlen($my_excerpt) >= 10000){
         	the_excerpt();
     		} ?></div><!-- welcome-text -->
		
	
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
	
