<?php

        function link_affiliate_banner() {

            add_meta_box(
                'banner-link', 
                'This is template ',
                'banner_link_content',
                'banner',
                'normal',
                'high'
            ); 
        } 

        add_action( 'add_meta_boxes', 'link_affiliate_banner' ); 

        function banner_link_content() {  
            require_once ECW_PLUGIN_PLUGIN_PATH.'modules/generate_functions/elements/css/main.php'; 

            $_SESSION["the_ID"] = get_the_ID();  

            // html for the admin here 
        }
?>