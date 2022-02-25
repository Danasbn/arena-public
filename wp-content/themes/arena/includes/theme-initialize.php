<?php

if (!function_exists('arena_initialize')) {
    function arena_initialize()
    {
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_image_size('mini', 250, 250, true);
        add_image_size('homepage-thumb', 170, 250);
        add_image_size('singlepost-thumb', 700, 9999);
    }
}

add_action('after_setup_theme', 'arena_initialize');


?> 