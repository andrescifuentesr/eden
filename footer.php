<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package eden
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="module-newsletter clearfix" id="block-newsletter">
			<?php

				$argsFr = array(
					'prepend' => '<h1>Newsletter</h1><p>Recevez nos actualités !</p>', 
					'showname' => false,
					'nametxt' => 'Name:', 
					'nameholder' => 'Name...', 
					'emailtxt' => 'Email : ',
					'emailholder' => '', 
					'showsubmit' => true, 
					'submittxt' => 'ENVOYER', 
					'jsthanks' => false,
					'thankyou' => 'Nous vous remercions de votre souscription à nôtre newsletter !'
				);

				/*

				$argsEn = array(
					'prepend' => '<h1>Newsletter</h1><p>Receive our notifications!</p>', 
					'showname' => false,
					'nametxt' => 'Name:', 
					'nameholder' => 'Name...', 
					'emailtxt' => 'Email : ',
					'emailholder' => '', 
					'showsubmit' => true, 
					'submittxt' => 'SUBMIT', 
					'jsthanks' => false,
					'thankyou' => 'Thank you for subscribing to our mailing list !'
				);
				

				if ( ICL_LANGUAGE_CODE == 'fr' ) {
					echo smlsubform($argsFr);	
				} else {
					echo smlsubform($argsEn);
				}

				*/

				echo smlsubform($argsFr);
			?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-51206839-1', 'edenparkpub.com');
 ga('send', 'pageview');

</script>

</body>
</html>