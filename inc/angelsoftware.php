<?php
// Register Custom Post Type AngelSoftware
// Post Type Key: Angelsoftware
function create_angelsoftware_cpt() {
	
	$labels = array(
		'name' 									=> __( 'Angelsoftwares', 'Post Type General Name', 'wpbrsmedia' ),
		'singular_name' 						=> __( 'Angelsoftware', 'Post Type Singular Name', 'wpbrsmedia' ),
		'menu_name' 							=> __( 'Angelsoftwares', 'Admin Menu text', 'wpbrsmedia' ),
		'name_admin_bar' 						=> __( 'Angelsoftware', 'Add New on Toolbar', 'wpbrsmedia' ),
		'archives' 								=> __( 'Angelsoftware Archives', 'wpbrsmedia' ),
		'attributes' 							=> __( 'Angelsoftware Attributes', 'wpbrsmedia' ),
		'parent_item_colon' 					=> __( 'Parent Angelsoftware:', 'wpbrsmedia' ),
		'all_items' 							=> __( 'All Angelsoftwares', 'wpbrsmedia' ),
		'add_new_item' 							=> __( 'Add New Angelsoftware', 'wpbrsmedia' ),
		'add_new' 								=> __( 'Add New', 'wpbrsmedia' ),
		'new_item' 								=> __( 'New Angelsoftware', 'wpbrsmedia' ),
		'edit_item' 							=> __( 'Edit Angelsoftware', 'wpbrsmedia' ),
		'update_item' 							=> __( 'Update Angelsoftware', 'wpbrsmedia' ),
		'view_item' 							=> __( 'View Angelsoftware', 'wpbrsmedia' ),
		'view_items' 							=> __( 'View Angelsoftwares', 'wpbrsmedia' ),
		'search_items' 							=> __( 'Search Angelsoftware', 'wpbrsmedia' ),
		'not_found' 							=> __( 'Not found', 'wpbrsmedia' ),
		'not_found_in_trash' 					=> __( 'Not found in Trash', 'wpbrsmedia' ),
		'featured_image' 						=> __( 'Featured Image', 'wpbrsmedia' ),
		'set_featured_image' 					=> __( 'Set featured image', 'wpbrsmedia' ),
		'remove_featured_image' 				=> __( 'Remove featured image', 'wpbrsmedia' ),
		'use_featured_image' 					=> __( 'Use as featured image', 'wpbrsmedia' ),
		'insert_into_item' 						=> __( 'Insert into Angelsoftware', 'wpbrsmedia' ),
		'uploaded_to_this_item' 				=> __( 'Uploaded to this Angelsoftware', 'wpbrsmedia' ),
		'items_list' 							=> __( 'Angelsoftwares list', 'wpbrsmedia' ),
		'items_list_navigation'					=> __( 'Angelsoftwares list navigation', 'wpbrsmedia' ),
		'filter_items_list' 					=> __( 'Filter Angelsoftwares list', 'wpbrsmedia' ),
	);
	$args = array(
		'label' 								=> __( 'Angelsoftware', 'wpbrsmedia' ),
		'description' 							=> __( 'Custom Post Type Angel Software', 'wpbrsmedia' ),
		'labels' 								=> $labels,
		'menu_icon' 							=> 'dashicons-book-alt',
		'supports' 								=> array( 'title', 'editor','excerpt', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies' 							=> array('category', 'post_tag'),
		'public' 								=> true,
		'show_ui' 								=> true,
		'show_in_menu' 							=> true,
		'menu_position' 						=> 5,
		'show_in_admin_bar' 					=> true,
		'show_in_nav_menus' 					=> true,
		'can_export' 							=> true,
		'has_archive' 							=> true,
		'hierarchical' 							=> false,
		'exclude_from_search' 					=> false,
		'show_in_rest' 							=> true,
		'publicly_queryable' 					=> true,
		'capability_type' 						=> 'post',
	);
	register_post_type( 'angelsoftware', $args );
}
add_action( 'init', 'create_angelsoftware_cpt', 0 );
