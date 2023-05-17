	
	<?php if ( is_active_sidebar( 'hovercraft_column_five' ) ) { ?>
			<div id="columns-five">
		<?php } elseif ( ! is_active_sidebar( 'hovercraft_column_five' ) && is_active_sidebar( 'hovercraft_column_four' ) ) { ?>
			<div id="columns-four">
		<?php } elseif ( ! is_active_sidebar( 'hovercraft_column_five' ) && ! is_active_sidebar( 'hovercraft_column_four' ) ) { ?>
				<div id="columns-three">
		<?php } ?>
		
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
	
	<?php if ( is_active_sidebar( 'hovercraft_column_five' ) ) { ?>
	<div class="column">
		<?php dynamic_sidebar( 'hovercraft_column_five' ); ?>
		<div class="clear"></div>
	</div><!-- column -->
	<?php } ?>
		
	<div class="clear"></div>
	</div><!-- columns -->

<?php if ( is_active_sidebar( 'hovercraft_postcolumns_top' ) ) { ?>
<div id="postcolumns-top">
<div class="inner">
	<?php dynamic_sidebar( 'hovercraft_postcolumns_top' ); ?>
	<div class="clear"></div>
</div><!--inner -->
</div><!-- postcolumns-top -->
<?php } ?>

<?php if ( is_active_sidebar( 'hovercraft_postcolumns_bottom' ) ) { ?>
<div id="postcolumns-bottom">
<div class="inner">
	<?php dynamic_sidebar( 'hovercraft_postcolumns_bottom' ); ?>
	<div class="clear"></div>
</div><!--inner -->
</div><!-- postcolumns-bottom -->
<?php } ?>
