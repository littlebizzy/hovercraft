<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div id="main">
	<div class="inner">
    	
		<?php $hovercraft_sidebar_status_checked = get_theme_mod( 'hovercraft_sidebar_status' ) ? true : false;
		if ( $hovercraft_sidebar_status_checked == true ) { ?><div id="primary"><?php } else { ?><div id="primary-center"><?php } ?>
		
		<div id="content-wrapper">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php get_template_part( 'template-parts/content/featured-image' ); ?>
			
				<div id="content-padded">

					<?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>
				
					<?php get_template_part( 'template-parts/content/title' ); ?>	

					<?php get_template_part( 'template-parts/content/byline' ); ?>

					<?php get_template_part( 'template-parts/content/byline-after' ); ?>
		
					<?php the_content(); ?>
		
					<?php endwhile; endif; ?><!-- the loop -->
					
					<?php get_template_part( 'template-parts/content/biography' ); ?>

					<?php $hovercraft_post_tags = get_theme_mod( 'hovercraft_post_tags', 'native_posts_only' );
					if ( $hovercraft_post_tags != 'none' ) { ?>
						<?php get_template_part( 'template-parts/content/tags' ); ?>
					<?php } ?>
					
					<?php get_template_part( 'template-parts/content/link-pages' ); ?>
					
					<?php get_template_part( 'template-parts/content/pagination' ); ?>
			
				</div><!-- content-padded -->
	
	<div class="clear"></div>
	</div><!-- content-wrapper -->

	<!-- comments template outside of post content div -->
	<?php get_template_part( 'template-parts/content/comments' ); ?>

	<div class="clear"></div>
	</div><!-- primary -->
		
    	<?php if ( get_theme_mod( 'hovercraft_sidebar_status' ) == 1 ) { 
		get_template_part( 'sidebar' ); 
		} ?>
		
    	<div class="clear"></div>
	</div><!-- inner -->
	</div><!-- main -->
	
</div><!-- post -->

<?php get_template_part( 'footer' ); ?>
