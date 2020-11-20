<?php
/**
 * Template name: Posttypes
 */
?>

<?php
get_header();
?>
<main>
	<?php
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
	if ( $query->have_posts() ) {
		while( $query->have_posts() ) {
			$query->the_post();
			get_template_part( 'parts/list/tmpl', 'posttype');
		}
	} else {
		get_template_part( 'parts/content/tmpl', 'none' );
	}

	// Reset query
	wp_reset_postdata();
	?>
</main>
<?php
get_footer();
