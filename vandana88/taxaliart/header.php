<!doctype html>  

<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->

	<head>	    
	  <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

	  <meta charset="<?php bloginfo('charset'); ?>">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	  <meta name="description" content="<?php bloginfo('description'); ?>">
	  <meta name="author" content="">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  
	  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon"> 
	  <link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/ico"> 
	  
	  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/_js/fancybox/jquery.fancybox-1.3.4.css">
	  
	  <!-- <link rel="stylesheet/less" href="<?php bloginfo('template_url'); ?>/_css/style.css"> -->
	  <script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/1.1.3/less-1.1.3.min.js"></script>
	  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.0.6/modernizr.min.js"></script>
	  <script src="<?php bloginfo('template_url'); ?>/_js/shortcut.js"></script>
	  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
	  <script src="<?php bloginfo('template_url'); ?>/_js/jquery.masonry.min.js"></script>
	  <script src="<?php bloginfo('template_url'); ?>/_js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	  <script src="<?php bloginfo('template_url'); ?>/_js/fancybox/jquery.easing-1.3.pack.js"></script>
	  <script src="<?php bloginfo('template_url'); ?>/_js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	  <script src="<?php bloginfo('template_url'); ?>/_js/script.js"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
 
	<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


	  <?php wp_head(); ?>

	</head>
	<body id="page-body" <?php body_class(); ?>>


		<?php if (is_front_page()) { ?>
		
		
		<div id="container">

			<div id="menu">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Header Widget')) : endif; ?>
				<?php wp_nav_menu(array('container_class' => false, 'theme_location' => 'primary-menu', 'link_before' => '<span>', 'link_after' => '</span>')); ?>
			</div><?php // End Header ?>
		<?php // Show Nothing ?>
		<?php } else { ?>
		
		<div id="container">

			<div id="menu">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Header Widget')) : endif; ?>
				<?php wp_nav_menu(array('container_class' => false, 'theme_location' => 'primary-menu', 'link_before' => '<span>', 'link_after' => '</span>')); ?>
			</div><?php // End Header ?>

		<?php } ?>