<?php

/**
 * Plugin name: Simple Social Links Plugin
 * Description: Simple Social links Plugin
 * Version: 2.1
 * Author: Ido Barnea
 * Author URI: https://www.barbareshet.co.il
 * Plugin Site: https://github.com/barbareshet/ido-social-links-plugin/
 * Text Domain: islp_domain
 * Domain Path: /languages
 **/


//Exit if accessed directly
if (!defined('ABSPATH')){
    exit;
}
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/barbareshet/ido-social-links-plugin/',
	__FILE__,
	'islp-options'
);
$myUpdateChecker->setBranch('stable');

function islp_load_textdomain() {
	load_plugin_textdomain( 'islp_domain', false, basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'islp_load_textdomain' );


//1.1 register activation
require_once ( plugin_dir_path(__FILE__) . '/inc/ido-social-links-plugin-activation.php');

register_activation_hook( __FILE__, 'islp_plugin_activation' );
//Global options var

$islp_options = get_option('islp_settings');

//Load scripts
require_once ( plugin_dir_path(__FILE__) . '/inc/ido-social-links-plugin-scripts.php');

//Load Content
require_once ( plugin_dir_path(__FILE__) . '/inc/ido-social-links-plugin-content.php');

//Load Settings only if on the admin side
if ( is_admin()){
    require_once ( plugin_dir_path(__FILE__) . '/inc/ido-social-links-plugin-settings.php');
}

function islp_plugin_add_settings_link( $links ) {
	$settings_link = '<a href="'.admin_url('admin.php').'?page=islp-options">' . __( 'Settings', 'islp_domain' ) . '</a>';
	array_push( $links, $settings_link );
	return $links;
}
$plugin = plugin_basename( __FILE__ );
add_filter( "plugin_action_links_$plugin", 'islp_plugin_add_settings_link' );

//Register the shortcode
add_action('init', 'islp_register_shortcode');

//Schema Customizer
function islp_register_shortcode( ){

	add_shortcode('islp','islp_content' );
}

function islp_content($args, $content = null){

	ob_start();
	require_once ( plugin_dir_path(__FILE__) . '/inc/ido-social-links-plugin-shortcode-content.php');
	return ob_get_clean();
}