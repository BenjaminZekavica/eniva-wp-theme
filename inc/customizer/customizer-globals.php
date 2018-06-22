<?php



  // Global Settings

  $wp_customize->add_section( 'eniva_globals_options' , array(
      'title'    => __( 'Global Setting', 'eniva' ),
      'priority' => 21
  ) );


// Max Width for

$wp_customize->add_setting( 'eniva_max_width_wrapper' , array(
    'default' => '960'
));

$wp_customize->add_control( new Customizer_Range_Value_Control( $wp_customize, 'eniva_max_width_wrapper', array(
	'type'     => 'range-value',
  'label'    => __( 'Content With for Boxed Layout (px)', 'eniva' ),
  'section'  => 'eniva_globals_options',
  'settings' => 'eniva_max_width_wrapper',
	'input_attrs' => array(
		'min'    => 1,
		'max'    => 2000,
		'step'   => 1,
		'suffix' => 'px',
  	),
)));



  // Remove Wraper Checkbox

  $wp_customize->add_setting( 'eniva_remove_wrapper' , array(
      'default' => ''
  ));

  $wp_customize->add_control(
  	'eniva_remove_wrapper',
    	array(
    		'label'    => __( 'Remove Wrapper - Fullwidth Website', 'eniva' ),
    		'section'  => 'eniva_globals_options',
    		'settings' => 'eniva_remove_wrapper',
    		'type'     => 'checkbox',
    	)
  );


  // Container Max Width  - Fullwidth

  $wp_customize->add_setting( 'eniva_container_width_max_width_fluid' , array(
      'default' => '1200'
  ));

  $wp_customize->add_control( new Customizer_Range_Value_Control( $wp_customize, 'eniva_container_width_max_width_fluid', array(
  	'type'     => 'range-value',
    'label'    => __( 'Max-With Container for Full Width Website (px)', 'eniva' ),
    'section'  => 'eniva_globals_options',
    'settings' => 'eniva_container_width_max_width_fluid',
  	'input_attrs' => array(
  		'min'    => 1,
  		'max'    => 2000,
  		'step'   => 1,
  		'suffix' => 'px',
    	),
  )));
