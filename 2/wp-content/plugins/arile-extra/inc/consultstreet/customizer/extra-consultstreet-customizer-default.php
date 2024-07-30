<?php
/**
 *
 * @package arile-extra
 */			

if ( ! function_exists( 'arileextra_consultstreet_main_slider_default_content' ) ) :
		/* Main slider content  */
		function arileextra_consultstreet_main_slider_default_content( $wp_customize ){
				
					$consultstreet_main_slider_data = $wp_customize->get_setting( 'consultstreet_main_slider_content' );
						if ( ! empty( $consultstreet_main_slider_data ) ) {
						$consultstreet_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( 'Provide Quality Consulting Services', 'arile-extra' ),
						'text'       => esc_html__( 'We provide world best consulting services for our clients to grow their businesses, so dont waste your time, contact us and see the results instantly.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-slide1.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',
						),
						array(
						'title'      => esc_html__( 'Best Choice for Your Business', 'arile-extra' ),
						'text'       => esc_html__( 'We provide world best consulting services for our clients to grow their businesses, so dont waste your time, contact us and see the results instantly.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-slide2.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				}
		}
add_action( 'customize_register', 'arileextra_consultstreet_main_slider_default_content' );
endif;


/* Service content  */
if ( ! function_exists( 'arileextra_consultstreet_service_default_content' ) ) :		
    function arileextra_consultstreet_service_default_content( $wp_customize ){
		
			$consultstreet_service_data = $wp_customize->get_setting( 'consultstreet_service_content' );
				if ( ! empty( $consultstreet_service_data ) ) {
					$consultstreet_service_data->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-usd',
						'title'      => esc_html__( 'Corporate Finance', 'arile-extra' ),
						'text'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.',
						'choice'    => 'customizer_repeater_icon',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
						'icon_value' => 'fa fa-clone',
						'title'      => esc_html__( 'Consulting Service', 'arile-extra' ),
						'text'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.',
						'choice'    => 'customizer_repeater_icon',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
						'icon_value' => 'fa fa-bar-chart',
						'title'      => esc_html__( 'Market Analysis', 'arile-extra' ),
						'text'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.',
						'choice'    => 'customizer_repeater_icon',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b17',
						),
						
					) );

				}
	    }
add_action( 'customize_register', 'arileextra_consultstreet_service_default_content' );
endif;

/* Project content  */
if ( ! function_exists( 'arileextra_consultstreet_project_default_content' ) ) :		
	function arileextra_consultstreet_project_default_content( $wp_customize ){

					$consultstreet_project_data = $wp_customize->get_setting( 'consultstreet_project_content' );
					if ( ! empty( $consultstreet_project_data ) ) 
					{ $consultstreet_project_data->default = json_encode( array(
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-project1.jpg',
						'title'      => __('Business Planning','arile-extra'),
						'text'       => __('Lorem ipsum dolor sit amet, sit sit consectetuer, etiam metus arcu ultrices eros, nam gravida et dapibus.','arile-extra'),	
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-project2.jpg',
						'title'      => __('Planning For The Future.','arile-extra'),
						'text'       => __('Lorem ipsum dolor sit amet, sit sit consectetuer, etiam metus arcu ultrices eros, nam gravida et dapibus.','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-project3.jpg',
						'title'      => __('Growth Expansion','arile-extra'),
						'text'       => __('Lorem ipsum dolor sit amet, sit sit consectetuer, etiam metus arcu ultrices eros, nam gravida et dapibus.','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b71',
						),						
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-project1.jpg',
						'title'      => __('Sales Forecasting','arile-extra'),
						'text'       => __('Lorem ipsum dolor sit amet, sit sit consectetuer, etiam metus arcu ultrices eros, nam gravida et dapibus.','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b32',
						),
						
					) );
				}
        }
add_action( 'customize_register', 'arileextra_consultstreet_project_default_content' );
endif;

/* Testimonial content  */
if ( ! function_exists( 'arileextra_consultstreet_testimonial_default_content' ) ) :		
	function arileextra_consultstreet_testimonial_default_content( $wp_customize ){
					$consultstreet_testimonial_data = $wp_customize->get_setting( 'consultstreet_testimonial_content' );
					if ( ! empty( $consultstreet_testimonial_data ) ) 
					{
					$consultstreet_testimonial_data->default = json_encode( array(
						array(
						'title'      => 'Olivia Kevinson',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Founder','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-user1.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),				
					) );
				}
        }
add_action( 'customize_register', 'arileextra_consultstreet_testimonial_default_content' );
endif;