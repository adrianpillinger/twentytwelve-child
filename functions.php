<?php
/**
 * Twenty Twelve child theme functions and definitions.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 * http://wordpress.stackexchange.com/questions/26822/how-to-override-javascript-files-in-child-theme
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

 
//
function twentytwelve_child_scripts_styles()
{
    wp_dequeue_script( 'twentytwelve-navigation' );
    wp_enqueue_script( 'twentytwelve-child-navigation', get_stylesheet_directory_uri() . '/js/navigation.js', array(), '1.0', true );
    wp_enqueue_script( 'twentytwelve-child-polyfill', get_stylesheet_directory_uri() . '/js/respond.min.js', array(), '1.0', true );
}
add_action( 'wp_print_scripts', 'twentytwelve_child_scripts_styles' );

