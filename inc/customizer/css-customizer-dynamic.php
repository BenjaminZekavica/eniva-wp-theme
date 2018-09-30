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
    $footerpaddingtop = get_theme_mod('eniva_footer_padding_top_size');
    $footerpaddingbottom = get_theme_mod('eniva_footer_padding_bottom_size'); 
    $footermargintop = get_theme_mod('eniva_footer_margin_size');  
    $footerbgcolor = get_theme_mod('footer_bg_color');
    $footercolor = get_theme_mod('footer_bg_color_text');
    $mainheaderheigt = get_theme_mod('eniva_main_header_height');
    $removeboxshadow = get_theme_mod('eniva_remove_box_shadow');
    $wrappertoleft = get_theme_mod('eniva_box_left');
    $boxshadowundermainmenu = get_theme_mod('eniva_main_menu_box_shadow');
    $bgoptions = get_theme_mod('background_image');
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

      body.custom-background {
          <?php
            if ( $bgoptions ) { ?>
              background-color: transparent;
      <?php } ?>
      }

      body #wrapper {
        background-color: <?php echo $wrapper_content_bg; ?>;

        <?php

          if ($maxwidthboxlayout) {
            echo '
              max-width: '. $maxwidthboxlayout .'px;
            ';
          }

          if ($removeboxshadow) {
            echo '
              box-shadow: none;
            ';
          }

          if ($wrappertoleft) {
            echo '
              margin: 0;
            ';
          }
         ?>
      }

      <?php
        if ($removewrapper) {
          echo '
            body {
              background-color: transparent;
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

        <?php

          if ($mainheaderheigt) {
            echo 'height:'. $mainheaderheigt .'px;';
          }

          if ($boxshadowundermainmenu) {
            echo '
              -webkit-box-shadow: 0px 2px 3px #40404057;
              box-shadow: 0px 2px 3px #40404057;
              position: relative;
              top: 0;
              left: 0;
            ';
          }

        ?>

      }
      #wrapper header.top-header-outer .top-header-inner-wrapper .top-menu ul li a {
        font-size: <?php echo $topheaderfontsize; ?>px;
        color: <?php echo $top_header_link_color; ?>;
      }
      #wrapper header.top-header-outer .top-header-inner-wrapper .top-menu ul li a:hover{
        color: <?php echo $top_header_link_color_hover;?>;
      }
      #wrapper header.main-header-outer .main-header-inner-wrapper .logo-section img {
        width: <?php echo $logosize; ?>px;
      }
      #wrapper header.main-header-outer .main-header-inner-wrapper .main-navigation nav ul li a {
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
        padding-top: <?php echo $footerpaddingtop; ?>px; 
        margin-top: <?php echo $footermargintop; ?>px; 
        padding-bottom: <?php echo $footerpaddingbottom; ?>
      }

      footer.footer-section-outer-wrapper a {
        color: <?php echo $footercolor; ?>;
      }


    </style>
