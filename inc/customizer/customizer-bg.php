<?php



    $wp_customize->add_section( 'background_image', array(
        'title'          => __( 'Background Image' ),
        'theme_supports' => 'custom-background',
        'priority'       => 20,
    ) );

    $wp_customize->add_setting( 'background_image', array(
        'default'        => get_theme_support( 'custom-background', 'default-image' ),
        'theme_supports' => 'custom-background',
    ) );

    $wp_customize->add_setting( new WP_Customize_Background_Image_Setting( $wp_customize, 'background_image_thumb', array(
        'theme_supports' => 'custom-background',
    ) ) );

    $wp_customize->add_control( new WP_Customize_Background_Image_Control( $wp_customize ) );

    $wp_customize->add_setting( 'background_repeat', array(
        'default'        => 'repeat',
        'theme_supports' => 'custom-background',
    ) );

    $wp_customize->add_control( 'background_repeat', array(
        'label'      => __( 'Background Repeat' ),
        'section'    => 'background_image',
        'type'       => 'radio',
        'choices'    => array(
            'no-repeat'  => __('No Repeat'),
            'repeat'     => __('Tile'),
            'repeat-x'   => __('Tile Horizontally'),
            'repeat-y'   => __('Tile Vertically'),
        ),
    ) );

    $wp_customize->add_setting( 'background_position_x', array(
        'default'        => 'left',
        'theme_supports' => 'custom-background',
    ) );

    $wp_customize->add_control( 'background_position_x', array(
        'label'      => __( 'Background Position' ),
        'section'    => 'background_image',
        'type'       => 'radio',
        'choices'    => array(
            'left'       => __('Left'),
            'center'     => __('Center'),
            'right'      => __('Right'),
        ),
    ) );

    $wp_customize->add_setting( 'background_attachment', array(
        'default'        => 'fixed',
        'theme_supports' => 'custom-background',
    ) );

    $wp_customize->add_control( 'background_attachment', array(
        'label'      => __( 'Background Attachment' ),
        'section'    => 'background_image',
        'type'       => 'radio',
        'choices'    => array(
            'fixed'      => __('Fixed'),
            'scroll'     => __('Scroll'),
        ),
    ) );
