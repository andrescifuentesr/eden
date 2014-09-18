<?php
/*
Template Name: Template Fond Carré
*/

get_header(); ?>

	<div id="primary" class="content-area template-fond-carre">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">
						<?php the_content(); ?>

						<?php if( is_page(19) ) { ?>
							
							<div class="feed-eden">
								<h2>Matchs diffusés par le bar</h2>
								<script type="text/javascript">document.write('<script type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js"><' + '/script>');</script><script type="text/javascript">(function() {var params = {rssmikle_url: "http://www.allomatch.com/fr/static/generateRssFeed/bar_id/169",rssmikle_frame_width: "300",rssmikle_frame_height: "650",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "16",rssmikle_border: "off",responsive: "on",rssmikle_css_url: "http://www.cuyabroweb.com/eden/wp-content/themes/eden/css/style-feed.css",text_align: "left",text_align2: "center",corner: "off",scrollbar: "on",autoscroll: "off",scrolldirection: "up",scrollstep: "3",mcspeed: "20",sort: "New",rssmikle_title: "on",rssmikle_title_sentence: "",rssmikle_title_link: "",rssmikle_title_bgcolor: "#FF69B4",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "transparent",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#0066FF",rssmikle_item_border_bottom: "off",rssmikle_item_description: "content_only",item_link: "off",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#001F47",rssmikle_item_date: "off",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M:%S %p",rssmikle_item_description_tag: "on_html",rssmikle_item_description_image_scaling: "off",article_num: "15",rssmikle_item_podcast: "off",keyword_inc: "",keyword_exc: ""};feedwind_show_widget_iframe(params);})();</script>
							</div>
							
							<?php //echo do_shortcode('[wp_rss_multi_importer maximgwidth="100%" showgroup="0" sortorder="2" morestyle="" ]'); ?>

						<?php } ?>

					</div><!-- .entry-content -->

				</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>