<?php if ( is_front_page() ) { ?>

		<?php if ( is_active_sidebar( 'hovercraft_home_premain_top' ) ) { ?>
		<div id="home-premain-top">
			<div class="inner">
				<?php dynamic_sidebar( 'hovercraft_home_premain_top' ); ?>
				<div class="clear"></div>
			</div><!-- inner -->
		</div><!-- home-premain-top -->
		<?php } ?>

		<?php if ( is_active_sidebar( 'hovercraft_home_premain_bottom' ) ) { ?>
		<div id="home-premain-bottom">
			<div class="inner">
				<?php dynamic_sidebar( 'hovercraft_home_premain_bottom' ); ?>
				<div class="clear"></div>
			</div><!--inner -->
		</div><!-- home-premain-bottom -->
		<?php } ?>

<?php } ?><!-- endif is_homepage -->
