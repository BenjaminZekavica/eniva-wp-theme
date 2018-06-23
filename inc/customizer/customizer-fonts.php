<?php

// Add Fonts Section

$wp_customize->add_section( 'eniva_fonts' , array(
    'title'    => __( 'Fonts', 'eniva' ),
    'priority' => 40
));

$wp_customize->add_setting( 'eniva_fonts' , array(
    'default'   => '#000000',
    'transport' => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fonts', array(
    'label'    => __( 'Header Color', 'starter' ),
    'section'  => 'eniva_fonts',
    'settings' => 'eniva_fonts',
) ) );
