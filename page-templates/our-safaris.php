<?php
/**
 * Template Name: Our Safaris
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

<?php get_template_part( 'template-parts/tabs');?>

<div class="container">
	
	<div class="title"><p>Our Safaris</p></div>
	
    <div class="row row-eq-height camp-summary">

	<?php if( have_rows('leaders') ): ?>	

		<?php while ( have_rows('leaders') ) : the_row(); ?>
	
	        <div class="col-lg-4 col-md-6 outer">
				<div class="camp-overview" style="background:<?php the_sub_field('background_colour'); ?>;">
				
				<div class="camp-image" style="background-image:url(<?php the_sub_field('image'); ?>);"></div>
			
				<div class="content-wrapper">
					<h2 class="lodge-name"><?php the_sub_field('heading'); ?></h2>
					<?php the_sub_field('copy'); ?>
					<a href="<?php the_sub_field('button_target'); ?>" class="button trans-li med">
						<?php the_sub_field('button_text'); ?>
						<span></span>
					</a>
				</div>

				</div>
	        </div><!--col-4-->
	
		<?php   endwhile;?>
		
	<?php   endif;?>

    </div><!--row-->

</div><!--container-->

<div class="container text-center">
	
	<div class="bespoke-cta">

		<div class="col-sm-6 offset-sm-3">
	
		<h2><?php the_field('heading'); ?></h2>		
		<?php the_field('copy'); ?>
		
	    </div>
	
		<div class="row contact-cta">
	
			<div class="col-sm-6 text-right">
				<a href="tel :<?php the_field('main_telephone_number', 'option');?>"><?php the_field('main_telephone_number', 'option');?></a>
			</div>
				
			<div class="col-sm-6 text-left">
				<a href="mailto :<?php the_field('email_address', 'option');?>"><?php the_field('email_address', 'option');?></a>
			</div>
							
		</div><!--row-->
	    
	</div><!--bespoke-cta-->

</div><!--container-->

<?php get_template_part( 'template-parts/we', 'do-best' );?>	

<?php get_footer();?>