<div id="splash-wrapper">
<div <?php if (is_front_page()) { echo 'class="splash-wide"'; } else { echo 'class="splash-fixed"'; } ?> style="
																												
background:linear-gradient(rgba(38, 50, 56, 0.7), rgba(240, 149, 128, 0.2)), url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); echo $url ?>);
																												
background: linear-gradient(270deg, #e19eae 0%, #945af5 100%), url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); echo $url ?>);

background-position: center;
background-size:cover;
background-repeat:no-repeat;

background: linear-gradient(to right, #1CB5E0, #000046), url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); echo $url ?>);

background:linear-gradient(rgba(38, 50, 56, 0.7), rgba(240, 149, 128, 0.2)), url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); echo $url ?>);
																												
">
	<div class="inner">
	
	<div class="welcome-wrapper">
		<div class="welcome"><?php single_post_title(); ?></div>
		<div class="welcome-text">
			<?php the_excerpt(); ?>
		</div><!-- welcome-text -->
		</div><!-- welcome-wrapper -->
	
		<?php if (is_front_page()) : ?>
		<?php wp_nav_menu( array( 'theme_location' => 'cta-splash', 'container_class'	=> 'cta-splash' ) ); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'cta-splash-minor', 'container_class'	=> 'cta-splash-minor' ) ); ?>
<?php endif; ?>
		
<div class="clear"></div>
</div><!-- inner -->
</div><!-- splash -->
</div><!-- splash-wrapper -->
