<?php
/**
 * Template for search results
 */
?>

<?php
get_header();
?>
<main>
	<?php
	if ( have_posts() ) {
	?>
		<h1>Search Results</h1>
		<?php
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
