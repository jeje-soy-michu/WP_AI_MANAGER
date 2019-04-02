<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://enfocandoelfuturo.com
 * @since      1.0.0
 *
 * @package    WP_AI_MANAGER
 * @subpackage WP_AI_MANAGER/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @since      1.0.0
 * @package    WP_AI_MANAGER
 * @subpackage WP_AI_MANAGER/admin
 * @author     Miguel Angel Rubio <miguel@enfocandoelfuturo.com>
 */
class WP_AI_MANAGER_ADMIN {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		//wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/plugin-name-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		//wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/plugin-name-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
		 * Registers plugin settings
		 *
		 * @since 		1.0.0
		 * @return 		void
		 */
	public function register_settings() {
		// Used to save the Container ID of Google Tag Manager.
		register_setting( $this->plugin_name . '-tracking', 'gtm-id' );
	}

	/**
	 * Creates the general page
	 *
	 * @since 		1.0.0
	 * @return 		void
	 */
	public function page_general() {
		include( plugin_dir_path( __FILE__ ) . 'partials/wp-ai-manager-general.php' );
	}

	/**
	 * Creates the Tracking page
	 *
	 * @since 		1.0.0
	 * @return 		void
	 */
	public function page_tracking() {
		include( plugin_dir_path( __FILE__ ) . 'partials/wp-ai-manager-tracking.php' );
	}

	/**
	 * Creates the Speed Up page
	 *
	 * @since 		1.0.0
	 * @return 		void
	 */
	public function page_speed_up() {
		include( plugin_dir_path( __FILE__ ) . 'partials/wp-ai-manager-speed-up.php' );
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function add_menu() {
		add_menu_page(
			__( 'Dashboard', $this->plugin_name ),
			__( 'WP AI Manager', $this->plugin_name ),
			'manage_options',
			$this->plugin_name,
			array( $this, 'page_general' ),
			'dashicons-smiley',
			0 );

		add_submenu_page(
			$this->plugin_name,
			__( 'Dashboard', $this->plugin_name ),
			__( 'Reports', $this->plugin_name ),
			'manage_options',
			$this->plugin_name,
			array( $this, 'page_general' ));

		add_submenu_page(
			$this->plugin_name,
			__( 'Tracking Settings', $this->plugin_name ),
			__( 'Tracking', $this->plugin_name ),
			'manage_options',
			$this->plugin_name . '-tracking',
			array( $this, 'page_tracking' ));

		add_submenu_page(
			$this->plugin_name,
			__( 'Speed Up Settings', $this->plugin_name ),
			__( 'Speed Up', $this->plugin_name ),
			'manage_options',
			$this->plugin_name . '-speed_up',
			array( $this, 'page_speed_up' ));
	}
}
