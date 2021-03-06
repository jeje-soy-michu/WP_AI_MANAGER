<?php
/**
 * Fired during plugin deactivation
 *
 * @link       https://enfocandoelfuturo.com
 * @since      1.0.0
 *
 * @package    WP_AI_MANAGER
 * @subpackage WP_AI_MANAGER/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    WP_AI_MANAGER
 * @subpackage WP_AI_MANAGER/includes
 * @author     Miguel Angel Rubio <miguel@enfocandoelfuturo.com>
 */
class WP_AI_MANAGER_DEACTIVATOR {
	/**
   * Launch all the stuff needed for the activation.
   *
   * Currently as you can see it does nothing.
   *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		// Delete All WP Rocket rules of the .htaccess file.
		require_once plugin_dir_path( __FILE__ ) . '/3rd-party/wp-rocket-htaccess.php';
		flush_rocket_htaccess( true );
	}
}
