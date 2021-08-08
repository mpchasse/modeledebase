<?php

//support image à la une

add_theme_support('post-thumbnails');
set_post_thumbnail_size(360, 240);

//ajouter un nouveau format d'image
add_image_Size('vignette', 220, 100, true);

function new_excerpt_length($length)
{
    return 500; // Nombre de mots limite
}

add_filter('excerpt_length', 'new_excerpt_length');


//**********************MENU*********************

function creer_menu()
{
    register_nav_menu('menu_principal', 'Menu principal');
    register_nav_menu('menu_pied_de_page', 'Menu pied de page');

}

add_action('init', 'creer_menu');

register_nav_menus(array(
    'menu_principal' => 'Menu principal',
    'menu_footer' => 'Menu du pied de page',

));




//**********************CPT*********************

if (!function_exists('mpc_projet')) {

// Register Custom Post Type
    // Register Custom Post Type
    function mpc_projet()
    {

        $labels = array(
            'name' => _x('Projet', 'Post Type General Name', 'mpc_projet'),
            'singular_name' => _x('Projet', 'Post Type Singular Name', 'mpc_projet'),
            'menu_name' => __('Projet', 'mpc_projet'),
            'name_admin_bar' => __('Post Type', 'mpc_projet'),
            'archives' => __('Item Archives', 'mpc_projet'),
            'attributes' => __('Item Attributes', 'mpc_projet'),
            'parent_item_colon' => __('Parent Item:', 'mpc_projet'),
            'all_items' => __('Tous les projets', 'mpc_projet'),
            'add_new_item' => __('Ajouter un nouveau projet', 'mpc_projet'),
            'add_new' => __('Ajouter un projet', 'mpc_projet'),
            'new_item' => __('Nouveau projet', 'mpc_projet'),
            'edit_item' => __('Éditer un projet', 'mpc_projet'),
            'update_item' => __('MAJ un projet', 'mpc_projet'),
            'view_item' => __('View Item', 'mpc_projet'),
            'view_items' => __('View Items', 'mpc_projet'),
            'search_items' => __('Search Item', 'mpc_projet'),
            'not_found' => __('Not found', 'mpc_projet'),
            'not_found_in_trash' => __('Not found in Trash', 'mpc_projet'),
            'featured_image' => __('Featured Image', 'mpc_projet'),
            'set_featured_image' => __('Set featured image', 'mpc_projet'),
            'remove_featured_image' => __('Remove featured image', 'mpc_projet'),
            'use_featured_image' => __('Use as featured image', 'mpc_projet'),
            'insert_into_item' => __('Insert into item', 'mpc_projet'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'mpc_projet'),
            'items_list' => __('Items list', 'mpc_projet'),
            'items_list_navigation' => __('Items list navigation', 'mpc_projet'),
            'filter_items_list' => __('Filter items list', 'mpc_projet'),
        );
        $args = array(
            'label' => __('Projet', 'mpc_projet'),
            'description' => __('Projet', 'mpc_projet'),
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail'),
            'taxonomies' => array('category', 'post_tag'),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'page',
        );
        register_post_type('mpc_projet', $args);

    }

    add_action('init', 'mpc_projet', 0);
}



if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Header',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-general-settings',
    ));


}
