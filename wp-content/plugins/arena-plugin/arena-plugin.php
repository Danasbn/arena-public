<?php
/**
 * Plugin Name: arena-plugin
 */


if (!defined('WPINC')) {
    die;
}

if (!function_exists('arena_registerCPT')) {
    function arena_registerCPT()
    {
        $options = require(__DIR__ . '/cpt-descriptor.php');
        
        // importing all the declared cpts in cpt-descriptor.php
        foreach ($options as $cptName => $cptOptions) {
            register_post_type(
                $cptName,
                $cptOptions
            );
        }
    }
}

add_action('init', 'arena_registerCPT');