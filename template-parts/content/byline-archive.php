<?php if ( post_type_exists( 'product' ) && is_product() ) {
	echo(null);
} else { ?>
<div class="post-byline-archive">
	<span class="post-author"><?php /* _e( 'By ', 'hovercraft' ); */ ?>
		<strong><?php echo get_the_author_meta('display_name', $author_id); ?></strong></span>
	
		<?php $hovercraft_byline_date = get_theme_mod( 'hovercraft_byline_date', 'published_date_only' );
		if ( $hovercraft_byline_date == 'published_date_only') { ?>
			<span class="byline-separator"><?php echo "|"; ?></span>
			<span class="post-published"><?php echo get_the_date('M j, Y'); ?></span>
		<?php } elseif ( $hovercraft_byline_date == 'updated_date_only') { ?>
			<span class="byline-separator"><?php echo "|"; ?></span>
			<span class="post-updated"><?php echo the_modified_time('M j, Y'); ?></span>
		<?php } elseif ( $hovercraft_byline_date == 'updated_and_published_dates') { ?>
			<span class="byline-separator"><?php echo "|"; ?></span>
			<span class="post-published"><?php echo get_the_date('M j, Y'); ?></span>
			<span class="post-updated"><?php echo the_modified_time('M j, Y'); ?></span>
		<?php } ?>
	
</div><!-- post-byline-archive -->
<?php } 

// https://wordpress.stackexchange.com/questions/264802/how-to-check-if-custom-post-type-exists-in-wordpress
// https://stackoverflow.com/questions/3634381/php-if-something-is-the-case-do-nothing
// https://stackoverflow.com/questions/45529150/how-to-get-the-url-of-the-get-avatar-url-function-in-wordpress
// https://www.wpexplorer.com/remove-async-decoding-wordpress-images/
