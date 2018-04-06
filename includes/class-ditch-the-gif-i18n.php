<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://thisbailiwick.com
 * @since      1.0.0
 *
 * @package    Ditch_The_Gif
 * @subpackage Ditch_The_Gif/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ditch_The_Gif
 * @subpackage Ditch_The_Gif/includes
 * @author     Kevin Clark <kevin@thisbailiwick.com>
 */
class Ditch_The_Gif_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ditch-the-gif',
			false,
			dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
		);

	}


}
