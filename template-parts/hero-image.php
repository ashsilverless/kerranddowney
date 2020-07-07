<section class="sl-hero <?php the_field('height');?>" style="background-image: url(<?php the_field('image'); ?>);">
    <div class="content-wrapper layer-1 layer" data-depth='-0.51' data-type='parallax'>
        <h1><?php the_field('hero_heading');?>
            <?php if( get_field('sub_heading') ): ?>
            <div><span><?php the_field('sub_heading');?></span></div>
            <?php endif; ?>
        </h1>
        <?php if( get_field('alert_button_text') ): ?>
        <div class="alert-link">
            <a href="<?php the_field('alert_link');?>"
                class="button trans-li med"><?php the_field('alert_button_text');?><span></span></a>
        </div>
        <?php endif; ?>
    </div>
</section>