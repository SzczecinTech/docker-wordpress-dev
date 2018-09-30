<?php
/*
Plugin Name: Super Plugin Skeleton for Wordpress
Plugin URI: http://projects.keithics.com/super-plugin-skeleton-for-wordpress/
Description: A skeleton plugin for Wordpress Plugin Developers
Version: 1.0
Author: Keithics
Author URI: http://keithics.com
*/

//*********** for install/uninstall actions (optional) ********************//
/*register_activation_hook(__FILE__,'super_plugin_keithics_install');
register_deactivation_hook(__FILE__, 'super_plugin_keithics_uninstall');
function super_plugin_keithics_install(){
     super_plugin_keithics_uninstall();//force to uninstall option
     add_option("super_plugin_keithics_secret", generateRandom(10));
}

function super_plugin_keithics_uninstall(){
    if(get_option('super_plugin_keithics_secret')){
     delete_option("super_plugin_keithics_secret");
     }
}*/
//*********** end of install/uninstall actions (optional) ********************//


add_action('admin_menu', 'super_plugin_keithics_menu');

function super_plugin_keithics_menu() {
    $pending = '<span class="update-plugins"><span class="pending-count">7</span></span>';
	add_menu_page('My Plugin', 'My Plugin'.$pending, 'manage_options', 'super_plugin_keithics', 'super_plugin_keithics_options');    
    add_submenu_page( 'super_plugin_keithics', 'Super Plugin', 'Sub Menu', 'manage_options', 'super_plugin_unique_url', 'super_plugin_unique_url');
    add_submenu_page( 'super_plugin_keithics', 'Super Plugin', 'Another Menu', 'manage_options', 'super_plugin_unique_url2', 'super_plugin_unique_url2');
    
}

function super_plugin_unique_url(){
  	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}
	echo '<div class="wrap">';
    echo '<h2>This is the Sub Menu</h2>';
	echo '<p>Include PHP file for better readability of your code.</p>';
	echo '</div>';

}

function super_plugin_unique_url2(){
  	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}
	echo '<div class="wrap">';
    echo '<h2>This is the Second Sub Menu</h2>';
	echo '<p>Include PHP file for better readability of your code.</p>';
	echo '</div>';

}

function super_plugin_keithics_options() {
	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}
	echo '<div class="wrap">';
    echo '<h2>This is Header 2</h2>';
    include('table.php');
	echo '</div>';
}