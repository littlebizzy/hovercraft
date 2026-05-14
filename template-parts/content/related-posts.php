<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$tags = wp_get_post_terms( get_queried_object_id(), 'post_tag', ['fields' => 'ids'] );
$args = [
	'post__not_in'        => array( get_queried_object_id() ),
	'posts_per_page'      => 5,
	'ignore_sticky_posts' => 1,
	'orderby'             => 'rand',
	'tax_query' => [
		[
			'taxonomy' => 'post_tag',
			'terms'    => $tags
		]
	]
];
$my_query = new WP_Query( $args );
?>

<?php if ( $my_query->have_posts() ) : ?>
	<div id="related">
		<h4><?php esc_html_e( 'Related Posts: ', 'hovercraft' ); ?></h4>
		<ul>
			<?php while ( $my_query->have_posts() ) : ?>
				<?php $my_query->the_post(); ?>
				<li><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></li>
				<?php endwhile; // end related posts ?>
			<?php wp_reset_postdata(); ?>
			</ul><!-- related posts list -->
	</div><!-- related -->
<?php endif; // end the loop ?>

<?php
