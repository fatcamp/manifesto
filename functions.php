<?php

//Load theme scripts
function THEME_NAME_scripts() {
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'THEME_NAME_scripts');

//Register widget-enabled sidebar
add_action( 'widgets_init', 'THEME_NAME_widgets_init' );
function THEME_NAME_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'THEME_NAME' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'THEME_NAME' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}

//Register area for custom menu
function register_my_menu() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'secondary-menu' => __( 'Secondary Menu' )
        )
    );
}
add_action( 'init', 'register_my_menu' );

//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 215, 215, true );
