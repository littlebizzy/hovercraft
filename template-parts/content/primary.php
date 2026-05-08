<?php if ( get_theme_mod( 'hovercraft_sidebar_status' ) === 1 ) : ?>
	<div id="primary">
<?php else : ?>
	<div id="primary-wide">
<?php endif; ?>

	<?php get_template_part( 'template-parts/misc/breadcrumbs' ); ?>
	
	<div id="content-wrapper">
	
		<?php if ( is_singular() ) : ?>
			<?php if ( is_page_template( 'page-templates/template-basic.php' ) || ! is_page_template() ) : ?>
				<h1><?php echo esc_html( get_the_title() ); ?></h1>
				<?php $url_featured_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ), 'large' ); ?>

				<?php if ( ! empty( $url_featured_image ) && ( ! is_singular( 'product' ) ) ) : ?>
					<img class="featured-image" src="<?php echo esc_url( $url_featured_image ); ?>" />
				<?php endif; ?>

				<?php
				if ( get_post_type() === 'post' ) {
					echo esc_html( get_the_time( get_option( 'date_format' ) ) );
				}
				?>
			<?php endif; ?>
		<?php endif; ?><!-- singular -->
		
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
			
				<?php if ( is_home() ) : ?>
					<h4><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h4>
					<?php the_excerpt(); ?>
				<?php else : ?>
					<?php the_content(); ?>
				<?php endif; ?>
			
			<?php endwhile; ?>
		<?php endif; ?><!-- the loop -->
	
	<div class="clear"></div>
	<?php hovercraft_pagination_nav(); ?>	
	
	<div class="clear"></div>
	</div><!-- content-wrapper -->
	
	<?php comments_template(); ?> 

	<div class="clear"></div>
</div><!-- primary -->
