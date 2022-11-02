<?php if ( is_active_sidebar('hovercraft_footer_top')) { ?>
<div id="footer-top">
<div class="clear"></div>
</div><!-- footer-top -->
<?php } ?>

<?php if ( is_active_sidebar('hovercraft_footer_middle')) { ?>
<div id="footer-middle">
<div class="clear"></div>
</div><!-- footer-middle -->
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
		&copy; <?php echo date("Y"); ?> <?php echo get_bloginfo( 'name' ); ?>. All rights reserved.
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

<div id="scrollup"><i class="fa-solid fa-circle-arrow-up"></i></div>

</body><!-- body -->
</html><!-- html -->
