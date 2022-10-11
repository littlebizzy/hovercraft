<div id="splash" style="
background:linear-gradient(rgba(38, 50, 56, 0.7), rgba(240, 149, 128, 0.2)), url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); echo $url ?>);
background: linear-gradient(270deg, #e19eae 0%, #945af5 100%), url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); echo $url ?>);

background-position: center;
background-size:cover;
background-repeat:no-repeat;
						
background: #000046;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #1CB5E0, #000046);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #1CB5E0, #000046); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

">
	<div class="inner">
	
	<div id="welcome"><?php global $welcome; echo $welcome; ?></div>
	
		<?php if (is_front_page()) : ?>
		<?php wp_nav_menu( array( 'theme_location' => 'cta-splash', 'container_class'	=> 'cta-splash' ) ); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'cta-splash-minor', 'container_class'	=> 'cta-splash-minor' ) ); ?>
<?php endif; ?>
		
<div class="clear"></div>
</div><!-- inner -->
</div><!-- splash -->

