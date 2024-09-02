<?php

function hovercraft_register_sidebars() {
    $sidebars = array(
        // Topbar widgets
        array(
            'name'          => 'Topbar Left',
            'id'            => 'hovercraft_topbar_left',
            'class'         => 'widget-topbar-left',
        ),
        array(
            'name'          => 'Topbar Right',
            'id'            => 'hovercraft_topbar_right',
            'class'         => 'widget-topbar-right',
        ),
        
        // Preheader widgets
        array(
            'name'          => 'Preheader Left',
            'id'            => 'hovercraft_preheader_left',
            'class'         => 'widget-preheader-left',
        ),
        array(
            'name'          => 'Preheader Right',
            'id'            => 'hovercraft_preheader_right',
            'class'         => 'widget-preheader-right',
        ),
        
        // Hero widgets
        array(
            'name'          => 'Hero Snippet',
            'id'            => 'hovercraft_hero_snippet',
            'class'         => 'widget-hero-snippet',
        ),
        array(
            'name'          => 'Hero Window',
            'id'            => 'hovercraft_hero_window',
            'class'         => 'widget-hero-window',
        ),
        
        // Posthero widgets
        array(
            'name'          => 'Posthero (Adjust in Customizer)',
            'id'            => 'hovercraft_posthero',
            'class'         => 'widget-posthero',
        ),
        
        // Home widgets
        array(
            'name'          => 'Home Premain Top',
            'id'            => 'hovercraft_home_premain_top',
            'class'         => 'widget-home-premain-top',
        ),
        array(
            'name'          => 'Home Premain Bottom',
            'id'            => 'hovercraft_home_premain_bottom',
            'class'         => 'widget-home-premain-bottom',
        ),
        array(
            'name'          => 'Home Postmain Top',
            'id'            => 'hovercraft_home_postmain_top',
            'class'         => 'widget-home-postmain-top',
        ),
        array(
            'name'          => 'Home Postmain Bottom',
            'id'            => 'hovercraft_home_postmain_bottom',
            'class'         => 'widget-home-postmain-bottom',
        ),

        // Sidebar widgets
        array(
            'name'          => 'Sidebar',
            'id'            => 'hovercraft_sidebar',
            'class'         => 'widget-sidebar',
        ),

        // Prefooter widgets
        array(
            'name'          => 'Prefooter Top',
            'id'            => 'hovercraft_prefooter_top',
            'class'         => 'widget-prefooter-top',
        ),
        array(
            'name'          => 'Prefooter Bottom',
            'id'            => 'hovercraft_prefooter_bottom',
            'class'         => 'widget-prefooter-bottom',
        ),

        // Footer widgets
        array(
            'name'          => 'Footer Column #1',
            'id'            => 'hovercraft_footer_one',
            'class'         => 'widget-footer-one',
            'title_tag'     => 'h4',
        ),
        array(
            'name'          => 'Footer Column #2',
            'id'            => 'hovercraft_footer_two',
            'class'         => 'widget-footer-two',
            'title_tag'     => 'h4',
        ),
        array(
            'name'          => 'Footer Column #3',
            'id'            => 'hovercraft_footer_three',
            'class'         => 'widget-footer-three',
            'title_tag'     => 'h4',
        ),
        array(
            'name'          => 'Footer Column #4',
            'id'            => 'hovercraft_footer_four',
            'class'         => 'widget-footer-four',
            'title_tag'     => 'h4',
        ),

        // Copyright widgets
        array(
            'name'          => 'Copyright',
            'id'            => 'hovercraft_copyright',
            'class'         => 'widget-copyright',
        ),

        // Tile widgets
        array(
            'name'          => 'Tile #1',
            'id'            => 'hovercraft_tile_one',
            'class'         => 'widget-tile-one',
        ),
        array(
            'name'          => 'Tile #2',
            'id'            => 'hovercraft_tile_two',
            'class'         => 'widget-tile-two',
        ),
        array(
            'name'          => 'Tile #3',
            'id'            => 'hovercraft_tile_three',
            'class'         => 'widget-tile-three',
        ),
        array(
            'name'          => 'Tile #4',
            'id'            => 'hovercraft_tile_four',
            'class'         => 'widget-tile-four',
        ),
        array(
            'name'          => 'Tile #5',
            'id'            => 'hovercraft_tile_five',
            'class'         => 'widget-tile-five',
        ),
        array(
            'name'          => 'Tile #6',
            'id'            => 'hovercraft_tile_six',
            'class'         => 'widget-tile-six',
        ),
        array(
            'name'          => 'Tile #7',
            'id'            => 'hovercraft_tile_seven',
            'class'         => 'widget-tile-seven',
        ),
        array(
            'name'          => 'Tile #8',
            'id'            => 'hovercraft_tile_eight',
            'class'         => 'widget-tile-eight',
        ),
        array(
            'name'          => 'Tile #9',
            'id'            => 'hovercraft_tile_nine',
            'class'         => 'widget-tile-nine',
        ),
        array(
            'name'          => 'Tile #10',
            'id'            => 'hovercraft_tile_ten',
            'class'         => 'widget-tile-ten',
        ),
        array(
            'name'          => 'Tile #11',
            'id'            => 'hovercraft_tile_eleven',
            'class'         => 'widget-tile-eleven',
        ),
        array(
            'name'          => 'Tile #12',
            'id'            => 'hovercraft_tile_twelve',
            'class'         => 'widget-tile-twelve',
        ),

        // Column widgets
        array(
            'name'          => 'Column #1',
            'id'            => 'hovercraft_column_one',
            'class'         => 'widget-column-one',
        ),
        array(
            'name'          => 'Column #2',
            'id'            => 'hovercraft_column_two',
            'class'         => 'widget-column-two',
        ),
        array(
            'name'          => 'Column #3',
            'id'            => 'hovercraft_column_three',
            'class'         => 'widget-column-three',
        ),
        array(
            'name'          => 'Column #4',
            'id'            => 'hovercraft_column_four',
            'class'         => 'widget-column-four',
        ),
        array(
            'name'          => 'Column #5',
            'id'            => 'hovercraft_column_five',
            'class'         => 'widget-column-five',
        ),

        // Postcolumns widgets
        array(
            'name'          => 'Postcolumns Top',
            'id'            => 'hovercraft_postcolumns_top',
            'class'         => 'widget-postcolumns-top',
        ),
        array(
            'name'          => 'Postcolumns Bottom',
            'id'            => 'hovercraft_postcolumns_bottom',
            'class'         => 'widget-postcolumns-bottom',
        ),

        // Single post widgets
        array(
            'name'          => 'After Byline',
            'id'            => 'hovercraft_after_byline',
            'class'         => 'widget-after-byline',
        ),
        array(
            'name'          => 'After Loop',
            'id'            => 'hovercraft_after_loop',
            'class'         => 'widget-after-loop',
        ),

        // Zigzag widgets
        array(
            'name'          => 'ZigZag #1',
            'id'            => 'hovercraft_zigzag_one',
            'class'         => 'widget-zigzag-one',
        ),
        array(
            'name'          => 'ZigZag #2',
            'id'            => 'hovercraft_zigzag_two',
            'class'         => 'widget-zigzag-two',
        ),
        array(
            'name'          => 'ZigZag #3',
            'id'            => 'hovercraft_zigzag_three',
            'class'         => 'widget-zigzag-three',
        ),
        array(
            'name'          => 'ZigZag #4',
            'id'            => 'hovercraft_zigzag_four',
            'class'         => 'widget-zigzag-four',
        ),
        array(
            'name'          => 'ZigZag #5',
            'id'            => 'hovercraft_zigzag_five',
            'class'         => 'widget-zigzag-five',
        ),
        array(
            'name'          => 'ZigZag #6',
            'id'            => 'hovercraft_zigzag_six',
            'class'         => 'widget-zigzag-six',
        ),
        array(
            'name'          => 'ZigZag #7',
            'id'            => 'hovercraft_zigzag_seven',
            'class'         => 'widget-zigzag-seven',
        ),
        array(
            'name'          => 'ZigZag #8',
            'id'            => 'hovercraft_zigzag_eight',
            'class'         => 'widget-zigzag-eight',
        ),
        array(
            'name'          => 'ZigZag #9',
            'id'            => 'hovercraft_zigzag_nine',
            'class'         => 'widget-zigzag-nine',
        ),
        array(
            'name'          => 'ZigZag #10',
            'id'            => 'hovercraft_zigzag_ten',
            'class'         => 'widget-zigzag-ten',
        ),
        array(
            'name'          => 'ZigZag #11',
            'id'            => 'hovercraft_zigzag_eleven',
            'class'         => 'widget-zigzag-eleven',
        ),
        array(
            'name'          => 'ZigZag #12',
            'id'            => 'hovercraft_zigzag_twelve',
            'class'         => 'widget-zigzag-twelve',
        )
    );

    // Register each sidebar
    foreach ($sidebars as $sidebar) {
        register_sidebar(array(
            'name'          => $sidebar['name'],
            'id'            => $sidebar['id'],
            'before_widget' => '<div class="' . $sidebar['class'] . ' widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => isset($sidebar['title_tag']) ? '<' . $sidebar['title_tag'] . ' class="widget-title">' : '<h3 class="widget-title">',
            'after_title'   => isset($sidebar['title_tag']) ? '</' . $sidebar['title_tag'] . '>' : '</h3>',
        ));
    }
}
add_action('widgets_init', 'hovercraft_register_sidebars');

// Ref: ChatGPT
