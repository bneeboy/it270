<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <meta name="author" content="C. Patton" />
        <meta charset="utf-8" />
        <meta name="robots" content="noindex,nofollow" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
        <script src="https://kit.fontawesome.com/1552b45d46.js" crossorigin="anonymous"></script>
        <script src="https://www.christianpatton.com/it270/portfolio2/wp-content/themes/html5blank-stable/js/nav.js"></script>
    </head>
    <body <?php body_class( !is_home() && ! is_front_page() ? "inner-page" : "" ); ?>>
               

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
                    					<nav id="site-navigation" class="main-navigation">
                                        <button class="nav-button">Toggle Navigation</button>
                                            
                                            <?php wp_nav_menu(array('theme_ location' => 'menu-1', 'menu_id' =>'primary-menu', 'items_wrap' => '<ul class="primary-nav">%3$s</ul>')); ?>
					</nav>

                </div>

            </header>
            
            <div id="banner"><img src="https://www.christianpatton.com/it270/portfolio2/wp-content/themes/html5blank-stable/img/logo2.png" alt="MILKNOSE" class="center"/></div>
            <div id="wrapper">