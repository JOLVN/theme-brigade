<?php
/**
 * Register custom taxonomy taxonomy
 */

// Labels (admin)
$labels_taxonomy = array(
	'name'              			=> _x( 'Taxonomys', 'taxonomy general name'),
	'singular_name'     			=> _x( 'Taxonomy', 'taxonomy singular name'),
	'search_items'      			=> __( 'Search a taxonomy'),
	'all_items'        				=> __( 'All taxonomys'),
	'edit_item'         			=> __( 'Edit the taxonomy'),
	'view_item'         			=> __( 'See the taxonomy'),
	'update_item'       			=> __( 'Update the taxonomy'),
	'add_new_item'     				=> __( 'Add a new taxonomy'),
	'new_item_name'     			=> __( 'New taxonomy'),
	'separate_items_with_commas'	=> __( 'Separate taxonomys with a coma'),
	'menu_name'                     => __( 'Taxonomy'),
	'popular_items'                 => __( 'Popular taxonomys'),
);

// Options
$args_taxonomy = array(
	'labels'            => $labels_taxonomy,
	'show_in_rest'      => true,
	'show_ui'           => true,
	'show_admin_column' => true,
	'query_var'         => true,
	'rewrite'           => array( 'slug' => 'taxonomy' ),
	'hierarchical'      => true,
);

// Register
register_taxonomy( 'taxonomy', array('posttype'), $args_taxonomy );
