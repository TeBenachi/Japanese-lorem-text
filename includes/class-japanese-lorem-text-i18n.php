<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://profiles.wordpress.org/utz119/
 * @since      1.0.0
 *
 * @package    Japanese_Lorem_Text
 * @subpackage Japanese_Lorem_Text/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Japanese_Lorem_Text
 * @subpackage Japanese_Lorem_Text/includes
 * @author     TeBenachi <TeBenachi@gmail.com>
 */
class Japanese_Lorem_Text_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'japanese-lorem-text',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
