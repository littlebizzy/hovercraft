<div id="splash-wrapper"><div class="splash-wide" style="background: 
		linear-gradient(60deg,
	/* rgba(38, 50, 56, 0.7777485994397759) 30%, */
    rgba(55, 71, 79, 0.7777485994397759) 30%, 
    rgba(255, 255, 255, 0) 100%), url(<?php 
$url_header_image = esc_url( get_header_image() );
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); 
if (empty($url_header_image)){ echo "https://source.unsplash.com/featured/1600x900?mountains,people,city"; } else { echo $url_header_image; } ?>);		
background-position: center center;
background-size:cover;
background-repeat:no-repeat;
">

<div id="header-half-splash">
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
		<?php wp_nav_menu( array( 'theme_location' => 'cta-splash-major', 'container_class'	=> 'cta-splash-major' ) ); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'cta-splash-minor', 'container_class'	=> 'cta-splash-minor' ) ); ?>
		<?php endif; ?>
		</div><!-- welcome-wrapper -->
		
<div class="clear"></div>
</div><!-- inner -->
</div><!-- splash-main -->
	
</div><!-- splash-wide -->
</div><!-- splash-wrapper -->
