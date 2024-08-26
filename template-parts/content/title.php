<?php 
$hide_title_status = get_post_meta( get_the_ID(), '_mysite_meta_hide_title', true);
$post_id = get_the_ID();
if($hide_title_status == "off" || !metadata_exists( 'post', $post_id, '_mysite_meta_hide_title' ) ) : ?>
	<h1 class="<?php $h1_divider_display = get_theme_mod( 'hovercraft_h1_divider_display', 'none' );
	if ( $h1_divider_display == 'everywhere_possible' || $h1_divider_display == 'everywhere_except_heros' ) { echo "divide"; } ?>"><?php the_title(); ?></h1>
<?php endif; ?>
