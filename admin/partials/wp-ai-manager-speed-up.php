<?php
/**
 * Provide a admin area view for the Speed Up submenu
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://enfocandoelfuturo.com
 * @since      1.0.0
 *
 * @package    WP_AI_MANAGER
 * @subpackage WP_AI_MANAGER/public/partials
 */

 // If this file is called directly, abort.
 defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require_once plugin_dir_path( __FILE__ ) . '../../includes/3rd-party/wp-rocket-htaccess.php';
if( get_option( 'upgrade-htaccess' ) ) {
  // Install All WP Rocket rules of the .htaccess file.
  flush_rocket_htaccess();
} else {
  // Remove All WP Rocket rules of the .htaccess file.
  flush_rocket_htaccess( true );
}
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<h1><?php echo esc_html( __("Speed Up Settings", $this->plugin_name ) ); ?></h1>
<form method="post" action="options.php">
  <?php settings_fields( $this->plugin_name . '-speed-up' ); ?>
  <?php do_settings_sections( $this->plugin_name . '-speed-up' ); ?>
  <table class="form-table">
    <tr valign="top">
      <th scope="row"><?php echo esc_html( __("Load scripts in footer:", $this->plugin_name ) ); ?></th>
      <td><input id="gtm-active" type="checkbox" name="scripts-footer" value="1" <?php checked(1, get_option('scripts-footer'), true); ?>/></td>
    </tr>
    <tr valign="top">
      <th scope="row"><?php echo esc_html( __("Upgrade .htaccess:", $this->plugin_name ) ); ?></th>
      <td><input class="enable-gtm" type="checkbox" name="upgrade-htaccess" value="1" <?php checked(1, get_option('upgrade-htaccess'), true); ?>/></td>
    </tr>
  </table>
  <?php submit_button(); ?>
</form>
