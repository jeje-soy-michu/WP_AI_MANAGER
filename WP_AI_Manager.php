<?php
/**
* Plugin Name: WP AI Manager
* Description: This plugin uses Artificial Intelligence to perform some tasks and improve your WordPress site.
* Version: 1.0.0
* Author: Miguel Ángel Rubio Muñoz
* Author URI: https://enfocandoelfuturo.com/author/michuxd/
**/

// If this file is called directly, abort.
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
 * Currently plugin version.
 */
define( 'WP_AI_MANAGER_VERSION', '1.1.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_wp_ai_manager() {
  require_once plugin_dir_path( __FILE__ ) . 'includes/wp-ai-manager-activator.php';
	WP_AI_MANAGER_ACTIVATOR::activate();
}
/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_wp_ai_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/wp-ai-manager-deactivator.php';
	WP_AI_MANAGER_DEACTIVATOR::deactivate();
}
register_activation_hook( __FILE__, 'activate_wp_ai_manager' );
register_deactivation_hook( __FILE__, 'deactivate_wp_ai_manager' );
/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/wp-ai-manager.php';
/**
 * Begins execution of the plugin.
 *
 * @since    1.0.0
 */
function run_wp_ai_manager() {
	$plugin = new WP_AI_MANAGER();
	$plugin->run();
}
run_wp_ai_manager();
