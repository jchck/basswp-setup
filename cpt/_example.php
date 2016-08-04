<?php

namespace basswp\setup\cpt\example;

/**
* Registers a new post type
* @uses $wp_post_types Inserts new post type object into the list
*
* @param string  Post type key, must not exceed 20 characters
* @param array|string  See optional args description above.
* @return object|WP_Error the registered post type object, or an error object
*/
function example() {

	$labels = array(
		'name'                => __( 'Example Post Type', 'text-domain' ),
		'singular_name'       => __( 'Example Post Type', 'text-domain' ),
		'add_new'             => _x( 'Add New Example Post Type', 'text-domain', 'text-domain' ),
		'add_new_item'        => __( 'Add New Example Post Type', 'text-domain' ),
		'edit_item'           => __( 'Edit Example Post Type', 'text-domain' ),
		'new_item'            => __( 'New Example Post Type', 'text-domain' ),
		'view_item'           => __( 'View Example Post Type', 'text-domain' ),
		'search_items'        => __( 'Search Example Post Type', 'text-domain' ),
		'not_found'           => __( 'No Example Post Type found', 'text-domain' ),
		'not_found_in_trash'  => __( 'No Example Post Type found in Trash', 'text-domain' ),
		'parent_item_colon'   => __( 'Parent Example Post Type:', 'text-domain' ),
		'menu_name'           => __( 'Example Post Type', 'text-domain' ),
	);

	$args = array(
		'labels'                   => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'editor', 'author', 'thumbnail',
			'excerpt','custom-fields', 'trackbacks', 'comments',
			'revisions', 'page-attributes', 'post-formats'
			)
	);

	register_post_type( 'slug', $args );
}

add_action( 'init',  __NAMESPACE__ . '\\example' );
