<div id="primary">
	<?php if (is_single()) { ?>
	<img width="800" height="450" src="<?php 
	// wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' );
	echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>" />
	
	<h1><?php single_post_title(); ?></h1>
	<?php } ?>

<div class="clear"></div>
</div>
