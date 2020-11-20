<?php
/**
 * Theme functions and definitions.
 *
 * @author		OCITOCINE
 * @version 	2.1.0
 * @todo		Search and replace "themaname" by thame name
 */

/******************************
 * Compat
 ******************************/

/**
 * Theme only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

/******************************
 * Defaults settings
 ******************************/

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
if (!function_exists('themename_setup')):
	function themename_setup()
	{
		// Make theme available for translation. Translations can be filed in the /languages/ directory.
		load_theme_textdomain('themename', get_template_directory() . '/languages');

		// Let WordPress manage the document title.
		add_theme_support('title-tag');

		// Switch default core markup for search form to output valid HTML5.
		add_theme_support('html5', array('search-form'));

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Use front-end style for gutenberg, you can switch it with editor-style.css
		add_editor_style( 'style.css' );
	}
endif;
add_action('after_setup_theme', 'themename_setup');

/******************************
 * Scripts and styles
 ******************************/

/**
 * Register scripts and styles.
 * @todo	Add CSS and scripts if needed
 * @todo	Add window.var if needed
 */
if (!function_exists('themename_scripts')):
	function themename_scripts()
	{
		// Theme stylesheet
		wp_enqueue_style('style', get_stylesheet_uri());

		// Theme javascripts
		wp_enqueue_script('main-script', get_template_directory_uri() . '/javascript/main.js', [], false, true);

		// Add as many window.var as needed
		wp_localize_script( 'main-script', 'ajaxurl', admin_url( 'admin-ajax.php' ));
	}
endif;
add_action('wp_enqueue_scripts', 'themename_scripts');

/******************************
 * Custom post types / Taxonomies
 ******************************/

/**
 * Register custom post type
 * @todo	Comment if you don't need custom post type
 * @todo	Add posttype
 */
if (!function_exists('themename_custom_post_type')) :
	function themename_custom_post_type() {
		// Duplicate this line as many custom post type needed
		require_once( 'posts/posttype.php' );
	}
endif;
add_action( 'init', 'themename_custom_post_type', 0 );


/**
 * Redirect custom post type archives if you prefer to use pages with template
 * @todo	Comment if you want to use archive pages
 * @todo	Add posttype you want to ignore archive pages
 */
// if (!function_exists('themename_redirect_custom_post_type')) :
// 	function themename_redirect_custom_post_type() {
// 		// Add all posttype you want to ignore archive page
// 		if( is_post_type_archive(array( 'posttype' ))) {
// 			wp_redirect( home_url(), 301 );
// 			exit();
// 		}
// 	}
// endif;
// add_action( 'template_redirect', 'themename_redirect_custom_post_type' );

/**
 * Register custom taxonomies
 * @todo	Comment if you don't need custom taxonomies
 * @todo	Add taxonomies
 */
if (!function_exists('themename_custom_taxonomy')) :
	function themename_custom_taxonomy() {
		// Duplicate this line as many custom taxonomy needed
		require_once( 'taxonomies/taxonomy.php' );
	}
endif;
add_action( 'init', 'themename_custom_taxonomy', 0 );

/******************************
 * Menus
 ******************************/

/**
 * Register custom menus walkers
 * @todo	Comment if you don't need custom menu walkers
 * @todo	Add menus walkers
 */
if (!function_exists('themename_menus_walkers')):
	function themename_menus_walkers()
	{
		// Duplicate this line as many custom menu walkers needed
		require_once( 'parts/menu/walker.php' );
	}
endif;
add_action('after_setup_theme', 'themename_menus_walkers');

/**
 * Register custom menus
 * @todo	Comment if you don't need custom menus
 * @todo	Add menus
 */
if (!function_exists('themename_menus')):
	function themename_menus()
	{
		// Add all menus you want
		register_nav_menus(array(
			'main_nav' => 'Main nav'
		));
	}
endif;
add_action('after_setup_theme', 'themename_menus');

/******************************
 * Custom images
 ******************************/

/**
 * Register custom images sizes
 * @todo	Comment if you don't need custom images sizes
 * @todo	Add images sizes
 */
if (!function_exists('themename_images')):
	function themename_images()
	{
		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support('post-thumbnails');

		// Set default post thumbnail size
		set_post_thumbnail_size( 1920, 1080 );

		// Add all images sizes you want
		add_image_size( 'full-hh', 1920, 1080);
	}
endif;
add_action('after_setup_theme', 'themename_images');

/**
 * Support for svg
 */
if (!function_exists('themename_allow_svg')) :
	function themename_allow_svg($mimes) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
endif;
add_filter('upload_mimes', 'themename_allow_svg');

/******************************
 * ACF
 ******************************/

/**
 * Register and save ACF Fields into JSON for versionning
 * @todo	Comment if you don't need ACF Fields
 */
if (!function_exists('themename_load_acfjson')) :
	function themename_load_acfjson( $paths ) {
		$paths[] = get_stylesheet_directory() . '/fields';
		return $paths;
	}
endif;
add_filter('acf/settings/load_json', 'themename_load_acfjson');

if (!function_exists('themename_save_acfjson')) :
	function themename_save_acfjson( $path ) {
		$path = get_stylesheet_directory() . '/fields';
		return $path;
	}
endif;
add_filter('acf/settings/save_json', 'themename_save_acfjson');

/**
 * Use of ACF page options
 * @todo	Comment if you don't need ACF options page
 * @todo 	Add paramaters if needed
 * @see 	https://www.advancedcustomfields.com/resources/acf_add_options_page/
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

/******************************
 * Gutenberg Blocks
 ******************************/

/**
 * Register custom gutenberg blocks
 * @todo	Comment if you don't need gutenberg block
 * @todo	Add gutenberg blocks
 * @todo	Add these blocks to allowed blocks
 * @see		themename_allow_gutenberg_block
 */
// if (!function_exists('themename_add_gutenberg_acf_block')) :
// 	function themename_add_gutenberg_acf_block() {
// 		// Duplicate this line as many custom blocks needed
// 		require_once( 'blocks/block.php' );
// 	}
// endif;
// add_action('acf/init', 'themename_add_gutenberg_acf_block');

/**
 * Allow only specific core gutenberg blocks
 * @todo	Add / remove core gutenberg blocks - Don't forget to add yours !
 */
// if (!function_exists('themename_allow_gutenberg_block')) :
// 	function themename_allow_gutenberg_block( $allowed_blocks, $post ) {
// 		// Core gutenberg blocks used for every content supporting gutenberg
// 		$allowed_blocks = array(
// 			'core/paragraph',
// 			'core/image',
// 			'core/heading',
// 			'core/list',
// 		);

// 		// Core gutenberg blocks for specific content type
// 		if( $post->post_type === 'posttype' ) {
// 			$allowed_blocks[] = 'core/quote';
// 			$allowed_blocks[] = 'acf/block';
// 		}

// 		return $allowed_blocks;
// 	}
// endif;
// add_filter( 'allowed_block_types', 'themename_allow_gutenberg_block', 10, 2 );

/******************************
 * WYSIWYG
 ******************************/

/**
 * Register MCE options
 * @todo	Comment if you don't need ACF options (really ?)
 * @todo	Add options
 */
if (!function_exists('themename_editor_options')):
	function themename_editor_options($mce)
	{
		// Color options
		$mce['textcolor_map'] = '["000000", "Noir"]';

		// Return options
		return $mce;
	}
endif;
add_filter('tiny_mce_before_init', 'themename_editor_options');

/**
 * Register MCE toolbars for ACF
 * @todo	Comment if you don't need custom ACF toolbars (really ?)
 * @todo	Configure ACF toolbars
 */
if (!function_exists('themename_editor_toolbars')):
	function themename_editor_toolbars($toolbars)
	{
		$toolbars['Full'] = array();
		$toolbars['Full'][1] = array('forecolor', 'bold', 'italic', 'underline', 'bullist', 'alignleft', 'aligncenter', 'alignright', 'link', 'unlink' );
		$toolbars['Full'][2] = array('undo', 'redo');

		// Return toolbars
		return $toolbars;
	}
endif;
add_filter('acf/fields/wysiwyg/toolbars' , 'themename_editor_toolbars');


/******************************
 * AJAX
 ******************************/

/**
 * Register custom ajax call
 * @todo	Comment if you don't need ajax calls
 * @todo	Add ajax calls
 */
require_once( 'ajax/posttype.php' );

/******************************
 * Remove useless features
 ******************************/

/**
 * Remove Gutenberg for content that don't need id
 * @todo Add or remove gutenberg on content that need / don't need id
 */
if (!function_exists('themename_remove_guttenberg')) :
	function themename_remove_guttenberg()
	{
		remove_post_type_support('page', 'editor');
		remove_post_type_support('post', 'editor');
	}
endif;
add_action('init', 'themename_remove_guttenberg', 10);

/**
 * Disable fontsize in Gutenberg blocks
 */
add_theme_support( 'disable-custom-font-sizes' );

/**
 * Remove custom colors in Gutenberg blocks
 */
add_theme_support( 'disable-custom-colors' );
add_theme_support( 'editor-color-palette' );

/**
 * Remove widgets (because it's useless, ugly and shity).
 */
if (!function_exists('themename_remove_widgets')) :
	function themename_remove_widgets()
	{
		unregister_widget( 'WP_Widget_Pages' ); // Le widget Pages
		unregister_widget( 'WP_Widget_Calendar' ); // Le widget Calendrier
		unregister_widget( 'WP_Widget_Archives' ); // Le widget Archives
		unregister_widget( 'WP_Widget_Links' );
		unregister_widget( 'WP_Widget_Meta' ); // Le widget Meta
		unregister_widget( 'WP_Widget_Search' ); // Le widget Rechercher
		unregister_widget( 'WP_Widget_Text' ); // Le widget de texte
		unregister_widget( 'WP_Widget_Media_Audio' ); // Le widget Audio
		unregister_widget( 'WP_Widget_Media_Image' ); // Le widget Image
		unregister_widget( 'WP_Widget_Media_Video' ); // Le widget Vidéo
		unregister_widget( 'WP_Widget_Custom_HTML' ); // Le widget HTML personnalisé
		unregister_widget( 'WP_Widget_Categories' ); // Le widget catégories
		unregister_widget( 'WP_Widget_Recent_Posts' ); // Le widget articles récents
		unregister_widget( 'WP_Widget_Recent_Comments' ); // Le widget Commentaires récents
		unregister_widget( 'WP_Widget_RSS' ); // Le widget RSS
		unregister_widget( 'WP_Widget_Tag_Cloud' ); // Le widget nuage d'étiquettes
		unregister_widget( 'WP_Nav_Menu_Widget' );
	}
endif;
add_action('widgets_init', 'themename_remove_widgets');

/**
 * Remove useless head tag.
 */
if (!function_exists('remove_useless_tag')):
	function remove_useless_tag()
	{
		remove_action('wp_head', 'feed_links_extra');
		remove_action('wp_head', 'feed_links');
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'wlwmanifest_link');
		remove_action('wp_head', 'index_rel_link');
		remove_action('wp_head', 'parent_post_rel_link');
		remove_action('wp_head', 'start_post_rel_link');
		remove_action('wp_head', 'adjacent_posts_rel_link');
		remove_action('wp_head', 'wp_generator');
		remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
		remove_action('wp_head', 'print_emoji_detection_script', 7);
		remove_action('admin_print_scripts', 'print_emoji_detection_script');
		remove_action('wp_print_styles', 'print_emoji_styles');
		remove_action('admin_print_styles', 'print_emoji_styles');
	}
endif;
add_action('after_setup_theme', 'remove_useless_tag');



if (!function_exists('dd')) {
    /**
     * @param $var
     */
    function dd($var)
    {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
    }
}


