<?php

// Add Fonts Section

$wp_customize->add_section( 'eniva_fonts' , array(
    'title'    => __( 'Fonts', 'eniva' ),
    'priority' => 40
));


// Load URL Headline Fonts 

$wp_customize->add_setting( 'eniva_headline_font_link' , array(
    'default' => 'https://fonts.googleapis.com/css?family=Titillium+Web'
));

$wp_customize->add_control(
	'eniva_headline_font_link',
  	array(
  		'label'    => __( 'Headline Font URL', 'eniva' ),
  		'section'  => 'eniva_fonts',
  		'settings' => 'eniva_headline_font_link',
  		'type'     => 'url',
  	)
);


// Load URL Body Fonts 

$wp_customize->add_setting( 'eniva_content_font_link' , array(
    'default' => 'https://fonts.googleapis.com/css?family=Titillium+Web'
));

$wp_customize->add_control(
	'eniva_content_font_link',
  	array(
  		'label'    => __( 'Body Font URL', 'eniva' ),
  		'section'  => 'eniva_fonts',
  		'settings' => 'eniva_content_font_link',
  		'type'     => 'url',
  	)
);


// Headline Font Name

$wp_customize->add_setting( 'eniva_headline_font_css' , array(
    'default' => " 'Titillium Web', sans-serif"
));

$wp_customize->add_control(
	'eniva_headline_font_css',
  	array(
  		'label'    => __( 'Headline Font Name', 'eniva' ),
  		'section'  => 'eniva_fonts',
  		'settings' => 'eniva_headline_font_css',
  		'type'     => 'url',
  	)
);


// Content Font Name

$wp_customize->add_setting( 'eniva_content_font_css' , array(
    'default' => " 'Titillium Web', sans-serif"
));

$wp_customize->add_control(
	'eniva_content_font_css',
  	array(
  		'label'    => __( 'Content Font Name', 'eniva' ),
  		'section'  => 'eniva_fonts',
  		'settings' => 'eniva_content_font_css',
  		'type'     => 'url',
  	)
);





