<div id="main">
<div class="inner">
	
	<div id="columns">
	
	<?php if ( is_active_sidebar( 'hovercraft_column_one' ) ) { ?>
	<div class="column">
		<?php dynamic_sidebar( 'hovercraft_column_one' ); ?>
		<div class="clear"></div>
	</div><!-- column -->
	<?php } ?>
		
	<?php if ( is_active_sidebar( 'hovercraft_column_two' ) ) { ?>
	<div class="column">
		<?php dynamic_sidebar( 'hovercraft_column_two' ); ?>
		<div class="clear"></div>
	</div><!-- column -->
	<?php } ?>
		
	<?php if ( is_active_sidebar( 'hovercraft_column_three' ) ) { ?>
	<div class="column">
		<?php dynamic_sidebar( 'hovercraft_column_three' ); ?>
		<div class="clear"></div>
	</div><!-- column -->
	<?php } ?>
		
	<?php if ( is_active_sidebar( 'hovercraft_column_four' ) ) { ?>
	<div class="column">
		<?php dynamic_sidebar( 'hovercraft_column_four' ); ?>
		<div class="clear"></div>
	</div><!-- column -->
	<?php } ?>
		
	<div class="clear"></div>
	</div><!-- columns -->
    
	<?php // get_template_part( 'template-parts/content/primary' ); ?>
    
    <?php get_template_part( 'template-parts/content/pagination' ); ?>
	
    <div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->
