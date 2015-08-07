<?php
/*
Plugin Name: Ultimate Bar Free
Version: 2.0
Author: umarbajwa
Plugin URI:http://web-settler.com/ultimate-bar/
Author URI :http://web-settler.com/contact/
Donate link: http://web-settler.com/ultimate-bar/
License: GPL V2 
*/


require_once "ssb_options_file.php";
require_once "ssb_UI_file.php";
require_once "ssb_menu_file.php";
require_once "ssb_scripts_file.php";
require_once "ssb_bar_html.php";
require_once 'add_ssb_subscribers_list_menu.php';
require_once 'FrontpageUI.php';
require_once 'add_ssb_mailchimp.php';

function ssb_plugin_add_settings_link( $links ) {
    $settings_link = '<a href="admin.php?page=ssb_bar">' . __( 'Settings' ) . '</a>';
    array_push( $links, $settings_link );
  	return $links;
}
$plugin = plugin_basename( __FILE__ );
add_filter( "plugin_action_links_$plugin", 'ssb_plugin_add_settings_link' );




 ?>