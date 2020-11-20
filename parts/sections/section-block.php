<?php

/**
 * "Block" Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonial-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Assume there's an ACF "text" field for "Block" block
$text = get_field('text') ?: 'Default text';
?>

<section class="block" id="<?php echo esc_attr($id); ?>">
	<p><?php echo $text; ?></p>
</section>
