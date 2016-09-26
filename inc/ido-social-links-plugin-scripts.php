<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//Add Plugin's Scripts
function islp_add_scripts(){
    //Enqueue Styles
    wp_enqueue_style('islp-font-awesome', plugins_url() . '/ido-social-links-plugin/css/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('islp-main-style', plugins_url() . '/ido-social-links-plugin/css/islp_style.css');
    
    //Enqueue Scripte
    wp_enqueue_script('islp-main-style', plugins_url() . '/ido-social-links-plugin/js/islp_main.js');
}
add_action('wp_enqueue_scripts','islp_add_scripts' );