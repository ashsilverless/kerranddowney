<section class="map-wrapper">

<div class="positioning-wrapper">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/img/footer-map-1.jpg" class="map">

	<div class="bracket">
		<div class="bracket-dot"></div>
	</div>

	
	<?php if( have_rows('map_links', 'option') ): ?>	

	<?php while ( have_rows('map_links', 'option') ) : the_row(); ?>
	
	<div class="map-item <?php the_sub_field('camp_name'); ?>" style="top:<?php the_sub_field('top'); ?>%; left:<?php the_sub_field('left'); ?>%;"> 
	<div class="icon">
		<span></span>
	</div>
	<p><?php the_sub_field('camp_name'); ?></p>
	<a href="<?php the_sub_field('button_target'); ?>">Explore
		<span></span>
	</a>    
	</div>
<?php   endwhile;?>

<?php   endif;?>
</div>
</section>