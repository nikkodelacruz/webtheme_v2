<?php
/**
 * Register Post Type
 */

function webtheme_post_type()
{
    // Change variables base on post type you are registering
    // $labels = array(
	// 	'name'               => __( 'Plural Name', 'webtheme' ),
	// 	'singular_name'      => __( 'Singular Name', 'webtheme' ),
	// 	'add_new'            => _x( 'Add New Singular Name', 'webtheme', 'webtheme' ),
	// 	'add_new_item'       => __( 'Add New Singular Name', 'webtheme' ),
	// 	'edit_item'          => __( 'Edit Singular Name', 'webtheme' ),
	// 	'new_item'           => __( 'New Singular Name', 'webtheme' ),
	// 	'view_item'          => __( 'View Singular Name', 'webtheme' ),
	// 	'search_items'       => __( 'Search Plural Name', 'webtheme' ),
	// 	'not_found'          => __( 'No Plural Name found', 'webtheme' ),
	// 	'not_found_in_trash' => __( 'No Plural Name found in Trash', 'webtheme' ),
	// 	'parent_item_colon'  => __( 'Parent Singular Name:', 'webtheme' ),
	// 	'menu_name'          => __( 'Plural Name', 'webtheme' ),
	// );

	// $args = array(
	// 	'labels'              => $labels,
	// 	'hierarchical'        => false,
	// 	'description'         => 'description',
	// 	'taxonomies'          => array(),
	// 	'public'              => true,
	// 	'show_ui'             => true,
	// 	'show_in_menu'        => true,
	// 	'show_in_admin_bar'   => true,
	// 	'menu_position'       => null,
	// 	'menu_icon'           => null,
	// 	'show_in_nav_menus'   => true,
	// 	'publicly_queryable'  => true,
	// 	'exclude_from_search' => false,
	// 	'has_archive'         => true,
	// 	'query_var'           => true,
	// 	'can_export'          => true,
	// 	'rewrite'             => true,
	// 	'capability_type'     => 'post',
	// 	'supports'            => array(
	// 		'title',
	// 		'editor',
	// 		'author',
	// 		'thumbnail',
	// 		'excerpt',
	// 		'custom-fields',
	// 		'trackbacks',
	// 		'comments',
	// 		'revisions',
	// 		'page-attributes',
	// 		'post-formats',
	// 	),
	// );
	// register_post_type( 'slug', $args );

}
add_action( 'init', 'webtheme_post_type' );


/**
 * Register Taxonomy
 */
function webtheme_taxonomy()
{
	// Taxonomy
	// $labels = array(
	// 	'name'                  => _x( 'Plural Name', 'Taxonomy plural name', 'webtheme' ),
	// 	'singular_name'         => _x( 'Singular Name', 'Taxonomy singular name', 'webtheme' ),
	// 	'search_items'          => __( 'Search Plural Name', 'webtheme' ),
	// 	'popular_items'         => __( 'Popular Plural Name', 'webtheme' ),
	// 	'all_items'             => __( 'All Plural Name', 'webtheme' ),
	// 	'parent_item'           => __( 'Parent Singular Name', 'webtheme' ),
	// 	'parent_item_colon'     => __( 'Parent Singular Name', 'webtheme' ),
	// 	'edit_item'             => __( 'Edit Singular Name', 'webtheme' ),
	// 	'update_item'           => __( 'Update Singular Name', 'webtheme' ),
	// 	'add_new_item'          => __( 'Add New Singular Name', 'webtheme' ),
	// 	'new_item_name'         => __( 'New Singular Name Name', 'webtheme' ),
	// 	'add_or_remove_items'   => __( 'Add or remove Plural Name', 'webtheme' ),
	// 	'choose_from_most_used' => __( 'Choose from most used Plural Name', 'webtheme' ),
	// 	'menu_name'             => __( 'Singular Name', 'webtheme' ),
	// );
	
	// $args = array(
	// 	'labels'            => $labels,
	// 	'public'            => true,
	// 	'show_in_nav_menus' => true,
	// 	'show_admin_column' => false,
	// 	'hierarchical'      => false,
	// 	'show_tagcloud'     => true,
	// 	'show_ui'           => true,
	// 	'query_var'         => true,
	// 	'rewrite'           => true,
	// 	'query_var'         => true,
	// 	'capabilities'      => array(),
	// );

	// register_taxonomy( 'taxonomy-slug', array( 'post' ), $args );

}
add_action( 'init', 'webtheme_taxonomy');