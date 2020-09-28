<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Main Modules class
 */
class Modules {

    /**
     * @var Module_Base[]
     */
    private  static $instance = null;

    public static function get_instance() {
        if ( ! self::$instance )
            self::$instance = new self;
        return self::$instance;
    }

    public function init(){
        add_action( 'elementor/widgets/widgets_registered', array( $this, 'widgets_registered' ) ); 
    } 

    public function widgets_registered() {
        // We check if the Elementor plugin has been installed / activated.
        if( defined('ELEMENTOR_PATH') && class_exists('Elementor\Widget_Base') ){
            $path = ECW_PLUGIN_PLUGIN_PATH.'modules/*/widgets'; 
            $module_name = glob($path.'/widget-*.php');
            foreach ( $module_name as $widget ) {
                require_once( $widget );
            }
        }
    }
}
Modules::get_instance()->init();

