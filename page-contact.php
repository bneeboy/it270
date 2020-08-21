<?php 
/*
Template name: Overview
*/
get_header(); ?>
	<main>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2 class="inner display-none">
                </h2>
				<?php the_content(); ?>
				<!-- comments_template( '', true ); // Remove if you don't want comments -->
				<br class="clear">
				<?php edit_post_link(); ?>
			</article>
			<!-- /article -->
		<?php endwhile; ?>
		<?php else: ?>
			<!-- article -->
			<article>
				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			</article>
			<!-- /article -->
		<?php endif; ?>
	</main>
	<aside class="sidebar">
        		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('milknose-gallery')) ?>
                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('milknose-media')) ?>
        </aside>
<?php get_footer(); ?>
    