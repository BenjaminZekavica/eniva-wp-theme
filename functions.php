<?php
/*
	Theme Name: Enivia
	Author: Benjamin Zekavica
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
require_once __DIR__ . '/inc/quick-install/class-tgm-plugin-activation.php';
require_once __DIR__ . '/inc/quick-install/install-plugins.php';

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


	// Content Width


	if ( ! isset( $content_width ) )
	    $content_width = 960;

	function eniva_customizer_content_width_dynamic() {
	    global $content_width;

	    if ( get_theme_mod('eniva_remove_wrapper') )
	       $content_width = get_theme_mod('eniva_container_width_max_width_fluid');
		  elseif ( get_theme_mod('eniva_max_width_wrapper') )
			   $content_width = get_theme_mod('eniva_max_width_wrapper');

	}
	add_action( 'template_redirect', 'eniva_customizer_content_width_dynamic' );


  // Images
	add_image_size( 'full-width-horizontal', 640, 320,true );


	 // Register Theme Features
	function eniva_theme_supports()  {

	 	// Add theme support for Featured Images
	 	add_theme_support( 'post-thumbnails' );

		// Add Support for BG

		add_theme_support( 'custom-background', array(
		    'wp-head-callback' => 'envia_custom_bg',
		    'default-color'    => '2087cc',
				'default-repeat'         => 'norepeat',
				'default-position-x'     => 'left',
				'default-position-y'     => 'top',
				'default-size'           => 'cover',
				'default-attachment'     => 'fixed',
				'admin-head-callback'    => 'envia_custom_bg',
				'admin-preview-callback' => 'envia_custom_bg'
		));

		// Post Formats
		add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );

		// Output BG Image or Color

		function envia_custom_bg() {

			$background = set_url_scheme( get_background_image() );

					$color = get_background_color();

					if ( $color === get_theme_support( 'custom-background', 'default-color' ) ) {
							$color = false;
					}

					if ( ! $background && ! $color )
							return;

					$style = $color ? "background-color: #$color;" : '';

					if ( $background ) {
							$image = " background-image: url('$background');";

							$repeat = get_theme_mod( 'background_repeat', get_theme_support( 'custom-background', 'default-repeat' ) );
							if ( ! in_array( $repeat, array( 'no-repeat', 'repeat-x', 'repeat-y', 'repeat' ) ) )
									$repeat = 'repeat';
							$repeat = " background-repeat: $repeat;";

							$position = get_theme_mod( 'background_position_x', get_theme_support( 'custom-background', 'default-position-x' ) );
							if ( ! in_array( $position, array( 'center', 'right', 'left' ) ) )
							$position = 'left';
							$position = " background-position: top $position;";

							$attachment = get_theme_mod( 'background_attachment', get_theme_support( 'custom-background', 'default-attachment' ) );
							if ( ! in_array( $attachment, array( 'fixed', 'scroll' ) ) )
									$attachment = 'scroll';
							$attachment = " background-attachment: $attachment;";

							$style .= $image . $repeat . $position . $attachment;
					}
			?>
			<style type="text/css" id="custom-background-css">
				body.custom-background {
					<?php echo trim( $style ); ?>
				}
			</style>
			<?php

		}


	 	// Add theme support for Custom Header
	 	$header_args = array(
	 		'default-image'          => '',
	 		'width'                  => 0,
	 		'height'                 => 0,
	 		'flex-width'             => false,
	 		'flex-height'            => false,
	 		'uploads'                => true,
	 		'random-default'         => false,
	 		'header-text'            => false,
	 		'default-text-color'     => '',
	 		'wp-head-callback'       => '',
	 		'admin-head-callback'    => '',
	 		'admin-preview-callback' => '',
	 		'video'                  => false,
	 		'video-active-callback'  => '',
	 	);
	 	add_theme_support( 'custom-header', $header_args );

	 	// Add theme support for HTML5 Semantic Markup
	 	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );


		 add_theme_support( 'title-tag' );

		// Custom BG Color 

		$args = array(
			'default-color' => 'f7f7f7',
		);
		add_theme_support( 'custom-background', $args );


	 	// Add theme support for Translation
	 	load_theme_textdomain( 'eniva', get_template_directory() . '/language' );
	 }

	add_action( 'after_setup_theme', 'eniva_theme_supports' );