<?php
 
    global $wpdb;     
      
    //saving query
    if (  isset( $_POST['save_from_plugin'] ) ) {   
        $save_data = 
            $wpdb->get_results( 
                "INSERT INTO `wp_plugin_custom_banner`
                    (`ID`, `banner`, `language`, `link`, `image_path`) 
                VALUES 
                    (NULL,  " . $_SESSION["the_ID"] . ", 'N/A', 'N/A', 'N/A')", OBJECT );  
    }  
    
    //update query
    if (  isset( $_POST['update'] ) ) {  
        $update_data = 
            $wpdb->get_results( 
                "UPDATE `wp_plugin_custom_banner` 
                 SET
                    `language` = '". $_POST['language-select']."' , `link` = '". $_POST['language-link']."' , `image_path` = '". $_POST['image-link']."'
                WHERE 
                    `wp_plugin_custom_banner`.`ID` = ".$_POST['the_ID'], 
                OBJECT );   
    }
 
    //delete query
    if (  isset( $_POST['delete'] ) ) {  
        $delete_data = 
            $wpdb->get_results( 
                "DELETE FROM `wp_plugin_custom_banner`
                WHERE `wp_plugin_custom_banner`.`ID` =  ".$_POST['the_ID'], OBJECT );  
    }
 

?>