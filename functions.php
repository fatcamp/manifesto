<?php

//Some simple code for our widget-enabled sidebar
if ( function_exists('register_sidebar') )
    register_sidebar();

//Add support for WordPress 3.0's custom menus
add_action( 'init', 'register_my_menu' );


//Enable css media queries in older browsers
// function mediaqueries() {
//     wp_enqueue_script('mediaqueries',
//      get_template_directory_uri() . '/js/libs/respond.min.js');          
// }    
 
// add_action('wp_enqueue_scripts', 'mediaqueries');


//Register area for custom menu
function register_my_menu() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'secondary-menu' => __( 'Secondary Menu' )
        )
    );
}

//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 215, 215, true );