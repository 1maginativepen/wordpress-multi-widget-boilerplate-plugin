<?php

    global $table_prefix, $wpdb;
    
    $wp_track_table = $table_prefix . "plugin_custom_banner";

    #Check to see if the table exists already, if not, then create it

    if($wpdb->get_var( "show tables like '$wp_track_table'" ) != $wp_track_table) 
    {
        $sql="CREATE TABLE `pl_plugin_custom_banner` ( 
            `ID` INT NOT NULL AUTO_INCREMENT ,  
            `banner` VARCHAR(50) NOT NULL ,  
            `language` VARCHAR(10) NOT NULL ,  
            `link` VARCHAR(255) NOT NULL ,  
            `image_path` VARCHAR(255) NOT NULL ,    
        PRIMARY KEY  (`ID`)) ENGINE = InnoDB;";

        require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
        dbDelta($sql);
    }  

?>