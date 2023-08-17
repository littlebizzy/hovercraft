<?php if ( post_type_exists( 'product' ) && is_product() ) {
	echo(null);
} else { ?>
<div class="post-byline">
	<span class="post-author"><?php _e( 'By ', 'hovercraft' ); ?><strong><?php echo get_the_author_meta('display_name', $author_id); ?></strong></span> | <span class="post-updated"><?php /* _e( 'Updated on ', 'hovercraft' ); */ echo the_modified_time('M j, Y'); ?></span>
</div><!-- post-byline -->
<?php } 

// https://wordpress.stackexchange.com/questions/264802/how-to-check-if-custom-post-type-exists-in-wordpress
// https://stackoverflow.com/questions/3634381/php-if-something-is-the-case-do-nothing
