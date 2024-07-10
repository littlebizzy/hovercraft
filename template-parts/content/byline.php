<?php if ( post_type_exists( 'product' ) && is_product() ) {
	echo(null);
} else { ?>
<div class="post-byline">
	<span class="post-author"><?php /* _e( 'By ', 'hovercraft' ); */ ?><?php $hovercraft_byline_photo = get_theme_mod( 'hovercraft_byline_photo', 'none' );
	if ( ($hovercraft_byline_photo == 'byline_only') || ($hovercraft_byline_photo == 'byline_and_biography') ) { ?>
		<span class="byline-photo">
			<img alt="author avatar" src="<?php 
			$avatar_url = get_avatar_url(get_the_author_meta( 'ID' ), array('size' => 150));
			echo $avatar_url; ?>" class="avatar photo">
			<?php //if (get_the_author_meta('user_email')) { echo get_avatar(get_the_author_meta('user_email') ); } ?>
		</span>
		<?php } ?>

		<?php $hovercraft_biography = get_theme_mod( 'hovercraft_biography', 'native_posts_only' );
		if ( ( $hovercraft_biography == 'native_posts_only' ) || ( $hovercraft_biography == 'all_post_types' ) ) { ?>
			<a href="#author"><strong><?php echo get_the_author_meta('display_name', $author_id); ?></strong></a></span>
		<?php } else { ?>
			<strong><?php echo get_the_author_meta('display_name', $author_id); ?></strong></span>
		<?php } ?>
			
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

</div><!-- post-byline -->
<?php } 

// https://wordpress.stackexchange.com/questions/264802/how-to-check-if-custom-post-type-exists-in-wordpress
// https://stackoverflow.com/questions/3634381/php-if-something-is-the-case-do-nothing
// https://stackoverflow.com/questions/45529150/how-to-get-the-url-of-the-get-avatar-url-function-in-wordpress
// https://www.wpexplorer.com/remove-async-decoding-wordpress-images/
