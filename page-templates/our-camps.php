<?php
/**
 * Template Name: Our Camps
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
	
    <div class="row row-eq-height camp-summary final-element">

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


<?php get_footer();?>