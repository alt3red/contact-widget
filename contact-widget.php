<?php
/*
 * Plugin Name: Ajax Contact Widget
 * Description: Simple Ajax powered contact form widget    
 * Version:     1.0
 * Author:      Raz Damaschin
 * Author URI:  http://alteredego.us
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

/*
 * Include JavaScript
 */

function add_scripts() {
    wp_enqueue_script('contact-scripts', plugins_url().'/contact-widget/js/script.js', array('jquery'), '1.0.0', false);
}
add_action('wp_enqueue_scripts', 'add_scripts');

/*
 * Include Class
 */

include ('class.contact-widget.php');

/*
 * Register Widget
 */

function register_contact_widget() {
    register_widget('Contact_widget');
}
add_action('widgets_init', 'register_contact_widget');