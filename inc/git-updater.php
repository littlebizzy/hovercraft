<?php

function hovercraft_suggest_git_updater_plugin() {

    $git_updater = WP_PLUGIN_DIR . '/git-updater/git-updater.php';

    if ( ! is_multisite() && file_exists( $git_updater ) && ! is_plugin_active( 'git-updater/git-updater.php' )  ) { ?>

        <div class="notice notice-warning">
        <p><strong>Activate Git Updater plugin to receive updates</strong></p>
        <p>The HoverCraft theme requires the free Git Updater plugin to receive automatic updates via GitHub.</p>
		<p><?php
			$git_updater_path = 'git-updater/git-updater.php';
			$activate_link = wp_nonce_url(admin_url('plugins.php?action=activate&plugin='.$git_updater_path), 'activate-plugin_'.$git_updater_path);
			echo '<a href="' . $activate_link . '">Activate Now</a>'; 
			?></p>
		</div>

	<?php } elseif ( is_multisite() && file_exists( $git_updater ) && ! is_plugin_active_for_network( 'git-updater/git-updater.php' ) ) { ?>

		<div class="notice notice-warning">
        <p><strong>Activate Git Updater plugin to receive updates</strong></p>
        <p>The HoverCraft theme requires the free Git Updater plugin to receive automatic updates via GitHub.</p>
		<p><?php
			$git_updater_path = 'git-updater/git-updater.php';
			$activate_link = wp_nonce_url(admin_url('/network/plugins.php?action=activate&plugin='.$git_updater_path), 'activate-plugin_'.$git_updater_path);
			echo '<a href="' . $activate_link . '">Activate Now</a>'; 
			?></p>
		</div>

    <?php } elseif ( ! is_multisite() && ! file_exists( $git_updater ) ) { ?>

        <div class="notice notice-warning">
        <p><strong>Install Git Updater plugin to receive updates</strong></p>
        <p>The HoverCraft theme requires the free Git Updater plugin to receive automatic updates via GitHub.</p>
		<p><?php
			// $installurl = wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=git-updater' ), 'install-plugin_git-updater' );
			echo '<a href="https://git-updater.com/wp-content/uploads/2022/12/git-updater-11.1.10.6.zip">Download Now</a>'; 
			?></p>
		</div>

	<?php } elseif ( is_multisite() && ! file_exists( $git_updater ) ) { ?>

		<div class="notice notice-warning">
        <p><strong>Install Git Updater plugin to receive updates</strong></p>
        <p>The HoverCraft theme requires the free Git Updater plugin to receive automatic updates via GitHub.</p>
		<p><?php
			// $installurl = wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=git-updater' ), 'install-plugin_git-updater' );
			echo '<a href="https://git-updater.com/wp-content/uploads/2022/12/git-updater-11.1.10.6.zip">Download Now</a>'; 
			?></p>
		</div>

	<?php }

}

add_action('admin_notices', 'hovercraft_suggest_git_updater_plugin');

// https://wordpress.stackexchange.com/questions/39408/how-to-make-plugin-required-in-a-wp-theme-without-using-php-conditional-statemen
// https://gist.github.com/mlbd/b96f62e685ca3d58c17031fcc9e73c07
// https://www.aurodigo.com/how-to-solve-fatal-error-call-to-undefined-function-is-plugin-active-problem-on-wordpress
// https://theaveragedev.com/generating-a-wordpress-plugin-activation-link-url/
// https://katz.co/4769/
