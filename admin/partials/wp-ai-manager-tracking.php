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
<h1>WordPress Extra Post Info</h1>
<form method="post" action="options.php">
  <?php settings_fields( 'extra-post-info-settings' ); ?>
  <?php do_settings_sections( 'extra-post-info-settings' ); ?>
  <table class="form-table">
    <tr valign="top">
    <th scope="row">Extra post info:</th>
    <td><input type="text" name="extra_post_info" value="<?php echo get_option( 'extra_post_info' ); ?>"/></td>
    </tr>
  </table>
  <?php submit_button(); ?>
</form>
