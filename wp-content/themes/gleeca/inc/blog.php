<?php
/**
 * Updates Module custom post type
 */
add_action('init', 'blog_post_type_register');
function blog_post_type_register() {
	register_post_type( 'blog' ,
						array(
							'label' => 'Blog',
							'singular_label' => 'Blog',
							'public' => true,
							'show_ui' => true,
							//'menu_icon' => get_stylesheet_directory_uri() . '/images/testimonials-icon.png', 
							'capability_type' => 'post',
							'hierarchical' => false,
							'rewrite' => true,
							'show_in_nav_blog' => true,
							'supports' => array('title','thumbnail' ,'editor','excerpt')
						)
					);
	add_filter('manage_edit-blog_columns', 'blog_edit_columns');
	function blog_edit_columns($columns){
		$columns = array(
			'cb' 	=> '<input type="checkbox" />',
			'title' => 'blog',
			'author'=> 'Author',
			'date'	=>'Date'
		);
		return $columns;
	}
}
?>