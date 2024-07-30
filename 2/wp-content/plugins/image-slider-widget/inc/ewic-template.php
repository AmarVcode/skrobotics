<?php


/*-------------------------------------------------------------------------------*/
/*   Generate Slider
/*-------------------------------------------------------------------------------*/	
function ewic_generate_slider( $id, $iswidget ) {
	
	ob_start();
	
	$allimgs = get_post_meta( $id, 'ewic_meta_select_images', true );
	$navStyle = get_post_meta( $id, 'ewic_meta_slide_nav', true );
	$imgsize = get_post_meta( $id, 'ewic_meta_thumbsizelt', true );
	$easing = get_post_meta( $id, 'ewic_meta_settings_effect', true );
	$smartttl = get_post_meta( $id, 'ewic_meta_settings_smartttl', true );
	$direction = get_post_meta( $id, 'ewic_meta_slide_style', true );
	
	( get_post_meta( $id, 'ewic_meta_slide_auto', true ) == 'on' ) ? $disenauto = 'true' : $disenauto = 'false';
	( get_post_meta( $id, 'ewic_meta_slide_title', true ) == 'on' ) ? $disenttl = 'true' : $disenttl = 'false';
	( get_post_meta( $id, 'ewic_meta_slide_lightbox_autoslide', true ) == 'on' ) ? $disenlbauto = 'true' : $disenlbauto = 'false';
	
	if ( $direction == 'fade' ) $direction = 'horizontal';
	if ( $easing == '' ) $easing = 'easeInOutCubic';
	
	if ( is_array( $imgsize ) ) {
		
		if ( $imgsize['width'] != 'auto' && $imgsize['width'] != '' ) {
			
			echo '<style>#ewic-con'.$iswidget.'-'.$id.' { max-width: '.$imgsize['width'].'px;}</style>';
			
		}
		
		if ( $imgsize['height'] != 'auto' && $imgsize['height'] != '' ) {
			echo '<style>#ewic-con'.$iswidget.'-'.$id.', #ewic-con'.$iswidget.'-'.$id.' .ewic-wid-imgs { max-height: '.$imgsize['height'].'px;}</style>';
			
		}
			
	}
	
	if ( $navStyle == 'always' || $navStyle == '' ) echo '<style>#ewic-con'.$iswidget.'-'.$id.' .flex-direction-nav .flex-next, #ewic-con'.$iswidget.'-'.$id.' .flex-direction-nav .flex-prev {opacity: 1;} #ewic-con'.$iswidget.'-'.$id.' .flex-direction-nav .flex-next {right: 10px !important; text-align: right !important;} #ewic-con'.$iswidget.'-'.$id.' .flex-direction-nav .flex-prev {left: 10px !important;}</style>';
	
	if ( is_array( $allimgs ) ) {
	//Generate HTML Markup	
	echo '<div id="preloader'.$iswidget.'-'.$id.'" class="sliderpreloader"></div>';
	echo '<ul style="display:none;" class="slides flexslider'.$iswidget.'-'.$id.'">';
		foreach( $allimgs as $dat ) {
			
			$timg = wp_get_attachment_image_src( $dat['images'], 'full' );
			$img = $timg[0];
			$imgtrgt = $img;
			
			if ( $dat['ttl'] ) {
				if ( $smartttl == 'on' ) {
					$isttl = ucwords( str_replace( '-', ' ', $dat['ttl'] ) );
					} else {
						$isttl = $dat['ttl'];
						}
				}
				else {
					$isttl = '';
					}
					
			if (get_post_meta( $id, 'ewic_meta_slide_lightbox', true ) == 'on' ) {
				echo'<li class="ewic-slider"><a href="'.$imgtrgt.'" '.( $isttl ? 'title="'.$isttl.'"' : '' ).' rel="ewic'.$iswidget.'prettyPhoto['.$id.']"><img '.( $isttl ? 'title="'.$isttl.'"' : '' ).' class="ewic-wid-imgs" src="'.$img.'" />'.( $disenttl ? '<p class="flex-caption">'.$isttl.'</p>' : '' ).'</a></li>';
				
				} else {
					echo'<li class="ewic-slider"><img '.( $isttl ? 'title="'.$isttl.'"' : '' ).' class="ewic-wid-imgs" src="'.$img.'" />'.( $disenttl ? '<p class="flex-caption">'.$isttl.'</p>' : '' ).'</li>';
					}
					
			}
	echo '</ul>';	
			
	//Generate Slider Script				
	echo '<script type="text/javascript">
	jQuery(document).ready(function($) {
		
		$("#preloader'.$iswidget.'-'.$id.'").fadeOut(2000, function () {
			
			$("#ewic-con'.$iswidget.'-'.$id.'").addClass("ready_to_show");
			
			$("a[rel^=\'ewic'.$iswidget.'prettyPhoto['.$id.']\']").ewcPhoto({
				theme: "ewc_default",
				allow_expand: false,
				deeplinking: false,
				slideshow:'.get_post_meta( $id, 'ewic_meta_slide_lightbox_delay', true ).'000,
				autoplay_slideshow:'.$disenlbauto.',
				social_tools:false
			});
			
			$(".flexslider'.$iswidget.'-'.$id.'").fadeIn(1000);
			
			$("#ewic-con'.$iswidget.'-'.$id.'").flexslider({
				animation: "slide",
				animationSpeed: 0,
				useCSS: false,
				easing: "'.$easing.'",
				direction: "'.$direction.'",
				slideshow: '.$disenauto.',
				smoothHeight: true,
				pauseOnHover: true, 
				controlNav: false,
				prevText: "",
				nextText: "",
				rtl: '.json_encode( is_rtl() ).',
				slideshowSpeed: '.get_post_meta( $id, 'ewic_meta_slide_delay', true ).'000,
				start: function(slider){
					$("#ewic-con'.$iswidget.'-'.$id.'").find(".flex-caption").hide();
					var curSlide = slider.find("li.flex-active-slide");
					$(curSlide).find(".flex-caption").slideDown();
				},
				before: function(slider) {
					$("#ewic-con'.$iswidget.'-'.$id.'").find(".flex-caption").slideUp();
				},
				after: function(slider) {
					var curSlide = slider.find("li.flex-active-slide");
					$(curSlide).find(".flex-caption").slideDown();
				}
				
			});
			
		});
			
	});
</script>';
		}
		
		$res = ob_get_clean();
		return $res;	
		
}