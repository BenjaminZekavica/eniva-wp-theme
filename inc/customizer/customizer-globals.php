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

$wp_customize->add_control(
  'eniva_max_width_wrapper',
    array(
      'label'    => __( 'Max-With Container for Boxed Layout (px)', 'eniva' ),
      'section'  => 'eniva_globals_options',
      'settings' => 'eniva_max_width_wrapper',
      'type'     => 'number',
    )
);



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

  $wp_customize->add_control(
    'eniva_container_width_max_width_fluid',
      array(
        'label'    => __( 'Max-With Container for Full Width Website (px)', 'eniva' ),
        'section'  => 'eniva_globals_options',
        'settings' => 'eniva_container_width_max_width_fluid',
        'type'     => 'number',
      )
  );
