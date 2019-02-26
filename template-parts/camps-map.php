<section class="map-wrapper">

<div class="positioning-wrapper">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/img/footer-map-1.jpg" class="map">

	<div class="bracket">
		<div class="bracket-dot"></div>
	</div>

	
	<?php if( have_rows('map_links', 'option') ): ?>	

	<?php while ( have_rows('map_links', 'option') ) : the_row(); ?>
	<a href="<?php the_sub_field('button_target'); ?>">
    	
        <div class="map-item <?php the_sub_field('camp_name'); ?>" style="top:<?php the_sub_field('top'); ?>%; left:<?php the_sub_field('left'); ?>%;"> 
            
            <div class="icon">
            <span></span>
            </div>
        
            <div class="content">
                <p><?php the_sub_field('camp_name'); ?></p>
                <p class="action">Explore</p>
                <span></span>  
            </div>
        
        </div>

	</a>
	
<?php   endwhile;?>

<?php   endif;?>
</div>
</section>