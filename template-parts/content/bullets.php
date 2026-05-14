<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div id="main">
    <div class="inner">
        <div id="primary-wide">
            <div id="content-wrapper">
                <div id="content-padded">
                    <div id="bullets">

                        <?php
                        // get subcategories of the 'faq' category
                        $faq_subcategories = get_categories(array(
                            'parent' => get_cat_ID('faq'),
                            'hide_empty' => true,
                        ));

                        // flag to check if any faqs were displayed
                        $faqs_displayed = false;

                        // display faq subcategories when available
                        if ($faq_subcategories) :
                            foreach ($faq_subcategories as $subcategory) :
                                // output the subcategory title as h3
                                echo '<h3>' . esc_html($subcategory->name) . '</h3>';

                                // the query for posts in this subcategory
                                $the_query = new WP_Query(array(
                                    'category__in' => array($subcategory->term_id),
                                    'post_status' => 'publish',
                                    'posts_per_page' => 999,
                                ));

                                if ($the_query->have_posts()) : ?>
                                    <div class="faq-item-list">
                                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                            <div class="faq-item">
                                                <?php $hovercraft_faq_permalinks = get_theme_mod('hovercraft_faq_permalinks', 'none');
                                                if ($hovercraft_faq_permalinks === 'link_to_faq') : ?>
                                                    <h5><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h5>
                                                <?php else : ?>
                                                    <h5><?php echo esc_html( get_the_title() ); ?></h5>
                                                <?php endif; // end faq permalinks ?>

                                                <?php 
                                                $hovercraft_bullets_html_content = get_theme_mod('hovercraft_bullets_html_content', 'none');
                                                if ($hovercraft_bullets_html_content === 'include_html') {
                                                    // output full content when enabled
                                                    the_content();
                                                } else {
                                                    $hovercraft_faq_word_count = absint( get_theme_mod('hovercraft_faq_character_count', '300') );

                                                    if ( ! $hovercraft_faq_word_count ) {
                                                        $hovercraft_faq_word_count = 300;
                                                    }

                                                    $content = get_the_content();
                                                    // trim content for compact display
                                                    echo '<p>' . esc_html( wp_trim_words($content, $hovercraft_faq_word_count, '...') ) . '</p>';
                                                } ?>
                                            </div><!-- faq-item -->
                                        <?php endwhile; ?>
                                    </div><!-- faq-item-list -->
                                    <?php wp_reset_postdata(); ?>
                                    <?php // mark faq results as displayed ?>
                                    <?php $faqs_displayed = true; ?>
                                <?php else : ?>
                                    <p><?php esc_html_e('No posts', 'hovercraft'); ?></p>
                                <?php endif; // end the loop ?>
                            <?php endforeach; ?>
                        <?php endif; // end faq-subcategories ?>

                        <!-- query for faqs without subcategories -->
                        <?php
                        // query all faq posts first
                        $faq_query_args = array(
                            'category_name' => 'faq',
                            'post_status' => 'publish',
                            'posts_per_page' => 999,
                        );

                        $faq_subcategory_ids = wp_list_pluck($faq_subcategories, 'term_id');

                        if ( ! empty( $faq_subcategory_ids ) ) {
                            // exclude posts already shown under subcategories
                            $faq_query_args['tax_query'] = array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'term_id',
                                    'terms'    => $faq_subcategory_ids,
                                    'operator' => 'NOT IN',
                                ),
                            );
                        }

                        $the_query = new WP_Query($faq_query_args);

                        // if there are faqs without subcategories, display them
                        if ($the_query->have_posts()) : ?>
                            <h3><?php esc_html_e('General', 'hovercraft'); ?></h3>
                            <div class="faq-item-list">
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <div class="faq-item">
                                        <?php $hovercraft_faq_permalinks = get_theme_mod('hovercraft_faq_permalinks', 'none');
                                        if ($hovercraft_faq_permalinks === 'link_to_faq') : ?>
                                            <h5><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h5>
                                        <?php else : ?>
                                            <h5><?php echo esc_html( get_the_title() ); ?></h5>
                                        <?php endif; // end faq permalinks ?>

                                        <?php 
                                        $hovercraft_bullets_html_content = get_theme_mod('hovercraft_bullets_html_content', 'none');
                                        if ($hovercraft_bullets_html_content === 'include_html') {
                                            // output full content when enabled
                                            the_content();
                                        } else {
                                            $hovercraft_faq_word_count = absint( get_theme_mod('hovercraft_faq_character_count', '300') );

                                            if ( ! $hovercraft_faq_word_count ) {
                                                $hovercraft_faq_word_count = 300;
                                            }

                                            $content = get_the_content();
                                            // trim content for compact display
                                            echo '<p>' . esc_html( wp_trim_words($content, $hovercraft_faq_word_count, '...') ) . '</p>';
                                        } ?>
                                    </div><!-- faq-item -->
                                <?php endwhile; ?>
                            </div><!-- faq-item-list -->
                            <?php wp_reset_postdata(); ?>
                            <?php // mark faq results as displayed ?>
                            <?php $faqs_displayed = true; ?>
                        <?php elseif ( ! $faqs_displayed ) : ?>
                            <p><?php esc_html_e('No FAQs available', 'hovercraft'); ?></p>
                        <?php endif; // end the loop ?>

                        <div class="clear"></div>
                    </div><!-- bullets -->
                </div><!-- content-padded -->
            </div><!-- content-wrapper -->
        </div><!-- primary-wide -->

        <div class="clear"></div>
    </div><!-- inner -->
</div><!-- main -->

