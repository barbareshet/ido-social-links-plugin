<?php

/**
 * Plugin name: Ido Social Links Plugin
 * Description: Social links Plugin
 * Version: 1.0
 * Author: Ido Barnea
 * Author URI: http://idowebservices.com
 * Plugin Site: idowebservices.com
 * 
 **/

//Exit if accessed directly
if (!defined('ABSPATH')){
    exit;
}

//Global options var

$islp_options = get_option('islp_settings');

//Load scripts
require_once (plugin_dir_path(__FILE__) . '/inc/ido-social-links-plugin-scripts.php');

//Load Content
require_once (plugin_dir_path(__FILE__) . '/inc/ido-social-links-plugin-content.php');

//Load Settings only if on the admin side
if (is_admin()){
    require_once (plugin_dir_path(__FILE__) . '/inc/ido-social-links-plugin-settings.php');
}