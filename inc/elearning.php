<?php
// Register Custom Post Type Elearning
// Post Type Key: elearning

function create_elearning_cpt() {

	$labels = array(
		'name' => _x( 'Elearnings', 'Post Type General Name', 'wpbrsmedia' ),
		'singular_name' => _x( 'Elearning', 'Post Type Singular Name', 'wpbrsmedia' ),
		'menu_name' => _x( 'Elearnings', 'Admin Menu text', 'wpbrsmedia' ),
		'name_admin_bar' => _x( 'Elearning', 'Add New on Toolbar', 'wpbrsmedia' ),
		'archives' => __( 'Elearning Archives', 'wpbrsmedia' ),
		'attributes' => __( 'Elearning Attributes', 'wpbrsmedia' ),
		'parent_item_colon' => __( 'Parent Elearning:', 'wpbrsmedia' ),
		'all_items' => __( 'All Elearnings', 'wpbrsmedia' ),
		'add_new_item' => __( 'Add New Elearning', 'wpbrsmedia' ),
		'add_new' => __( 'Add New', 'wpbrsmedia' ),
		'new_item' => __( 'New Elearning', 'wpbrsmedia' ),
		'edit_item' => __( 'Edit Elearning', 'wpbrsmedia' ),
		'update_item' => __( 'Update Elearning', 'wpbrsmedia' ),
		'view_item' => __( 'View Elearning', 'wpbrsmedia' ),
		'view_items' => __( 'View Elearnings', 'wpbrsmedia' ),
		'search_items' => __( 'Search Elearning', 'wpbrsmedia' ),
		'not_found' => __( 'Not found', 'wpbrsmedia' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wpbrsmedia' ),
		'featured_image' => __( 'Featured Image', 'wpbrsmedia' ),
		'set_featured_image' => __( 'Set featured image', 'wpbrsmedia' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpbrsmedia' ),
		'use_featured_image' => __( 'Use as featured image', 'wpbrsmedia' ),
		'insert_into_item' => __( 'Insert into Elearning', 'wpbrsmedia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Elearning', 'wpbrsmedia' ),
		'items_list' => __( 'Elearnings list', 'wpbrsmedia' ),
		'items_list_navigation' => __( 'Elearnings list navigation', 'wpbrsmedia' ),
		'filter_items_list' => __( 'Filter Elearnings list', 'wpbrsmedia' ),
	);
	$args = array(
		'label' => __( 'Elearning', 'wpbrsmedia' ),
		'description' => __( 'Elearing Portfolio', 'wpbrsmedia' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-book',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array('category', 'tags'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'page',
	);
	register_post_type( 'elearning', $args );

}
add_action( 'init', 'create_elearning_cpt', 0 );

?>