<?php
/*
Template Name: Template Soirée
*/

get_header(); ?>

	<div id="primary" class="content-area template-soire">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">
						<?php the_content(); ?>

						<div class="image-fleche-soire">
							<img src="<?php bloginfo('template_directory'); ?>/img/image-fleche.png" />
						</div>

						<div class="fb-wrapper">
							<?php recent_facebook_posts(array('likes' => 1, 'number' => 2, 'likes' => 0, 'comments' => 0 )); ?>
						</div>

					</div><!-- .entry-content -->

				</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>