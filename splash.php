<div id="splash" style="
background:linear-gradient(rgba(38, 50, 56, 0.7), rgba(240, 149, 128, 0.2)), url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); echo $url ?>);
background-position: center;
background-size:cover;
background-repeat:no-repeat;
">
	<div class="inner">
	
	<div id="welcome"><?php global $welcome; echo $welcome; ?></div>
	
		<?php if (is_front_page()) : ?>
    <button class="cta-splash">Learn More</button>
<?php endif; ?>
		
<div class="clear"></div>
</div><!-- inner -->
</div><!-- splash -->

