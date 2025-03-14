<?php
/*
 * Plugin Name: Testimonials Post Type
 */
add_action( 'init', 'luna_testimonials_pt' );

function luna_testimonials_pt() {

$labels = array(

    'name'                     => __( 'Announcements', 'luna' ),
    'singular_name'            => __( 'Announcement', 'luna' ),
    'add_new'                  => __( 'Add New', 'luna' ),
    'add_new_item'             => __( 'Add New Announcement', 'luna' ),
    'edit_item'                => __( 'Edit Announcement', 'luna' ),
    'new_item'                 => __( 'New Announcement', 'luna' ),
    'view_item'                => __( 'View Announcement', 'luna' ),
    'view_items'               => __( 'View Announcements', 'luna' ),
    'search_items'             => __( 'Search Announcements', 'luna' ),
    'not_found'                => __( 'No Announcements found.', 'luna' ),
    'not_found_in_trash'       => __( 'No Announcements found in Trash.', 'luna' ),
    'parent_item_colon'        => __( 'Parent Announcements:', 'luna' ),
    'all_items'                => __( 'All Announcements', 'luna' ),
    'archives'                 => __( 'Announcement Archives', 'luna' ),
    'attributes'               => __( 'Announcement Attributes', 'luna' ),
    'insert_into_item'         => __( 'Insert into Announcement', 'luna' ),
    'uploaded_to_this_item'    => __( 'Uploaded to this Announcement', 'luna' ),
    'featured_image'           => __( 'Featured Image', 'luna' ),
    'set_featured_image'       => __( 'Set featured image', 'luna' ),
    'remove_featured_image'    => __( 'Remove featured image', 'luna' ),
    'use_featured_image'       => __( 'Use as featured image', 'luna' ),
    'menu_name'                => __( 'Announcements', 'luna' ),
    'filter_items_list'        => __( 'Filter Announcement list', 'luna' ),
    'filter_by_date'           => __( 'Filter by date', 'luna' ),
    'items_list_navigation'    => __( 'Announcements list navigation', 'luna' ),
    'items_list'               => __( 'Announcements list', 'luna' ),
    'item_published'           => __( 'Announcement published.', 'luna' ),
    'item_published_privately' => __( 'Announcement published privately.', 'luna' ),
    'item_reverted_to_draft'   => __( 'Announcement reverted to draft.', 'luna' ),
    'item_scheduled'           => __( 'Announcement scheduled.', 'luna' ),
    'item_updated'             => __( 'Announcement updated.', 'luna' ),
    'item_link'                => __( 'Announcement Link', 'luna' ),
    'item_link_description'    => __( 'A link to an announcement.', 'luna' ),

);

$args = array(

    'labels'                => $labels,
    'description'           => __( 'organize and manage company announcements', 'luna' ),
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'show_in_nav_menus'     => false,
    'show_in_rest'          => true,
    'menu_icon'             => 'dashicons-megaphone',
    'capability_type'       => 'post',
    'supports'              => array( 'title', 'editor', 'revisions' ),
    'has_archive'           => true,
    'rewrite'               => array( 'slug' => 'testimonial' )
    

);

register_post_type( 'luna_testimonial_pt', $args );

}