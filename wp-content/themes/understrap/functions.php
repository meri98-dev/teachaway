<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

//Options Page for Footer and Sticky Menu
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Navigation Menus',
		'menu_title'	=> 'Navigation Menus',
		'menu_slug' 	=> 'navigation-menus',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'navigation-menus',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Sticky Menu',
		'menu_title'	=> 'Sticky Menu',
		'parent_slug'	=> 'navigation-menus',
	));
}

//Register new menu 
add_action( 'after_setup_theme', 'register_menu' );
function register_menu() {
	register_nav_menu( 'footer_menu', __( 'Footer Menu', 'theme-slug' ) );
}



function wpdocs_scripts_method() {
	wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/app.js', 1.12, array( 'jquery' ), true , 11);
}
add_action( 'wp_enqueue_scripts', 'wpdocs_scripts_method', 20, 1 );
wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/js/slick.min.js', array ( 'jquery' ), 1.1, true);
