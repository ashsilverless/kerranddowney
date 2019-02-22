<div class="container we-do-best">
		
		<div class="title">
			<p>What We Do Best</p>
		</div>
	
	<?php if( have_rows('small_leaders', 'option') ): ?>	
	
	<div class="row">
		
	<?php while ( have_rows('small_leaders', 'option') ) : the_row(); ?>

		<div class="col-sm-4">
		<a href="<?php the_sub_field('link_target');?>"><span style="position: absolute;">Safaris</span>	
			
			<div class="image-tile" style="background-image: url(<?php the_sub_field('image'); ?>);">		
			
				<p><?php the_sub_field('heading'); ?></p>
				<div class="thin-arrow"></div>

			</div>	
		
		</a>
		</div>
			
	<?php endwhile; ?>
						
	</div><!--row-->
	
	<?php endif; ?>	

	<?php if( have_rows('large_leader', 'option') ): ?>	
	
	<div class="row">
		
	<?php while ( have_rows('large_leader', 'option') ) : the_row(); ?>

		<div class="col-sm-12">
			<a href="<?php the_sub_field('link_target');?>">	
				
			<div class="image-tile large" style="background-image: url(<?php the_sub_field('image'); ?>);">		
				<div class="content-wrapper">
					<div class="row">
						<div class="col-md-7 offset-sm-1">
				<p><?php the_sub_field('heading'); ?></p>
				<div class="thin-arrow"></div>
				<?php the_sub_field('copy'); ?>
						</div>
					</div><!--row-->
				</div>			
			</div>	
			
			</a>
		</div>
			
	<?php endwhile; ?>
						
	</div><!--row-->
	
	<?php endif; ?>	

<div class="subscribe final-element">
<p>Just can’t get enough? Sign up to our newsletter for regular email updates.</p>
<?php echo do_shortcode('[contact-form-7 id="456" title="Newsletter Form"]');?>
<p class="supporting">We take your Privacy seriously. Please read our policy here.	</p>
</div>


</div><!--container-->