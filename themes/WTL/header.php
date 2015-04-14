<!doctype html>  
<html <?php language_attributes(); ?>>
	<head>

		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="application-name" content="<?php bloginfo('name'); ?>">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>">
		<!--[if lt IE 9]>
    			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/css/ie.css">
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>	
		<![endif]-->

		<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/H5Custom/lib/css/jquery.fancybox-buttons.css"></link>
		<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/H5Custom/lib/css/jquery.fancybox-thumbs.css"></link>
		<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/H5Custom/lib/css/jquery.fancybox.css"></link>

  		<link rel="stylesheet" href="/wp-content/themes/H5Custom/lib/css/bjqs.css">

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		<script type="text/javascript">
		var $ =jQuery.noConflict();
		</script>
		<?php wp_head(); ?>
		
	</head>
	<body <?php body_class(); ?>>

		<header<?php
		 	if(is_front_page()){?> class="homeHeader"<?php } ?>
		>

			<?php if(is_front_page()){?>
            	<div id="headerBookImage">
					<img src="/wp-content/uploads/2015/01/WaitingToLaunchThumbnail.png" />
            	</div>
            	<div id="headerBookReview">
					"... a book that is as clear-eyed as his passion about the potential for the GAA overseas."
            	</div>
            	<div id="headerBookByLine">
            		John Riordan, Irish Examiner
            	</div>
            <?php }
            ?>
			<?php if(!is_front_page()) { ?>
			<h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
			<h2><?php bloginfo('description'); ?></h2>
			<?php } ?>
		</header>
		
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</nav>
		<main>