<?php
/**
 * Plugin Name: Faith Builder Modules
 * Plugin URI: https://faithmade.com
 * Description: Custom modules for Faithmade.com
 * Version: 1.0
 * Author: Faithmade
 * Author URI: https://faithmade.com
 */
define( 'FB_MODULES_DIR', plugin_dir_path( __FILE__ ) );
define( 'FB_MODULES_URL', plugins_url( '/', __FILE__ ) );
define( 'FB_MODULES_SECTION', 'Faithmade Modules' );

function fb_module_load() {
	if ( class_exists( 'FLBuilder' ) ) {

    $dirs = array_filter(glob(dirname(__FILE__) . '/fb-*' , GLOB_ONLYDIR));

    foreach ( $dirs as $module ) {
      $module = substr($module, strrpos($module, '/') + 1);

      include( FB_MODULES_DIR . $module . '/' . $module . '.php' );
    }
	}
}
add_action( 'init', 'fb_module_load' );
