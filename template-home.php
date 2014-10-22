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
							<a href="<?php the_field('eden_home_happy') ?>">
								<?php $image_home_happy = get_field('eden_home_happy_image'); ?>
								<img src="<?php echo $image_home_happy['url']; ?>" alt="<?php echo $image_home_happy['alt']; ?>" />
							</a>
						
							<a href="<?php the_field('eden_home_ambiance') ?>" class="item-home-bottom-left">
								<?php $image_home_ambiance = get_field('eden_home_ambiance_images'); ?>
								<img src="<?php echo $image_home_ambiance['url']; ?>" alt="<?php echo $image_home_ambiance['alt']; ?>" />
							</a>			
						</div><!--
						
					--><div class="item-home-central">
							<img src="<?php bloginfo('template_directory'); ?>/img/home/image-home-toucan.png"  />
						</div><!--

					--><div class="item-home-right">
							<a href="<?php the_field('eden_home_privatisez') ?>" class="item-home-top-right">
								<?php $image_home_privatisez = get_field('eden_home_privatisez_image'); ?>
								<img src="<?php echo $image_home_privatisez['url']; ?>" alt="<?php echo $image_home_privatisez['alt']; ?>" />
							</a>

							<a href="<?php the_field('eden_home_sport') ?>" class="item-home-bottom-right">
								<?php $image_home_sport = get_field('eden_home_sport_image'); ?>
								<img src="<?php echo $image_home_sport['url']; ?>" alt="<?php echo $image_home_sport['alt']; ?>" />
							</a>
						</div><!--
				--></div>

				</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>