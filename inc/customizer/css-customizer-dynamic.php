<?php
    // Define Variables

    $bg_color = get_option('bg_color');
    $main_color = get_option('main_color');
    $top_header_color = get_option('top_header_color');
    $wrapper_content_bg = get_option('wrapper_content_bg');
    $link_color_static = get_option('link_color_static');
    $link_color_hover = get_option('link_color_hover');
    $main_header_color = get_option('main_header_color');
    $logosize = get_theme_mod( 'eniva_header_options', '169');
    $topheaderheight = get_theme_mod('eniva_top_header_height', '39');
    $topheaderfontsize = get_theme_mod('eniva_top_header_menu_font_size', '15');
    $top_header_link_color = get_theme_mod('top_header_link_color');
    $top_header_link_color_hover = get_theme_mod('top_header_link_color_hover');
    $eniva_main_menu_font_size = get_theme_mod('eniva_main_menu_font_size');
    $mainmenucolor = get_theme_mod('main_header_linkcolor');
    $mainmenucolorhover = get_theme_mod('main_header_linkcolor_hover');
    $removewrapper = get_theme_mod('eniva_remove_wrapper');
    $max_width_fullwidth_content = get_theme_mod('eniva_container_width_max_width_fluid');
    $maxwidthboxlayout = get_theme_mod('eniva_max_width_wrapper');
    $footerbgcolor = get_theme_mod('footer_bg_color');
    $footercolor = get_theme_mod('footer_bg_color_text');
?>

    <style type="text/css">

      /* Globals */

      ::selection {
        background: <?php echo $main_color; ?> ;
        color: #ffffff;
      }
      ::-moz-selection {
        background: <?php echo $main_color; ?>;
        color: #ffffff;
      }

      /* Wrapper Content */

      body #wrapper {
        background-color: <?php echo $wrapper_content_bg; ?>;

        <?php

          if ($maxwidthboxlayout) {
            echo '
              max-width: '. $maxwidthboxlayout .'px;
            ';
          }

         ?>

      }

      <?php
        if ($removewrapper) {
          echo '
            body {
              background-color: none;
            }
            body #wrapper {
              max-width: 100%;
              width: 100%;
              box-shadow: none;
            }
            .container {
              max-width: '. $max_width_fullwidth_content .'px;
              margin: 0 auto;
            }
          ';
          }
      ?>

      /* Link */

      a {
        color: <?php echo $link_color_static; ?>;
      }
      a:hover {
        color: <?php echo $link_color_hover; ?>;
      }

      /* Header Options */

      header.top-header-outer {
        background-color: <?php echo $top_header_color; ?>;
        min-height: <?php echo $topheaderheight; ?>px;
      }
      header.main-header-outer {
        background-color: <?php echo $main_header_color; ?>;
      }
      header.top-header-outer .top-header-inner-wrapper .top-menu ul li a {
        font-size: <?php echo $topheaderfontsize; ?>px;
        color: <?php echo $top_header_link_color; ?>;
      }
      header.top-header-outer .top-header-inner-wrapper .top-menu ul li a:hover{
        color: <?php echo $top_header_link_color_hover;?>;
      }
      header.main-header-outer .main-header-inner-wrapper .logo-section img {
        width: <?php echo $logosize; ?>px;
      }
      header.main-header-outer .main-header-inner-wrapper .main-navigation ul li a {
        font-size: <?php echo $eniva_main_menu_font_size; ?>px;
        color: <?php echo $mainmenucolor; ?>;
        <?php
          if (get_theme_mod('eniva_main_menu_font_remove_uppercase')) {
                echo 'text-transform: unset; ';
          }
        ?>
      }
      header.main-header-outer .main-header-inner-wrapper .main-navigation ul li a:hover {
        color: <?php echo $mainmenucolorhover; ?>;
      }

      /* Footer */

      footer.footer-section-outer-wrapper {
        background-color: <?php echo $footerbgcolor; ?>;
        color: <?php echo $footercolor; ?>;
      }

      footer.footer-section-outer-wrapper a {
        color: <?php echo $footercolor; ?>;
      }


    </style>
