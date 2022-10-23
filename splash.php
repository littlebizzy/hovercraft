<div class="splash-main">
<div class="inner">
	<?php if (is_front_page()) { ?>
	<div class="welcome-super-wrapper">
	<div class="welcome-wrapper">
	<?php } else { ?>
		<div class="title-wrapper">
	<?php } ?>
		<div class="welcome"><?php single_post_title(); ?></div>
		<div class="welcome-text"><?php 
			 $my_excerpt = get_the_excerpt();
     // if($my_excerpt !='') {
	if (strlen($my_excerpt) >= 5){
         the_excerpt();
     } else { global $hovercraft_excerpt; echo $hovercraft_excerpt; } ?></div><!-- welcome-text -->
		
	
		<?php if (is_front_page()) : ?>
		<div class="clear"></div>
		<?php wp_nav_menu( array( 'theme_location' => 'cta-splash-major', 'container_class'	=> 'cta-splash-major' ) ); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'cta-splash-minor', 'container_class'	=> 'cta-splash-minor' ) ); ?>
		<?php endif; ?>
			</div><!-- welcome-wrapper -->
		</div><!-- welcome-super-wrapper -->
		
<div class="clear"></div>
</div><!-- inner -->
</div><!-- splash-main -->
	
</div><!-- splash-wide -->
</div><!-- splash-wrapper -->
