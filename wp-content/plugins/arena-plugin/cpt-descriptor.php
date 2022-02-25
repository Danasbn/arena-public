<?php
// array of CPT possible fields. Array is called by the arena_registerCPT() function in arena_plugin.php.

return [

    'Products' => [
        'label' => 'Produits',
        'public' => true,
        /* 'capability_type' => 'post', */
        /* 'map_meta_cap' => true, */
        'show_in_rest' => true,
        'menu_icon'   => 'dashicons-products',
        'supports' =>
        [
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'author'
        ],

    ],
    /*  'exemple_' => [
        'name' => 'exemple_name',
        'label' => 'exemple_label',
        'singular_label' => 'exemple_cpt',
        'description' => '',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'delete_with_user' => false,
        'show_in_rest' => true,
        'rest_base' => '',
        'rest_controller_class' => '',
        'has_archive' => false,
        'has_archive_string' => '',
        'exclude_from_search' => false,
        'capability_type' => 'exemple_capability',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => true,
        'rewrite_slug' => '',
        'rewrite_withfront' => true,
        'query_var' => true,
        'query_var_slug' => '',
        'menu_position' => '',
        'show_in_menu' => true,
        'show_in_menu_string' => '',
        'menu_icon' => '',
        'supports' =>
        [
            0 => 'title',
            1 => 'editor',
            2 => 'thumbnail',
        ],
        'taxonomies' => [],
        'labels' => [
            'menu_name' => 'exemple_labelname',
            'all_items' => '',
            'add_new' => 'Create new exemple_',
            'add_new_item' => 'Add new exemple_',
            'edit_item' => 'Edit exemple_',
            'new_item' => 'New exemple_',
            'view_item' => '',
            'view_items' => '',
            'search_items' => '',
            'not_found' => '',
            'not_found_in_trash' => '',
            'parent_item_colon' => '',
            'featured_image' => '',
            'set_featured_image' => '',
            'remove_featured_image' => '',
            'use_featured_image' => '',
            'archives' => '',
            'insert_into_item' => '',
            'uploaded_to_this_item' => '',
            'filter_items_list' => '',
            'items_list_navigation' => '',
            'items_list' => '',
            'attributes' => '',
            'name_admin_bar' => '',
            'item_published' => '',
            'item_published_privately' => '',
            'item_reverted_to_draft' => '',
            'item_scheduled' => '',
            'item_updated' => '',
        ],
        'custom_supports' => '',
    ], */
];
