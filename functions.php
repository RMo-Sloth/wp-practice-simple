<?php
function simple_theme_setup(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'simple_theme_setup');

function set_excerpt_length() {
    return 25;
}
add_action('excerpt_length', 'set_excerpt_length');