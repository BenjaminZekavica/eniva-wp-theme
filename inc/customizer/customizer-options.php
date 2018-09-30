<?php
// Customizer for WordPress

// Load Range Values Framework
$controlwp = class_exists( 'WP_Customize_Control' ); 
if ( $controlwp ) {
  require_once __DIR__ . '/frameworks/range-values/class-customizer-range-value-control.php';
}

// Toggle Control
if ( $controlwp ) {
  require_once __DIR__ . '/frameworks/toggle-control/class-customizer-toggle-control.php';
}


// Add Custom Fields to Customizer 
function eniva_theme_customizer( $wp_customize ) {

  // Load Templates
  require_once __DIR__ . '/customizer-bg.php';
  require_once __DIR__ . '/customizer-logo.php';
  require_once __DIR__ . '/customizer-fonts.php';
  require_once __DIR__ . '/customizer-header.php';
  require_once __DIR__ . '/customizer-footer.php';
  require_once __DIR__ . '/customizer-colors.php';
  require_once __DIR__ . '/customizer-globals.php';

}
add_action( 'customize_register', 'eniva_theme_customizer' );