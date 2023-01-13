<?php /* Template Name: Mini Hero (No Sidebar) */ ?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-mini-hero' ); ?>

	<?php if ( is_active_sidebar( 'hovercraft_main_begin' ) && get_theme_mod( 'hovercraft_main_begin_widget_display' ) == 'full_and_half_and_mini_hero' )  { ?>
	<div class="main-begin">
	<div class="inner">
		<?php add_filter( 'widget_title' , 'my_widget_title', 10, 1 ); //we use the default priority and 3 arguments in the callback function
		dynamic_sidebar( 'hovercraft_main_begin' ); remove_filter( 'widget_title', 'my_widget_title' ); ?>
		<div class="clear"></div>
	</div><!-- inner -->
	</div><!-- main-begin -->
	<?php } ?>

<div id="main">
<div class="inner">
    
<div id="primary-wide">

	<?php if ( get_theme_mod( 'hovercraft_breadcrumbs' ) == 1 ) { ?>
		<div class="breadcrumbs">
			<?php ah_breadcrumb(); ?>
		</div><!-- breadcrumbs -->
	<?php } ?><!-- if hovercraft_breadcrumbs -->
	
	<?php get_template_part( 'template-parts/content/content' ); ?>

	<div class="last-modified">
		<?php echo "<span>Last modified on "; the_modified_time('F j, Y'); echo "</span>"; ?>
	</div><!-- last-modified -->
	
	<?php comments_template(); ?> 

	<div class="clear"></div>
</div><!-- primary-wide -->
    
    <?php get_template_part( 'template-parts/content/pagination' ); ?>
    <div class="clear"></div>
</div><!-- inner -->
</div><!-- main -->

<?php get_template_part( 'footer' ); ?>
