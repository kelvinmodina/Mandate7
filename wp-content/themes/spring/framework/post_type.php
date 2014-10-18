<?php

//Portfolio

add_action( 'init', 'codex_portfolio_init' );
/**
 * Register a portfolio post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_portfolio_init() {
	global $textdomain;
	
	$labels = array(
		'name'               => __( 'Portfolios', 'post type general name', $textdomain ),
		'singular_name'      => __( 'Portfolio', 'post type singular name', $textdomain ),
		'menu_name'          => __( 'Portfolios', 'admin menu', $textdomain ),
		'name_admin_bar'     => __( 'Portfolio', 'add new on admin bar', $textdomain ),
		'add_new'            => __( 'Add New', 'portfolio', $textdomain ),
		'add_new_item'       => __( 'Add New Portfolio', $textdomain ),
		'new_item'           => __( 'New Portfolio', $textdomain ),
		'edit_item'          => __( 'Edit Portfolio', $textdomain ),
		'view_item'          => __( 'View Portfolio', $textdomain ),
		'all_items'          => __( 'All Portfolios', $textdomain ),
		'search_items'       => __( 'Search Portfolios', $textdomain ),
		'parent_item_colon'  => __( 'Parent Portfolios:', $textdomain ),
		'not_found'          => __( 'No portfolios found.', $textdomain ),
		'not_found_in_trash' => __( 'No portfolios found in Trash.', $textdomain ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'menu_icon' 		 => 'dashicons-portfolio',
		'publicly_queryable' => true,
		'menu_position' 	 => 2,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail')
	);

	register_post_type( 'portfolio', $args );
}

// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_portfolio_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_portfolio_taxonomies() {
	global $textdomain;
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => __( 'Portfolio Categories', $textdomain ),
		'singular_name'     => __( 'Portfolio Category', $textdomain ),
		'search_items'      => __( 'Search Portfolio Categories',$textdomain ),
		'all_items'         => __( 'All Portfolio Categories',$textdomain ),
		'parent_item'       => __( 'Parent Portfolio Category',$textdomain ),
		'parent_item_colon' => __( 'Parent Portfolio Category:',$textdomain ),
		'edit_item'         => __( 'Edit Portfolio Category',$textdomain ),
		'update_item'       => __( 'Update Portfolio Category',$textdomain ),
		'add_new_item'      => __( 'Add New Portfolio Category',$textdomain ),
		'new_item_name'     => __( 'New Portfolio Category Name',$textdomain ),
		'menu_name'         => __( 'Portfolio Category' ,$textdomain),
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


}


add_action( 'init', 'codex_testimonial_init' );
/**
 * Register a Testimonial post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_testimonial_init() {
	global $textdomain;
	
	$labels = array(
		'name'               => __( 'Testimonials', 'post type general name', $textdomain ),
		'singular_name'      => __( 'Testimonial', 'post type singular name', $textdomain ),
		'menu_name'          => __( 'Testimonials', 'admin menu', $textdomain ),
		'name_admin_bar'     => __( 'Testimonial', 'add new on admin bar', $textdomain ),
		'add_new'            => __( 'Add New', 'Testimonial', $textdomain ),
		'add_new_item'       => __( 'Add New Testimonial', $textdomain ),
		'new_item'           => __( 'New Testimonial', $textdomain ),
		'edit_item'          => __( 'Edit Testimonial', $textdomain ),
		'view_item'          => __( 'View Testimonial', $textdomain ),
		'all_items'          => __( 'All Testimonial', $textdomain ),
		'search_items'       => __( 'Search Testimonial', $textdomain ),
		'parent_item_colon'  => __( 'Parent Testimonial:', $textdomain ),
		'not_found'          => __( 'No Testimonial found.', $textdomain ),
		'not_found_in_trash' => __( 'No Testimonial found in Trash.', $textdomain ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'menu_icon' 		 => 'dashicons-format-status',
		'publicly_queryable' => true,
		'menu_position' 	 => 2,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonial' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor')
	);

	register_post_type( 'testimonial', $args );
}




add_action( 'init', 'codex_client_init' );
/**
 * Register a Client post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_client_init() {
	global $textdomain;
	
	$labels = array(
		'name'               => __( 'Clients', 'post type general name', $textdomain ),
		'singular_name'      => __( 'Client', 'post type singular name', $textdomain ),
		'menu_name'          => __( 'Clients', 'admin menu', $textdomain ),
		'name_admin_bar'     => __( 'Client', 'add new on admin bar', $textdomain ),
		'add_new'            => __( 'Add New', 'Client', $textdomain ),
		'add_new_item'       => __( 'Add New Client', $textdomain ),
		'new_item'           => __( 'New Client', $textdomain ),
		'edit_item'          => __( 'Edit Client', $textdomain ),
		'view_item'          => __( 'View Client', $textdomain ),
		'all_items'          => __( 'All Client', $textdomain ),
		'search_items'       => __( 'Search Client', $textdomain ),
		'parent_item_colon'  => __( 'Parent Client:', $textdomain ),
		'not_found'          => __( 'No Client found.', $textdomain ),
		'not_found_in_trash' => __( 'No Client found in Trash.', $textdomain ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'menu_icon' 		 => 'dashicons-businessman',
		'publicly_queryable' => true,
		'menu_position' 	 => 2,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'client' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title')
	);

	register_post_type( 'client', $args );
}


add_action( 'init', 'codex_service_init' );
/**
 * Register a Service post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_service_init() {
	
	
	$labels = array(
		'name'               => __( 'About', 'post type general name', 'element' ),
		'singular_name'      => __( 'About', 'post type singular name', 'element' ),
		'menu_name'          => __( 'About', 'admin menu', 'element' ),
		'name_admin_bar'     => __( 'About', 'add new on admin bar', 'element' ),
		'add_new'            => __( 'Add New', 'About', 'element' ),
		'add_new_item'       => __( 'Add New About', 'element' ),
		'new_item'           => __( 'New About', 'element' ),
		'edit_item'          => __( 'Edit About', 'element' ),
		'view_item'          => __( 'View About', 'element' ),
		'all_items'          => __( 'All About', 'element' ),
		'search_items'       => __( 'Search About', 'element' ),
		'parent_item_colon'  => __( 'Parent About:', 'element' ),
		'not_found'          => __( 'No About found.', 'element' ),
		'not_found_in_trash' => __( 'No About found in Trash.', 'element' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'menu_icon' 		 => 'dashicons-sos',
		'publicly_queryable' => true,
		'menu_position' 	 => 2,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'qk_service' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor')
	);

	register_post_type( 'qk_service', $args );
}

add_action( 'init', 'codex_nk_service_init' );
/**
 * Register a Service post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_nk_service_init() {
	
	
	$labels = array(
		'name'               => __( 'Services', 'post type general name', 'element' ),
		'singular_name'      => __( 'Service', 'post type singular name', 'element' ),
		'menu_name'          => __( 'Our Services', 'admin menu', 'element' ),
		'name_admin_bar'     => __( 'Service', 'add new on admin bar', 'element' ),
		'add_new'            => __( 'Add New', 'Service', 'element' ),
		'add_new_item'       => __( 'Add New Service', 'element' ),
		'new_item'           => __( 'New Service', 'element' ),
		'edit_item'          => __( 'Edit Service', 'element' ),
		'view_item'          => __( 'View Service', 'element' ),
		'all_items'          => __( 'All Services', 'element' ),
		'search_items'       => __( 'Search Services', 'element' ),
		'parent_item_colon'  => __( 'Parent Service:', 'element' ),
		'not_found'          => __( 'No Services found.', 'element' ),
		'not_found_in_trash' => __( 'No Services found in Trash.', 'element' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'menu_icon' 		 => 'dashicons-megaphone',
		'publicly_queryable' => true,
		'menu_position' 	 => 2,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'nk_service' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor')
	);

	register_post_type( 'nk_service', $args );
}
?>