<?php


  // Footer Options

  $wp_customize->add_section( 'eniva_footer_options' , array(
      'title'    => __( 'Footer', 'eniva' ),
      'priority' => 70
  ));


    // Add Footer Top Margin 

    $wp_customize->add_setting( 'eniva_footer_margin_size' , array(
        'default' => '15'
    ));

    $wp_customize->add_control( new Customizer_Range_Value_Control( $wp_customize, 'eniva_footer_margin_size', array(
        'type'     => 'range-value',
        'section'  => 'eniva_footer_options',
        'settings' => 'eniva_footer_margin_size',
            'label'    => __( 'Footer Margin Top', 'eniva' ),
            'input_attrs' => array(
                'min'    => 1,
                'max'    => 100,
                'step'   => 1,
                'suffix' => 'px',
            ),
    )));

    // Footer Padding top 


    $wp_customize->add_setting( 'eniva_footer_padding_top_size' , array(
    'default' => '15'
    ));

    $wp_customize->add_control( new Customizer_Range_Value_Control( $wp_customize, 'eniva_footer_padding_top_size', array(
        'type'     => 'range-value',
        'section'  => 'eniva_footer_options',
        'settings' => 'eniva_footer_padding_top_size',
            'label'    => __( 'Footer Padding Top', 'eniva' ),
            'input_attrs' => array(
                'min'    => 1,
                'max'    => 100,
                'step'   => 1,
                'suffix' => 'px',
            ),
    )));


    // Add Footer padding bottom

    $wp_customize->add_setting( 'eniva_footer_padding_bottom_size' , array(
        'default' => '15'
    ));

    $wp_customize->add_control( new Customizer_Range_Value_Control( $wp_customize, 'eniva_footer_padding_bottom_size', array(
        'type'     => 'range-value',
        'section'  => 'eniva_footer_options',
        'settings' => 'eniva_footer_padding_bottom_size',
            'label'    => __( 'Footer Padding Bottom', 'eniva' ),
            'input_attrs' => array(
                'min'    => 1,
                'max'    => 100,
                'step'   => 1,
                'suffix' => 'px',
            ),
    )));


  // Footer BG Color

  $wp_customize->add_setting( 'footer_bg_color' , array(
      'default'   => '#89b1ce',
      'transport' => 'refresh',
  ));

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg_color', array(
      'label'    => __( 'Footer Background Color', 'eniva' ),
      'section'  => 'eniva_footer_options',
      'settings' => 'footer_bg_color',
  )));


  // Footer BG Font Color


  $wp_customize->add_setting( 'footer_bg_color_text' , array(
      'default'   => '#ffffff',
      'transport' => 'refresh',
  ));

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg_color_text', array(
      'label'    => __( 'Footer Text Color', 'eniva' ),
      'section'  => 'eniva_footer_options',
      'settings' => 'footer_bg_color_text',
  )));


// Copyright Text

$wp_customize->add_setting( 'eniva_copyright_text' , array(
    'default' => 'All rights reserved. | Designed by: Benjamin Zekavica | Powered by WordPress'
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
