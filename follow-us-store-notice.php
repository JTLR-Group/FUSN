<?php 
/*
Plugin Name: Follow us Store Notice
Plugin URI: https://jtlrgroup.cf/plugins/isn.html
Description: Lets your WooCommerce customers know where to follow you with a gorgeous store notice.  
Version: 1.1.6
Author: JTLR Group
Author URI: https://jtlrgroup.cf
Text Domain: fusn
Generated By: http://ensuredomains.com
*/

// If this file is called directly, abort. //
if ( ! defined( 'WPINC' ) ) {die;} // end if

// Let's Initialize Everything
if ( file_exists( plugin_dir_path( __FILE__ ) . 'core-init.php' ) ) {
require_once( plugin_dir_path( __FILE__ ) . 'core-init.php' );
}