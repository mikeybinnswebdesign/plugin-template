<?php
/**
 * Add custom post types.
 *
 * @package %%PLUGIN_NAMESPACE%%
 */

namespace %%PLUGIN_NAMESPACE%%\add_post_types;

/* phpcs:ignore Squiz.PHP.CommentedOutCode.Found
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Books', 'Post Type General Name', 'fit-for-reuse' ),
		'singular_name'         => _x( 'Book', 'Post Type Singular Name', 'fit-for-reuse' ),
		'menu_name'             => __( 'Post Types', 'fit-for-reuse' ),
		'name_admin_bar'        => __( 'Post Type', 'fit-for-reuse' ),
		'archives'              => __( 'Item Archives', 'fit-for-reuse' ),
		'attributes'            => __( 'Item Attributes', 'fit-for-reuse' ),
		'parent_item_colon'     => __( 'Parent Item:', 'fit-for-reuse' ),
		'all_items'             => __( 'All Items', 'fit-for-reuse' ),
		'add_new_item'          => __( 'Add New Item', 'fit-for-reuse' ),
		'add_new'               => __( 'Add New', 'fit-for-reuse' ),
		'new_item'              => __( 'New Item', 'fit-for-reuse' ),
		'edit_item'             => __( 'Edit Item', 'fit-for-reuse' ),
		'update_item'           => __( 'Update Item', 'fit-for-reuse' ),
		'view_item'             => __( 'View Item', 'fit-for-reuse' ),
		'view_items'            => __( 'View Items', 'fit-for-reuse' ),
		'search_items'          => __( 'Search Item', 'fit-for-reuse' ),
		'not_found'             => __( 'Not found', 'fit-for-reuse' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'fit-for-reuse' ),
		'featured_image'        => __( 'Featured Image', 'fit-for-reuse' ),
		'set_featured_image'    => __( 'Set featured image', 'fit-for-reuse' ),
		'remove_featured_image' => __( 'Remove featured image', 'fit-for-reuse' ),
		'use_featured_image'    => __( 'Use as featured image', 'fit-for-reuse' ),
		'insert_into_item'      => __( 'Insert into item', 'fit-for-reuse' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'fit-for-reuse' ),
		'items_list'            => __( 'Items list', 'fit-for-reuse' ),
		'items_list_navigation' => __( 'Items list navigation', 'fit-for-reuse' ),
		'filter_items_list'     => __( 'Filter items list', 'fit-for-reuse' ),
	);
	$args = array(
		'label'                 => __( 'Book', 'fit-for-reuse' ),
		'description'           => __( 'Post Type Description', 'fit-for-reuse' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
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
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'books', $args );

}
add_action( 'init', __NAMESPACE__ . '\\custom_post_type', 0 );
*/
