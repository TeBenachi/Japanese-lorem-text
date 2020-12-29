<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://profiles.wordpress.org/utz119/
 * @since             1.0.0
 * @package           Japanese_Lorem_Text
 *
 * @wordpress-plugin
 * Plugin Name:       Japanese lorem text
 * Plugin URI:        https://github.com/TeBenachi/Japanese-lorem-text
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            TeBenachi
 * Author URI:        https://profiles.wordpress.org/utz119/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       japanese-lorem-text
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
define( 'JAPANESE_LOREM_TEXT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-japanese-lorem-text-activator.php
 */
function activate_japanese_lorem_text() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-japanese-lorem-text-activator.php';
	Japanese_Lorem_Text_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-japanese-lorem-text-deactivator.php
 */
function deactivate_japanese_lorem_text() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-japanese-lorem-text-deactivator.php';
	Japanese_Lorem_Text_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_japanese_lorem_text' );
register_deactivation_hook( __FILE__, 'deactivate_japanese_lorem_text' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-japanese-lorem-text.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_japanese_lorem_text() {

	$plugin = new Japanese_Lorem_Text();
	$plugin->run();

}
run_japanese_lorem_text();
