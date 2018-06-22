<?php

// Top Header Height


$wp_customize->add_setting( 'eniva_top_header_height' , array(
    'default' => '39'
));


$wp_customize->add_control( new Customizer_Range_Value_Control( $wp_customize, 'top_header_height', array(
	'type'     => 'range-value',
  'section'  => 'eniva_header_options',
  'settings' => 'eniva_top_header_height',
	'label'    => __( 'Top Header Size (px)', 'eniva' ),
	'input_attrs' => array(
		'min'    => 1,
		'max'    => 400,
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
  'section'  => 'eniva_header_options',
  'settings' => 'eniva_top_header_menu_font_size',
	'label'    => __( 'Top Header Font Size (px)', 'eniva' ),
	'input_attrs' => array(
		'min'    => 1,
		'max'    => 19,
		'step'   => 1,
		'suffix' => 'px',
  	),
)));


// Top Menu Link Color


$wp_customize->add_setting( 'top_header_link_color', array(
	'default' => '#2087cc'
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_header_link_color', array(
	'label' => __('Top Header Link Color', 'eniva'),
	'section' => 'eniva_header_options',
	'settings' => 'top_header_link_color',
)));



// Top Menu Link Color Hover


$wp_customize->add_setting( 'top_header_link_color_hover', array(
	'default' => '#559ccc'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_header_link_color_hover', array(
	'label' => __('Top Header Link Color Hover', 'eniva'),
	'section' => 'eniva_header_options',
	'settings' => 'top_header_link_color_hover',
)));


// Header Logo Size

$wp_customize->add_section( 'eniva_header_options' , array(
    'title'    => __( 'Header', 'eniva' ),
    'priority' => 40
) );

$wp_customize->add_setting( 'eniva_header_options' , array(
    'default' => '169'
));


$wp_customize->add_control( new Customizer_Range_Value_Control( $wp_customize, 'header_logo_size', array(
	'type'     => 'range-value',
  'label'    => __( 'Logo Size - Image (px)', 'eniva' ),
  'section'  => 'eniva_header_options',
  'settings' => 'eniva_header_options',
	'input_attrs' => array(
		'min'    => 1,
		'max'    => 300,
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
  'section'  => 'eniva_header_options',
  'settings' => 'eniva_main_menu_font_size',
	'input_attrs' => array(
		'min'    => 1,
		'max'    => 40,
		'step'   => 1,
		'suffix' => 'px',
  	),
)));


// Menu Menu Font Remove Uppercase

$wp_customize->add_setting( 'eniva_main_menu_font_remove_uppercase' , array(
    'default' => ''
));

$wp_customize->add_control(
	'main_header_remove_uppercase',
  	array(
  		'label'    => __( 'Remove Uppercase', 'eniva' ),
  		'section'  => 'eniva_header_options',
  		'settings' => 'eniva_main_menu_font_remove_uppercase',
  		'type'     => 'checkbox',
  	)
);


// Menu Link Color

$wp_customize->add_setting( 'main_header_linkcolor', array(
	'default' => '#2087cc'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_header_linkcolor', array(
	'label' => __('Main Menu Link Color', 'eniva'),
	'section' => 'eniva_header_options',
	'settings' => 'main_header_linkcolor',
)));


// Menu Link Color Hover


$wp_customize->add_setting( 'main_header_linkcolor_hover', array(
	'default' => '#559ccc'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_header_linkcolor_hover', array(
	'label' => __('Main Menu Link Color Hover', 'eniva'),
	'section' => 'eniva_header_options',
	'settings' => 'main_header_linkcolor_hover',
)));
