<?php
$hovercraft_biography = get_theme_mod( 'hovercraft_biography', 'native_posts_only' );

if ( ( $hovercraft_biography == 'native_posts_only' ) || ( $hovercraft_biography == 'all_post_types' ) ) {
	
	if ( $hovercraft_biography == 'native_posts_only' ) { 

		if ( get_post_type() === 'post' ) { ?>

        <div id="author">
			<h5 class="author-biography-intro"><?php _e( 'About the Author', 'hovercraft' ); ?></h5>
			<?php $hovercraft_byline_photo = get_theme_mod( 'hovercraft_byline_photo', 'none' );
				if ( ($hovercraft_byline_photo == 'biography_only') || ($hovercraft_byline_photo == 'byline_and_biography') ) { ?>
					<div class="biography-photo"><?php if (get_the_author_meta('user_email')) { echo get_avatar(get_the_author_meta('user_email'), '150'); } ?></div>
				<?php } ?>
            <h3 class="biography-name"><?php the_author_meta('display_name'); ?></h3>
            	<p class="biography-description"><?php echo nl2br( get_the_author_meta('description') ); ?></p>
			<div class="clear"></div>
        </div><!-- author -->

		<?php } // if native post

	} elseif ( $hovercraft_biography == 'all_post_types' ) { 

		if ( ( is_custom_post_type() ) || ( get_post_type() === 'post' ) ) { ?>

		<div id="author">
			<h5 class="author-biography-intro"><?php _e( 'About the Author', 'hovercraft' ); ?></h5>
			<?php $hovercraft_byline_photo = get_theme_mod( 'hovercraft_byline_photo', 'none' );
				if ( ($hovercraft_byline_photo == 'biography_only') || ($hovercraft_byline_photo == 'byline_and_biography') ) { ?>
					<div class="biography-photo"><?php if (get_the_author_meta('user_email')) { echo get_avatar(get_the_author_meta('user_email'), '150'); } ?></div>
				<?php } ?>
            <h3 class="biography-name"><?php the_author_meta('display_name'); ?></h3>
            	<p class="biography-description"><?php echo nl2br( get_the_author_meta('description') ); ?></p>
			<div class="clear"></div>
        </div><!-- author -->

		<?php } // if custom post or native post
	
	} // if all_post_types
			
} // if biography either native_posts_only or all_post_types

// https://shihabiiuc.com/how-to-display-author-bio-in-wordpress-single-post/
// https://stackoverflow.com/questions/4290420/wordpress-how-to-check-whether-it-is-post-or-page
// https://wordpress.stackexchange.com/questions/6731/how-do-test-if-a-post-is-a-custom-post-type
// https://stackoverflow.com/questions/4290420/wordpress-how-to-check-whether-it-is-post-or-page
// https://wordpress.stackexchange.com/questions/193369/how-to-get-authors-avatar
