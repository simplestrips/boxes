<?php

/*
* @package boxes
*/

/*
Plugin Name: Boxes
Plugin URI: https://simplestrips.com/
Description: Exposes the products api.
Version: 0.0.1
Author: Steve Berry
Author URI: https://simplestrips.com/
License: GPLv2 or later
Text Domain: boxes
*/

/*
This program is NOT free software; you can NOT redistribute it and/or modify it under the digital software intelectual propety terms of the Simple Strips, LLC. as published by Simple Strips, LLC.; either version 2 of the License, or (at your option) any later version. This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY ANY WARRANTY of FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details. You should have received a copy of the digital software intelectual propety terms of the Simple Strips, LLC. along with this program; if not, write to Simple Strips, LLC. Columbus, CA 43004, USA. Copyright 2005-2018 Simple Strips, LLC.
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

// -------------------------------------------
// CUSTOM POST TYPE: "Boxes"
// TThe registration of the custom post type "boxes".
// -------------------------------------------
add_action( 'init', 'boxes_cpt' );

function boxes_cpt() {

  // VARIABLE: LABELS = ARRAY
  $box_labels = array(
    'name' => 'boxes',
    'singular_name' => 'Box',
    'add_new' => 'Add Box',
    'all_items' => 'All Boxes',
    'add_new_item' => 'Add Box',
    'edit_item' => 'Edit Box',
    'new_item' => 'New Box',
    'view_item' => 'View Box',
    'search_item' => 'Search Boxes',
    'not_found' => 'No Boxes Found',
    'not_found_in_trash' => 'No Boxes Found In Trash',
    'parent_item_colon' => 'Primary Box',
    'menu_name' => 'boxes'
  );

  // VARIABLE: ARGS = ARRAY
  $box_args = array(
    'labels' => $box_labels,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'rewrite' => array( 'slug', 'box' ),
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array(
      'title',
      'author',
      'editor',
      'excerpt',
      'thumbnail',
      'revisions',
      'custom-fields',
      'comments'
    ),
    'taxonomies' => array('category', 'post_tag'),
    'menu_position' => 5,
    'exclude_from_search' => false
  );

  // HOOK
  register_post_type( 'boxes', $box_args );

  // FLUSH REWRITE.
  flush_rewrite_rules();

}





// -------------------------------------------
// EXTEND CUSTOM META
// The extended custom meta of the box custom post type exposed in the WP API.
// -------------------------------------------
add_action( 'rest_api_init', 'register_purchase_meta' );

function register_purchase_meta() {

	$object_type = 'post';

	// 'expiration'
	$args_box_expiration = array(
		'type' => 'string',
		'description' => 'Expiration date of the box.',
		'single' => true,
		'show_in_rest' => true,
	);
	register_meta( $object_type, 'box_expiration', $args_box_expiration );

	// 'manufacture'
	$args_box_manufacture = array(
		'type' => 'string',
		'description' => 'Manufacture of the box.',
		'single' => true,
		'show_in_rest' => true,
	);
	register_meta( $object_type, 'box_manufacture', $args_box_manufacture );

	// 'brand'
	$args_box_brand = array(
		'type' => 'string',
		'description' => 'Brand of the box.',
		'single' => true,
		'show_in_rest' => true,
	);
	register_meta( $object_type, 'box_brand', $args_box_brand );

	// 'type'
	$args_box_type = array(
		'type' => 'string',
		'description' => 'Type of the box.',
		'single' => true,
		'show_in_rest' => true,
	);
	register_meta( $object_type, 'box_type', $args_box_type );

	// 'type'
	$args_box_type = array(
		'type' => 'string',
		'description' => 'Type of the box.',
		'single' => true,
		'show_in_rest' => true,
	);
	register_meta( $object_type, 'box_type', $args_box_type );

	// 'quality'
	$args_box_quality = array(
		'type' => 'string',
		'description' => 'Quality of the box.',
		'single' => true,
		'show_in_rest' => true,
	);
	register_meta( $object_type, 'box_quality', $args_box_quality );

	// 'quantity'
	$args_box_quantity = array(
		'type' => 'string',
		'description' => 'Quantity of strips in the box.',
		'single' => true,
		'show_in_rest' => true,
	);
	register_meta( $object_type, 'box_quantity', $args_box_quantity );

}
