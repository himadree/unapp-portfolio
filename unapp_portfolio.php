<?php
if( !defined( 'ABSPATH' ) ) exit();

/*
 * Plugin Name: Unapp Portfolio
 * Plugin URL: http://codepassenger.com/unapp
 * Description: This is unapp portfolio plugin for unapp theme only
 * Author: CodePassenger Team
 * Version: 1.0
 * Author URI: http://codepassenger.com/
 * */

// Register custom post for portfolio

add_action( 'init', 'unapp_portfolio_custom_post_init', 0 );
function unapp_portfolio_custom_post_init() {
	$labels = array(
		'name'               => _x( 'Portfolio', 'unapp' ),
		'singular_name'      => _x( 'Portfolio', 'unapp' ),
		'menu_name'          => _x( 'Portfolio', 'unapp' ),
		'name_admin_bar'     => _x( 'Portfolio', 'unapp' ),
		'add_new'            => _x( 'Add New', 'unapp' ),
		'add_new_item'       => __( 'Add New Portfolio', 'unapp' ),
		'new_item'           => __( 'New Portfolio', 'unapp' ),
		'edit_item'          => __( 'Edit Portfolio', 'unapp' ),
		'view_item'          => __( 'View Portfolio', 'unapp' ),
		'all_items'          => __( 'All Portfolios', 'unapp' ),
		'search_items'       => __( 'Search Portfolios', 'unapp' ),
		'parent_item_colon'  => __( 'Parent Portfolios:', 'unapp' ),
		'not_found'          => __( 'No Portfolio found.', 'unapp' ),
		'not_found_in_trash' => __( 'No Portfolios found in Trash.', 'unapp' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);

	register_post_type( 'portfolio', $args );

	$labels = array(
		'name'              => _x( 'Portfolio Categories', 'unapp' ),
		'singular_name'     => _x( 'Portfolio Categories', 'unapp' ),
		'search_items'      => __( 'Search Categories', 'unapp' ),
		'all_items'         => __( 'All Categories', 'unapp' ),
		'parent_item'       => __( 'Parent Categories', 'unapp' ),
		'parent_item_colon' => __( 'Parent Categories:', 'unapp' ),
		'edit_item'         => __( 'Edit Categories', 'unapp' ),
		'update_item'       => __( 'Update Categories', 'unapp' ),
		'add_new_item'      => __( 'Add New Categories', 'unapp' ),
		'new_item_name'     => __( 'New Categories', 'unapp' ),
		'menu_name'         => __( 'Categories', 'unapp' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'portfolio_category' ),
	);

	register_taxonomy( 'portfolio_category', array( 'portfolio' ), $args );

	$labels = array(
		'name'              => _x( 'Tags', 'unapp' ),
		'singular_name'     => _x( 'Tags', 'unapp' ),
		'search_items'      => __( 'Search Tags', 'unapp' ),
		'all_items'         => __( 'All Tags', 'unapp' ),
		'parent_item'       => __( 'Parent Tags', 'unapp' ),
		'parent_item_colon' => __( 'Parent Tags:', 'unapp' ),
		'edit_item'         => __( 'Edit Tags', 'unapp' ),
		'update_item'       => __( 'Update Tags', 'unapp' ),
		'add_new_item'      => __( 'Add New Tags', 'unapp' ),
		'new_item_name'     => __( 'New Tags', 'unapp' ),
		'menu_name'         => __( 'Tags', 'unapp' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'portfolio_tag' ),
	);

	register_taxonomy( 'portfolio_tag', array( 'portfolio' ), $args );
}