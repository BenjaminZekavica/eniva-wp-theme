<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<!DOCTYPE html>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <title><?php echo get_bloginfo('name'); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php wp_head(); ?>
    <?php require_once __DIR__ . '/inc/customizer/css-customizer-dynamic.php'; ?>
  </head>
  <body <?php body_class(); ?>>
    <div id="wrapper">
      <header class="top-header-outer">
        <div class="top-header-inner-wrapper container">
          <div class="icons">
          </div>
          <div class="top-menu">
            <?php
              wp_nav_menu( array(
                'theme_location' => 'top_header',
                'container' => false
              ));
            ?>
          </div>
        </div>
      </header>
      <header class="main-header-outer">
        <div class="main-header-inner-wrapper container">
          <a class="logo-section" href="<?php home_url(); ?>">

              <?php
              if ( get_theme_mod( 'your_theme_logo' ) ) : ?>

                <img src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>" alt="<?php echo get_bloginfo('name'); ?>" title="<?php echo get_bloginfo('name'); ?>" class="img-responsive" />

              <?php
              else : ?>

                <div class="wp-default-title--block">
                  <h1 class="site-title">
                    <?php bloginfo( 'name' ); ?>
                  </h1>
                  <p>
                    <?php bloginfo( 'description' ); ?>
                  </p>
              </div>

              <?php endif; ?>

          </a>
          <div class="main-navigation">
            <nav>
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'main_header_menu',
                  'container' => false
                ));
              ?>
            </nav>
          </div>
        </div>
      </header>
