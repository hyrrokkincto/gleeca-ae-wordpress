<?php
function create_meta_box() {
	global $theme_name;
	if ( function_exists('add_meta_box') ) {
		add_meta_box( 'new_meta_boxes_post', Rajesh_THEMENAME . ' Post Settings', 'new_meta_boxes_post','normal', 'high' );
	}
}
add_action('admin_menu', 'create_meta_box');
function my_admin_scripts() {
	wp_enqueue_script('media-upload');
	wp_register_script('upload-js', Rajesh_ADMIN_JS . '/upload.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('upload-js');
}
function my_admin_styles() {
	wp_enqueue_style('thickbox');
}
add_action('admin_print_scripts', 'my_admin_scripts');
add_action('admin_print_styles', 'my_admin_styles');
?>