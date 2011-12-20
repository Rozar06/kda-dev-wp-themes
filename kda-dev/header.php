<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html>
<head>
<!-- <img src="text3753-2.png" alt="KDA" id="logo"/> -->
<title>
</title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/960_12_col.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" type="text/css" media="screen" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<?php
if(is_home()){
	home_slideshow_js();	
}
else if(is_page('services')){
	service_slideshow_js();
}


?>

 

<?php wp_head(); ?>

</head>


<body>
<div id="header_bg">
</div><!-- end header -->
<div id="wrapper" class="container_12">
	<header class="grid_12">
		<nav class="gird_10">
			
			<?php wp_nav_menu(array('menu_class'=>'push_1')); ?> 
		</nav>
		<div id="logo">
			<a class="kda" href="#">kda</a> 
		</div>
	</header>