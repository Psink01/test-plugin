<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Events Post Type
 *
 */

class Test_Plugin_Event_Post_type {

    public function __construct()
    {
        add_action( 'init', array( $this, 'test_plugin_events_post_type' ) );
    }

    public function test_plugin_events_post_type() 
    {

        $event_labels = array(
            'name'               => _x( 'Events', 'post type general name', 'test-plugin' ),
            'singular_name'      => _x( 'Event', 'post type singular name', 'test-plugin' ),
            'menu_name'          => _x( 'Events', 'admin menu', 'test-plugin' ),
            'name_admin_bar'     => _x( 'Event', 'add new on admin bar', 'test-plugin' ),
            'add_new'            => _x( 'Add New', 'Event', 'test-plugin' ),
            'add_new_item'       => __( 'Add New Event', 'test-plugin' ),
            'new_item'           => __( 'New Event', 'test-plugin' ),
            'edit_item'          => __( 'Edit Event', 'test-plugin' ),
            'view_item'          => __( 'View Event', 'test-plugin' ),
            'all_items'          => __( 'All Events', 'test-plugin' ),
            'search_items'       => __( 'Search Events', 'test-plugin' ),
            'parent_item_colon'  => __( 'Parent Events:', 'test-plugin' ),
            'not_found'          => __( 'No Events Found.', 'test-plugin' ),
            'not_found_in_trash' => __( 'No Events Found in Trash.', 'test-plugin' )
        );
        $event_args = array(
            'labels'             => $event_labels,
            'description'        => __( 'Description.', 'test-plugin' ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'test-plugin-event', 'with_front' => false ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'menu_icon'          => 'dashicons-calendar',
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
        );
        register_post_type( 'test-plugin-event', $event_args );

        // Add new taxonomy for events
        $event_cat_labels = array(
            'name'              => _x( 'Event Types', 'taxonomy general name', 'test-plugin' ),
            'singular_name'     => _x( 'Event Type', 'taxonomy singular name', 'test-plugin' ),
            'search_items'      => __( 'Search Event Types', 'test-plugin' ),
            'all_items'         => __( 'All Event Types', 'test-plugin' ),
            'parent_item'       => __( 'Parent Event Type', 'test-plugin' ),
            'parent_item_colon' => __( 'Parent Event Type:', 'test-plugin' ),
            'edit_item'         => __( 'Edit Event Type', 'test-plugin' ),
            'update_item'       => __( 'Update Event Type', 'test-plugin' ),
            'add_new_item'      => __( 'Add New Event Type', 'test-plugin' ),
            'new_item_name'     => __( 'New Event Type Name', 'test-plugin' ),
            'menu_name'         => __( 'Event Type', 'test-plugin' ),
        );

        $event_cat_args = array(
            'hierarchical'      => true,
            'labels'            => $event_cat_labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'test-plugin-event-type' ),
        );

        register_taxonomy( 'test-plugin-event-type', array( 'test-plugin-event' ), $event_cat_args );

        
    }
    
}

new Test_Plugin_Event_Post_type();
