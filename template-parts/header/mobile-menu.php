<div id="hovercraft-overlay-menu" class="overlay">

	<button type="button" class="closebtn" onclick="hovercraftCloseNav()">
		<?php
		// choose icon set
		$hovercraft_layout_icons = get_theme_mod( 'hovercraft_layout_icons', 'material_icons_classic' );

		if ( $hovercraft_layout_icons === 'material_icons_classic' ) {
			?>
			<i class="material-icons close">close</i>
			<?php
		} elseif ( $hovercraft_layout_icons === 'font_awesome_version_6' ) {
			?>
			<i class="fa-solid fa-x"></i>
			<?php
		}
		?>
	</button>

	<div class="overlay-content">
		<?php hovercraft_mobile_menu_output(); ?>
	</div>
</div><!-- hovercraft-overlay-menu -->

<div id="hovercraft-offcanvas-menu">
	<h4 class="sitename-offcanvas"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h4>
	<?php hovercraft_mobile_menu_output(); ?>
</div>

<div class="hovercraft-offcanvas-overlay"></div>

<!-- Ref: https://codepen.io/abhi_pawar/pen/qzpEJL -->
