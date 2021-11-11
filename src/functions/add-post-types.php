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
		'name'                  => _x( 'Books', 'Post Type General Name', '%%PLUGIN_NAME_SLUG%%' ),
		'singular_name'         => _x( 'Book', 'Post Type Singular Name', '%%PLUGIN_NAME_SLUG%%' ),
		'menu_name'             => __( 'Post Types', '%%PLUGIN_NAME_SLUG%%' ),
		'name_admin_bar'        => __( 'Post Type', '%%PLUGIN_NAME_SLUG%%' ),
		'archives'              => __( 'Item Archives', '%%PLUGIN_NAME_SLUG%%' ),
		'attributes'            => __( 'Item Attributes', '%%PLUGIN_NAME_SLUG%%' ),
		'parent_item_colon'     => __( 'Parent Item:', '%%PLUGIN_NAME_SLUG%%' ),
		'all_items'             => __( 'All Items', '%%PLUGIN_NAME_SLUG%%' ),
		'add_new_item'          => __( 'Add New Item', '%%PLUGIN_NAME_SLUG%%' ),
		'add_new'               => __( 'Add New', '%%PLUGIN_NAME_SLUG%%' ),
		'new_item'              => __( 'New Item', '%%PLUGIN_NAME_SLUG%%' ),
		'edit_item'             => __( 'Edit Item', '%%PLUGIN_NAME_SLUG%%' ),
		'update_item'           => __( 'Update Item', '%%PLUGIN_NAME_SLUG%%' ),
		'view_item'             => __( 'View Item', '%%PLUGIN_NAME_SLUG%%' ),
		'view_items'            => __( 'View Items', '%%PLUGIN_NAME_SLUG%%' ),
		'search_items'          => __( 'Search Item', '%%PLUGIN_NAME_SLUG%%' ),
		'not_found'             => __( 'Not found', '%%PLUGIN_NAME_SLUG%%' ),
		'not_found_in_trash'    => __( 'Not found in Trash', '%%PLUGIN_NAME_SLUG%%' ),
		'featured_image'        => __( 'Featured Image', '%%PLUGIN_NAME_SLUG%%' ),
		'set_featured_image'    => __( 'Set featured image', '%%PLUGIN_NAME_SLUG%%' ),
		'remove_featured_image' => __( 'Remove featured image', '%%PLUGIN_NAME_SLUG%%' ),
		'use_featured_image'    => __( 'Use as featured image', '%%PLUGIN_NAME_SLUG%%' ),
		'insert_into_item'      => __( 'Insert into item', '%%PLUGIN_NAME_SLUG%%' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', '%%PLUGIN_NAME_SLUG%%' ),
		'items_list'            => __( 'Items list', '%%PLUGIN_NAME_SLUG%%' ),
		'items_list_navigation' => __( 'Items list navigation', '%%PLUGIN_NAME_SLUG%%' ),
		'filter_items_list'     => __( 'Filter items list', '%%PLUGIN_NAME_SLUG%%' ),
	);
	$args = array(
		'label'                 => __( 'Book', '%%PLUGIN_NAME_SLUG%%' ),
		'description'           => __( 'Post Type Description', '%%PLUGIN_NAME_SLUG%%' ),
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
