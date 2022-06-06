<?php
/**
 * Plugin Name: Test Plugin
 * Plugin URI: 
 * Description: Test Plugin just for a demo
 * Version: 1.0.0
 * Author: Prashant Sinkhwal
 * Author URI: 
 * Requires at least: 5.0
 * Requires PHP: 5.5
 * Tested up to: 6.0
 *
 * Text Domain: test-plugin
 * Domain Path: /i18n/languages/
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Test_Plugin' ) ) {
	
	/**
	*
	* Main Class
	*
	*
	*/

	Class Test_Plugin {

		public function __construct(){
			$this->test_plugin_constant();
			$this->test_plugin_init_custom_post_type();
			// $this->test_plugin_enqueue_script();
		}

		Public function test_plugin_constant(){
			define( 'TEST_PLUGIN_BASE_PATH',  dirname(__FILE__ ) );
			define( 'TEST_PLUGIN_URL_PATH', plugin_dir_url(__FILE__ ) );
		}

		Public function test_plugin_init_custom_post_type(){
			include_once TEST_PLUGIN_BASE_PATH . '/post-type/class-event.php';

		}



	}

	new Test_Plugin();

}