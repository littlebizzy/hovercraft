<?php
add_action( 'admin_notices', 'hovercraft_check_git_updater' );
add_action( 'admin_init', 'hovercraft_handle_git_updater_actions' );

function hovercraft_check_git_updater() {
    $gu_plugin_file = WP_PLUGIN_DIR . '/git-updater/git-updater.php';

    if ( ! file_exists( $gu_plugin_file ) ) {
        // Plugin is not installed
        echo '<div class="notice notice-warning"><p>';
        echo 'Git Updater plugin is not installed. <form method="post" style="display:inline;">';
        wp_nonce_field( 'hovercraft_install_nonce', 'hovercraft_nonce_field' );
        echo '<input type="hidden" name="hovercraft_action" value="install_git_updater">';
        echo '<input type="submit" class="button button-primary" value="Click here to install it automatically">';
        echo '</form></p></div>';
    } elseif ( is_plugin_inactive( 'git-updater/git-updater.php' ) ) {
        // Plugin is installed but not activated
        echo '<div class="notice notice-info"><p>';
        echo 'Git Updater plugin is installed but not activated. <form method="post" style="display:inline;">';
        wp_nonce_field( 'hovercraft_activate_nonce', 'hovercraft_nonce_field' );
        echo '<input type="hidden" name="hovercraft_action" value="activate_git_updater">';
        echo '<input type="submit" class="button button-primary" value="Click here to activate it">';
        echo '</form></p></div>';
    }
}

function hovercraft_handle_git_updater_actions() {
    // Ensure action is set and check the nonce
    if ( isset( $_POST['hovercraft_action'] ) ) {
        $gu_action = sanitize_text_field( $_POST['hovercraft_action'] );

        // Verify nonce for installation
        if ( $gu_action === 'install_git_updater' ) {
            if ( ! isset( $_POST['hovercraft_nonce_field'] ) || ! wp_verify_nonce( $_POST['hovercraft_nonce_field'], 'hovercraft_install_nonce' ) ) {
                wp_die( 'Security check failed for installation.' );
            }

            if ( ! current_user_can( 'install_plugins' ) ) {
                wp_die( 'You do not have permission to install plugins.' );
            }

            // Include necessary WordPress files
            include_once ABSPATH . 'wp-admin/includes/file.php';
            include_once ABSPATH . 'wp-admin/includes/plugin.php';
            include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';

            // Ensure the filesystem is accessible
            if ( ! WP_Filesystem() ) {
                wp_die( 'Filesystem error: could not initialize WP_Filesystem.' );
            }

            // Get the latest release tag from GitHub API
            $gu_api_url = 'https://api.github.com/repos/afragen/git-updater/releases/latest';
            $gu_options = [
                'http' => [
                    'method'  => 'GET',
                    'header'  => 'User-Agent: PHP' // Required to avoid 403 Forbidden response from GitHub API
                ],
            ];
            $gu_context = stream_context_create( $gu_options );
            $gu_response = file_get_contents( $gu_api_url, false, $gu_context );

            // Proceed only if the response is valid
            if ( $gu_response ) {
                $gu_data = json_decode( $gu_response, true );
                $gu_latest_tag = isset( $gu_data['tag_name'] ) ? $gu_data['tag_name'] : false;

                if ( $gu_latest_tag ) {
                    // Construct the download URL for the latest release ZIP file
                    $gu_download_url = "https://github.com/afragen/git-updater/archive/refs/tags/$gu_latest_tag.zip";

                    // Download the ZIP file to a temporary location using WordPress's `download_url()`
                    $gu_tmp_file = download_url( $gu_download_url );

                    if ( ! is_wp_error( $gu_tmp_file ) ) {
                        // Unzip the plugin into the plugins directory
                        $gu_result = unzip_file( $gu_tmp_file, WP_PLUGIN_DIR );

                        // Clean up the temporary file
                        @unlink( $gu_tmp_file );

                        if ( ! is_wp_error( $gu_result ) ) {
                            // Rename the folder if it starts with 'git-updater-'
                            $gu_extracted_folder = WP_PLUGIN_DIR . '/git-updater-' . $gu_latest_tag;
                            $gu_final_folder = WP_PLUGIN_DIR . '/git-updater';

                            if ( is_dir( $gu_extracted_folder ) && ! is_dir( $gu_final_folder ) ) {
                                rename( $gu_extracted_folder, $gu_final_folder );
                            }

                            wp_redirect( admin_url( 'plugins.php' ) ); // Redirect to Plugins page
                            exit;
                        } else {
                            wp_die( 'Failed to install the plugin: ' . esc_html( $gu_result->get_error_message() ) );
                        }
                    } else {
                        wp_die( 'Failed to download the plugin: ' . esc_html( $gu_tmp_file->get_error_message() ) );
                    }
                }
            }
        }

        // Verify nonce for activation
        if ( $gu_action === 'activate_git_updater' ) {
            if ( ! isset( $_POST['hovercraft_nonce_field'] ) || ! wp_verify_nonce( $_POST['hovercraft_nonce_field'], 'hovercraft_activate_nonce' ) ) {
                wp_die( 'Security check failed for activation.' );
            }

            if ( ! current_user_can( 'activate_plugins' ) ) {
                wp_die( 'You do not have permission to activate plugins.' );
            }

            $gu_result = activate_plugin( 'git-updater/git-updater.php' );

            if ( is_wp_error( $gu_result ) ) {
                wp_die( 'Failed to activate the plugin: ' . esc_html( $gu_result->get_error_message() ) );
            }

            wp_redirect( admin_url( 'plugins.php' ) ); // Redirect to Plugins page
            exit;
        }
    }
}

// ChatGPT
// https://wordpress.stackexchange.com/questions/39408/how-to-make-plugin-required-in-a-wp-theme-without-using-php-conditional-statemen
// https://gist.github.com/mlbd/b96f62e685ca3d58c17031fcc9e73c07
// https://www.aurodigo.com/how-to-solve-fatal-error-call-to-undefined-function-is-plugin-active-problem-on-wordpress
// https://theaveragedev.com/generating-a-wordpress-plugin-activation-link-url/
// https://katz.co/4769/
