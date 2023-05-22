<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-mini-hero' ); ?>

<div id="main">
<div class="inner">

	<div id="primary-wide">
	
		<div id="content">
			
			<?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>
									
			<div class="content-padded">
		
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
				<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
				<?php the_excerpt(); ?>
		
				<?php endwhile; endif; ?><!-- the loop -->
					
				<?php get_template_part( 'template-parts/content/pagination' ); ?>
						
			<div class="clear"></div>
			</div><!-- content-padded -->
		</div><!-- content -->

	<div class="clear"></div>
  	</div><!-- primary -->
    
<div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php get_template_part( 'footer' ); ?>
