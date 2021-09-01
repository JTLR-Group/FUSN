<?php 
/*
*
*	***** Follow us Store Notice *****
*
*	This file initializes all FUSN Core components
*	
*/
// If this file is called directly, abort. //
if ( ! defined( 'WPINC' ) ) {die;} // end if
// Define Our Constants
define('FUSN_CORE_INC',dirname( __FILE__ ).'/assets/inc/');
define('FUSN_CORE_IMG',plugins_url( 'assets/img/', __FILE__ ));
define('FUSN_CORE_CSS',plugins_url( 'assets/css/', __FILE__ ));
define('FUSN_CORE_JS',plugins_url( 'assets/js/', __FILE__ ));
/*
*
*  Register CSS
*
*/
function fusn_register_core_css(){
wp_enqueue_style('fusn-core', FUSN_CORE_CSS . 'fusn-core.css',null,time(),'all');
};
add_action( 'wp_enqueue_scripts', 'fusn_register_core_css' );    
/*
*
*  Register JS/Jquery Ready
*
*/
function fusn_register_core_js(){
// Register Core Plugin JS	
wp_enqueue_script('fusn-core', FUSN_CORE_JS . 'fusn-core.js','jquery',time(),true);
};
add_action( 'wp_enqueue_scripts', 'fusn_register_core_js' );    
/*
*
*  Includes
*
*/ 
// Load the Functions
if ( file_exists( FUSN_CORE_INC . 'fusn-core-functions.php' ) ) {
	require_once FUSN_CORE_INC . 'fusn-core-functions.php';
}     
// Load the ajax Request
if ( file_exists( FUSN_CORE_INC . 'fusn-ajax-request.php' ) ) {
	require_once FUSN_CORE_INC . 'fusn-ajax-request.php';
} 
// Load the Shortcodes
if ( file_exists( FUSN_CORE_INC . 'fusn-shortcodes.php' ) ) {
	require_once FUSN_CORE_INC . 'fusn-shortcodes.php';
}