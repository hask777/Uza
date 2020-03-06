<?php
// CONTACT CPT
function uza_portfolio_custom_post_type()
{
    $labels = array(
        'name'            => 'Portfolio',
        'singular_name'   => 'Portfolio',
        'menu'            => 'Portfolio',
        'name_admin_bar'  => 'Portfolio',
    );
    $args = array(
        'labels'          => $labels,
        'public'          => true,
        'show_ui'         => true,
        'show_in_menu'    => true,
        'capability_type' => 'post',
        'hierarchical'    => false,
        'menu_position'   => 26,
        'menu_icon'       => 'dashicons-format-image',
        'supports'        => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats'),
        'show_in_rest'    => true
    );
    register_post_type( 'portfolio', $args );

    // Custom Portfolio taxonomy UI UX Design
    $labels = array(
        'name'            => 'Category',
        'singular_name'   => 'Category',
        'menu_name'       => 'Category',
        'name_admin_bar'  => 'Category',
    );
    $args = array(
        'labels'          => $labels,
        'show_ui'         => true,
        'show_in_menu'    => true,
        'hierarchical'    => true,
    );
    register_taxonomy('portfolio_cat', 'portfolio', $args );

}
add_action('init', 'uza_portfolio_custom_post_type');
