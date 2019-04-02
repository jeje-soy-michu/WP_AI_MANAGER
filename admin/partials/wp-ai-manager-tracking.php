<?php

/**
 * Provide a admin area view for the tracking submenu
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://enfocandoelfuturo.com
 * @since      1.0.0
 *
 * @package    WP_AI_MANAGER
 * @subpackage WP_AI_MANAGER/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<h1><?php echo esc_html( __("Tracking Settings", $this->plugin_name ) ); ?></h1>
<form method="post" action="options.php">
  <?php settings_fields( $this->plugin_name . '-tracking' ); ?>
  <?php do_settings_sections( $this->plugin_name . '-tracking' ); ?>
  <table class="form-table">
    <tr valign="top">
      <th scope="row"><?php echo esc_html( __("Activate Google Tag Manager:", $this->plugin_name ) ); ?></th>
      <td><input id="gtm-active" type="checkbox" name="gtm-active" value="1" <?php checked(1, get_option('gtm-active'), true); ?>/></td>
    </tr>
    <tr valign="top">
      <th scope="row"><?php echo esc_html( __("Google Tag Manager Container Id:", $this->plugin_name ) ); ?></th>
      <td><input class="enable-gtm" type="text" name="gtm-id" value="<?php echo get_option( 'gtm-id' ); ?>"/></td>
    </tr>
    <tr valign="top">
      <th scope="row"><?php echo esc_html( __("Load Google Tag Manager in the header:", $this->plugin_name ) ); ?></th>
      <td><input class="enable-gtm" type="checkbox" name="gtm-head" value="1" <?php checked(1, get_option('gtm-head'), true); ?>/></td>
    </tr>
  </table>
  <?php submit_button(); ?>
</form>
