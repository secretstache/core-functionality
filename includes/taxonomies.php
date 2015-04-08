<?php
/**
 * Core functionality plugin
 *
 * Registers custom taxonomies
 *
 *
 * @package   REPLACEME.com
 * @version   0.1
 * @author    Rich Staats <rich@secretstache.com>
 * @copyright Copyright (c) 2013, Secret Stache Media
 * @link      http://secretstache.com
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

function register_taxonomy_REPLACE_ME() {

/**
*
*	 $labels = array(
*		'name' => _x( 'Event Tags', 'event_tag' ),
*		'singular_name' => _x( 'Event Tag', 'event_tag' ),
*		'search_items' => _x( 'Search Event Tags', 'event_tag' ),
*		'popular_items' => _x( 'Popular Event Tags', 'event_tag' ),
*		'all_items' => _x( 'All Event Tags', 'event_tag' ),
*		'parent_item' => _x( 'Parent Event Tag', 'event_tag' ),
*		'parent_item_colon' => _x( 'Parent Event Tag:', 'event_tag' ),
*		'edit_item' => _x( 'Edit Event Tag', 'event_tag' ),
*		'update_item' => _x( 'Update Event Tag', 'event_tag' ),
*		'add_new_item' => _x( 'Add New Event Tag', 'event_tag' ),
*		'new_item_name' => _x( 'New Event Tag', 'event_tag' ),
*		'separate_items_with_commas' => _x( 'Separate Event tags with commas', 'event_tag' ),
*		'add_or_remove_items' => _x( 'Add or remove Event Tags', 'event_tag' ),
*		'choose_from_most_used' => _x( 'Choose from most used Event Tags', 'event_tag' ),
*		'menu_name' => _x( 'Event Tags', 'event_tag' ),
*	);
*
*/

  $labels = array(
    'name' => _x( 'REPLACE_ME', 'REPLACE_ME' ),
    'singular_name' => _x( 'REPLACE_ME', 'REPLACE_ME' ),
    'search_items' => _x( 'Search REPLACE_ME', 'REPLACE_ME' ),
    'popular_items' => _x( 'Popular REPLACE_ME', 'REPLACE_ME' ),
    'all_items' => _x( 'All REPLACE_ME', 'REPLACE_ME' ),
    'parent_item' => _x( 'Parent REPLACE_ME', 'REPLACE_ME' ),
    'parent_item_colon' => _x( 'Parent REPLACE_ME:', 'REPLACE_ME' ),
    'edit_item' => _x( 'Edit REPLACE_ME', 'REPLACE_ME' ),
    'update_item' => _x( 'Update REPLACE_ME', 'REPLACE_ME' ),
    'add_new_item' => _x( 'Add New REPLACE_ME', 'REPLACE_ME' ),
    'new_item_name' => _x( 'New REPLACE_ME', 'REPLACE_ME' ),
    'separate_items_with_commas' => _x( 'Separate Event tags with commas', 'REPLACE_ME' ),
    'add_or_remove_items' => _x( 'Add or remove REPLACE_ME', 'REPLACE_ME' ),
    'choose_from_most_used' => _x( 'Choose from most used REPLACE_ME', 'REPLACE_ME' ),
    'menu_name' => _x( 'REPLACE_ME', 'REPLACE_ME' ),
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_in_nav_menus' => true,
    'show_ui' => true,
    'show_tagcloud' => false,
    'hierarchical' => false,

    'rewrite' => array(
      'slug' => '',
      'with_front' => true,
      'hierarchical' => true
    ),
    'query_var' => true
  );

  register_taxonomy( 'REPLACE_ME', array('REPLACE_ME'), $args );
}