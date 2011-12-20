<?php

if ( function_exists('register_sidebar') ) {
  /// This sidebar appears on all pages above the following sidebars
  register_sidebar(
    array(
      'name' => 'nav-menu',
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '',
      'after_title' => '',
    )
  );
}


function home_slideshow_js(){
?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/slideshow/css/style6.css" type="text/css" />
<script language="javascript" type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/slideshow/js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/slideshow/js/jquery.easing.js"></script>
<script language="javascript" type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/slideshow/js/script.js"></script>
<script type="text/javascript">
 $(document).ready( function(){	
		var buttons = { previous:$('#lofslidecontent45 .lof-previous') ,
						next:$('#lofslidecontent45 .lof-next') };
						
		$obj = $('#lofslidecontent45').lofJSidernews( { interval : 4000,
												direction		: 'opacity',	
											 	easing			: 'easeOutBounce',
												duration		: 1200,
												auto		 	: true,
												mainWidth		: 940,
												buttons			: buttons} );	
	});
</script>
<?php
}


function service_slideshow_js(){
?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/service-slides/services_slides.css" type="text/css" />
<script src="<?php bloginfo('stylesheet_directory'); ?>/service-slides/jquery-1.2.1.pack.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/service-slides/jquery-easing.1.2.pack.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/service-slides/jquery-easing-compatibility.1.2.pack.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/service-slides/coda-slider.1.1.1.js" type="text/javascript"></script>

	<script type="text/javascript">
		jQuery(window).bind("load", function() {
			jQuery("div#slider1").codaSlider()
			// jQuery("div#slider2").codaSlider()
			// etc, etc. Beware of cross-linking difficulties if using multiple sliders on one page.
		});
	</script>

<?php
}

?>
