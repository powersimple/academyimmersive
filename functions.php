<?php
function academyimmersive_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'academyimmersive'),
    ));

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Enable support for custom logo.
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'academyimmersive_theme_setup');

function academyimmersive_enqueue_scripts() {
    wp_enqueue_style('academyimmersive-style', get_stylesheet_uri());
    wp_enqueue_style('academyimmersive-custom-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('academyimmersive-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'academyimmersive_enqueue_scripts');
function academyimmersive_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'academyimmersive'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'academyimmersive'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'academyimmersive_widgets_init');