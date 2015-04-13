<!doctype html>  
<html <?php language_attributes(); ?>>
	<head>
		<!--
		 LMP Wordpress theme by Eamonn Gormley
		-->
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

		<header>
			<section id="headerLogo"><a href="/"><img src="/wp-content/uploads/2015/01/LMPLogoYellowClear.fw_.png" width="466" height="99" ></img></a><section>
<?php //			<h1><a href="<php echo home_url('/'); >"><php bloginfo('name'); ></a></h1> ?>
			<h2><?php bloginfo('description'); ?></h2>
		</header>
		<section id="mainImage" <?php if (!is_front_page()) {?> class="notHomePageMainImage"<?php } ?>>
		</section>
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</nav>
		<main>