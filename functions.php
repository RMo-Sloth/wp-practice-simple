<?php
function simple_theme_setup(){
    add_theme_support('post-thumbnails');

    register_nav_menus( [
        'primary' => __('Primary Menu')
    ] );
}
add_action('after_setup_theme', 'simple_theme_setup');

function get_excerpt_length() {
    return 25;
}
add_action('excerpt_length', 'get_excerpt_length');

function setup_sidebars() {
    register_sidebar( [
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="side-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ] );
}
add_action('widgets_init', 'setup_sidebars');