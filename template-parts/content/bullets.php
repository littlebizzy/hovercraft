<div id="main">
    <div class="inner">
        <div id="primary-wide">
            <div id="content-wrapper">
                <div id="content-padded">
                    <div id="bullets">

                        <?php
                        // Get subcategories of the 'faq' category
                        $faq_subcategories = get_categories(array(
                            'parent' => get_cat_ID('faq'), // Use the ID of the FAQ parent category
                            'hide_empty' => true, // Only show subcategories with posts
                        ));

                        // Flag to check if any FAQs were displayed
                        $faqs_displayed = false;

                        if ($faq_subcategories) : // Check if there are any subcategories
                            foreach ($faq_subcategories as $subcategory) :
                                // Output the subcategory title as H3
                                echo '<h3>' . esc_html($subcategory->name) . '</h3>';

                                // The query for posts in this subcategory
                                $the_query = new WP_Query(array(
                                    'category__in' => array($subcategory->term_id), // Posts in this subcategory
                                    'post_status' => 'publish',
                                    'posts_per_page' => 999,
                                ));

                                if ($the_query->have_posts()) : ?>
                                    <div class="faq-item-list">
                                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                            <div class="faq-item">
                                                <?php $hovercraft_faq_permalinks = get_theme_mod('hovercraft_faq_permalinks', 'none');
                                                if ($hovercraft_faq_permalinks === 'link_to_faq') : ?>
                                                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                                <?php else : ?>
                                                    <h5><?php the_title(); ?></h5>
                                                <?php endif; ?>

                                                <?php 
                                                $hovercraft_bullets_html_content = get_theme_mod('hovercraft_bullets_html_content', 'none');
                                                if ($hovercraft_bullets_html_content === 'include_html') {
                                                    the_content(); // Output full content if enabled
                                                } else {
                                                    $hovercraft_faq_character_count = get_theme_mod('hovercraft_faq_character_count', '300');
                                                    $content = get_the_content();
                                                    echo '<p>' . wp_trim_words($content, $hovercraft_faq_character_count, '...') . '</p>'; // Trim content for display
                                                } ?>
                                            </div><!-- faq-item -->
                                        <?php endwhile; ?>
                                    </div><!-- faq-item-list -->
                                    <?php wp_reset_postdata(); ?>
                                    <?php $faqs_displayed = true; // Set flag to true if any FAQs were displayed ?>
                                <?php else : ?>
                                    <p><?php _e('No posts', 'textdomain'); ?></p>
                                <?php endif; ?>
                            <?php endforeach; // End of subcategory loop ?>
                        <?php endif; ?>

                        <!-- Query for FAQs without subcategories -->
                        <?php
                        $the_query = new WP_Query(array(
                            'category_name' => 'faq', // Fetch all posts in the 'faq' category
                            'post_status' => 'publish',
                            'posts_per_page' => 999,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field'    => 'term_id',
                                    'terms'    => wp_list_pluck($faq_subcategories, 'term_id'), // Get subcategory IDs
                                    'operator' => 'NOT IN', // Exclude subcategory posts
                                ),
                            ),
                        ));

                        // If there are FAQs without subcategories, display them
                        if ($the_query->have_posts()) : ?>
                            <h3><?php _e('General', 'textdomain'); ?></h3>
                            <div class="faq-item-list">
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <div class="faq-item">
                                        <?php $hovercraft_faq_permalinks = get_theme_mod('hovercraft_faq_permalinks', 'none');
                                        if ($hovercraft_faq_permalinks === 'link_to_faq') : ?>
                                            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                        <?php else : ?>
                                            <h5><?php the_title(); ?></h5>
                                        <?php endif; ?>

                                        <?php 
                                        $hovercraft_bullets_html_content = get_theme_mod('hovercraft_bullets_html_content', 'none');
                                        if ($hovercraft_bullets_html_content === 'include_html') {
                                            the_content(); // Output full content if enabled
                                        } else {
                                            $hovercraft_faq_character_count = get_theme_mod('hovercraft_faq_character_count', '300');
                                            $content = get_the_content();
                                            echo '<p>' . wp_trim_words($content, $hovercraft_faq_character_count, '...') . '</p>'; // Trim content for display
                                        } ?>
                                    </div><!-- faq-item -->
                                <?php endwhile; ?>
                            </div><!-- faq-item-list -->
                            <?php wp_reset_postdata(); ?>
                            <?php $faqs_displayed = true; // Set flag to true if any FAQs were displayed ?>
                        <?php else : ?>
                            <p><?php _e('No FAQs available', 'textdomain'); ?></p>
                        <?php endif; ?>

                        <div class="clear"></div>
                    </div><!-- bullets -->
                </div><!-- content-padded -->
            </div><!-- content-wrapper -->
        </div><!-- primary-wide -->

        <div class="clear"></div>
    </div><!-- inner -->
</div><!-- main -->

<!-- Ref: ChatGPT -->
<!-- Ref: https://wordpress.stackexchange.com/questions/417119/display-posts-on-category-archive-organized-into-subcategories -->
