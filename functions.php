<?php
/*
		Theme Name: Enivia
		Author: Benjamin Zekavica
		Desc: Function of the Theme
*/

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	}
}

show_admin_bar(false);


/* ======================================================
		1. Enque scripts and styles
	 ====================================================== */

function eniva_theme_enque() {

  wp_enqueue_style( 'style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'eniva_theme_enque' );


/* ======================================================
		2. Load templates - Customizer
	 ====================================================== */

require_once __DIR__ . '/inc/customizer/customizer-options.php';


/* ======================================================
		3. Register Menu
	 ====================================================== */

register_nav_menus( array(
	'top_header' => __('Top Header Menu', 'eniva'),
	'main_header_menu' => __('Main Header Menu', 'eniva'),
	'footer_menu' => __('Footer Menu', 'eniva'),
));

/* ======================================================
		4. Theme Support
	 ====================================================== */


if ( ! isset( $content_width ) ) {
	$content_width = 960;
}

add_editor_style()

// Image Sizes
add_image_size( 'full-width-horizontal', 640, 320,true );


// Theme Support
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'post' ) );
add_theme_support( 'post-thumbnails', array( 'page' ) );
add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) );
add_theme_support( 'title-tag' );
// add_theme_support( "custom-background");
// add_theme_support( "custom-header");
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
