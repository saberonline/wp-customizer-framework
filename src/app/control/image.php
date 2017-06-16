<?php
/**
 * @package inc2734/wp-view-controller
 * @author inc2734
 * @license GPL-2.0+
 */

class Inc2734_WP_Customizer_Framework_Control_Image extends Inc2734_WP_Customizer_Framework_Abstract_Control {

	/**
	 * Add control
	 *
	 * @param WP_Customize_Manager $wp_customize
	 * @see https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
	 * @see https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
	 */
	public function register_control( WP_Customize_Manager $wp_customize ) {
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				$this->get_id(),
				array_merge(
					[
						'sanitize_callback' => 'esc_url_raw',
					],
					$this->_generate_register_control_args()
				)
			)
		);
	}
}
