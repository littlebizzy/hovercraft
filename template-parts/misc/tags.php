<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

 $hovercraft_post_tags = get_theme_mod( 'hovercraft_post_tags', 'native_posts_only' ); ?>

<?php if ( $hovercraft_post_tags === 'native_posts_only' ) : ?>
	<?php if ( is_single() && 'post' === get_post_type() ) : ?>
		<div class="tags"><span><?php esc_html_e( 'Tags: ', 'hovercraft' ); echo hovercraft_show_tags(); ?></span></div><!-- tags -->
	<?php endif; ?>
<?php elseif ( $hovercraft_post_tags === 'native_posts_and_pages' ) : ?>
	<?php if ( is_single() ) : ?>
		<?php if ( 'post' === get_post_type() || is_page() ) : ?>
			<div class="tags"><span><?php esc_html_e( 'Tags: ', 'hovercraft' ); echo hovercraft_show_tags(); ?></span></div><!-- tags -->
		<?php endif; ?>
	<?php endif; ?>
<?php elseif ( $hovercraft_post_tags === 'native_posts_and_custom_posts' ) : ?>
	<?php if ( is_single() ) : ?>
		<?php if ( 'post' === get_post_type() || hovercraft_is_custom_post_type() ) : ?>
			<div class="tags"><span><?php esc_html_e( 'Tags: ', 'hovercraft' ); echo hovercraft_show_tags(); ?></span></div><!-- tags -->
		<?php endif; ?>
	<?php endif; ?>
<?php elseif ( $hovercraft_post_tags === 'native_posts_and_pages_and_custom_posts' ) : ?>
	<?php if ( is_single() ) : ?>
		<?php if ( 'post' === get_post_type() || is_page() || hovercraft_is_custom_post_type() ) : ?>
			<div class="tags"><span><?php esc_html_e( 'Tags: ', 'hovercraft' ); echo hovercraft_show_tags(); ?></span></div><!-- tags -->
		<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>

<?php
?>
