<section class="map-wrapper">

	<img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/img/KDB_Map_test.jpg" class="map">

	<?php if( have_rows('map_links', 'option') ): ?>	

	<?php while ( have_rows('map_links', 'option') ) : the_row(); ?>
	
	<div class="map-item" style="top:<?php the_sub_field('top'); ?>%; left:<?php the_sub_field('left'); ?>%;">
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
</section>