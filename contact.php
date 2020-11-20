<?php

/**
 * Template name: Contact
 */
?>
<?php
get_header();
?>
<main>
	<?php
	if (have_posts()) {
		// Load post loop.
		while (have_posts()) {
			the_post();
			get_template_part('parts/page/tmpl', 'contact');
		}
	} else {
		get_template_part('parts/content/tmpl', 'none');
	}
	?>
</main>
<?php
get_footer();
?>
