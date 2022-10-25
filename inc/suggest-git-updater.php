add_action('admin_notices', 'hovercraft_suggest_git_updater_plugin');

function hovercraft_suggest_git_updater_plugin() {

    $current_user = wp_get_current_user();
    if(current_user_can('manage_options')) { ?>
    
    <div class="notice notice-info">
    <p><strong>Git Updater</strong></p>
    <p>HoverCraft requires the free Git Updater plugin to receive automatic updates via GitHub.</p>
    
    </div>
    
    <?php } else { }

}
