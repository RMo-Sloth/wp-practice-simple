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