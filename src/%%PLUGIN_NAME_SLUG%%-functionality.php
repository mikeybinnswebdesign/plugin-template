<?php
/**
 * %%PLUGIN_NAME%% functionality
 *
 * @package           %%PLUGIN_NAMESPACE%%
 * @author            %%AUTHOR%%
 * @copyright         2021 %%AUTHOR%%
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       %%PLUGIN_NAME%% functionality
 * Description:       Adds common site functionality such as post types so new themes can be written without affecting the site.
 * Version:           1.0.0
 * Requires at least: %%MIN_WP_VERSION%%
 * Requires PHP:      %%MIN_PHP_VERSION%%
 * Author:            %%AUTHOR%%
 * Author URI:        %%AUTHOR_URL%%
 * Text Domain:       %%PLUGIN_NAME_SLUG%%
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Add custom post types.
 */
require_once 'functions/add-post-types.php';

/**
 * Add required pages.
 */
require_once 'functions/add-required-pages.php';

/**
 * Add custom categories.
 */
require_once 'functions/register-custom-taxonomies.php';
