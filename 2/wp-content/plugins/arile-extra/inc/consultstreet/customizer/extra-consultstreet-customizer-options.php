<?php
/**
 * Extend customizer section.
 *
 * @package arile-extra
 *
 * @see     WP_Customize_Section
 * @access  public
 */
 
function arileextra_consultstreet_frontpage_sections_settings( $wp_customize ){
	
	$active_callback    	= isset( $array['active_callback'] ) ? $array['active_callback'] : null;
			
	/* Register frontpage panel */
	$wp_customize->add_panel( 'consultstreet_frontpage_settings', array(
		'priority'       => 25,
		'capability'     => 'edit_theme_options',
		'title'      => __('Frontpage Sections', 'arile-extra'),
	) );
	
	/* Slider */
	$wp_customize->add_section( 'consultstreet_main_theme_slider' , array(
		'title'      => __('Main Slider', 'arile-extra'),
		'panel'  => 'consultstreet_frontpage_settings',
		'priority'   => 2,
   	) ); 
	
	    if ( class_exists( 'ConsultStreet_Repeater' ) ) {
			$wp_customize->add_setting( 'consultstreet_main_slider_content', array( ) );
            $wp_customize->add_control( new ConsultStreet_Repeater( 
			$wp_customize, 'consultstreet_main_slider_content', array(
				'label'                             => esc_html__( 'Slider Items Content', 'arile-extra' ),
				'section'                           => 'consultstreet_main_theme_slider',
				'add_field_label'                   => esc_html__( 'Add new slide item', 'arile-extra' ),
				'item_name'                         => esc_html__( 'Slide Item', 'arile-extra' ),
				'customizer_repeater_image_control' => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_button_text_control' => true,
				'customizer_repeater_link_control'  => true,
				'customizer_repeater_checkbox_control' => true,
				) ) );
		}	
			
	/* Service */
	$wp_customize->add_section( 'consultstreet_theme_service' , array(
		'title'      => __('Service', 'arile-extra'),
		'panel'  => 'consultstreet_frontpage_settings',
		'priority'   => 4,
	) ); 
	
	    if ( class_exists( 'ConsultStreet_Repeater' ) ) {
			$wp_customize->add_setting( 'consultstreet_service_content', array( ) );
            $wp_customize->add_control( new ConsultStreet_Repeater( 
			$wp_customize, 'consultstreet_service_content', array(
				'label'                             => esc_html__( 'Service Items Content', 'arile-extra' ),
				'section'                           => 'consultstreet_theme_service',
				'priority'                          => 10,
				'add_field_label'                   => esc_html__( 'Add new service item', 'arile-extra' ),
				'item_name'                         => esc_html__( 'Service Item', 'arile-extra' ),
				'customizer_repeater_image_control' => true,
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_link_control'  => true,
				'customizer_repeater_checkbox_control' => true,
				) ) );
		}
	
	
    /* Project */
	$wp_customize->add_section( 'consultstreet_theme_project' , array(
		'title'      => __('Project', 'arile-extra'),
		'panel'  => 'consultstreet_frontpage_settings',
		'priority'   => 5,
	) );
	
	    if ( class_exists( 'ConsultStreet_Repeater' ) ) {
			$wp_customize->add_setting( 'consultstreet_project_content', array( ) );
            $wp_customize->add_control( new ConsultStreet_Repeater( 
			$wp_customize, 'consultstreet_project_content', array(
				'label'                             => esc_html__( 'Project Items Content', 'arile-extra' ),
				'section'                           => 'consultstreet_theme_project',
				'priority'                          => 50,
				'add_field_label'                   => esc_html__( 'Add new project item', 'arile-extra' ),
				'item_name'                         => esc_html__( 'Project Item', 'arile-extra' ),
				'customizer_repeater_image_control' => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				) ) );
		}
	
	
   /* Testimonial */
	$wp_customize->add_section( 'consultstreet_theme_testimonial' , array(
		'title'      => __('Testimonial', 'arile-extra'),
		'panel'  => 'consultstreet_frontpage_settings',
		'priority'   => 7,
	) ); 
	
	
	    if ( class_exists( 'ConsultStreet_Repeater' ) ) {
			$wp_customize->add_setting( 'consultstreet_testimonial_content', array( ) );
            $wp_customize->add_control( new ConsultStreet_Repeater( 
			$wp_customize, 'consultstreet_testimonial_content', array(
				'label'                             => esc_html__( 'Testimonial Items Content', 'arile-extra' ),
				'section'                           => 'consultstreet_theme_testimonial',
				'add_field_label'                   => esc_html__( 'Add new testimonial item', 'arile-extra' ),
				'item_name'                         => esc_html__( 'Testimonial Item', 'arile-extra' ),
				'customizer_repeater_image_control' => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_designation_control' => true,
				) ) );
		}
			
	/* Cta */
	$wp_customize->add_section( 'consultstreet_theme_cta' , array(
		'title'      => __('Call to action', 'consultstreet'),
		'panel'  => 'consultstreet_frontpage_settings',
		'priority'   => 9,
	) ); 
	
	
	        //Cta Background Image
			$wp_customize->add_setting( 'consultstreet_cta_background_image', array(
			  'sanitize_callback' => 'esc_url_raw',
			  'default' => arile_extra_plugin_url . '/inc/consultstreet/images/theme-cta-bg.jpg',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'consultstreet_cta_background_image', array(
			  'label'    => esc_html__( 'Background Image', 'consultstreet' ),
			  'section'  => 'consultstreet_theme_cta',
			  'settings' => 'consultstreet_cta_background_image',
			  'priority'        => 15,
			) ) );			
			
	
    /* Blog */
	$wp_customize->add_section( 'consultstreet_theme_blog' , array(
		'title'      => __('Blog', 'arile-extra'),
		'panel'  => 'consultstreet_frontpage_settings',
		'priority'   => 11,
	) ); 
	
	    $wp_customize->add_setting( 'consultstreet_theme_blog_category',array('capability'     => 'edit_theme_options',) );	
	    $wp_customize->add_control( new ConsultStreet_Customize_Category_Control( $wp_customize, 'consultstreet_theme_blog_category', array(
			'label'   => __('Choose Blog Category','arile-extra'),
			'section' => 'consultstreet_theme_blog',
			'settings'   => 'consultstreet_theme_blog_category',
			'sanitize_callback' => 'sanitize_text_field',
		) ) );

}
add_action( 'customize_register', 'arileextra_consultstreet_frontpage_sections_settings' );


function arileextra_consultstreet_customizer_selective_refresh_settings($wp_customize) {
	
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
	
	// Services

		$wp_customize->add_setting( 'consultstreet_service_area_title',
		array(
            'default' => __('Our Services','arile-extra'),
			'sanitize_callback' => 'consultstreet_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'consultstreet_service_area_title',
		array(
			'label'   => esc_html__( 'Section Title', 'arile-extra' ),
			'section' => 'consultstreet_theme_service',
			'priority'        => 4,
			'type' => 'text',
		));	
		
		$wp_customize->add_setting( 'consultstreet_service_area_des',
		array(
            'default' => __('We provide the worlds best consulting related services to growth your business.','arile-extra'),
			'sanitize_callback' => 'consultstreet_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'consultstreet_service_area_des',
		array(
			'label'   => esc_html__( 'Section Description', 'arile-extra' ),
			'section' => 'consultstreet_theme_service',
			'priority'        => 5,
			'type' => 'textarea',
		));	
		
	
    // Project
	
		$wp_customize->add_setting( 'consultstreet_project_area_title',
		array(
            'default' => __('Our Latest Projects','arile-extra'),
			'sanitize_callback' => 'consultstreet_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'consultstreet_project_area_title',
		array(
			'label'   => esc_html__( 'Section Title', 'arile-extra' ),
			'section' => 'consultstreet_theme_project',
			'priority'        => 15,
			'type' => 'text',
		));	
		
			
		$wp_customize->add_setting( 'consultstreet_project_area_des',
		array(
            'default' => __('We provide you with a beautiful working place that your work is productive to growth your business.','arile-extra'),
			'sanitize_callback' => 'consultstreet_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'consultstreet_project_area_des',
		array(
			'label'   => esc_html__( 'Section Description', 'arile-extra' ),
			'section' => 'consultstreet_theme_project',
			'priority'        => 20,
			'type' => 'textarea',
		));
		

	// Testimonial
	
		$wp_customize->add_setting( 'consultstreet_testimonial_area_title',
		array(
            'default' => __('Testimonials','arile-extra'),
			'sanitize_callback' => 'consultstreet_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'consultstreet_testimonial_area_title',
		array(
			'label'   => esc_html__( 'Section Title', 'arile-extra' ),
			'section' => 'consultstreet_theme_testimonial',
			'priority'        => 4,
			'type' => 'text',
		));	
		
			
		$wp_customize->add_setting( 'consultstreet_testimonial_area_des',
		array(
            'default' => __('What our customers are saying about us after using our products.','arile-extra'),
			'sanitize_callback' => 'consultstreet_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'consultstreet_testimonial_area_des',
		array(
			'label'   => esc_html__( 'Section Description', 'arile-extra' ),
			'section' => 'consultstreet_theme_testimonial',
			'priority'        => 5,
			'type' => 'textarea',
		));
		
		
	// Blog
	
		$wp_customize->add_setting( 'consultstreet_blog_area_title',
		array(
            'default' => __('Latest News','arile-extra'),
			'sanitize_callback' => 'consultstreet_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'consultstreet_blog_area_title',
		array(
			'label'   => esc_html__( 'Section Title', 'arile-extra' ),
			'section' => 'consultstreet_theme_blog',
			'priority'        => 4,
			'type' => 'text',
		));	
		
		$wp_customize->add_setting( 'consultstreet_blog_area_des',
		array(
            'default' => __('Stay updated with the latest news by reading our articles written by content writers in the industry.','arile-extra'),
			'sanitize_callback' => 'consultstreet_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'consultstreet_blog_area_des',
		array(
			'label'   => esc_html__( 'Section Description', 'arile-extra' ),
			'section' => 'consultstreet_theme_blog',
			'priority'        => 5,
			'type' => 'textarea',
    	));
		
		// Call to action
	
		$wp_customize->add_setting( 'consultstreet_cta_area_subtitle',
		array(
            'default' => 'Do you have any questions?',
			'sanitize_callback' => 'consultstreet_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'consultstreet_cta_area_subtitle',
		array(
			'label'   => esc_html__( 'Title', 'consultstreet' ),
			'section' => 'consultstreet_theme_cta',
			'priority'        => 5,
			'type' => 'text',
		));	
		
		$wp_customize->add_setting( 'consultstreet_cta_area_des',
		array(
            'default' => 'How can we help your business? Because many people love our free consultation for growing their businesses which gives the user complete freedom to set up a business.',
			'sanitize_callback' => 'consultstreet_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'consultstreet_cta_area_des',
		array(
			'label'   => esc_html__( 'Description', 'consultstreet' ),
			'section' => 'consultstreet_theme_cta',
			'priority'        => 6,
			'type' => 'textarea',
		));	
		
		$wp_customize->add_setting( 'consultstreet_cta_button_text',
		array(
            'default' => 'Contact Us',
			'sanitize_callback' => 'consultstreet_sanitize_text',
			'transport' => $selective_refresh,
		));	
		$wp_customize->add_control( 'consultstreet_cta_button_text',
		array(
			'label'   => esc_html__( 'Button Text', 'consultstreet' ),
			'section' => 'consultstreet_theme_cta',
			'priority'        => 10,
			'type' => 'text',
		));
		
}
add_action( 'customize_register', 'arileextra_consultstreet_customizer_selective_refresh_settings' );