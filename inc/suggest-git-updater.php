function hovercraft_suggest_git_updater_plugin() {

    if ( ! in_array( 'git-updater/git-updater.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) { ?>

        <div class="notice notice-info">
        <p><strong>Git Updater</strong></p>
        <p>HoverCraft requires the free Git Updater plugin to receive automatic updates via GitHub.</p>
        </div>

    <?php }

}

add_action('admin_notices', 'hovercraft_suggest_git_updater_plugin');

// https://wordpress.stackexchange.com/questions/39408/how-to-make-plugin-required-in-a-wp-theme-without-using-php-conditional-statemen
// https://gist.github.com/mlbd/b96f62e685ca3d58c17031fcc9e73c07
// https://www.aurodigo.com/how-to-solve-fatal-error-call-to-undefined-function-is-plugin-active-problem-on-wordpress
