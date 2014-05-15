<?php
/**
 * Plugin Name: Try Ninja Demo
 * Plugin URI: https://github.com/sdavis2702/try-ninja-demo
 * Description: This plugin adds a new widget that lets you easily invite users to try your Ninja Demo live demo.
 * Version: 1.0.0
 * Author: Sean Davis
 * Author URI: http://seandavis.co
 * License: GPL2
 * Requires at least: 3.8
 * Tested up to: 3.9
 * Domain Path: /languages/
 * 
 * This plugin is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as 
 * published by the Free Software Foundation.
 * 
 * This plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, see http://www.gnu.org/licenses/.
 */
if ( ! defined( 'ABSPATH' ) ) exit; // no accessing this file directly


class Try_Ninja_Demo
{
	public function __construct() {

		// define plugin name
		define( 'TND_NAME', 'Try Ninja Demo' );

		// define plugin version
		define( 'TND_VERSION', '1.0.0' );

		// define plugin directory
		define( 'TND_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );

		// define plugin root file
		define( 'TND_URL', trailingslashit( plugin_dir_url( __FILE__ ) ) );

		// load text domain
		add_action( 'init', array( $this, 'load_textdomain' ) );
		
		// load plugin files
		$this->includes();
	}


	/**
	 * load TND textdomain
	 */
	public function load_textdomain() {
		load_plugin_textdomain( 'tnd', false, TND_DIR . 'languages/' );
	}
	
	
	/**
	 * all required plugin files
	 */
	public function includes() {
		require_once( TND_DIR . 'includes/class-tnd-widget.php' );
	}
}
new Try_Ninja_Demo();