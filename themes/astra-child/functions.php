<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
// function child_enqueue_styles() {

// 	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

    

// }

// add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );




function clair_enqueue_styles()
{


	wp_enqueue_style('tailwind_output', get_stylesheet_directory_uri() . '/tailwind_output.css', array(), 'all');

}

add_action('wp_enqueue_scripts', 'clair_enqueue_styles', 15);




// Created Option Pages 
if( function_exists('acf_add_options_page') ) {
    $option_page = acf_add_options_page(array(
        'page_title'    => 'Footer Options',
        'menu_title'    => 'Footer Options',
        'menu_slug'     => 'footer_options',
        'capability'    => 'edit_posts',
        'redirect'  => false
    ));

	// new-code

	acf_add_options_page(array(
        'page_title'    => 'Header Settings',
        'menu_title'    => 'Header Settings',
        'menu_slug'     => 'header_settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

	acf_add_options_page(array(
        'page_title'    => 'Global Settings',
        'menu_title'    => 'Global Settings',
        'menu_slug'     => 'global_settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

}
