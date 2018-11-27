<section class="sl-hero <?php the_field('height');?>" style="background-image: url(<?php the_field('image'); ?>);">
	<div class="content-wrapper layer-1 layer" data-depth='-0.51' data-type='parallax'>
		<h1><?php the_field('hero_heading');?>
			<?php if( get_field('sub_heading') ): ?>
				<div><span><?php the_field('sub_heading');?></span></div>
			<?php endif; ?>
		</h1>
	</div>
</section>

	
