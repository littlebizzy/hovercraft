<div id="primary">
	<?php // echo get_the_post_thumbnail( get_the_ID(), 'large' ); ?>
	<img width="800" height="450" src="<?php 
	echo get_the_post_thumbnail_url( get_the_ID(), 'large' );
	// wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); ?>" />
	
	<h1><?php single_post_title(); ?></h1>
	
<div class="clear"></div>
</div>
