<?php
/**
 * @package SLMaster === SITE FOOTER
 */
?>

	</div><!-- #main -->

	<?php get_template_part( 'template-parts/camp', 'navigator' );?>

	<footer id="colophon" class="site-footer">
		<?php get_template_part( 'template-parts/camps', 'map' );?>
<div class="main-form">
	<div class="container">

		<div class="row">

				<div class="col-sm-4 offset-sm-2">
					<a href="tel:+267 686 1282" class="button trans-li med fullwidth mb2">+267 686 1282</a>
					<a href="mailto:info@kerdowney.bw" class="button trans-li med fullwidth mb5">info@kerdowney.bw</a>
				</div>

				<div class="col-sm-4">
					<div class="newsletter-subscribe">
						<?php echo do_shortcode('[contact-form-7 id="455" title="Contact Page Form"]');?>
					</div>
				</div>

		</div>

		<div class="row">
			<div class="col-6 offset-3">
				<div class="accreds">
				<?php if( have_rows('accreditations', 'option') ): ?>
						<?php while ( have_rows('accreditations', 'option') ) : the_row(); ?>
							<img src="<?php the_sub_field('image'); ?>" />
						<?php   endwhile;?>
					<?php   endif;?>
				</div>
			</div>

		</div>



<div class="row justify-content-center">


</div>
		</div>
	</div>

<div class="socket">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 offset-sm-3">
				<a href="/terms" class="mandatory">T&C</a>
				<a href="/privacy" class="mandatory">Privacy</a>
				&copy; Ker & Downey Botswana <?php echo date ('Y');?>
				<div class="footer-social">
					<?php get_template_part( 'template-parts/social', 'links' );?>
				</div>
				<div class="credit">
					<a href="https://silverless.co.uk/" target="_blank" rel="noopener">By Silverless</a></div>
				</div>
		</div>
	</div>
</div><!--socket-->

</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

<script>
   WebFontConfig = {
      typekit: { id: 'cky6efi' }
   };
   (function(d) {
      var wf = d.createElement('script'), s = d.scripts[0];
      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
      wf.async = true;
      s.parentNode.insertBefore(wf, s);
   })(document);
</script>

<script defer src="https://use.fontawesome.com/releases/v5.4.1/js/all.js" integrity="sha384-L469/ELG4Bg9sDQbl0hvjMq8pOcqFgkSpwhwnslzvVVGpDjYJ6wJJyYjvG3u8XW7" crossorigin="anonymous"></script>

</body>
</html>
