<?php
/**
 * Template Name: Safari Page
 *
 * @package SLMaster
 */
    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
    }

get_header();?>

<?php get_template_part( 'template-parts/hero', 'image' );?>	

<div id="main" class="content">

    <div class="container">
	    
	    <?php get_template_part( 'template-parts/sable', 'head' );?>	
	    
        <div class="row">
	        
	        <div class="col-lg-2 offset-lg-1 col-sm-4">

		 	    <?php get_template_part( 'template-parts/sub', 'menu' );?>
        
	        </div>

			<div class="col-lg-7 offset-lg-1 col-sm-8">
			
			<div class="introduction">
				<h2><?php the_field('heading'); ?></h2>
				<?php the_field('copy'); ?>
			</div>
			
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


			</div>

        </div>
    
    </div>

<section class="camp-gallery">

    <div class="container">
	
	    <div class="row">
		    
		    <div class="title">
			    <p><?php the_title();?> Gallery</p>
			</div>
	
	    </div><!--row-->

	</div><!--container-->	    

    <div class="">
	
	    <div class="row no-gutters">

			<?php if (have_rows('images')):
			    while (have_rows('images')) : the_row();
			        ?>
			<?php if( get_sub_field('image') ): ?>
				<div class="col-sm-<?php the_sub_field('width');?> image-item" style="background-image:url(<?php the_sub_field('image');?>)">
	                  <a href="<?php the_sub_field('image');?>" data-toggle="lightbox" data-gallery="gallery-name">		                </a>	
				</div>

			<?php
				endif;
		    endwhile;
			endif;?>

    	</div><!--row-->

	</div><!--container-->	    

</section>

<script>
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });	
</script>

<?php get_footer();?>