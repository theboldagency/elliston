<?php
/**
 * Plugin Name: Elliston
 * Plugin URI:
 * Description: Bold's in-house brew of custom editor styles and enhancements.
 * Version: 1.0.0-dev1
 * Author: The Bold Agency
 * Author URI: https://theboldagency.co
 */

function elliston_admin_scripts() {
    $wp_scripts = wp_scripts();
    wp_enqueue_style( 'elliston', plugin_dir_url( __FILE__ ) . 'assets/css/admin-styles.css', '', '1.0.0-dev1' );
}

add_action( 'admin_enqueue_scripts', 'elliston_admin_scripts' );