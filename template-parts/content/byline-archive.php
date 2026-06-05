<?php

global $post;

// skip if single product page
if ( is_singular( 'product' ) ) {
	return;
}

// get author id safely
$author_id = isset( $post ) && is_object( $post ) ? $post->post_author : 0;
?>

<div class="post-byline-archive">
	<span class="post-author">
		<span class="author-name"><?php echo esc_html( get_the_author_meta( 'display_name', $author_id ) ); ?></span>
	</span>

	<?php $hovercraft_byline_date = get_theme_mod( 'hovercraft_byline_date', 'published_date_only' ); ?>

	<?php if ( $hovercraft_byline_date === 'published_date_only' ) : ?>
		<span class="byline-separator">|</span>
		<span class="date-published"><?php echo esc_html__( 'Published on', 'hovercraft' ) . ' ' . esc_html( get_the_date( 'M j, Y' ) ); ?></span>
	<?php elseif ( $hovercraft_byline_date === 'updated_date_only' ) : ?>
		<span class="byline-separator">|</span>
		<span class="date-updated"><?php echo esc_html__( 'Updated on', 'hovercraft' ) . ' ' . esc_html( get_the_modified_date( 'M j, Y' ) ); ?></span>
	<?php elseif ( $hovercraft_byline_date === 'updated_and_published_dates' ) : ?>
		<span class="byline-separator">|</span>
		<span class="date-published"><?php echo esc_html__( 'Published on', 'hovercraft' ) . ' ' . esc_html( get_the_date( 'M j, Y' ) ); ?></span>
		<span class="date-updated"><?php echo esc_html__( 'Updated on', 'hovercraft' ) . ' ' . esc_html( get_the_modified_date( 'M j, Y' ) ); ?></span>
	<?php endif; // end byline date ?>
</div><!-- post-byline-archive -->

<?php
