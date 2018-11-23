<?php
/**
 * Template Name: Gallery Page
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

<?php get_template_part( 'template-parts/sable', 'head' );?>	

        <div class="row">
	        
	        <div class="col-md-2 offset-md-1">
				<?php if(get_field('sub_menu') == "planning"):
					wp_nav_menu( array( 
					'theme_location' => 'k&d-planning-menu', 
					'container_class' => 'planning-menu-class' ) ); 	
				endif; ?>		        
 
 				<?php if(get_field('sub_menu') == "about"):
					wp_nav_menu( array( 
					'theme_location' => 'k&d-about-menu', 
					'container_class' => 'planning-menu-class' ) ); 	
				endif; ?>		        
	        </div>
	        
	        <div class="col-md-7 offset-md-1">

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






















	        </div><!--col-7-->
	        
	        
        </div><!--row-->
    </div><!--container-->

<?php get_template_part( 'template-parts/we', 'do-best' );?>	

<?php get_footer();?>