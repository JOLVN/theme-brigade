<?php
/*
 * Menu walker
 */
class main_walker extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
		$title = $item->title;
		$permalink = $item->url;
		$target = $item->target;
		$rel = $target === '_blank' ? 'rel="noreferrer"' : '';

		$output .= '<li>';
		$output .= '<a href="' . $permalink . '" target="' . $target . '" ' . $rel . '>';
		$output .= $title;
		$output .= '</a>';
	}

	function end_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
		$output .= '</li>';
	}
}
