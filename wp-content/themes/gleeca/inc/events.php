<?php
/**
 * Updates Module custom post type
 */
add_action('init', 'events_post_type_register');
function events_post_type_register() {
	register_post_type( 'events' ,
						array(
							'label' => 'Events',
							'singular_label' => 'Events',
							'public' => true,
							'show_ui' => true,
							//'menu_icon' => get_stylesheet_directory_uri() . '/images/testimonials-icon.png', 
							'capability_type' => 'post',
							'hierarchical' => false,
							'rewrite' => true,
							'show_in_nav_events' => true,
							'supports' => array('title','thumbnail' ,'editor','excerpt')
						)
					);
	add_filter('manage_edit-events_columns', 'events_edit_columns');
	function events_edit_columns($columns){
		$columns = array(
			'cb' 	=> '<input type="checkbox" />',
			'title' => 'events',
			'author'=> 'Author',
			'date'	=>'Date'
		);
		return $columns;
	}
}
?>