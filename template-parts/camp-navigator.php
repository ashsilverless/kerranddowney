<div class="camp-nav-wrapper">
	
	<p id="nav-title">Explore Our Camps</p>
	
	<?php if( have_rows('camp', 'option') ): ?>	

	<?php while ( have_rows('camp', 'option') ) : the_row(); ?>
 	<div class="item">
		<div class="button-wrapper">
			<p class="lodge-name"><?php the_sub_field('title'); ?></p>
			<a href="<?php the_sub_field('link_target'); ?>" class="button-explore">Explore</a>
		</div>
		<div class="camp-image" style="background-image:url(<?php the_sub_field('image'); ?>);"></div>

</div>  
<?php   endwhile;?>

<?php   endif;?>

</div>