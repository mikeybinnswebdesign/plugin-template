<?php
/**
 * This section allows you to easily add a page to the CMS that is required for the website.
 *
 * An example of this would be a log in page. You can use the helper function provided below to easily add pages and even add sub-pages to those pages.
 *
 * @package %%PLUGIN_NAMESPACE%%
 */

namespace %%PLUGIN_NAMESPACE%%\add_custom_tax;

/* phpcs:ignore Squiz.PHP.CommentedOutCode.Found
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Taxonomies', 'Taxonomy General Name', '%%PLUGIN_NAME_SLUG%%' ),
		'singular_name'              => _x( 'Taxonomy', 'Taxonomy Singular Name', '%%PLUGIN_NAME_SLUG%%' ),
		'menu_name'                  => __( 'Taxonomy', '%%PLUGIN_NAME_SLUG%%' ),
		'all_items'                  => __( 'All Items', '%%PLUGIN_NAME_SLUG%%' ),
		'parent_item'                => __( 'Parent Item', '%%PLUGIN_NAME_SLUG%%' ),
		'parent_item_colon'          => __( 'Parent Item:', '%%PLUGIN_NAME_SLUG%%' ),
		'new_item_name'              => __( 'New Item Name', '%%PLUGIN_NAME_SLUG%%' ),
		'add_new_item'               => __( 'Add New Item', '%%PLUGIN_NAME_SLUG%%' ),
		'edit_item'                  => __( 'Edit Item', '%%PLUGIN_NAME_SLUG%%' ),
		'update_item'                => __( 'Update Item', '%%PLUGIN_NAME_SLUG%%' ),
		'view_item'                  => __( 'View Item', '%%PLUGIN_NAME_SLUG%%' ),
		'separate_items_with_commas' => __( 'Separate items with commas', '%%PLUGIN_NAME_SLUG%%' ),
		'add_or_remove_items'        => __( 'Add or remove items', '%%PLUGIN_NAME_SLUG%%' ),
		'choose_from_most_used'      => __( 'Choose from the most used', '%%PLUGIN_NAME_SLUG%%' ),
		'popular_items'              => __( 'Popular Items', '%%PLUGIN_NAME_SLUG%%' ),
		'search_items'               => __( 'Search Items', '%%PLUGIN_NAME_SLUG%%' ),
		'not_found'                  => __( 'Not Found', '%%PLUGIN_NAME_SLUG%%' ),
		'no_terms'                   => __( 'No items', '%%PLUGIN_NAME_SLUG%%' ),
		'items_list'                 => __( 'Items list', '%%PLUGIN_NAME_SLUG%%' ),
		'items_list_navigation'      => __( 'Items list navigation', '%%PLUGIN_NAME_SLUG%%' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'taxonomy', array( 'post' ), $args );

}
add_action( 'init', __NAMESPACE__ . '\\custom_taxonomy', 0 );
*/
