<?php
/**
 * Template Name: Blog
 *
 * @package SLMaster
 */
    if ( ! defined( 'ABSPATH' ) ) {
        exit;   // Exit if accessed directly
    }

get_header();?>

	<?php get_template_part( 'template-parts/hero', 'image' );?>	

	<div id="main" class="content blog">

<div class="container sub-menu-content">

        <div class="row">

	        <div class="col-lg-2 offset-lg-1 col-sm-3 sticky">

				<?php get_template_part( 'template-parts/blog', 'sidebar' );?>	
	        
	        </div>
	        
	        <div class="col-lg-7 offset-lg-1 col-sm-9">
				
			<?php
			    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			    $query = new WP_Query( array(
			        'posts_per_page' => 1,
			        'paged' => $paged
			    ) );
			?>

			<?php if ( $query->have_posts() ) : ?>

			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			
				<div class="article-card">
					<?php global $post;
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
						<a href="<?php echo get_page_link(); ?>">
						<div class="card-top" style="background-image: url('<?php echo $thumb['0'];?>')"></div>	
						<div class="card-bottom">
							<h2><?php the_title(); ?>	</h2>
							<?php the_date('jS F Y', '<h4>', '</h4>'); ?> 
							<?php the_excerpt(); ?>	 		
							<a href="<?php echo get_page_link(); ?>" class="button trans-li med">Read More<span></span></a>				 
						</div>
					</a>	 
				</div>
			
			<?php endwhile; ?>

			<div class="pagination">
			    <?php 
			        echo paginate_links( array(
			            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
			            'total'        => $query->max_num_pages,
			            'current'      => max( 1, get_query_var( 'paged' ) ),
			            'format'       => '?paged=%#%',
			            'show_all'     => false,
			            'type'         => 'plain',
			            'end_size'     => 2,
			            'mid_size'     => 1,
			            'prev_next'    => false,
			            'add_args'     => false,
			            'add_fragment' => '',
			        ) );
			    ?>
			</div>

			<?php wp_reset_postdata(); else : endif; ?>

    	</div>

        </div><!--row-->
    </div><!--container-->
<?php get_footer();?>