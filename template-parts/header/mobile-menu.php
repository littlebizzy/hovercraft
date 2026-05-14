<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div id="hovercraft-overlay-menu" class="overlay">

	<button type="button" class="closebtn" onclick="hovercraftCloseNav()">
		<?php
		// choose icon set
		$hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );
		?>
		<?php if ( 'material_icons_classic' === $hovercraft_layout_icons ) : ?>
			<i class="material-icons close">close</i>
		<?php elseif ( 'font_awesome_version_6' === $hovercraft_layout_icons ) : ?>
			<i class="fa-solid fa-x"></i>
		<?php endif; // end layout icons ?>
	</button>

	<div class="overlay-content">
		<?php hovercraft_mobile_menu_output(); ?>
		</div><!-- overlay-content -->
</div><!-- hovercraft-overlay-menu -->

<div id="hovercraft-offcanvas-menu">
	<h4 class="sitename-offcanvas"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h4>
	<?php hovercraft_mobile_menu_output(); ?>
	</div><!-- hovercraft-offcanvas-menu -->

<div class="hovercraft-offcanvas-overlay"></div>

