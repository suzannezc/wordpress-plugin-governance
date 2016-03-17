<?php

add_action( 'init', 'policies' );

// Add the Policies Post Type

function wrdsb_policies_init() {
  $labels = array(
    'name'                => __( 'Policies', 'policies', 'wrdsb-governance' ),
    'singular_name'       => __( 'Policy', 'policy', 'wrdsb-governance' ),
    'menu_name'           => __( 'Policies', 'admin menu', 'wrdsb-governance' ),
    'name_admin_bar'      => __( 'Policies', 'add new on admin bar', 'wrdsb-governance' ),
    'add_new'             => __( 'Add New', 'Policy', 'wrdsb-governance' ),
    'add_new_item'        => __( 'Add New Policy', 'wrdsb-governance' ),
    'new_item'            => __( 'New Policy', 'wrdsb-governance' ),
    'edit_item'           => __( 'Edit Policy', 'wrdsb-governance' ),
    'view_item'           => __( 'View Policy', 'wrdsb-governance' ),
    'all_items'           => __( 'All Policies', 'wrdsb-governance' ),
    'search_items'        => __( 'Search Policies', 'wrdsb-governance' ),
    'parent_item_colon'   => __( 'Parent Policy:', 'wrdsb-governance' ),
    'not_found'           => __( 'No policies found.', 'wrdsb-governance' ),
    'not_found_in_trash'  => __( 'No policies found in Trash.', 'wrdsb-governance' )
  );

  $args = array(
        'labels'              => $labels,
        'public'              => false,
        'publicly_queryable'  => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'imgurl',
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'book' ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'Hierarchical’        => false,
        'menu_position'       => null,
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

	register_post_type( 'policies', $args);
}
