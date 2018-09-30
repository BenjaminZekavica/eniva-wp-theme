<?php

/*
  Top Header Section
  Author: Benjamin Zekavica

*/

/* =========================================================
    Init Main Options Menu - Add Header Options Panel
   ========================================================= */

$wp_customize->add_panel( 'header_options', array(
  'title' => __( 'Header Options', 'eniva'),
  'description' => __('Here your can edit the header.', 'eniva'),
  'priority' => 60,
));

/* =========================================================
    Sub Options Menu Top Header Section
   ========================================================= */

$wp_customize->add_section( 'eniva_top_header_options' , array(
    'title'    => __( 'Top Header', 'eniva' ),
    'priority' => 40,
    'panel'    => 'header_options'
));

// Top Header Size Option

$wp_customize->add_setting( 'eniva_top_header_height' , array(
    'default' => '39'
));

$wp_customize->add_control( new Customizer_Range_Value_Control( $wp_customize, 'top_header_height', array(
	'type'     => 'range-value',
    'section'  => 'eniva_top_header_options',
    'settings' => 'eniva_top_header_height',
	'label'    => __( 'Top Header Height (px)', 'eniva' ),
	'input_attrs' => array(
		'min'    => 1,
		'max'    => 100,
		'step'   => 1,
		'suffix' => 'px',
  	),
)));

// Top Menu Font Size

$wp_customize->add_setting( 'eniva_top_header_menu_font_size' , array(
    'default' => '15'
));

$wp_customize->add_control( new Customizer_Range_Value_Control( $wp_customize, 'top_header_size', array(
  'type'     => 'range-value',
  'section'  => 'eniva_top_header_options',
  'settings' => 'eniva_top_header_menu_font_size',
	'label'    => __( 'Top Header Font Size (px)', 'eniva' ),
	'input_attrs' => array(
		'min'    => 1,
		'max'    => 18,
		'step'   => 1,
		'suffix' => 'px',
  	),
)));

// Top Menu Link Color


$wp_customize->add_setting( 'top_header_link_color', array(
	'default' => '#2087cc'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_header_link_color', array(
	'label' => __('Top Header Link Color', 'eniva'),
	'section' => 'eniva_top_header_options',
	'settings' => 'top_header_link_color',
)));


// Top Menu Link Color Hover


$wp_customize->add_setting( 'top_header_link_color_hover', array(
	'default' => '#559ccc'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_header_link_color_hover', array(
	'label' => __('Top Header Link Color Hover', 'eniva'),
	'section' => 'eniva_top_header_options',
	'settings' => 'top_header_link_color_hover',
)));


/* =========================================================
    Main Header Section
   ========================================================= */

$wp_customize->add_section( 'eniva_main_header_options' , array(
    'title'    => __( 'Main Header', 'eniva' ),
    'priority' => 50,
    'panel'    => 'header_options'
));


// Header Logo Size


$wp_customize->add_setting( 'eniva_header_options' , array(
    'default' => '169'
));


$wp_customize->add_control( new Customizer_Range_Value_Control( $wp_customize, 'header_logo_size', array(
	'type'     => 'range-value',
  'label'    => __( 'Logo Size - Image (px)', 'eniva' ),
  'section' => 'eniva_main_header_options',
  'settings' => 'eniva_header_options',
	'input_attrs' => array(
		'min'    => 1,
		'max'    => 226,
		'step'   => 1,
		'suffix' => 'px',
  	),
)));


// Main Menu Font Size


$wp_customize->add_setting( 'eniva_main_menu_font_size' , array(
    'default' => '17'
));


$wp_customize->add_control( new Customizer_Range_Value_Control( $wp_customize, 'main_header_size', array(
	'type'     => 'range-value',
  'label'    => __( 'Main Header Font Size (px)', 'eniva' ),
  'section' => 'eniva_main_header_options',
  'settings' => 'eniva_main_menu_font_size',
	'input_attrs' => array(
		'min'    => 1,
		'max'    => 40,
		'step'   => 1,
		'suffix' => 'px',
  	),
)));


// Main Header Height

$wp_customize->add_setting( 'eniva_main_header_height' , array(
    'default' => '147'
));


$wp_customize->add_control( new Customizer_Range_Value_Control( $wp_customize, 'eniva_main_header_height', array(
	'type'     => 'range-value',
  'label'    => __( 'Main Header Height (px)', 'eniva' ),
  'section' => 'eniva_main_header_options',
  'settings' => 'eniva_main_header_height',
	'input_attrs' => array(
		'min'    => 1,
		'max'    => 200,
		'step'   => 1,
		'suffix' => 'px',
  	),
)));


// Remove Uppercase

$wp_customize->add_setting( 'eniva_main_menu_font_remove_uppercase' , array(
    'default' => '',
    'transport'   => 'refresh'
));


$wp_customize->add_control( new Customizer_Toggle_Control( $wp_customize, 'main_header_remove_uppercase', array(
    'label'    => __( 'Remove Uppercase', 'eniva' ),
    'section' => 'eniva_main_header_options',
    'settings' => 'eniva_main_menu_font_remove_uppercase',
		'type'        => 'ios'
)));


// Box Shadow under Main Menu

$wp_customize->add_setting( 'eniva_main_menu_box_shadow' , array(
    'default' => '',
    'transport'   => 'refresh'
));


$wp_customize->add_control( new Customizer_Toggle_Control( $wp_customize, 'eniva_main_menu_box_shadow', array(
    'label'    => __( 'Box Shadow under Main Menu', 'eniva' ),
    'section' => 'eniva_main_header_options',
    'settings' => 'eniva_main_menu_box_shadow',
		'type'        => 'ios'
)));


// Menu Link Color

$wp_customize->add_setting( 'main_header_linkcolor', array(
	'default' => '#2087cc'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_header_linkcolor', array(
	'label' => __('Main Menu Link Color', 'eniva'),
	'section' => 'eniva_main_header_options',
	'settings' => 'main_header_linkcolor',
)));


// Menu Link Color Hover


$wp_customize->add_setting( 'main_header_linkcolor_hover', array(
	'default' => '#559ccc'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_header_linkcolor_hover', array(
	'label' => __('Main Menu Link Color Hover', 'eniva'),
	'section' => 'eniva_main_header_options',
	'settings' => 'main_header_linkcolor_hover',
)));

/* =========================================================
    Custom Headers
   ========================================================= */


   function eniva_custom_headers() {
    $defaults = array(
          'default-image'         => '',
          'header-text'           => false,
          'default-text-color'    => 'FFF',
          'flex-width'            => true,
          'width'                 => 980,
          'flex-height'           => true,
          'height'                => 200,
          'random-default'        => false,
          'uploads'               => true,
          'priority'              => 20,
          'wp-head-callback'      => 'wphead_eniva',
          'admin-head-callback'   => 'adminhead_eniva',
          'admin-preview-callback' => 'adminpreview_eniva',
        );
}
add_action( 'after_setup_theme', 'eniva_custom_headers' );
