<?php
/**
 * Template Name: Contact
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
	        
	        <div class="col-lg-3 offset-lg-1 col-sm-4 contact-details">
        	       
        	       <h3>Our Details</h3> 
		        
					<p><i class="fas fa-phone"></i><?php the_field('main_telephone_number', 'option'); ?>	<br/>
					or <?php the_field('alt_telephone_number', 'option'); ?><br/>
					(0800 - 1700 Mon to Fri)		
					</p>	
					<p><?php the_field('weekend_telephone_number', 'option'); ?>	<br/>
					(0730 - 1400 Sat and Sun)</p>
					
					<p><i class="far fa-envelope"></i>	<?php the_field('email_address', 'option'); ?></p>			
					
					<p><i class="far fa-compass"></i>Ker & Downey Botswana<br/><?php the_field('office_address', 'option'); ?></p>
	        
	       <h3>Our Partners</h3> 

            <div class="toggle-wrapper">
            <?php if( have_rows('representatives', 'option') ): 	
                $i = 0; 
            		while ( have_rows('representatives', 'option') ) : the_row(); 
                $i++;?>
                
            <div class="toggle reps mb2">
            
              <div class="toggle__question" role="tab">    
                  <p class="headingSupporting headingSupporting__sm">
                    
                    <h5 class="mb-0">
                        <?php the_sub_field('title'); ?>
            			<span></span>
            		</h5>
                  </p>
              </div>
            
              <div class="toggle__answer" role="tabpanel">
                <p><i class="fas fa-user-alt"></i><?php the_sub_field('name'); ?></p>
						       	
						       	<?php if( get_sub_field('web_address') ): ?>
						       		<p><i class="fas fa-globe-africa"></i><a href="<?php the_sub_field('web_address'); ?>" target="_blank"><?php the_sub_field('web_address'); ?></a></p>
						       	<?php endif;?>
						       	
						       	<?php if( get_sub_field('email_address') ): ?>						       	
						       		<p><i class="far fa-envelope"></i><a href="mailto:<?php the_sub_field('email_address'); ?>"><?php the_sub_field('email_address'); ?></a></p>
						       	<?php endif;?>						       		

						       	<?php if( get_sub_field('telephone_number') ): ?>								       		
						       		<p><i class="fas fa-phone"></i><a href="tel:<?php the_sub_field('telephone_number'); ?>"><?php the_sub_field('telephone_number'); ?></a></p>
						       	<?php endif;?>							       		
						       		
						       	<p><?php the_sub_field('copy'); ?></p>
              </div>
            
            </div>
            		
            <?php 
              $tCount = $i;
              endwhile; 
              endif;
            ?>
            </div><!--togglewrapper-->
	        
	        </div>
	        
	        <div class="col-lg-6 offset-lg-1 col-sm-8 main-form">
				<h2>Contact Us</h2>
				<p>	<?php the_field('introduction_text'); ?></p>
				<div class="sl-form-wrapper">
					<?php echo do_shortcode('[contact-form-7 id="455" title="Contact Page Form"]');?>
				</div>
			</div><!--col-7-->
	        
	        
        </div><!--row-->
    </div><!--container-->

<?php get_template_part( 'template-parts/we', 'do-best' );?>	

<?php get_footer();?>