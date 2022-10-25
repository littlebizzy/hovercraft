add_action('admin_notices', 'hovercraft_suggest_git_updater_plugin');

function my_theme_dependencies() {
  if )
    echo '<div class="error"><p>' . __( 'Warning: The theme needs Plugin X to function', 'my-theme' ) . '</p></div>';
}

function hovercraft_suggest_git_updater_plugin() {

    $current_user = wp_get_current_user();

    if(current_user_can('manage_options') && ( ! is_plugin_active('git-updater/git-updater.php')) ) { ?>
    
    <div class="notice notice-info">
    <p><strong>Git Updater</strong></p>
    <p>HoverCraft requires the free Git Updater plugin to receive automatic updates via GitHub.</p>
    
    </div>
    
    <?php } else { }

}

// https://wordpress.stackexchange.com/questions/39408/how-to-make-plugin-required-in-a-wp-theme-without-using-php-conditional-statemen
