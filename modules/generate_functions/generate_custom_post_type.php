<?php

    function banner_cpt() {  

        $labels = array(
            'name'                => __( 'Banner' ),
            'singular_name'       => __( 'Banner'),
            'menu_name'           => __( 'This is Template'),
            'parent_item_colon'   => __( 'Parent Banner'),
            'all_items'           => __( 'All Banner'),
            'view_item'           => __( 'View Banner'),
            'add_new_item'        => __( 'Add New Banner'),
            'add_new'             => __( 'Add New'),
            'edit_item'           => __( 'Edit Banner'),
            'update_item'         => __( 'Update Banner'),
            'search_items'        => __( 'Search Banner'),
            'not_found'           => __( 'Not Found'),
            'not_found_in_trash'  => __( 'Not found in Trash'),  
        );
        $args = array(
            'label'               => __( 'banner'),
            'description'         => __( 'Listed Banner for banner widget.'),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
            'public'              => true,
            'hierarchical'        => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'has_archive'         => true,
            'can_export'          => true,
            'exclude_from_search' => false,
                'yarpp_support'       => true, 
            'publicly_queryable'  => true,
            'capability_type'     => 'page'
        );
        register_post_type( 'banner', $args );
    }
    add_action( 'init', 'banner_cpt', 0 ); 

?>