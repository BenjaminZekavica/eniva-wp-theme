<?php

// Logo Options

$wp_customize->add_setting('your_theme_logo');
$wp_customize->add_section( 'your_theme_logo' , array(
    'priority' => 10
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_logo',
  array(
    'label' => __('Upload your Logo', 'eniva'),
    'section' => 'title_tagline',
    'settings' => 'your_theme_logo',
  )
));
