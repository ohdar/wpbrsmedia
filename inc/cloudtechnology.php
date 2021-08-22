<?php
// Register Custom Post Type AngelSoftware
// Post Type Key: Cloudtechnology

function create_cloudtechnology_cpt() {

	$labels = array(
		'name'                  => __( 'CloudTechnologyies', 'Post Type General Name', 'wpbrsmedia' ),
		'singular_name'         => __( 'CloudTechnology', 'Post Type Singular Name', 'wpbrsmedia' ),
		'menu_name'             => __( 'CloudTechnology', 'wpbrsmedia' ),
		'name_admin_bar'        => __( 'CloudTechnology', 'wpbrsmedia' ),
		'archives'              => __( 'CloudTechnology Archives', 'wpbrsmedia' ),
		'attributes'            => __( 'CloudTechnology Attributes', 'wpbrsmedia' ),
		'parent_item_colon'     => __( 'Parent CloudTechnology:', 'wpbrsmedia' ),
		'all_items'             => __( 'CloudTechnology All Items', 'wpbrsmedia' ),
		'add_new_item'          => __( 'CloudTechnology Add New Item', 'wpbrsmedia' ),
		'add_new'               => __( 'CloudTechnology Add New', 'wpbrsmedia' ),
		'new_item'              => __( 'CloudTechnology New Item', 'wpbrsmedia' ),
		'edit_item'             => __( 'CloudTechnology Edit Item', 'wpbrsmedia' ),
		'update_item'           => __( 'CloudTechnology Update Item', 'wpbrsmedia' ),
		'view_item'             => __( 'CloudTechnology View Item', 'wpbrsmedia' ),
		'view_items'            => __( 'CloudTechnology View Items', 'wpbrsmedia' ),
		'search_items'          => __( 'CloudTechnology Search Item', 'wpbrsmedia' ),
		'not_found'             => __( 'Not found', 'wpbrsmedia' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wpbrsmedia' ),
		'featured_image'        => __( 'Featured Image', 'wpbrsmedia' ),
		'set_featured_image'    => __( 'Set featured image', 'wpbrsmedia' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpbrsmedia' ),
		'use_featured_image'    => __( 'Use as featured image', 'wpbrsmedia' ),
		'insert_into_item'      => __( 'Insert into CloudTechnology', 'wpbrsmedia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this CloudTechnology', 'wpbrsmedia' ),
		'items_list'            => __( 'CloudTechnology Items list', 'wpbrsmedia' ),
		'items_list_navigation' => __( 'CloudTechnology Items list navigation', 'wpbrsmedia' ),
		'filter_items_list'     => __( 'Filter CloudTechnology list', 'wpbrsmedia' ),
	);
	$args = array(
		'label'                 => __( 'CloudTechnology', 'wpbrsmedia' ),
		'description'           => __( 'Cutom Post Type Cloud Technologyies', 'wpbrsmedia' ),
		'labels'                => $labels,
    'menu_icon'             => 'dashicons-book-alt',
		'supports'              => array( 'title', 'editor','excerpt', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
    'show_in_rest'          => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'cloudtechnology', $args );

}
add_action( 'init', 'create_cloudtechnology_cpt', 0 );