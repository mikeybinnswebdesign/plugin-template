<?php
/**
 * This section allows you to easily add a page to the CMS that is required for the website.
 *
 * An example of this would be a log in page. You can use the helper function provided below to easily add pages and even add sub-pages to those pages.
 *
 * @package %%PLUGIN_NAMESPACE%%
 */

namespace %%PLUGIN_NAMESPACE%%\add_required_page;

use WP_Post, WP_Error;

/* phpcs:ignore Squiz.PHP.CommentedOutCode.Found
Usage:

Example: Login page with only required options
$args = array(
	'name' => 'login',
	'title' => 'Login',
)
$login_page_id = add_required_page( $args );
or
$login_page_id = get_option( 'login_page' );

Example: My account page with all options
$args = array(
	'name' => 'my_account', // Required
	'title' => 'My acccount', // Required
	'template' => 'page-templates/my-account.php',
	'post_name' => 'my-account',
	'post_parent' => 0,
);
$my_account_page_id = add_required_page( $args );

Example: Addresses subpage of my account
$args = array(
	'name' => 'addresses',
	'title' => 'Addresses',
	'template' => 'page-templates/addresses.php',
	'post_name' => 'addresses',
	'post_parent' => $my_account_page_id,
);
$addresses_page_id = add_required_page( $args );
*/

/**
 * Add page labels in the CMS.
 * 
 * @param string[] $post_states An array of post display states.
 * @param WP_Post  $post The current post object.
 *
 * @return string[]
 */
function add_post_state( $post_states, $post ) {
	$post_id = $post->ID;
	/* phpcs:ignore Squiz.PHP.CommentedOutCode.Found
	Use this snippet to add a label to your required pages. This will help highlight that they are required by the theme.
	switch ( $post_id ) {
		case get_option( 'login_page' ):
			$post_states[] = 'Login Page';
			break;
	}
	*/
	return $post_states;
}
add_filter( 'display_post_states', 'add_post_state', 10, 2 );

/**
 * Add page helper function.
 *
 * @param array<mixed> $page_data_array An array of information to turn into a page.
 * 
 * @return int|WP_Error
 */
function add_required_page( array $page_data_array ) {
	if ( ! isset( $page_data_array['name'] ) || ! is_string( $page_data_array['name'] ) || empty( $page_data_array['name'] ) ) {
		return new WP_Error( 'name_missing', 'You must include a name to recall the page as.' );
	}
	if ( ! isset( $page_data_array['title'] ) || ! is_string( $page_data_array['title'] ) || empty( $page_data_array['title'] ) ) {
		return new WP_Error( 'title_missing', 'You must include a title use for a page.' );
	}
	$template = $page_data_array['template'] ?? false;
	$post_name = $page_data_array['post_name'] ?? false;
	$post_parent = (int) $page_data_array['post_parent'] ?? 0;
	
	$existing_page = get_page_by_title( $page_data_array['title'] );
	if ( ! is_null( $existing_page ) ) {
		return new WP_Error( 'page_already_exists', 'A page with this title already exists.' );
	} else {
		$post_array = array(
			'post_title' => $page_data_array['title'],
			'post_content' => '',
			'post_status' => 'publish',
			'post_type' => 'page',
			'post_parent' => $post_parent,
		);
		if ( $template ) {
			$post_array['template'] = $template;
		}
		if ( $post_name ) {
			$post_array['post_name'] = $post_name;
		}
		if ( $post_name ) {
			$post_array['post_name'] = $post_name;
		}
		$page_id = wp_insert_post( $post_array );
		if ( ! is_wp_error( $page_id ) && 0 !== $page_id ) {
			$was_page_saved = update_option( $page_data_array['name'] . '_page', $page_id );
			if ( ! $was_page_saved ) {
				wp_delete_post( $page_id, true );
				return new WP_Error( 'page_creation_failed', 'The page creation failed.' );
			} else {
				return $page_id;
			}
		} else {
			return new WP_Error( 'page_creation_failed', 'The page creation failed.' );
		}
	}
}
