<?php
/**
 * Adds the custom admin panel to the admin area
 */

function rajesh_admin() {  
	include( Rajesh_ADMIN . '/panel.php');  
}  

function Rajesh_admin_init() {
	wp_enqueue_style( "admin_css", Rajesh_ADMIN_CSS . "/admin.css", false, "1.0", "all"); // CSS
	wp_enqueue_script( array("jquery", "jquery-ui-core", "interface", "jquery-ui-sortable", "wp-lists", "jquery-ui-sortable") ); // jQuery UI Sortable
	
    /* Register our script. This is loaded only in the Theme admin panel */
    wp_register_script('admin_js', Rajesh_ADMIN_JS . '/admin.js', false, "1.0");
}

// Adds the rajesh Menu to the Wordpress admin area
function rajesh_admin_menu() {  
    $page = add_menu_page(Rajesh_THEMENAME, 'Theme Options', 'administrator', Rajesh_THEMESHORTNAME, "rajesh_admin");    
    add_action('admin_print_scripts-' . $page, 'rajesh_admin_scripts');
}  

function rajesh_admin_scripts() {
    wp_enqueue_script('admin_js');
}

add_action('admin_init', 'rajesh_admin_init');
add_action('admin_menu', 'rajesh_admin_menu');
?>