<?php

$hovercraft_breadcrumbs = get_theme_mod( 'hovercraft_breadcrumbs', 'sitewide' );
$hovercraft_show_breadcrumbs = false;

if ( $hovercraft_breadcrumbs === 'sitewide' ) {
	$hovercraft_show_breadcrumbs = true;
} elseif ( $hovercraft_breadcrumbs === 'sitewide_except_homepage' && ! is_front_page() ) {
	$hovercraft_show_breadcrumbs = true;
}
?>

<?php if ( $hovercraft_show_breadcrumbs ) : ?>
	<nav class="breadcrumbs" aria-label="<?php esc_attr_e( 'Breadcrumbs', 'hovercraft' ); ?>">
		<?php hovercraft_breadcrumb(); ?>
	</nav><!-- breadcrumbs -->
<?php endif; // end breadcrumbs ?>
