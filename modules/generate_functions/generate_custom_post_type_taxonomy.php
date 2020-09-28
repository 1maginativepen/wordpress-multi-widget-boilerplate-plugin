<?php
    
    add_action( 'init', 'language_banner_banner_holder_taxonomy', 0 );
    function language_banner_banner_holder_taxonomy() {
        
        $labels = array(
            'name' => _x( 'Language', 'taxonomy general name' ),
            'singular_name' => _x( 'Language', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Types' ),
            'all_items' => __( 'All Types' ),
            'parent_item' => __( 'Parent Type' ),
            'parent_item_colon' => __( 'Parent Type:' ),
            'edit_item' => __( 'Edit Language ' ), 
            'update_item' => __( 'Update Language ' ),
            'add_new_item' => __( 'Add New Language ' ),
            'new_item_name' => __( 'New Language ' ),
            'menu_name' => __( 'Language' ),
        ); 	
        
        register_taxonomy('banner_language',array('banner'), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'language_name' ),
        )); 
    }  

?>