<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<?php $hovercraft_homepage_hide_main_checked = get_theme_mod( 'hovercraft_homepage_hide_main' ) ? true : false;
if ( !is_front_page() || ( is_front_page() && $hovercraft_homepage_hide_main_checked != true ) ) { ?>

<div id="main">
<div class="inner">
    
	<?php $hovercraft_sidebar_status_checked = get_theme_mod( 'hovercraft_sidebar_status' ) ? true : false;
	if ( $hovercraft_sidebar_status_checked == true ) { ?><div id="primary"><?php } else { ?><div id="primary-wide"><?php } ?>

		<?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>
	
		<div id="content">
						
			<?php global $post; $url_featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $currentID ), 'medium_large' );
					// https://rudrastyh.com/wordpress/image-sizes.html
					if ( !empty( $url_featured_image ) && ( !is_singular('product') ) ) { ?>
					<img class="featured-image" src="<?php echo $url_featured_image[0]; ?>" />
					<?php } ?>
			
			<div class="content-padded">
				<h1><?php the_title(); ?></h1>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?><!-- the loop -->
	
		<div class="clear"></div>
		<?php hovercraft_pagination_nav(); ?>	
	
			

		<?php get_template_part( 'template-parts/content/last-modified' ); ?>
	
		
	
		<?php comments_template(); ?> 
				
				<div class="clear"></div>
			</div><!-- content-padded -->
		</div><!-- content -->

		<div class="clear"></div>
	</div><!-- primary -->
    
    <?php if ( get_theme_mod( 'hovercraft_sidebar_status' ) == 1 ) { 
		get_template_part( 'sidebar' ); 
		} ?>
		
    	<?php get_template_part( 'template-parts/content/pagination' ); ?>
		
    	<div class="clear"></div>
	</div><!-- inner -->
	</div><!-- main -->

<?php } ?>

<?php get_template_part( 'footer' ); ?>
