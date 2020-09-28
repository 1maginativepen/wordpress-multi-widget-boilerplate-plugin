<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Sample_Widget_4 extends Widget_Base {

	public function get_name() {

		return 'Sample_Widget_4';
	}

	public function get_title() {
		return __( 'Sample_Widget_4', 'elementor-custom-widget' );
	}

	public function get_icon() {
		return 'eicon-post-list';
	}
	protected function _register_controls() {  

		$this->start_controls_section(
			'section_banner_select',
			[
				'label' => esc_html__( 'Details', 'elementor-custom-widget' ),
			]
		); 
 

		// $this->add_control(
		// 	'banner_caption',
		// 	[
		// 		'label' => __( 'Caption', 'plugin-domain' ),
		// 		'type' => Controls_Manager::TEXT, 
		// 		'placeholder' => 'Banner Caption Here ...'
		// 	]
		// );   

		// $this->end_controls_section();
		


	}  

	protected function render( $instance = [] ) {
		 
		$settings = $this->get_settings_for_display(); 
		
		//  html for front end
	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {}

}
\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Sample_Widget_4() );
