<div id="content">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				<div class="content-padded">
						
			<?php the_content(); ?>
		
			<?php endwhile; endif; ?><!-- the loop -->
				
			<?php get_template_part( 'template-parts/content/last-modified' ); ?>
					
			<?php get_template_part( 'template-parts/content/pagination' ); ?>
			
		</div><!-- content-padded -->
	
<div class="clear"></div>
</div><!-- content -->
