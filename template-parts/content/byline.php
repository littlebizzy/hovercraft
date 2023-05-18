<?php if( !is_product() ) { ?>
<div class="post-byline">
	<span class="post-author"><?php _e( 'By ', 'hovercraft' ); echo get_the_author_meta('display_name', $author_id); ?></span> | <span class="post-updated"><?php _e( 'Updated on ', 'hovercraft' ); echo the_modified_time('F j, Y'); ?></span>
</div><!-- post-byline -->
<?php } ?>
