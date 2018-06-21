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
