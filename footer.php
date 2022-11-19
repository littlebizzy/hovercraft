<?php if ( is_active_sidebar( 'hovercraft_prefooter_top' ) ) { ?>
<div id="prefooter-top">
	<?php dynamic_sidebar( 'hovercraft_prefooter_top' ); ?>
<div class="clear"></div>
</div><!-- prefooter-top -->
<?php } ?>

<?php if ( is_active_sidebar( 'hovercraft_prefooter_bottom' ) ) { ?>
<div id="prefooter-bottom">
	<?php dynamic_sidebar( 'hovercraft_prefooter_bottom' ); ?>
<div class="clear"></div>
</div><!-- prefooter-bottom -->
<?php } ?>

<div id="footer">
<div class="inner">
	
	<div class="footer-section-left">
		<?php dynamic_sidebar( 'hovercraft_footer_one' ); ?>
	<div class="clear"></div>
	</div><!-- footer-section-left -->
	
		<div class="footer-section-right">
		<?php dynamic_sidebar( 'hovercraft_footer_two' ); ?>
	<div class="clear"></div>
	</div><!-- footer-section-left -->
	
		<div class="footer-section-right">
		<?php dynamic_sidebar( 'hovercraft_footer_three' ); ?>
	<div class="clear"></div>
	</div><!-- footer-section-left -->
	
		<div class="footer-section-right">
		<?php dynamic_sidebar( 'hovercraft_footer_four' ); ?>
	<div class="clear"></div>
	</div><!-- footer-section-left -->
	
<div class="clear"></div>
</div><!--inner -->
</div><!-- footer -->

<div id="copyright">
	<div class="inner">
		
	<div class="copyright-left">
		&copy; <?php echo date("Y"); ?> <?php echo get_bloginfo( 'name' ); ?>. All rights reserved. Powered by <a rel="nofollow" href="https://hovercraft.vip/">HoverCraft</a>.
	<div class="clear"></div>
	</div><!-- copyright-left -->
	
	<?php if ( is_active_sidebar('hovercraft_copyright')) { ?>
	<div class="copyright-right">
	<?php add_filter ( 'widget_title' , 'my_widget_title', 10, 1); //we use the default priority and 3 arguments in the callback function
		dynamic_sidebar( 'hovercraft_copyright' ); remove_filter('widget_title', 'my_widget_title'); ?>
	<div class="clear"></div>
	</div><!-- copyright-right -->
	<?php } ?>

<div class="clear"></div>
</div><!--inner -->
</div><!-- copyright -->

</div><!-- container -->

<?php wp_footer(); ?>

<?php if( get_theme_mod( 'hovercraft_back_to_top' ) == '1') {
	get_template_part('template-parts/button-back-to-top'); 
} ?>

</body><!-- body -->
</html><!-- html -->
