<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Reddit_Featured
 * @subpackage Reddit_Featured/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Reddit_Featured
 * @subpackage Reddit_Featured/admin
 * @author     Your Name <email@example.com>
 */
class Reddit_Featured_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $reddit_featured    The ID of this plugin.
	 */
	private $reddit_featured;

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
	 * @param      string    $reddit_featured       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $reddit_featured, $version ) {

		$this->reddit_featured = $reddit_featured;
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
		 * defined in Reddit_Featured_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Reddit_Featured_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->reddit_featured, plugin_dir_url( __FILE__ ) . 'css/reddit-featured-admin.css', array(), $this->version, 'all' );

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
		 * defined in Reddit_Featured_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Reddit_Featured_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->reddit_featured, plugin_dir_url( __FILE__ ) . 'js/reddit-featured-admin.js', array( 'jquery' ), $this->version, false );

	}

}
