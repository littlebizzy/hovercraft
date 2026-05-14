<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="columns">
	
	<?php if ( is_active_sidebar( 'hovercraft_column_one' ) ) : ?>
	<div class="column">
		<?php dynamic_sidebar( 'hovercraft_column_one' ); ?>
		<div class="clear"></div>
	</div><!-- column -->
	<?php endif; // end hovercraft-column-one sidebar ?>
		
	<?php if ( is_active_sidebar( 'hovercraft_column_two' ) ) : ?>
	<div class="column">
		<?php dynamic_sidebar( 'hovercraft_column_two' ); ?>
		<div class="clear"></div>
	</div><!-- column -->
	<?php endif; // end hovercraft-column-two sidebar ?>
		
	<?php if ( is_active_sidebar( 'hovercraft_column_three' ) ) : ?>
	<div class="column">
		<?php dynamic_sidebar( 'hovercraft_column_three' ); ?>
		<div class="clear"></div>
	</div><!-- column -->
	<?php endif; // end hovercraft-column-three sidebar ?>
		
	<?php if ( is_active_sidebar( 'hovercraft_column_four' ) ) : ?>
	<div class="column">
		<?php dynamic_sidebar( 'hovercraft_column_four' ); ?>
		<div class="clear"></div>
	</div><!-- column -->
	<?php endif; // end hovercraft-column-four sidebar ?>
		
	<?php if ( is_active_sidebar( 'hovercraft_column_five' ) ) : ?>
	<div class="column">
		<?php dynamic_sidebar( 'hovercraft_column_five' ); ?>
		<div class="clear"></div>
	</div><!-- column -->
	<?php endif; // end hovercraft-column-five sidebar ?>
		
	<?php if ( is_active_sidebar( 'hovercraft_column_six' ) ) : ?>
	<div class="column">
		<?php dynamic_sidebar( 'hovercraft_column_six' ); ?>
		<div class="clear"></div>
	</div><!-- column -->
	<?php endif; // end hovercraft-column-six sidebar ?>
		
	<?php if ( is_active_sidebar( 'hovercraft_column_seven' ) ) : ?>
	<div class="column">
		<?php dynamic_sidebar( 'hovercraft_column_seven' ); ?>
		<div class="clear"></div>
	</div><!-- column -->
	<?php endif; // end hovercraft-column-seven sidebar ?>
		
	<?php if ( is_active_sidebar( 'hovercraft_column_eight' ) ) : ?>
	<div class="column">
		<?php dynamic_sidebar( 'hovercraft_column_eight' ); ?>
		<div class="clear"></div>
	</div><!-- column -->
	<?php endif; // end hovercraft-column-eight sidebar ?>
		
	<?php if ( is_active_sidebar( 'hovercraft_column_nine' ) ) : ?>
	<div class="column">
		<?php dynamic_sidebar( 'hovercraft_column_nine' ); ?>
		<div class="clear"></div>
	</div><!-- column -->
	<?php endif; // end hovercraft-column-nine sidebar ?>
		
	<?php if ( is_active_sidebar( 'hovercraft_column_ten' ) ) : ?>
	<div class="column">
		<?php dynamic_sidebar( 'hovercraft_column_ten' ); ?>
		<div class="clear"></div>
	</div><!-- column -->
	<?php endif; // end hovercraft-column-ten sidebar ?>
		
	<?php if ( is_active_sidebar( 'hovercraft_column_eleven' ) ) : ?>
	<div class="column">
		<?php dynamic_sidebar( 'hovercraft_column_eleven' ); ?>
		<div class="clear"></div>
	</div><!-- column -->
	<?php endif; // end hovercraft-column-eleven sidebar ?>
		
	<?php if ( is_active_sidebar( 'hovercraft_column_twelve' ) ) : ?>
	<div class="column">
		<?php dynamic_sidebar( 'hovercraft_column_twelve' ); ?>
		<div class="clear"></div>
	</div><!-- column -->
	<?php endif; // end hovercraft-column-twelve sidebar ?>
		
<div class="clear"></div>
</div><!-- columns -->

<?php if ( is_active_sidebar( 'hovercraft_postcolumns_top' ) ) : ?>
<div class="postcolumns-top">
	<?php dynamic_sidebar( 'hovercraft_postcolumns_top' ); ?>
<div class="clear"></div>
</div><!-- postcolumns-top -->
<?php endif; // end hovercraft-postcolumns-top sidebar ?>

<?php if ( is_active_sidebar( 'hovercraft_postcolumns_bottom' ) ) : ?>
<div class="postcolumns-bottom">
	<?php dynamic_sidebar( 'hovercraft_postcolumns_bottom' ); ?>
<div class="clear"></div>
</div><!-- postcolumns-bottom -->
<?php endif; // end hovercraft-postcolumns-bottom sidebar ?>
