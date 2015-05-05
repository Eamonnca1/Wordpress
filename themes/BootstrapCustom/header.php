<!doctype html>  
<html <?php language_attributes(); ?>>
	<head>

		<!--
			THANKS FOR CHECKING OUT MY CODE!

			This is a Worpress theme customized by me using Bootstrap. I used Webstorm as the editor and adjusted the PHP and CSS. It
			was developed locally at first with a my own installation of Wordpress on my machine. I
			configured Apache to run several websites on the same http daemon but with each assigned to
			its own port. MySQL already comes standard on all Macs but I had to do quite a bit of tinkering
			to get Wordpress to connect to the database. I also had to configure Apache to run PHP.

		-->
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="application-name" content="<?php bloginfo('name'); ?>">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>


		<script type="text/javascript">
		var $ =jQuery.noConflict();
		</script>
        <script type="text/javascript" src="/wp-content/themes/BootstrapCustom/lib/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/wp-content/themes/BootstrapCustom/lib/css/bootstrap-responsive.css">
        <link rel="stylesheet" href="/wp-content/themes/BootstrapCustom/lib/css/bootstrapCustom.css">

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>">
   		<!--[if lt IE 9]>
  			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/css/ie.css">
       			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
   		<![endif]-->

		<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/BootstrapCustom/lib/css/jquery.fancybox-buttons.css"></link>
		<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/BootstrapCustom/lib/css/jquery.fancybox-thumbs.css"></link>
		<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/BootstrapCustom/lib/css/jquery.fancybox.css"></link>

        <script>
            $(function() {
                $( "#accordion" ).accordion({
                    heightStyle: "content"
                });
            });
        </script>

  		<link rel="stylesheet" href="/wp-content/themes/BootstrapCustom/lib/css/bjqs.css">
        <link rel="stylesheet" href="/wp-content/themes/BootstrapCustom/lib/css/bootstrap-social.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

		<?php wp_head(); ?>
		
	</head>
	<body <?php body_class(); ?>>

        <?php
            if (is_front_page()) {
        ?>
            <header id="home-page-header">
                <div class="container">
                    <h1><?php bloginfo('name'); ?></h1>
                    <h2><?php bloginfo('description'); ?></h2>
                </div>
            </header>

        <?php } else { ?>
            <header class="page-header">
                <div class="container">
                    <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
                    <h2><?php bloginfo('description'); ?></h2>
                </div>
            </header>

		<?php } ?>
            <nav class="navbar navbar-default" id="main-nav">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			            <?php
			            wp_nav_menu(
			                array(
			                    'theme_location' => 'header-menu',
			                    'menu' => 'header_menu',
                                'depth' => 2,
                                'container' => false,
                                'container_class'   => 'navbar-collapse collapse',
                                'menu_class' => 'nav navbar-nav',
                                //Process nav menu using our custom nav walker
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker' => new wp_bootstrap_navwalker()
                            )
                        ); ?>
		            </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

		<main >