<?php
/**
 * @package   WordPress Dynamic CSS
 * @version   1.0.5
 * @author    Askupa Software <contact@askupasoftware.com>
 * @link      https://github.com/askupasoftware/wp-dynamic-css
 * @copyright 2016 Askupa Software
 */

if( !function_exists('wp_dynamic_css_enqueue') )
{
    /**
     * Enqueue a dynamic stylesheet
     *
     * This will either print the compiled version of the stylesheet to the
     * document's <head> section, or load it as an external stylesheet if $print
     * is set to false
     *
     * @param string $handle The stylesheet's name/id
     * @param string $path The absolute path to the dynamic CSS file
     * @paran boolean $print Whether to print the compiled CSS to the document
     * head, or include it as an external CSS file
     * @param boolean $minify Whether to minify the CSS output
     * @param boolean $cache Whether to store the compiled version of this
     * stylesheet in cache to avoid compilation on every page load.
     */
    function wp_dynamic_css_enqueue( $handle, $path, $print = true, $minify = false, $cache = false )
    {
        $dcss = DynamicCSSCompiler::get_instance();
        $dcss->register_style( $handle, $path, $print, $minify, $cache );
    }
}

if( !function_exists('wp_dynamic_css_set_callback') )
{
    /**
     * Set the value retrieval callback function
     *
     * Set a callback function that will be used to get the values of the
     * variables when the dynamic CSS file is compiled. The function accepts 1
     * parameter which is the name of the variable, without the $ sign
     *
     * @param string $handle The name of the stylesheet to be associated with this
     * callback function
     * @param string|array $callback A callback (or "callable" as of PHP 5.4)
     * can either be a reference to a function name or method within an
     * class/object.
     */
    function wp_dynamic_css_set_callback( $handle, $callback )
    {
        $dcss = DynamicCSSCompiler::get_instance();
        $dcss->register_callback( $handle, $callback );
    }
}

if( !function_exists('wp_dynamic_css_clear_cache') )
{
    /**
     * Clear the cached compiled CSS for the given handle.
     *
     * Registered dynamic stylesheets that have the $cache flag set to true are
     * compiled only once and then stored in cache. Subsequesnt requests are
     * served statically from cache until wp_dynamic_css_clear_cache() is called
     * and clears it, forcing the compiler to recompile the CSS.
     *
     * @param string $handle The name of the stylesheet to be cleared from cache
     */
    function wp_dynamic_css_clear_cache( $handle )
    {
        $cache = DynamicCSSCache::get_instance();
        $cache->clear( $handle );
    }
}

if( !function_exists('wp_dynamic_css_register_filter') ) {

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



    function wp_dynamic_css_register_filter( $handle, $filter_name, $callback )
    {
        $dcss = DynamicCSSCompiler::get_instance();
        $dcss->register_filter( $handle, $filter_name, $callback );
    }
}
