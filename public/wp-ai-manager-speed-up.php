<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://enfocandoelfuturo.com
 * @since      1.0.0
 *
 * @package    WP_AI_MANAGER
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @since      1.0.0
 * @package    WP_AI_MANAGER
 * @author     Miguel Angel Rubio <miguel@enfocandoelfuturo.com>
 */
class WP_AI_MANAGER_PUBLIC_PAGE_SPEED_UP {

  public static $styles;

  public static function relocate_css() {
    return;
		self::$styles = [];
		global $wp_styles;
		// loop over all of the registered scripts
		foreach ( $wp_styles->registered as $handle => $data )
		{
			// remove it
			//wp_deregister_style($handle);
			wp_dequeue_style( $handle );
			array_push( self::$styles, $handle );
		}

		add_action( 'get_footer', array( 'WP_AI_MANAGER_PUBLIC_PAGE_SPEED_UP', 'load_styles_in_footer' ) );
	}

  public static function load_styles_in_footer() {
    foreach ( self::$styles as $key => $handle ) {
      wp_enqueue_style( $handle );
    }
  }

  public static function load_scripts_in_footer( $plugin_name ) {
    global $wp_scripts;
		// loop over all of the registered scripts
		foreach ( $wp_scripts->registered as $handle => $data )
		{
      if ( $handle == $plugin_name . '-gtm' )continue;
      $wp_scripts->add_data( $handle, 'group', 1 );
    }
  }
}
