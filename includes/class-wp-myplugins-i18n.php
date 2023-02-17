<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://https://github.com/bagusalvin123
 * @since      1.0.0
 *
 * @package    Wp_Myplugins
 * @subpackage Wp_Myplugins/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Myplugins
 * @subpackage Wp_Myplugins/includes
 * @author     Bagus Alvin <bagusalvin224@gmail.com>
 */
class Wp_Myplugins_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-myplugins',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
