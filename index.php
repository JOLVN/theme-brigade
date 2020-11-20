<?php
/**
 * The main template file
 */
?>

<?php
get_header();
?>
<main>
	<?php
	if ( have_posts() ) {
		// Load post loop.
		while ( have_posts() ) {
			the_post();
			get_template_part( 'parts/content/tmpl', 'default');
		}
	} else {
		get_template_part( 'parts/content/tmpl', 'none' );
	}
	?>
</main>
<?php
get_footer();
