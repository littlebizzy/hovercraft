<?php if ( get_theme_mod( 'hovercraft_sidebar_status' ) == 1 ) { ?><div id="primary"><?php } else { ?><div id="primary-wide"><?php } ?>

	<?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>
	
	<div id="content">
	
		<?php if ( is_singular() ) { ?>
				<?php if ( is_page_template( 'page-templates/template-basic.php' ) || !is_page_template() ) { ?>
					<h1><?php the_title(); ?></h1>
					<?php $url_featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); 
					if ( !empty( $url_featured_image ) && ( !is_singular('product') ) ) { ?>
					<img class="featured-image" src="<?php echo $url_featured_image; ?>" />
					<?php } ?>
					<?php if ( 'post' == get_post_type() ) { 
						the_time(get_option('date_format')); 
					} ?>
				<?php } ?>
		<?php } ?><!-- singular -->
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<?php if (is_home()) { ?>
				<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
				<?php the_excerpt(); ?>
			<?php } else {
				the_content();
			} ?>
		
		<?php endwhile; endif; ?><!-- the loop -->
	
	<div class="clear"></div>
	<?php hovercraft_pagination_nav(); ?>	
	
	<div class="clear"></div>
	</div><!-- content -->

	<?php get_template_part( 'template-parts/content/last-modified' ); ?>
	
	<?php comments_template(); ?> 

	<div class="clear"></div>
</div><!-- primary -->
