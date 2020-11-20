<?php
/**
 * Register custom post type posttype
 */

// Labels (admin)
$labels = array(
	'name'                      => _x( 'Posttypes', 'Post Type General Name'),
	'singular_name'             => _x( 'Posttype', 'Post Type Singular Name'),
	'menu_name'                 => __( 'Posttypes'),
	'all_items'                 => __( 'All posttypes'),
	'view_items'                => __( 'See all posttypes'),
	'view_item'                 => __( 'See the posttype'),
	'add_new_item'              => __( 'Add a posttype'),
	'add_new'                   => __( 'Add'),
	'edit_item'                 => __( 'Edit the posttype'),
	'update_item'               => __( 'Update the posttype'),
	'search_items'              => __( 'Search a posttype'),
	'not_found'                 => __( 'No posttype found'),
	'not_found_in_trash'        => __( 'No posttype found'),
	'new_item'                  => __( 'New posttype'),
	'item_published'            => __('Posttype published'),
	'item_reverted_to_draft'    => __('Posttype set as a draft'),
	'item_updated'              => __('Posttype updated'),
);

// Options
$args = array(
'label'               => __( 'Posttypes'),
'description'         => __( 'All posttypes'),
'labels'              => $labels,
'menu_icon'           => '',
'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
'show_in_rest'        => true,
'public'              => true,
'has_archive'         => true,
'show_ui'             => true,
'menu_position'       => 1,
'rewrite'			  => array( 'slug' => 'posttype'),
);

// Register
register_post_type( 'posttype', $args );
