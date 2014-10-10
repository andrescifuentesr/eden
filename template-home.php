<?php
/*
Template Name: Template Home
*/

get_header(); ?>

	<div id="primary" class="content-area template-home">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

					<div><!--

					--><div class="item-home-left">
							<a href="<?php echo esc_url( get_permalink( 328 ) ); ?>">
								<img src="<?php bloginfo('template_directory'); ?>/img/home/image-home-happy.png"  />
							</a>
						
							<a href="<?php echo esc_url( get_permalink( 21 ) ); ?>" class="item-home-bottom-left">
								<img src="<?php bloginfo('template_directory'); ?>/img/home/image-home-ambiance.png"  />
							</a>			
						</div><!--
						
					--><div class="item-home-central">
							<img src="<?php bloginfo('template_directory'); ?>/img/home/image-home-toucan.png"  />
						</div><!--

					--><div class="item-home-right">
							<a href="<?php echo esc_url( get_permalink( 23 ) ); ?>" class="item-home-top-right">
								<img src="<?php bloginfo('template_directory'); ?>/img/home/image-home-privatisez.png" />
							</a>

							<a href="<?php echo esc_url( get_permalink( 19 ) ); ?>" class="item-home-bottom-right">
								<img src="<?php bloginfo('template_directory'); ?>/img/home/image-home-sport.png"  />
							</a>
						</div><!--
				--></div>

				</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>