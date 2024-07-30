<?php
/**
 * @package    arile-extra
 */

require arile_extra_plugin_dir . 'inc/consultstreet/customizer/extra-consultstreet-customizer.php';
require arile_extra_plugin_dir . 'inc/consultstreet/customizer/extra-consultstreet-customizer-options.php';
require arile_extra_plugin_dir . 'inc/consultstreet/customizer/extra-consultstreet-customizer-default.php';
if ( ! function_exists( 'arileextra_consultstreet_frontpage_sections' ) ) :
	function arileextra_consultstreet_frontpage_sections() {	
		require arile_extra_plugin_dir . 'inc/consultstreet/front-page/extra-consultstreet-slider.php';
		require arile_extra_plugin_dir . 'inc/consultstreet/front-page/extra-consultstreet-service.php';
		require arile_extra_plugin_dir . 'inc/consultstreet/front-page/extra-consultstreet-project.php';
		require arile_extra_plugin_dir . 'inc/consultstreet/front-page/extra-consultstreet-testimonial.php';
		require arile_extra_plugin_dir . 'inc/consultstreet/front-page/extra-consultstreet-cta.php';		
		require arile_extra_plugin_dir . 'inc/consultstreet/front-page/extra-consultstreet-blog.php';
    }
	add_action( 'arileextra_consultstreet_frontpage', 'arileextra_consultstreet_frontpage_sections' );
endif;