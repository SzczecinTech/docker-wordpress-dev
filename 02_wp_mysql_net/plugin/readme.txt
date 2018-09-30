=== Plugin Name ===
Contributors: Keithics
Donate link: http://keithics.com/
Tags: skeleton plugin, framework
Requires at least: 3.X
Tested up to: 3.1.3
Stable tag: 1.0

A simple plugin for plugin developers to kickstart their plugin development.

== Description ==

A simple plugin for plugin developers to kickstart their plugin development with the same look and feel of Native Wordpress.

Here are the key features:

*   Uses classes from Wordpress itself, no CSS file
*   With Pending example Notification
*   Custom Main Menu and Sub Menus
*   A complete table with Drop down, paging and hover effects that is also built in with Wordpress!
*   Tested only with the latest version WP 3.1.3 but should work with previous version but not guaranteed. 

== Installation ==

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. See the Plugin at the bottom Menu, edit it with no restrictions

== Frequently Asked Questions ==

= Do you offer support =

No, but you can email me for bugs and suggestions and wordpress customization services at www.keithics.com

== Screenshots ==

1. Example of a custom table that mimics and feels like Native Wordpress
2. With an example of Pending Notifications!

== Changelog ==
= 1.0 =
* ..

== Upgrade Notice ==

= 1.0 =
..

== How to ==

1. With Pending Notification Example
2. With Paging Wordpress Style
3. Looks and Feels like Native Wordpress Layout

`<?php 
add_action('admin_menu', 'super_plugin_keithics_menu');

function super_plugin_keithics_menu() {
    $pending = '<span class="update-plugins"><span class="pending-count">7</span></span>';
	add_menu_page('My Plugin', 'My Plugin'.$pending, 'manage_options', 'super_plugin_keithics', 'super_plugin_keithics_options');    
    add_submenu_page( 'super_plugin_keithics', 'Super Plugin', 'Sub Menu', 'manage_options', 'super_plugin_unique_url', 'super_plugin_unique_url');
    add_submenu_page( 'super_plugin_keithics', 'Super Plugin', 'Another Menu', 'manage_options', 'super_plugin_unique_url2', 'super_plugin_unique_url2');
    
}
?>`
