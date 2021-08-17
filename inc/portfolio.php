<?php
// Register Custom Post Type Portfolio
function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'Portfolios', 'Post Type General Name', 'wpbrsmedia' ),
		'singular_name' => _x( 'Portfolio', 'Post Type Singular Name', 'wpbrsmedia' ),
		'menu_name' => _x( 'Portfolios', 'Admin Menu text', 'wpbrsmedia' ),
		'name_admin_bar' => _x( 'Portfolio', 'Add New on Toolbar', 'wpbrsmedia' ),
		'archives' => __( 'Portfolio Archives', 'wpbrsmedia' ),
		'attributes' => __( 'Portfolio Attributes', 'wpbrsmedia' ),
		'parent_item_colon' => __( 'Parent Portfolio:', 'wpbrsmedia' ),
		'all_items' => __( 'All Portfolios', 'wpbrsmedia' ),
		'add_new_item' => __( 'Add New Portfolio', 'wpbrsmedia' ),
		'add_new' => __( 'Add New', 'wpbrsmedia' ),
		'new_item' => __( 'New Portfolio', 'wpbrsmedia' ),
		'edit_item' => __( 'Edit Portfolio', 'wpbrsmedia' ),
		'update_item' => __( 'Update Portfolio', 'wpbrsmedia' ),
		'view_item' => __( 'View Portfolio', 'wpbrsmedia' ),
		'view_items' => __( 'View Portfolios', 'wpbrsmedia' ),
		'search_items' => __( 'Search Portfolio', 'wpbrsmedia' ),
		'not_found' => __( 'Not found', 'wpbrsmedia' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wpbrsmedia' ),
		'featured_image' => __( 'Featured Image', 'wpbrsmedia' ),
		'set_featured_image' => __( 'Set featured image', 'wpbrsmedia' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpbrsmedia' ),
		'use_featured_image' => __( 'Use as featured image', 'wpbrsmedia' ),
		'insert_into_item' => __( 'Insert into Portfolio', 'wpbrsmedia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'wpbrsmedia' ),
		'items_list' => __( 'Portfolios list', 'wpbrsmedia' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'wpbrsmedia' ),
		'filter_items_list' => __( 'Filter Portfolios list', 'wpbrsmedia' ),
	);
	$args = array(
		'label' => __( 'Portfolio', 'wpbrsmedia' ),
		'description' => __( '', 'wpbrsmedia' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-art',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
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
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );