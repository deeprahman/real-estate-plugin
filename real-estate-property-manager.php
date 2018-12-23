<?php

/*
Plugin Name: Real Estate Property Manager
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A rudimentary plugin for demonstrating my WordPress plugin development skill.
Version: 1.0
Author: deep
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/

//Add Jquery and JavaScript on admin section
function dr_repm_add_jquery_and_javascript(){
    wp_enqueue_script("jquery");
    wp_enqueue_script('google-map.js', plugins_url('admin/js/google-map.js', __FILE__),['jquery','map']);
    wp_enqueue_script('map','//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyA-ZcVYsJtPgFIgH7A1FLY41VW6GTUnM60');
}
add_action('admin_enqueue_scripts', 'dr_repm_add_jquery_and_javascript');

//Include the admin section
require_once plugin_dir_path(__FILE__).'/admin/dr-repm-admin.php';

//Include Admin Meta Box and data saving functions
require_once plugin_dir_path(__FILE__).'/admin/admin-include/dr-repm-meta-box.php';
require_once plugin_dir_path(__FILE__).'/admin/admin-include/dr-repm-save.php';

//Include Admin Display for loaction
require_once plugin_dir_path(__FILE__).'/admin/partials/display-location.php';
//Include Admin Display for owner information
require_once plugin_dir_path(__FILE__).'/admin/partials/display-owner-info.php';
//Include Admin Display for Room Description
require_once plugin_dir_path(__FILE__).'/admin/partials/display-room-des.php';



































