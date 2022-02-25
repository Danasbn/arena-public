<?php

if (!function_exists('arena_initialize')) {
    function arena_initialize()
    {
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('custom-logo');

    }
}

add_action('after_setup_theme', 'arena_initialize');


?> 