<?php

    add_action('init', 'init_remove_support',100);
    add_action( 'admin_menu' , 'init_remove_support' );
    function init_remove_support(){
        $post_type = 'banner';
        remove_post_type_support( $post_type, 'editor');  
    }  

?>