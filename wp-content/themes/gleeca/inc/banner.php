<?php
/**
 * Updates Module custom post type
 */
add_action('init', 'banner_post_type_register');
function banner_post_type_register() {
	register_post_type( 'banner' ,
						array(
							'label' => 'Banner',
							'singular_label' => 'Banner',
							'public' => true,
							'show_ui' => true,
							//'menu_icon' => get_stylesheet_directory_uri() . '/images/testimonials-icon.png', 
							'capability_type' => 'post',
							'hierarchical' => false,
							'rewrite' => true,
							'show_in_nav_banner' => true,
							'supports' => array('title','thumbnail')
						)
					);
	add_filter('manage_edit-banner_columns', 'banner_edit_columns');
	function banner_edit_columns($columns){
		$columns = array(
			'cb' 	=> '<input type="checkbox" />',
			'title' => 'banner',
			'author'=> 'Author',
			'date'	=>'Date'
		);
		return $columns;
	}
}
?>