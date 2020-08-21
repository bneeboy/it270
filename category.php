<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Category: ', 'html5blank' ); single_cat_title(); ?></h1><hr>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<aside class="sidebar" role="complementary">



    <div class="sidebar-widget">
        <?php dynamic_sidebar('blog-sidebar');?>
    </div>



</aside>

<?php get_footer(); ?>
