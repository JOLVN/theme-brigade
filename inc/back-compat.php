<?php
/**
 * Theme back compat functionality.
 */

/**
 * Switches to the default theme.
 */
function themename_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'themename_upgrade_notice' );
}
add_action( 'after_switch_theme', 'themename_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 */
function themename_upgrade_notice() {
	$message = sprintf('This theme requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', $GLOBALS['wp_version']);
	printf('<div class="error"><p>%s</p></div>', $message);
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 */
function themename_customize() {
	wp_die(sprintf('This theme requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', $GLOBALS['wp_version']), '', array('back_link' => true,));
}
add_action( 'load-customize.php', 'themename_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 */
function themename_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die(sprintf('This theme requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', $GLOBALS['wp_version']));
	}
}
add_action( 'template_redirect', 'themename_preview' );
