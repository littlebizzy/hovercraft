<?php
add_action('admin_notices', 'hovercraft_check_git_updater');
add_action('admin_init', 'hovercraft_handle_git_updater_actions');

function hovercraft_check_git_updater() {
    if (!file_exists(WP_PLUGIN_DIR . '/git-updater/git-updater.php')) {
        // Plugin is not installed
        echo '<div class="notice notice-warning"><p>';
        echo 'Git Updater plugin is not installed. <form method="post" style="display:inline;">
                <input type="hidden" name="hovercraft_action" value="install_git_updater">
                <input type="submit" class="button button-primary" value="Click here to install it automatically">
              </form>';
        echo '</p></div>';
    } elseif (is_plugin_inactive('git-updater/git-updater.php')) {
        // Plugin is installed but not activated
        echo '<div class="notice notice-info"><p>';
        echo 'Git Updater plugin is installed but not activated. <form method="post" style="display:inline;">
                <input type="hidden" name="hovercraft_action" value="activate_git_updater">
                <input type="submit" class="button button-primary" value="Click here to activate it">
              </form>';
        echo '</p></div>';
    }
}

function hovercraft_handle_git_updater_actions() {
    if (!isset($_POST['hovercraft_action'])) {
        return;
    }

    if ($_POST['hovercraft_action'] === 'install_git_updater') {
        if (!current_user_can('install_plugins')) {
            wp_die('You do not have permission to install plugins.');
        }

        include_once ABSPATH . 'wp-admin/includes/file.php';
        include_once ABSPATH . 'wp-admin/includes/plugin.php';
        include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';

        // Ensure the filesystem is accessible
        if (!WP_Filesystem()) {
            wp_die('Filesystem error: could not initialize WP_Filesystem.');
        }

        $plugin_url = 'https://github.com/afragen/git-updater/archive/master.zip';
        $tmp_file = download_url($plugin_url);

        if (is_wp_error($tmp_file)) {
            wp_die('Failed to download the plugin: ' . $tmp_file->get_error_message());
        }

        // Unzip the plugin into the plugins directory
        $result = unzip_file($tmp_file, WP_PLUGIN_DIR);

        if (is_wp_error($result)) {
            @unlink($tmp_file);
            wp_die('Failed to install the plugin: ' . $result->get_error_message());
        }

        @unlink($tmp_file);

        // Find and rename the folder if it starts with 'git-updater-'
        $folders = glob(WP_PLUGIN_DIR . '/git-updater-*');
        foreach ($folders as $folder) {
            if (is_dir($folder)) {
                rename($folder, WP_PLUGIN_DIR . '/git-updater');
                break;
            }
        }

        wp_redirect(admin_url('plugins.php')); // Redirect to Plugins page
        exit;
    }

    if ($_POST['hovercraft_action'] === 'activate_git_updater') {
        if (!current_user_can('activate_plugins')) {
            wp_die('You do not have permission to activate plugins.');
        }

        $result = activate_plugin('git-updater/git-updater.php');

        if (is_wp_error($result)) {
            wp_die('Failed to activate the plugin: ' . $result->get_error_message());
        }

        wp_redirect(admin_url('plugins.php')); // Redirect to Plugins page
        exit;
    }
}

// ChatGPT
// https://wordpress.stackexchange.com/questions/39408/how-to-make-plugin-required-in-a-wp-theme-without-using-php-conditional-statemen
// https://gist.github.com/mlbd/b96f62e685ca3d58c17031fcc9e73c07
// https://www.aurodigo.com/how-to-solve-fatal-error-call-to-undefined-function-is-plugin-active-problem-on-wordpress
// https://theaveragedev.com/generating-a-wordpress-plugin-activation-link-url/
// https://katz.co/4769/
