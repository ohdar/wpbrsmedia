<?php
// Register Custom Post Type AngelSoftware
// Post Type Key: CloudTechnology
// Register Custom Post Type
function create_cloudtechnology_cpt() {

	$labels = array(
		'name'                  => _x( 'Cloud Technologyies', 'Post Type General Name', 'wpbrsmedia' ),
		'singular_name'         => _x( 'Cloud Technology', 'Post Type Singular Name', 'wpbrsmedia' ),
		'menu_name'             => __( 'Cloud Technology', 'wpbrsmedia' ),
		'name_admin_bar'        => __( 'Cloud Technology', 'wpbrsmedia' ),
		'archives'              => __( 'Cloud Technology Archives', 'wpbrsmedia' ),
		'attributes'            => __( 'Cloud Technology Attributes', 'wpbrsmedia' ),
		'parent_item_colon'     => __( 'Parent Item:', 'wpbrsmedia' ),
		'all_items'             => __( 'Cloud Technology All Items', 'wpbrsmedia' ),
		'add_new_item'          => __( 'Cloud Technology Add New Item', 'wpbrsmedia' ),
		'add_new'               => __( 'Cloud Technology Add New', 'wpbrsmedia' ),
		'new_item'              => __( 'Cloud Technology New Item', 'wpbrsmedia' ),
		'edit_item'             => __( 'Cloud Technology Edit Item', 'wpbrsmedia' ),
		'update_item'           => __( 'Cloud Technology Update Item', 'wpbrsmedia' ),
		'view_item'             => __( 'Cloud Technology View Item', 'wpbrsmedia' ),
		'view_items'            => __( 'Cloud Technology View Items', 'wpbrsmedia' ),
		'search_items'          => __( 'Cloud Technology Search Item', 'wpbrsmedia' ),
		'not_found'             => __( 'Not found', 'wpbrsmedia' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wpbrsmedia' ),
		'featured_image'        => __( 'Featured Image', 'wpbrsmedia' ),
		'set_featured_image'    => __( 'Set featured image', 'wpbrsmedia' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpbrsmedia' ),
		'use_featured_image'    => __( 'Use as featured image', 'wpbrsmedia' ),
		'insert_into_item'      => __( 'Insert into item', 'wpbrsmedia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'wpbrsmedia' ),
		'items_list'            => __( 'Cloud Technology Items list', 'wpbrsmedia' ),
		'items_list_navigation' => __( 'Cloud Technology Items list navigation', 'wpbrsmedia' ),
		'filter_items_list'     => __( 'Cloud Technology Filter items list', 'wpbrsmedia' ),
	);
	$args = array(
		'label'                 => __( 'Cloud Technology', 'wpbrsmedia' ),
		'description'           => __( 'Cloud Technologyies', 'wpbrsmedia' ),
		'labels'                => $labels,
    'menu_icon' => 'dashicons-book-alt',
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
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