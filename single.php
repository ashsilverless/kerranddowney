<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package SLMaster
 */

get_header();
?>

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
 <?php 
	 global $post;
	 $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
 
<section class="sl-hero half" style="background-image: url('<?php echo $thumb['0'];?>')">
	<div class="content-wrapper layer-1 layer" data-depth='-0.51' data-type='parallax'>
		<h1><?php the_title();?></h1>
	</div>
</section> 
 
 	<div id="main" class="content blog">
 
<div class="container sub-menu-content">

        <div class="row">
	        
	        <div class="col-lg-2 offset-lg-1 col-sm-3 sticky">
 
				<h3>Browse By Subject</h3> 
				 <div class="cat-archives">
					<?php $categories = get_categories();
					foreach($categories as $category) {
					   echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
					}?>
				 </div>
				 
				<hr class="sidebar"/>
				
				<h3>Browse By Date</h3> 
				 <div class="month-archives">
					<?php wp_get_archives('type=monthly'); ?>
				 </div>
	        </div>
	        
	        <div class="col-lg-7 offset-lg-1 col-sm-9">
		        <article>
					<h2><?php the_title();?></h2>
					<?php the_date('jS F Y', '<h4>', '</h4>'); ?>
					<div class="cats"><?php the_category( ' ' ); ?></div>
					<div class="lead-wrapper">
					<?php the_content();?>
					</div>
		        </article>
	    	</div><!--col-7-->
	        
	        
        </div><!--row-->
    </div><!--container-->

 <?php endwhile; 
 wp_reset_postdata();
 else : ?>
 <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
 <?php endif; ?>


<?php get_footer();?>
