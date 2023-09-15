<!-- ADD IMEDIATLY AFTER OPENING BODY -->
<!-- start mobile menu overlay -->
<div id="myNav" class="overlay">
  	<!-- Button to close the overlay navigation -->
  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  	<!-- Overlay content -->
  	<div class="overlay-content">
    	<?php wp_nav_menu( array('menu' => 'Main Menu' )); ?>
  	</div>
</div>
<!-- end mobile menu overlay -->
