<?php
$hovercraft_breadcrumbs = get_theme_mod( 'hovercraft_breadcrumbs', 'sitewide_except_homepage' );

if ( ($hovercraft_breadcrumbs == 'sitewide') || ($hovercraft_breadcrumbs == 'sitewide_except_homepage') ) {
	
	if ( ($hovercraft_breadcrumbs == 'sitewide_except_homepage') && (!is_front_page()) ) { ?>
		
		<div class="breadcrumbs">
    		<?php ah_breadcrumb(); ?>
		</div><!-- breadcrumbs -->
		
	<?php } elseif ($hovercraft_breadcrumbs == 'sitewide') { ?>
		
		<div class="breadcrumbs">
    		<?php ah_breadcrumb(); ?>
		</div><!-- breadcrumbs -->	

	<?php }
	
} // if breadcrumbs either sitewide or sitewide_except_homepage


// https://stackoverflow.com/questions/17954439/php-if-a-variable-equals-this-or-this
// https://stackoverflow.com/questions/15775565/see-if-a-variable-equals-any-other-variables-in-a-list-php
