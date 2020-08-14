<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <meta name="author" content="C. Patton" />
        <meta charset="utf-8" />
        <meta name="robots" content="noindex,nofollow" />
        <!-- astuteo -->
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" media="screen" href="https://www.christianpatton.com/it270/portfolio2/wp-content/themes/html5blank-stable/css/mobilemenu.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
	</script>
      <!-- astuteo -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <script src="https://kit.fontawesome.com/1552b45d46.js" crossorigin="anonymous"></script>
        <script src="https://www.christianpatton.com/it270/portfolio2/wp-content/themes/html5blank-stable/js/nav.js"></script>
    </head>
    <body <?php body_class( !is_home() && ! is_front_page() ? "inner-page" : "" ); ?>></body>
               

            <header>
                
                <div class="border"></div>

                <div class="header-inner">
                    
                <div class="title-bar">
                        <a href="https://www.christianpatton.com/it270/portfolio2"><img src="https://www.christianpatton.com/it270/portfolio2/wp-content/themes/html5blank-stable/img/logo.png" alt="MILKNOSE" width="200" height="70" /></a>
                    </div>

                    <!-- <nav>
                        <a href="#">Overview</a>
                        <a href="#">Blog</a>
                        <a href="#">Member Login</a>
                    </nav> -->

                    <!-- https://www.w3schools.com/howto/howto_js_topnav_responsive.asp -->
                    					<nav class="nav" role="navigation">
                        <button class="nav-button">Toggle Navigation</button>
						<?php html5blank_nav(); ?>
					</nav>

                </div>

            </header>
            
            <div id="banner"><h1></h1></div>
            <div id="wrapper">