<?php
/**
 * Plugin Name: Multi-Widget Plugin
 * Description:  Boilerplate for plugin that can be used with widget templates control
 * @link              www.linkedin/arnelacion
 * @since             1.0.0
 * @package           Pl_banner
 * @wordpress-plugin
 * Plugin Name:       Multi-Widget Plugin
 * Plugin URI:        #
 * Version:           1.0.0
 * Author:            Arnold Elacion Jr
 * Author URI:        www.linkedin/arnelacion
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pl_banner
 * Domain Path:       /languages
 */
if ( ! defined( 'ABSPATH' ) ) exit;
define('ECW_PLUGIN_PLUGIN_PATH', plugin_dir_path( __FILE__ ));
define( 'ECW_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );

// plug it in
add_action('plugins_loaded', 'ecw_require_files');
function ecw_require_files() {
    
    session_start();
    
    require_once ECW_PLUGIN_PLUGIN_PATH.'modules.php';   

    require_once ECW_PLUGIN_PLUGIN_PATH.'modules/generate_functions/api/submition_control.php';

    require_once ECW_PLUGIN_PLUGIN_PATH.'modules/generate_functions/generate_db_table.php';
    require_once ECW_PLUGIN_PLUGIN_PATH.'modules/generate_functions/generate_custom_post_type.php';
    require_once ECW_PLUGIN_PLUGIN_PATH.'modules/generate_functions/generate_custom_post_type_taxonomy.php';
    require_once ECW_PLUGIN_PLUGIN_PATH.'modules/generate_functions/generate_custom_post_type_meta_box.php';
    require_once ECW_PLUGIN_PLUGIN_PATH.'modules/generate_functions/unregister_taxonomies.php';  

}


// enqueue your custom style/script as your requirements
// add_action( 'wp_enqueue_scripts', 'ecw_enqueue_styles', 25);
function ecw_enqueue_styles() {
    wp_enqueue_style( 'elementor-custom-widget-editor', ECW_PLUGIN_DIR_URL . 'assets/css/editor.css');
}

function load_scripts() {
    wp_enqueue_style('editor.css', get_template_directory_uri() . 'assets/css/editor.css');
}

add_action('wp_enqueue_scripts', 'load_scripts');    
add_action('admin_enqueue_scripts', 'load_scripts');