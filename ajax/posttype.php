<?php
/**
 * Custom post type AJAX call
 */
if (!function_exists('themename_ajax_load_posttype')):
	function themename_ajax_load_posttype(){
		// Vars
		$post_type = 'posttype';
		$paged = (isset($_POST['paged'])) ? $_POST['paged'] : 1;
		$posts_per_page = 10;

		// Query
		$query = new WP_Query(array(
			'post_type'			=> $post_type,
			'posts_per_page'	=> $posts_per_page,
			'paged' 			=> $paged,
			'post_status'    	=> 'publish',
		));

		// Output
		$out = '';
		if ($query -> have_posts()) {
			while ($query->have_posts()) {
				$query->the_post();
				$out .= get_template_part( 'parts/list/tmpl', 'posttype');
			}
		}
		wp_reset_postdata();

		// Return output
		die($out);
	}
endif;

/**
 * @todo	Important: keep wp_ajax_load_${post type name} name !
 */
add_action( 'wp_ajax_load_posttype', 'themename_ajax_load_posttype' );
add_action( 'wp_ajax_nopriv_load_posttype', 'themename_ajax_load_posttype' );
