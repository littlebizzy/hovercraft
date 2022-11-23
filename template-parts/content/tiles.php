<div id="main">
<div class="inner">
    <?php get_template_part( 'template-parts/content/primary' ); ?>
	
	<?php if ( is_active_sidebar( 'hovercraft_tile_one' ) ) { ?>
	<div class="tile">
		<?php dynamic_sidebar( 'hovercraft_tile_one' ); ?>
		<div class="clear"></div>
	</div><!-- tile -->
	<?php } ?>
    
    
    <?php get_template_part( 'template-parts/pagination' ); ?>
    <div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->
