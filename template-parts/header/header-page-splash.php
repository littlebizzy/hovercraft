<div id="splash-wrapper"><div class="splash-wide" style="background: 
		linear-gradient(60deg,
	/* rgba(38, 50, 56, 0.7777485994397759) 30%, */
    rgba(55, 71, 79, 0.7777485994397759) 30%, 
    rgba(255, 255, 255, 0) 100%), url(<?php 
$url_header_image = esc_url( get_header_image() );
$url_hovercraft_video = wp_get_attachment_url(get_theme_mod('hovercraft_video'));
if (empty($url_header_image)) { 
	echo "https://source.unsplash.com/featured/1600x900?mountains,people,city"; 
} else { echo $url_header_image; } ?>);		
background-position: center center;
background-size:cover;
background-repeat:no-repeat;
">

<?php 
	$url_hovercraft_video = wp_get_attachment_url(get_theme_mod('hovercraft_video'));
	if (!empty($url_hovercraft_video)){ echo 
		'<video playsinline autoplay muted loop poster="'.$url_header_image.'">
    	<source src="'.$url_hovercraft_video.'" type="video/mp4">
    	Your browser does not support the video tag.</video>';
	} ?>

<div id="header-page-splash">
<?php get_template_part('template-parts/navigation'); ?>
</div>
	
<div class="splash-main">
<div class="inner">
	<?php if (is_front_page()) { ?>
	<div class="welcome-wrapper">
	<?php } else { ?>
		<div class="title-wrapper">
	<?php } ?>
		<div class="welcome"><?php single_post_title(); ?></div>
		<div class="welcome-text"><?php 
			 $my_excerpt = get_the_excerpt();
     // if($my_excerpt !='') {
	if (strlen($my_excerpt) >= 5){
         the_excerpt();
     } else { global $hovercraft_excerpt; echo $hovercraft_excerpt; } ?></div><!-- welcome-text -->
		
	
		<?php if (is_front_page()) : ?>
		<div class="clear"></div>
		<?php
			if ( has_nav_menu( 'cta-splash-major' ) ) {
    		// User has assigned menu to this location;
    		// https://wordpress.stackexchange.com/questions/32739/wp-nav-menu-show-menu-only-if-one-exists-otherwise-show-nothing
    		wp_nav_menu( array( 
        	'theme_location' => 'cta-splash-major', 
        	'menu_class' => 'cta', 
        	'container_class' => 'cta-splash-major'
    		) );
			}
		?>
		<?php
			if ( has_nav_menu( 'cta-splash-minor' ) ) {
    		// User has assigned menu to this location;
    		// https://wordpress.stackexchange.com/questions/32739/wp-nav-menu-show-menu-only-if-one-exists-otherwise-show-nothing
    		wp_nav_menu( array( 
        	'theme_location' => 'cta-splash-minor', 
        	'menu_class' => 'cta', 
        	'container_class' => 'cta-splash-minor'
    		) );
			}
		?>
		<?php endif; ?>
		</div><!-- welcome-wrapper -->
		
<div class="clear"></div>
</div><!-- inner -->
</div><!-- splash-main -->
	
</div><!-- splash-wide -->
</div><!-- splash-wrapper -->
  
