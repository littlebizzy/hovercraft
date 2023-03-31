<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div id="main">
	<div class="inner">
    	
		<?php $hovercraft_sidebar_status_checked = get_theme_mod( 'hovercraft_sidebar_status' ) ? true : false;
		if ( $hovercraft_sidebar_status_checked == true ) { ?><div id="primary"><?php } else { ?><div id="primary-center"><?php } ?>

		<?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>
		
		<div id="content">
	
		<?php if ( is_singular() ) { ?>
				<?php if ( is_page_template( 'page-templates/template-basic.php' ) || !is_page_template() ) { ?>
			
				<?php get_template_part( 'template-parts/content/featured-image' ); ?>
			
					<div class="content-padded">
					<h1><?php the_title(); ?></h1>
					<span><?php if ( 'post' == get_post_type() ) { the_time(get_option('date_format')); } ?></span><br><br>
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
			
	<?php get_template_part( 'template-parts/content/tags' ); ?>
	
	<?php get_template_part( 'template-parts/content/last-modified' ); ?>
			
	</div><!-- content-padded -->
	
		<div class="clear"></div>
		<?php hovercraft_pagination_nav(); ?>	
	
	<div class="clear"></div>
	</div><!-- content -->
	
	<?php comments_template(); ?> 

		<div class="clear"></div>
	</div><!-- primary -->
		
    	<?php if ( get_theme_mod( 'hovercraft_sidebar_status' ) == 1 ) { 
		get_template_part( 'sidebar' ); 
		} ?>
		
    	<?php get_template_part( 'template-parts/content/pagination' ); ?>
		
    	<div class="clear"></div>
	</div><!-- inner -->
	</div><!-- main -->
	
</div>

<?php get_template_part( 'footer' ); ?>
