<?php
/**
 * Add REST API endpoints
 * 
 * @package %%PLUGIN_NAMESPACE%%
 */

namespace %%PLUGIN_NAMESPACE%%\REST;

/**
 * Register REST API endpoints
 */
function register_rest_routes() {
	/* phpcs:ignore Squiz.PHP.CommentedOutCode.Found
	register_rest_route(
		'%%PLUGIN_NAME_SLUG%%/v1',
		'/the_endpoint/(?P<post_id>\d+)',
		array(
			'methods' => 'GET',
			'callback' => 'the_callback',
			'permission_callback' => '__return_true',
		)
	);
	*/
}
add_action( 'rest_api_init', __NAMESPACE__ . '\\register_rest_routes' );
