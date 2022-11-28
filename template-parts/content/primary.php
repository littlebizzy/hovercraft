<div id="primary">

<div class="breadcrumbs">
	<?php ah_breadcrumb(); ?>
</div><!-- breadcrumbs -->
	
	<div id="content">
	
		<?php if ( is_singular() ) { ?>
				<?php if ( is_page_template( 'page-templates/template-basic.php' ) || !is_page_template() ) { ?>
					<h1><?php the_title(); ?></h1>
					<?php if ( 'post' == get_post_type() ) { ?>
						<?php $url_featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); 
						if (!empty( $url_featured_image ) ) { ?>
						<img width="800" height="450" src="<?php echo $url_featured_image; ?>" />
						<?php } ?>
						<?php the_time(get_option('date_format')); ?>
						<?php } ?>
				<?php } ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
		<?php } else { ?>
			<?php if ( is_page_template( 'page-templates/template-basic.php' ) || !is_page_template() ) { ?>
					<h1><?php the_title(); ?></h1>
			<?php } ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
		<?php } ?>
	
	<div class="clear"></div>
	</div><!-- content -->

	<div class="last-modified">
		<?php echo "<span>Last modified on "; the_modified_time('F jS, Y'); echo "</span>"; ?>
	</div><!-- last-modified -->

	<div class="clear"></div>
</div><!-- primary -->
