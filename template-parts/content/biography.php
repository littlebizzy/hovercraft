<?php
$hovercraft_biography = get_theme_mod( 'hovercraft_biography', 'native_posts_only' );

if ( ( $hovercraft_biography == 'native_posts_only' ) || ( $hovercraft_biography == 'all_post_types' ) ) {
	
	if ( ( $hovercraft_biography == 'native_posts_only' ) && ( get_post_type() === 'post' ) ) { ?>

        <div class="author-biography">
            <div class="biography-photo"><?php echo get_avatar( get_the_author_meta('user_email'), '150' ); ?></div>
            <h3 class="biography-name"><?php the_author_meta('display_name'); ?></h3>
            <p class="biography-description"><?php echo nl2br( get_the_author_meta('description') ); ?></p>
        </div>

	<?php }
	
} // if biography either native_posts_only or all_post_types

// https://shihabiiuc.com/how-to-display-author-bio-in-wordpress-single-post/
// https://stackoverflow.com/questions/4290420/wordpress-how-to-check-whether-it-is-post-or-page
