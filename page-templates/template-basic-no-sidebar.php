<?php /* Template Name: Basic (No Sidebar) */ ?>
<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

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
