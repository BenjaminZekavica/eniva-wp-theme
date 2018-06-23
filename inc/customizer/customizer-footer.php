<?php


  // Footer Options

  $wp_customize->add_section( 'eniva_footer_options' , array(
      'title'    => __( 'Footer', 'eniva' ),
      'priority' => 70
  ) );


  // Footer BG Color

  $wp_customize->add_setting( 'footer_bg_color' , array(
      'default'   => '#89b1ce',
      'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg_color', array(
      'label'    => __( 'Footer Background Color', 'eniva' ),
      'section'  => 'eniva_footer_options',
      'settings' => 'footer_bg_color',
  ) ) );


  // Footer BG Font Color


  $wp_customize->add_setting( 'footer_bg_color_text' , array(
      'default'   => '#ffffff',
      'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg_color_text', array(
      'label'    => __( 'Footer Text Color', 'eniva' ),
      'section'  => 'eniva_footer_options',
      'settings' => 'footer_bg_color_text',
  ) ) );


// Copyright Text

$wp_customize->add_setting( 'eniva_copyright_text' , array(
    'default' => 'Copyright by Test. All rights reserved!'
));

$wp_customize->add_control(
	'eniva_copyright_text',
  	array(
  		'label'    => __( 'Copyright Text', 'eniva' ),
  		'section'  => 'eniva_footer_options',
  		'settings' => 'eniva_copyright_text',
  		'type'     => 'textarea',
  	)
);
