<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://zambrano.ch
 * @since             1.0.0
 * @package           Thrive
 *
 * @wordpress-plugin
 * Plugin Name:       Thrive Tools
 * Plugin URI:        https://thrive.tools
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Gabriel Zambrano
 * Author URI:        https://zambrano.ch
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Plugin Type: 			Piklist
 * Text Domain:       thrive
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'THRIVE_TOOLS', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-thrive-activator.php
 */
function activate_thrive() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-thrive-activator.php';
	Thrive_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-thrive-deactivator.php
 */
function deactivate_thrive() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-thrive-deactivator.php';
	Thrive_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_thrive' );
register_deactivation_hook( __FILE__, 'deactivate_thrive' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-thrive.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_thrive() {

	$plugin = new Thrive();
	$plugin->run();

}

run_thrive();
