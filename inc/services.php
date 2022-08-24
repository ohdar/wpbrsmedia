<?php
// Register Custom Post Type Service
// Post Type Key: service
function create_service_cpt() {

	$labels = array(
		'name' => __( 'Services', 'Post Type General Name', 'wpbrsmedia' ),
		'singular_name' => __( 'Service', 'Post Type Singular Name', 'wpbrsmedia' ),
		'menu_name' => __( 'Services', 'wpbrsmedia' ),
		'name_admin_bar' => __( 'Service', 'wpbrsmedia' ),
		'archives' => __( 'Service Archives', 'wpbrsmedia' ),
		'attributes' => __( 'Service Attributes', 'wpbrsmedia' ),
		'parent_item_colon' => __( 'Parent Service:', 'wpbrsmedia' ),
		'all_items' => __( 'All Services', 'wpbrsmedia' ),
		'add_new_item' => __( 'Add New Service', 'wpbrsmedia' ),
		'add_new' => __( 'Add New', 'wpbrsmedia' ),
		'new_item' => __( 'New Service', 'wpbrsmedia' ),
		'edit_item' => __( 'Edit Service', 'wpbrsmedia' ),
		'update_item' => __( 'Update Service', 'wpbrsmedia' ),
		'view_item' => __( 'View Service', 'wpbrsmedia' ),
		'view_items' => __( 'View Services', 'wpbrsmedia' ),
		'search_items' => __( 'Search Service', 'wpbrsmedia' ),
		'not_found' => __( 'Not found', 'wpbrsmedia' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wpbrsmedia' ),
		'featured_image' => __( 'Featured Image', 'wpbrsmedia' ),
		'set_featured_image' => __( 'Set featured image', 'wpbrsmedia' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpbrsmedia' ),
		'use_featured_image' => __( 'Use as featured image', 'wpbrsmedia' ),
		'insert_into_item' => __( 'Insert into Service', 'wpbrsmedia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'wpbrsmedia' ),
		'items_list' => __( 'Services list', 'wpbrsmedia' ),
		'items_list_navigation' => __( 'Services list navigation', 'wpbrsmedia' ),
		'filter_items_list' => __( 'Filter Services list', 'wpbrsmedia' ),
	);
	$args = array(
		'label' => __( 'Service', 'wpbrsmedia' ),
		'description' => __( 'Custom Post Type for Services', 'wpbrsmedia' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-awards',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'post-formats', ),
		'taxonomies' => array('category', 'post_tag', ),
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
		'capability_type' => 'post',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'create_service_cpt', 0 );
