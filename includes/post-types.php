<?php 

/**
 * Core functionality plugin
 *
 * Registers post types
 *
 *
 * @package   REPLACEME.com
 * @version   0.1
 * @author    Rich Staats <rich@secretstache.com>
 * @copyright Copyright (c) 2013, Secret Stache Media
 * @link      http://secretstache.com
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

function register_cpt_REPLACE_ME() {

/**
*
*	$labels = array(
* 		'name' => _x( 'Trails', 'trail' ),
*  		'singular_name' => _x( 'Trail', 'trail' ),
*  		'add_new' => _x( 'Add New', 'trail' ),
*  		'add_new_item' => _x( 'Add New Trail', 'trail' ),
*  		'edit_item' => _x( 'Edit Trail', 'trail' ),
*  		'new_item' => _x( 'New Trail', 'trail' ),
*  		'view_item' => _x( 'View Trail', 'trail' ),
*  		'search_items' => _x( 'Search Trails', 'trail' ),
* 		'not_found' => _x( 'No trails found', 'trail' ),
*  		'not_found_in_trash' => _x( 'No trails found in Trash', 'trail' ),
* 		'parent_item_colon' => _x( 'Parent Trail:', 'trail' ),
* 		'menu_name' => _x( 'Trails', 'trail' ),
*	);
*
*/
  
  $labels = array(
    'name' => _x( 'REPLACE_ME', 'REPLACE_ME' ),
    'singular_name' => _x( 'REPLACE_ME', 'REPLACE_ME' ),
    'add_new' => _x( 'Add New', 'REPLACE_ME' ),
    'add_new_item' => _x( 'Add New REPLACE_ME', 'REPLACE_ME' ),
    'edit_item' => _x( 'Edit REPLACE_ME', 'REPLACE_ME' ),
    'new_item' => _x( 'New REPLACE_ME', 'REPLACE_ME' ),
    'view_item' => _x( 'View REPLACE_ME', 'REPLACE_ME' ),
    'search_items' => _x( 'Search REPLACE_ME', 'REPLACE_ME' ),
    'not_found' => _x( 'No REPLACE_MEs found', 'REPLACE_ME' ),
    'not_found_in_trash' => _x( 'No REPLACE_MEs found in Trash', 'REPLACE_ME' ),
    'parent_item_colon' => _x( 'Parent REPLACE_ME:', 'REPLACE_ME' ),
    'menu_name' => _x( 'REPLACE_ME', 'REPLACE_ME' ),
  );

  $args = array(
    'labels' => $labels,
    'hierarchical' => false,
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 20,
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => array(
    	'slug' => '',
    	'with_front' => false,
    	'feeds' => true,
    	'pages' => true
    ),
	'capability_type' => 'post'
  );

  register_post_type( 'REPLACE_ME', $args );

}