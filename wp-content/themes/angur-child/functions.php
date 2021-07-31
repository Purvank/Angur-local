<?php
if( !defined('ABSPATH')) exit;
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);

if( ! function_exists( 'enqueue_child_theme_styles' ) ) {
    function enqueue_child_theme_styles()
    {
        // parent style ( this loads the css from the main folder )
        wp_enqueue_style('parent-style', get_template_directory_uri() .'/style.css');
        //wp_enqueue_style('bootstrap-style', get_stylesheet_directory_uri() .'/bootstrap.min.css');
        //wp_enqueue_style('font-icon', get_stylesheet_directory_uri() .'/css/font-awesome.min.css');
        // child style ( this loads the css from the child folder after parent-style )
        

        wp_enqueue_style('bootstrap-style', get_stylesheet_directory_uri() .'/css/bootstrap.css', array('parent-style'));

        wp_enqueue_style('child-style', get_stylesheet_directory_uri() .'/style.css', array('parent-style'));

        wp_enqueue_style('font-awesome-style', get_stylesheet_directory_uri() .'/css/font-awesome.css', array('parent-style'));

        wp_enqueue_style('responsive', get_stylesheet_directory_uri() .'/css/responsive.css');

        //wp_dequeue_style( 'twentytwenty-style' );
    }

}


