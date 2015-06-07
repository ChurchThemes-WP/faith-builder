<?php
/**
 * Plugin Name: Faith Builder Modules
 * Plugin URI: https://faithmade.com
 * Description: Custom modules for Faithmade.com
 * Version: 1.0
 * Author: Your Name
 * Author URI: https://faithmade.com
 */
define( 'FB_MODULES_DIR', plugin_dir_path( __FILE__ ) );
define( 'FB_MODULES_URL', plugins_url( '/', __FILE__ ) );

function fb_module_load() {
	if ( class_exists( 'FLBuilder' ) ) {
		include( FB_MODULES_DIR . '/basic-example/basic-example.php' );
		include( FB_MODULES_DIR . '/example/example.php' );
	}
}
add_action( 'init', 'fb_module_load' );