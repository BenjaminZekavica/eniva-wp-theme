<?php

/* Globals Settings
   Author: Benjamin Zekavica
*/


/* =========================================================
    Init Global Setting Panel
   ========================================================= */


 $wp_customize->add_panel( 'global_options', array(
   'title' => __( 'Global Options', 'eniva'),
   'description' => __('Here your can edit the global styling.', 'eniva'),
   'priority' => 30,
 ));


/* =========================================================
    Wrapper Settings
  ========================================================= */


// Add Section
$wp_customize->add_section( 'eniva_global_settings_wrapper' , array(
   'title'    => __( 'Wrapper Settings', 'eniva' ),
   'priority' => 21,
   'panel'    => 'global_options'
));



// Max Width for Box Version

$wp_customize->add_setting( 'eniva_max_width_wrapper' , array(
    'default' => '960'
));

$wp_customize->add_control( new Customizer_Range_Value_Control( $wp_customize, 'eniva_max_width_wrapper', array(
	'type'     => 'range-value',
  'label'    => __( 'Content With for Boxed Layout (px)', 'eniva' ),
  'section'  => 'eniva_global_settings_wrapper',
  'settings' => 'eniva_max_width_wrapper',
	'input_attrs' => array(
		'min'    => 1,
		'max'    => 2000,
		'step'   => 1,
		'suffix' => 'px',
  	),
)));


// Remove Box Shadow

$wp_customize->add_setting( 'eniva_remove_box_shadow' , array(
    'default' => '',
    'transport'   => 'refresh'
));


$wp_customize->add_control( new Customizer_Toggle_Control( $wp_customize, 'eniva_remove_box_shadow', array(
  'label'    => __( 'Remove Box Shadow', 'eniva' ),
  'section'  => 'eniva_global_settings_wrapper',
  'settings' => 'eniva_remove_box_shadow',
	'type'        => 'ios'
)));

// Box to Left

$wp_customize->add_setting( 'eniva_box_left' , array(
    'default' => '',
    'transport'   => 'refresh'
));


$wp_customize->add_control( new Customizer_Toggle_Control( $wp_customize, 'eniva_box_left', array(
  'label'    => __( 'Wrapper to left', 'eniva' ),
  'section'  => 'eniva_global_settings_wrapper',
  'settings' => 'eniva_box_left',
	'type'        => 'ios'
)));



// Remove Wraper Checkbox

$wp_customize->add_setting( 'eniva_remove_wrapper' , array(
    'default' => '',
    'transport'   => 'refresh'
));


$wp_customize->add_control( new Customizer_Toggle_Control( $wp_customize, 'eniva_remove_wrapper', array(
  'label'    => __( 'Remove Wrapper - Fullwidth Website', 'eniva' ),
  'section'  => 'eniva_global_settings_wrapper',
  'settings' => 'eniva_remove_wrapper',
		'type'        => 'ios'
)));


// Container Max Width  - Fullwidth

$wp_customize->add_setting( 'eniva_container_width_max_width_fluid' , array(
    'default' => '1200'
));

$wp_customize->add_control( new Customizer_Range_Value_Control( $wp_customize, 'eniva_container_width_max_width_fluid', array(
	'type'     => 'range-value',
  'label'    => __( 'Max-With Container for Full Width Website (px)', 'eniva' ),
  'section'  => 'eniva_global_settings_wrapper',
  'settings' => 'eniva_container_width_max_width_fluid',
	'input_attrs' => array(
		'min'    => 1,
		'max'    => 2000,
		'step'   => 1,
		'suffix' => 'px',
  	),
)));