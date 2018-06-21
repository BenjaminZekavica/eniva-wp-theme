<?php


  // Globale Colors

  $colors = array();

  // BG Color
  $colors[] = array(
    'slug'=>'bg_color',
    'default' => '#2087cc',
    'label' => __('Background Color', 'eniva')
  );

  // Link Color Static

  $colors[] = array(
    'slug'=>'link_color_static',
    'default' => '#2087cc',
    'label' => __('Link Color', 'eniva')
  );

  // Link Color Hover

  $colors[] = array(
    'slug'=>'link_color_hover',
    'default' => '#559ccc',
    'label' => __('Link Color Hover', 'eniva')
  );

  // Main Color
  $colors[] = array(
    'slug'=>'main_color',
    'default' => '#2087cc',
    'label' => __('Main Color', 'eniva')
  );

  // Top Header Color

  $colors[] = array(
    'slug'=>'top_header_color',
    'default' => '#ffffff',
    'label' => __('Top Header Color', 'eniva')
  );

  // Main Header Color

  $colors[] = array(
    'slug'=>'main_header_color',
    'default' => '#ffffff',
    'label' => __('Main Header Color', 'eniva')
  );

  // Wrapper Content Color

  $colors[] = array(
    'slug'=>'wrapper_content_bg',
    'default' => '#ffffff',
    'label' => __('Content Background Color', 'eniva')
  );

  foreach( $colors as $color ) {

      // Init Color Option

      $wp_customize->add_setting(
        $color['slug'], array(
          'default' => $color['default'],
          'type' => 'option',
          'priority' => 30,
          'capability' =>
          'edit_theme_options'
        )
      );

      // Init Lables

      $wp_customize->add_control(
        new WP_Customize_Color_Control(
          $wp_customize,
          $color['slug'],
          array('label' => $color['label'],
          'section' => 'colors',
          'settings' => $color['slug'])
        )
      );
  }
