<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

 get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-mini-hero' ); ?>

<div id="main">
<div class="inner">

	<div id="primary-wide">
	
		<div id="content-wrapper">
			
			<?php get_template_part( 'template-parts/misc/breadcrumbs' ); ?>
									
			<div id="content-padded">
		
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
				<h4><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h4>
				<?php the_excerpt(); ?>
		
				<?php endwhile; endif; ?><!-- end the loop -->
					
				<?php get_template_part( 'template-parts/content/pagination' ); ?>
						
			<div class="clear"></div>
			</div><!-- content-padded -->
		</div><!-- content-wrapper -->

	<div class="clear"></div>
  	</div><!-- primary -->
    
<div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php get_template_part( 'footer' ); ?>
