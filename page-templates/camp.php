<?php
/**
 * Template Name: Camp Page
 *
 * @package SLMaster
 */
    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
    }

get_header();?>

<?php get_template_part( 'template-parts/hero', 'image' );?>	

<div id="main" class="content">

<?php get_template_part( 'template-parts/sable', 'head' );?>	

<?php get_template_part( 'template-parts/content', 'section' );?>	

    <div class="container">
	
    <div class="row">
	
	        <div class="col-lg-3 offset-lg-2  col-sm-5 features sticky"> 

			<?php if( have_rows('feature_list') ): ?>	
		
				<?php while ( have_rows('feature_list') ) : the_row(); ?>
		        
					<p><?php the_sub_field('feature'); ?></p>
	
				<?php   endwhile;?>
				
			<?php   endif;?>

	        </div><!--col-4-->

	        <div class="col-lg-5 col-sm-7 camp-description"> 

				<?php the_field('description'); ?>
				
					<a href="/contact-2" class="button trans-dk med m-t-1">
						Contact Us About <?php the_title();?><span></span>
					</a>	
				
	        </div>

    </div><!--row-->

</div><!--container-->


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