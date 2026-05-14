<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hovercraft_breadcrumbs = get_theme_mod( 'hovercraft_breadcrumbs', 'sitewide' );
?>

<?php if ( $hovercraft_breadcrumbs === 'sitewide' || $hovercraft_breadcrumbs === 'sitewide_except_homepage' ) : ?>
	<?php if ( $hovercraft_breadcrumbs === 'sitewide_except_homepage' && ! is_front_page() ) : ?>
		<div class="breadcrumbs">
			<?php hovercraft_breadcrumb(); ?>
		</div><!-- breadcrumbs -->
	<?php elseif ( $hovercraft_breadcrumbs === 'sitewide' ) : ?>
		<div class="breadcrumbs">
			<?php hovercraft_breadcrumb(); ?>
		</div><!-- breadcrumbs -->
	<?php endif; // end is_front_page ?>
<?php endif; // end breadcrumbs ?>
