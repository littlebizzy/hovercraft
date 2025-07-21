<div id="branding">

<?php
// get logos and location setting
$default_logo = wp_get_attachment_url( get_theme_mod( 'custom_logo' ) );
$alternative_logo = get_theme_mod( 'hovercraft_logo_alternative' );
$location = get_theme_mod( 'hovercraft_logo_alternative_location', 'none' );
$template_slug = get_page_template_slug();

// choose which logo to show
$logo_url = $default_logo;

if ( $alternative_logo && $location !== 'none' ) {
    $map = array(
        'full_hero_only' => array( 'full-hero' ),
        'full_and_half_hero' => array( 'full-hero', 'half-hero' ),
        'full_and_half_and_mini_hero' => array( 'full-hero', 'half-hero', 'mini-hero' ),
    );

    if ( isset( $map[ $location ] ) ) {
        foreach ( $map[ $location ] as $slug ) {
            if ( strpos( $template_slug, $slug ) !== false ) {
                $logo_url = $alternative_logo;
                break;
            }
        }
    }
}

// bail if no logo set
if ( ! $logo_url ) {
    return;
}
?>

<div class="branding-media">
    <a href="<?php echo esc_url( home_url() ); ?>" class="custom-logo-link" rel="home">
        <img
            src="<?php echo esc_url( $logo_url ); ?>"
            class="site-logo custom-logo"
            alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> logo"
        />
    </a>
</div><!-- branding-media -->

<?php if ( display_header_text() ): ?>
<div class="branding-text">
    <a href="<?php echo esc_url( home_url() ); ?>" class="site-title-link" rel="home">
        <div class="site-title"><?php echo get_bloginfo( 'name' ); ?></div>
    </a>
    <div class="tagline"><?php echo get_bloginfo( 'description' ); ?></div>
</div><!-- branding-text -->
<?php endif; ?>

</div><!-- branding -->
