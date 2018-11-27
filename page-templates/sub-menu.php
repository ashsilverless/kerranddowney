<?php
/**
 * Template Name: Page With Sub Menu
 *
 * @package SLMaster
 */
    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
    }

get_header();?>

<?php get_template_part( 'template-parts/hero', 'image' );?>	

<div id="main" class="content">

    <div class="container sub-menu-content">

        <div class="row">
	        
	        <div class="col-lg-2 offset-lg-1 col-sm-3 sticky">
 
		 	    <?php get_template_part( 'template-parts/sub', 'menu' );?>	  
				
	        </div>
	        
	        <div class="col-lg-7 offset-lg-1 col-sm-9 content">

			<h2><?php the_field('heading'); ?></h2>
			<?php the_field('copy'); ?>

			<?php if( have_rows('info_section') ): ?>	
			
					<?php while ( have_rows('info_section') ) : the_row(); ?>
			
						<?php if( get_sub_field('heading') ): ?>	
							<h3><?php the_sub_field('heading'); ?></h3>
						<?php endif;?>
			
						<?php if( get_sub_field('small_heading') ): ?>	
							<p><strong><?php the_sub_field('small_heading'); ?></strong></p>
						<?php endif;?>
			
						<?php if( get_sub_field('copy') ): ?>	
							<?php the_sub_field('copy'); ?>
						<?php endif;?>			
						
						<?php if( get_sub_field('additional_copy') ): ?>
							<div class="collapsed-copy"><?php the_sub_field('additional_copy'); ?></div>
							<a class="button trans-dk med no-arrow expand-trigger">
								<div class="more">Read More</div>
								<div class="less">Read Less</div>
							</a>
						<?php endif;?>
						
			<?php endwhile;?>
			<?php endif;?>

			<?php if( have_rows('seasons') ): ?>	
				<div class="seasons">
					<?php while ( have_rows('seasons') ) : the_row(); ?>
			
						<img src="<?php the_sub_field('icon'); ?>"/>
						<h4><?php the_sub_field('heading'); ?></h4>
			
						<?php the_sub_field('copy'); ?>
			
			<?php endwhile;?>
			</div>
			<?php endif;?>

			<?php if( have_rows('toggle') ): ?>
				<div class="sl-accordion" role="tablist">
					<?php $i=1; while ( have_rows('toggle') ) : the_row(); ?>
						<div class="sl-card">
						    <div class="sl-card-header" role="tab" id="heading-<?php echo $i; ?>">
						      <a data-toggle="collapse" href="#collapse-<?php echo $i; ?>" aria-expanded="" aria-controls="collapseOne"><h5 class="mb-0">
						        
						         <?php the_sub_field('question'); ?>
						       <span></span>
						      </h5> </a>
						    </div>
						    <div id="collapse-<?php echo $i; ?>" class="collapse <?php the_field('expand'); ?>" role="tabpanel" data-parent="#accordion" aria-labelledby="heading-<?php echo $i; ?>">
						      <div class="sl-card-body">
						       	<?php the_sub_field('answer'); ?>
						      </div>
						    </div>
						</div>
					<?php $i++; endwhile; ?>
				</div>
			<?php endif; ?>


			<?php if( have_rows('team') ): ?>	
				<div class="people">
					<?php while ( have_rows('team') ) : the_row(); ?>
			<div class="team-member">
						<img src="<?php the_sub_field('image'); ?>"/>
						<h4><?php the_sub_field('name'); ?></h4>
						<?php the_sub_field('copy'); ?>
						
						<?php if( get_sub_field('additional_copy') ): ?>
							<div class="collapsed-copy"><?php the_sub_field('additional_copy'); ?></div>
							<a class="button trans-dk med no-arrow expand-trigger">
								<div class="more">Read More</div>
								<div class="less">Read Less</div>
							</a>
						<?php endif;?>
			</div>		
			<?php endwhile;?>
			</div>
			<?php endif;?>

			<?php if( have_rows('gallery') ):?>
			
		<div class="title">
			<p>Browse through our gallery</p>
		</div>
			
        <div class="row">				
				<?php $images = get_field('gallery');

				if( $images ): 
				
					foreach( $images as $image ): ?>

<div class="col-sm-4 sl-gallery">

	                <a href="<?php echo $image['url']; ?>" data-toggle="lightbox" data-gallery="gallery-name">
	                     <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
	                </a>
</div>

					<?php endforeach; ?>
        </div><!--row-->

				<?php endif; ?>

<script>
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });	
</script>

			<?php endif; ?>



			<?php if( have_rows('video_gallery') ):?>
					<?php while ( have_rows('video_gallery') ) : the_row(); ?>

						<div class="embed-container sl-video">
							<?php the_sub_field('video_url'); ?>
						</div>

					<?php endwhile; ?>
			<?php endif; ?>

	    </div><!--col-7-->
	        
	        
        </div><!--row-->
    </div><!--container-->

<?php get_template_part( 'template-parts/we', 'do-best' );?>	

<?php get_footer();?>