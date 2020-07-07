<?php
/**
 * Template Name: Home
 *
 * @package SLMaster
 */
    if ( ! defined( 'ABSPATH' ) ) {
        exit;   // Exit if accessed directly
    }

get_header();?>

<?php get_template_part( 'template-parts/hero', 'image' );?>

<div id="main" class="content">

    <?php get_template_part( 'template-parts/content', 'section' );?>

    <?php get_template_part( 'template-parts/we', 'do-best' );?>

    <?php get_template_part( 'template-parts/homevideo' );?>

    <?php get_template_part( 'template-parts/contact', 'cta' );?>

    <?php get_footer();?>