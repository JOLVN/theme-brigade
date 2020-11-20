<?php
/**
 * Template for post archive.
 */
?>

<?php
get_header();
?>
<main>
	<?php
	if ( have_posts() ) {
		the_archive_title( '<h1>', '</h1>' );
		the_archive_description();

		// Load posts loop.
		while ( have_posts() ) {
			the_post();
			get_template_part( 'parts/list/tmpl', 'default');
		}
	} else {
		get_template_part( 'parts/content/tmpl', 'none' );
	}
	?>
</main>

<?php
get_footer();
