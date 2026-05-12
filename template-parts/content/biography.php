<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hovercraft_biography = get_theme_mod( 'hovercraft_biography', 'native_posts_only' );
?>

<?php if ( ( $hovercraft_biography === 'native_posts_only' ) || ( $hovercraft_biography === 'all_post_types' ) ) : ?>
	<?php if ( $hovercraft_biography === 'native_posts_only' ) : ?>
		<?php if ( get_post_type() === 'post' ) : ?>

			<div id="author">
				<h5 class="author-biography-intro"><?php esc_html_e( 'About the Author', 'hovercraft' ); ?></h5>
				<?php $hovercraft_byline_photo = get_theme_mod( 'hovercraft_byline_photo', 'none' ); ?>
				<?php if ( ( $hovercraft_byline_photo === 'biography_only' ) || ( $hovercraft_byline_photo === 'byline_and_biography' ) ) : ?>
					<div class="biography-photo">
						<?php
						if ( get_the_author_meta( 'user_email' ) ) {
							echo get_avatar( get_the_author_meta( 'user_email' ), '150' );
						}
						?>
					</div>
				<?php endif; ?>
				<h3 class="biography-name"><?php echo esc_html( get_the_author_meta( 'display_name' ) ); ?></h3>
				<p class="biography-description"><?php echo nl2br( esc_html( get_the_author_meta( 'description' ) ) ); ?></p>
				<div class="clear"></div>
			</div><!-- author -->

		<?php endif; ?>
	<?php elseif ( $hovercraft_biography === 'all_post_types' ) : ?>
		<?php if ( ( hovercraft_is_custom_post_type() ) || ( get_post_type() === 'post' ) ) : ?>

			<div id="author">
				<h5 class="author-biography-intro"><?php esc_html_e( 'About the Author', 'hovercraft' ); ?></h5>
				<?php $hovercraft_byline_photo = get_theme_mod( 'hovercraft_byline_photo', 'none' ); ?>
				<?php if ( ( $hovercraft_byline_photo === 'biography_only' ) || ( $hovercraft_byline_photo === 'byline_and_biography' ) ) : ?>
					<div class="biography-photo">
						<?php
						if ( get_the_author_meta( 'user_email' ) ) {
							echo get_avatar( get_the_author_meta( 'user_email' ), '150' );
						}
						?>
					</div>
				<?php endif; ?>
				<h3 class="biography-name"><?php echo esc_html( get_the_author_meta( 'display_name' ) ); ?></h3>
				<p class="biography-description"><?php echo nl2br( esc_html( get_the_author_meta( 'description' ) ) ); ?></p>
				<div class="clear"></div>
			</div><!-- author -->

		<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>

<?php
// https://shihabiiuc.com/how-to-display-author-bio-in-wordpress-single-post/
// https://stackoverflow.com/questions/4290420/wordpress-how-to-check-whether-it-is-post-or-page
// https://wordpress.stackexchange.com/questions/6731/how-do-test-if-a-post-is-a-custom-post-type
// https://stackoverflow.com/questions/4290420/wordpress-how-to-check-whether-it-is-post-or-page
// https://wordpress.stackexchange.com/questions/193369/how-to-get-authors-avatar
