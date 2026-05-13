<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'admin_notices', 'hovercraft_check_git_updater' );
add_action( 'admin_init', 'hovercraft_handle_git_updater_actions' );

function hovercraft_check_git_updater() {
    if ( ! hovercraft_is_git_updater_installed() ) {
        if ( ! current_user_can( 'install_plugins' ) ) {
            return;
        }
        ?>
        <div class="notice notice-warning">
            <p><?php echo esc_html__( 'Git Updater plugin is not installed.', 'hovercraft' ); ?></p>
            <form method="post">
                <?php wp_nonce_field( 'hovercraft_install_git_updater', 'hovercraft_git_updater_nonce' ); ?>
                <input type="hidden" name="hovercraft_git_updater_action" value="install_git_updater">
                <?php submit_button( __( 'Install Git Updater', 'hovercraft' ), 'primary', 'submit', false ); ?>
            </form>
        </div>
        <?php
        return;
    }

    if ( ! hovercraft_is_git_updater_active() ) {
        if ( ! current_user_can( 'activate_plugins' ) ) {
            return;
        }
        ?>
        <div class="notice notice-info">
            <p><?php echo esc_html__( 'Git Updater plugin is installed but not activated.', 'hovercraft' ); ?></p>
            <form method="post">
                <?php wp_nonce_field( 'hovercraft_activate_git_updater', 'hovercraft_git_updater_nonce' ); ?>
                <input type="hidden" name="hovercraft_git_updater_action" value="activate_git_updater">
                <?php submit_button( __( 'Activate Git Updater', 'hovercraft' ), 'primary', 'submit', false ); ?>
            </form>
        </div>
        <?php
    }
}

function hovercraft_handle_git_updater_actions() {
    if ( empty( $_POST['hovercraft_git_updater_action'] ) ) {
        return;
    }

    $gu_action = sanitize_key( wp_unslash( $_POST['hovercraft_git_updater_action'] ) );

    if ( 'install_git_updater' === $gu_action ) {
        hovercraft_install_git_updater();
    }

    if ( 'activate_git_updater' === $gu_action ) {
        hovercraft_activate_git_updater();
    }
}

function hovercraft_install_git_updater() {
    if ( ! current_user_can( 'install_plugins' ) ) {
        wp_die( esc_html__( 'You do not have permission to install plugins.', 'hovercraft' ) );
    }

    check_admin_referer( 'hovercraft_install_git_updater', 'hovercraft_git_updater_nonce' );

    require_once ABSPATH . 'wp-admin/includes/file.php';
    require_once ABSPATH . 'wp-admin/includes/misc.php';
    require_once ABSPATH . 'wp-admin/includes/plugin.php';
    require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';

    $gu_download_url = 'https://github.com/littlebizzy/slickstack/raw/master/modules/wordpress/mu-plugins/git-updater.zip';
    $gu_upgrader = new Plugin_Upgrader( new Automatic_Upgrader_Skin() );
    $gu_result = $gu_upgrader->install( $gu_download_url );

    if ( is_wp_error( $gu_result ) ) {
        wp_die( esc_html( $gu_result->get_error_message() ) );
    }

    if ( false === $gu_result ) {
        wp_die( esc_html__( 'Git Updater could not be installed.', 'hovercraft' ) );
    }

    wp_safe_redirect( admin_url( 'plugins.php' ) );
    exit;
}

function hovercraft_activate_git_updater() {
    if ( ! current_user_can( 'activate_plugins' ) ) {
        wp_die( esc_html__( 'You do not have permission to activate plugins.', 'hovercraft' ) );
    }

    check_admin_referer( 'hovercraft_activate_git_updater', 'hovercraft_git_updater_nonce' );

    require_once ABSPATH . 'wp-admin/includes/plugin.php';

    $gu_result = activate_plugin( 'git-updater/git-updater.php' );

    if ( is_wp_error( $gu_result ) ) {
        wp_die( esc_html( $gu_result->get_error_message() ) );
    }

    wp_safe_redirect( admin_url( 'plugins.php' ) );
    exit;
}

function hovercraft_is_git_updater_installed() {
    return file_exists( WP_PLUGIN_DIR . '/git-updater/git-updater.php' );
}

function hovercraft_is_git_updater_active() {
    require_once ABSPATH . 'wp-admin/includes/plugin.php';

    return is_plugin_active( 'git-updater/git-updater.php' );
}
