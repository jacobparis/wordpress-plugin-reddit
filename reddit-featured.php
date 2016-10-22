<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.jacobpariseau.com/plugin-reddit-featured/
 * @since             1.0.0
 * @package           Reddit_Featured
 *
 * @wordpress-plugin
 * Plugin Name:       Reddit Featured
 * Plugin URI:        https://github.com/JacobPariseau/Reddit-Featured
 * Description:       This allows you to feature a reddit post on your site
 * Version:           1.0.0
 * Author:            Jacob Pariseau
 * Author URI:        http://jacobpariseau.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       reddit-featured
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-reddit-featured-activator.php
 */
function activate_reddit_featured() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-reddit-featured-activator.php';
	Reddit_Featured_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-reddit-featured-deactivator.php
 */
function deactivate_reddit_featured() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-reddit-featured-deactivator.php';
	Reddit_Featured_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_reddit_featured' );
register_deactivation_hook( __FILE__, 'deactivate_reddit_featured' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-reddit-featured.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_reddit_featured() {

	$plugin = new Reddit_Featured();
	$plugin->run();

}
run_reddit_featured();
