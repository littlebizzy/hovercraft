<div <?php if (is_front_page()) { echo 'class="splash-wide-off"'; } else { echo 'class="splash-fixed"'; } ?> style="

background:linear-gradient(rgba(38, 50, 56, 0.7), rgba(240, 149, 128, 0.2)), url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); echo $url ?>);
																												
background: linear-gradient(270deg, #e19eae 0%, #945af5 100%), url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); echo $url ?>);

background: linear-gradient(to right, #1CB5E0, #000046), url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); echo $url ?>);

background:linear-gradient(rgba(38, 50, 56, 0.7), rgba(240, 149, 128, 0.2)), url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); echo $url ?>);
																												
background: linear-gradient(0deg, rgba(38, 50, 56, 0.9) 25%, rgba(2, 136, 209, 0.3) 100%), url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); echo $url ?>);
	
background: linear-gradient(0deg, rgba(38, 50, 56, 0.7) 50%, rgba(255, 215, 64, 0.3) 100%), url(https://source.unsplash.com/featured/640x360);
																												
background-position: center center;
background-size:cover;
background-repeat:no-repeat;
														    
">
	<div class="inner">
	
	<?php if (is_front_page()) { ?>
	<div class="welcome-wrapper">
	<?php } else { ?>
		<div class="title-wrapper">
	<?php } ?>
		<div class="welcome"><?php single_post_title(); ?></div>
		<div class="welcome-text">
			<?php the_excerpt(); ?>
		</div><!-- welcome-text -->
		</div><!-- welcome-wrapper -->
	
		<?php if (is_front_page()) : ?>
		<?php wp_nav_menu( array( 'theme_location' => 'cta-splash-major', 'container_class'	=> 'cta-splash-major' ) ); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'cta-splash-minor', 'container_class'	=> 'cta-splash-minor' ) ); ?>
<?php endif; ?>
		
<div class="clear"></div>
</div><!-- inner -->
</div><!-- splash -->
</div><!-- splash-wrapper -->
