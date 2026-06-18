<?php
/**
 * Updates Module custom post type
 */
add_action('init', 'services_post_type_register');
function services_post_type_register() {
	register_post_type( 'services' ,
						array(
							'label' => 'Services',
							'singular_label' => 'Services',
							'public' => true,
							'show_ui' => true,
							//'menu_icon' => get_stylesheet_directory_uri() . '/images/testimonials-icon.png', 
							'capability_type' => 'post',
							'hierarchical' => false,
							'rewrite' => true,
							'show_in_nav_services' => true,
							'supports' => array('title','thumbnail' ,'editor','excerpt')
						)
					);
	add_filter('manage_edit-services_columns', 'services_edit_columns');
	function services_edit_columns($columns){
		$columns = array(
			'cb' 	=> '<input type="checkbox" />',
			'title' => 'services',
			'author'=> 'Author',
			'date'	=>'Date'
		);
		return $columns;
	}
}
?>