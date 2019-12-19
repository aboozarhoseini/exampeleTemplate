<?php

add_action('init','download_custom_post_type_callback');



function download_custom_post_type_callback() {
    $labels = array(
        'name'                  => 'موزیک ',
        'singular_name'         =>'موزیک',
        'name_admin_bar'        => 'موزیک',
        'add_new'               => 'موزیک جدید',
        'add_new_item'          => ' موزیک جدید',
        'new_item'              => 'موزیک جدید',
        'edit_item'             =>'ویرایش موزیک',
        'view_item'             => 'نمایش موزیک ها',
        'all_items'             => 'نمایش همه موزیک ها',
        'search_items'          => 'جستجو در موزیک ها',
        'parent_item_colon'     => 'موزیک ها در : ',
        'not_found'             => 'موزیکی یافت نشد',
        'not_found_in_trash'    =>'موزیکی در سطل زباله یافت نشد',
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'music' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'=>'dashicons-controls-volumeon',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments',''),
    );
 
    register_post_type( 'music', $args );
}
