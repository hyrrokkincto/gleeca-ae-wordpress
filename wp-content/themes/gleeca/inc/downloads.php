<?php
/**
 * Updates Module custom post type
 */
add_action('init', 'downloads_post_type_register');
function downloads_post_type_register() {
	register_post_type( 'downloads' ,
						array(
							'label' => 'Downloads',
							'singular_label' => 'Downloads',
							'public' => true,
							'show_ui' => true,
							//'menu_icon' => get_stylesheet_directory_uri() . '/images/testimonials-icon.png', 
							'capability_type' => 'post',
							'hierarchical' => false,
							'rewrite' => true,
							'show_in_nav_downloads' => true,
							'supports' => array('title','thumbnail' ,'editor')
						)
					);
	add_filter('manage_edit-downloads_columns', 'downloads_edit_columns');
	function downloads_edit_columns($columns){
		$columns = array(
			'cb' 	=> '<input type="checkbox" />',
			'title' => 'downloads',
			'author'=> 'Author',
			'date'	=>'Date'
		);
		return $columns;
	}
}
?>