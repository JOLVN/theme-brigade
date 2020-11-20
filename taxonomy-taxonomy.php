<?php
/**
 * Template for taxonomy taxonomy archive.
 */
?>

<?php
$term = $wp_query->get_queried_object();
get_header();
?>
<main>
	<h1><?php echo  $term->name; ?></h1>
	<?php
	// Vars
	$post_type = 'posttype';
	$paged = (isset($_POST['paged'])) ? $_POST['paged'] : 1;
	$posts_per_page = 10;

	// Query
	$query = new WP_Query(array(
		'post_type'			=> 'posttype',
		'posts_per_page'	=> $posts_per_page,
		'paged' 			=> $paged,
		'post_status'    	=> 'publish',
		'tax_query'         => array(
			array (
				'taxonomy'  => 'taxonomy',
				'field'     => 'term_id',
				'terms'     => $term->term_id,
			)
		),
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

