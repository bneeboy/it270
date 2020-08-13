<?php 
/*
Template name: Overview
*/
get_header(); ?>


	<main role="main">
	</main>

<aside class="sidebar">
            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('info-sidebar')) ?>
        </aside>

<?php get_footer(); ?>
