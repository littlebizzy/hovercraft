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

<div id="header-mini-splash">
<?php get_template_part('template-parts/navigation'); ?>
</div>
	
<div class="splash-main-mini">
<div class="inner">
		<div class="title-wrapper">
		<div class="welcome-title"><?php single_post_title(); ?></div>
		<div class="welcome-text"><?php 
			$my_excerpt = get_the_excerpt();
			if (strlen($my_excerpt) >= 10000){
         	the_excerpt();
     		} ?></div><!-- welcome-text -->
		
	
		<?php if (is_front_page()) : ?>
		<div class="clear"></div>
		<?php wp_nav_menu( array( 'theme_location' => 'cta-splash-major', 'container_class'	=> 'cta-splash-major' ) ); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'cta-splash-minor', 'container_class'	=> 'cta-splash-minor' ) ); ?>
		<?php endif; ?>
		</div><!-- welcome-wrapper -->
		
<div class="clear"></div>
</div><!-- inner -->
</div><!-- splash-main -->
	
</div><!-- splash-wide -->
	
