<?php

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
					</div><!-- biography-photo -->
				<?php endif; // end hovercraft-byline-photo ?>
				<h3 class="biography-name"><?php echo esc_html( get_the_author_meta( 'display_name' ) ); ?></h3>
				<p class="biography-description"><?php echo nl2br( esc_html( get_the_author_meta( 'description' ) ) ); ?></p>
				<div class="clear"></div>
			</div><!-- author -->

		<?php endif; // end post type ?>
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
					</div><!-- biography-photo -->
				<?php endif; // end hovercraft-byline-photo ?>
				<h3 class="biography-name"><?php echo esc_html( get_the_author_meta( 'display_name' ) ); ?></h3>
				<p class="biography-description"><?php echo nl2br( esc_html( get_the_author_meta( 'description' ) ) ); ?></p>
				<div class="clear"></div>
			</div><!-- author -->

		<?php endif; // end post type ?>
	<?php endif; // end biography setting ?>
<?php endif; // end biography setting ?>

<?php
