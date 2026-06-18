<?php
/**
 * Updates Module custom post type
 */
add_action('init', 'foodmenu_post_type_register');
function foodmenu_post_type_register() {
	register_post_type( 'foodmenu' ,
						array(
							'label' => 'Food Menu',
							'singular_label' => 'Food Menu',
							'public' => true,
							'show_ui' => true,
							//'menu_icon' => get_stylesheet_directory_uri() . '/images/testimonials-icon.png', 
							'capability_type' => 'post',
							'hierarchical' => false,
							'rewrite' => true,
							'show_in_nav_foodmenu' => true,
							'supports' => array('title','thumbnail' ,'editor')
						)
					);
	add_filter('manage_edit-foodmenu_columns', 'foodmenu_edit_columns');
	function foodmenu_edit_columns($columns){
		$columns = array(
			'cb' 	=> '<input type="checkbox" />',
			'title' => 'foodmenu',
			'author'=> 'Author',
			'date'	=>'Date'
		);
		return $columns;
	}
}
?>