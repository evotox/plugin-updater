<?php
/*
	Plugin Name: Evotox Plugin
	Description: This is for updating your Wordpress plugin.
	Version: 1.0.3
	Author: Mubeen Khan
	Author URI: http://www.evotox.com
*/
if( ! class_exists( 'Evotox_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}
$updater = new Evotox_Updater( __FILE__ );
$updater->set_username( 'evotox' );
$updater->set_repository( 'evotox-plugin-updater' );
// $updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
$updater->initialize();

add_action('wp_footer', 'evotox_test');

function evotox_test(){
    echo '<h1 style="position: fixed; bottom: 10px; right: 10px;">Hello World...!</h1>';
}