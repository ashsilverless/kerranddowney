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

                <hr class="sidebar" />

                <h3>Browse By Date</h3>
                <div class="month-archives">
                    <?php wp_get_archives('type=monthly'); ?>
                </div>
                <hr class="sidebar" />
                <h3>Share</h3>
                <?php wcr_share_buttons(); ?>
            </div>

            <div class="col-lg-7 offset-lg-1 col-sm-9">
                <article>
                    <h2><?php the_title();?></h2>
                    <?php the_date('jS F Y', '<h4>', '</h4>'); ?>
                    <div class="cats"><?php the_category( ' ' ); ?></div>
                    <div class="lead-wrapper">
                        <?php the_content();?>



                        <!-- TESTING -->
                        <?php if( have_rows('blog_multi_content') ): ?>
                        <?php while( have_rows('blog_multi_content') ): the_row(); ?>

                        <?php if( get_sub_field('multi_sub_heading') ): ?>
                        <h2 class="heading"><?php the_sub_field('multi_sub_heading'); ?></h2>
                        <?php endif; ?>

                        <?php the_sub_field('multi_main_copy'); ?>


                        <?php $oneimage = get_sub_field('multi_single_image');
                        if( $oneimage): ?>
                        <div class="singleimage">

                            <a href="<?php echo $oneimage['url']; ?>" class="lightbox-gallery"
                                alt="<?php echo $oneimage['alt']; ?>"
                                style="background-image: url(<?php echo $oneimage['url']; ?>); "><img
                                    src="<?php echo $oneimage['url']; ?>" />
                            </a>
                        </div>
                        <?php endif; ?>


                        <?php 
$images = get_sub_field('stan_gallery_images');
if( $images ): ?>
                        <div class="gallery stan-gallery">

                            <?php foreach( $images as $image ): ?>
                            <a href="<?php echo $image['url']; ?>" class="lightbox-gallery"
                                alt="<?php echo $image['alt']; ?>"
                                style="background-image: url(<?php echo $image['url']; ?>); "><img
                                    src="<?php echo $image['url']; ?>" />
                            </a>
                            <?php endforeach; ?>

                        </div>
                        <?php endif; ?>







                        <?php endwhile; ?>
                        <?php endif; ?>

                        <?php get_template_part( 'template-parts/flexible-gallery2' );?>


                        <!-- TESTING -->








                        <?php
                        if( have_rows('content_blocks') ):
                        while ( have_rows('content_blocks') ) : the_row();
                        $contentImage = get_sub_field('single_image');
                        ?>




                        <?php 
$heading = get_sub_field('sub_heading');
if( $heading ): ?>

                        <h2 class="heading"><?php echo ($heading); ?></h2>
                        <?php endif; ?>

                        <?php the_sub_field('paragraphs'); ?>

                        <?php

                        $video = get_sub_field("single_video");
                        if($video): ?>

                        <video controls id="myVideo">
                            <source src="<?php echo $video['url'];?>" type="video/mp4">
                        </video>

                        <?php endif; ?>

                        <?php if($contentImage): ?>
                        <div class="singleimage">
                            <a href="<?php echo $contentImage['url']; ?>" class="lightbox-gallery "
                                alt="<?php echo $contentImage['alt']; ?>">
                                <img src="<?php echo $contentImage['url'];?>"
                                    alt="<?php echo $contentImage['alt']; ?>"></a>
                        </div>
                        <?php endif; ?>





                        <?php
                        endwhile;
                        else :
                        // no rows found
                        endif;
                        ?>


                        <?php get_template_part( 'template-parts/flexible-gallery' );?>


                        <?php if (have_rows('call_to_action_text')):?>
                        <?php while ( have_rows('call_to_action_text') ) : the_row(); ?>
                        <a href="<?php the_field('call_to_action'); ?>" class="button trans-dk med m-t-1">
                            <?php the_field('call_to_action_text'); ?><span></span>
                        </a>
                        <?php   endwhile;?>
                        <?php endif; ?>

                        <?php 
$link = get_field('call_to_action');
$linktext = get_field('call_to_action_text');
if( $linktext ): ?>
                        <a class="button trans-dk med m-t-1"
                            href="<?php echo esc_url( $link ); ?>"><?php echo ( $linktext ); ?><span></span></a>
                        <?php endif; ?>


                </article>
            </div>
            <!--col-7-->
        </div>
        <!--row-->
        <!-- <?php wcr_share_buttons(); ?> -->
    </div>
    <!--container-->
    <?php endwhile; 
 wp_reset_postdata();
 else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>


    <?php get_footer();?>