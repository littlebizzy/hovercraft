<?php get_template_part( 'header' ); ?>
<?php get_template_part( 'template-parts/header/header-basic' ); ?>

<?php
$hide_main = get_theme_mod( 'hovercraft_homepage_hide_main' ) ? true : false;

if ( ! is_front_page() || ( is_front_page() && $hide_main !== true ) ) {
    ?>
    <div id="main">
        <div class="inner">

            <?php
            $show_sidebar = get_theme_mod( 'hovercraft_sidebar_status' ) ? true : false;

            if ( $show_sidebar === true ) {
                ?>
                <div id="primary">
                <?php
            } else {
                ?>
                <div id="primary-wide">
                <?php
            }
            ?>

                    <div id="content-wrapper">

                        <?php get_template_part( 'template-parts/content/featured-image' ); ?>

                        <div id="content-padded">
                            <?php get_template_part( 'template-parts/content/breadcrumbs' ); ?>
                            <?php get_template_part( 'template-parts/content/title' ); ?>
                            <?php get_template_part( 'template-parts/content/loop' ); ?>
                            <?php get_template_part( 'template-parts/content/pagination' ); ?>
                            <?php get_template_part( 'template-parts/content/comments' ); ?>
                            <div class="clear"></div>
                        </div><!-- content-padded -->

                    </div><!-- content-wrapper -->

                    <div class="clear"></div>
                </div><!-- primary / primary-wide -->

            <?php
            if ( $show_sidebar === true ) {
                get_template_part( 'sidebar' );
            }
            ?>

            <div class="clear"></div>
        </div><!-- inner -->
    </div><!-- main -->
    <?php
}
?>

<?php get_template_part( 'footer' ); ?>
