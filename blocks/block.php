<?php
/**
 * Register custom gutenberg block
 * @see https://www.advancedcustomfields.com/resources/acf_register_block_type/
 */

if( function_exists('acf_register_block_type') ) {
	// Options
	$args = array(
		'name'              => 'block',
		'title'             => __('Block'),
		'description'       => __('Un bloc de Block'),
		'render_template'   => 'parts/sections/section-block.php',
		'category'          => 'formatting',
		'icon'              => 'admin-comments',
		'align' 			=> 'wide',
		'keywords'			=> array(),
		'supports' 			=> array('align' => array( 'wide')),
		'post_types' 		=> array('posttype'),
	);

	acf_register_block_type($args);
}
