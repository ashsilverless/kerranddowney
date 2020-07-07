<div class="gallery2">
    <?php
if( have_rows('gallery2') ):
while ( have_rows('gallery2') ) : the_row();?>

    <?php if( get_row_layout() == 'fullwidth2' ):?>
    <div class="gallery__fullwidth slide-up">
        <?php $image = get_sub_field('image2');?>
        <?php $imageHeight = get_sub_field('height2');?>
        <div class="inline-wrapper">
            <a href="<?php echo $image['url']; ?>" class="inline">
                <img src="<?php echo $image['url']; ?>" />
            </a>
        </div>
        <?php if($imageType == 'no') :?>
        <a href="<?php echo $image['url']; ?>" class="lightbox-gallery <?php echo $imageType;?>"
            alt="<?php echo $image['alt']; ?>"
            style="background-image: url(<?php echo $image['url']; ?>); height:<?php echo $imageHeight;?>vh;"><img
                src="<?php echo $image['url']; ?>" />
            <!--<?php echo $image['caption']; ?>--></a>
        <?php endif;?>


    </div>
    <!--fullwidth-->

    <?php elseif( get_row_layout() == 'halves2' ):?>
    <?php $imageHeight = get_sub_field('height');?>
    <div class="gallery__halves slide-up">
        <?php if( have_rows('half_images2') ):
        while ( have_rows('half_images2') ) : the_row();
        $halfImage = get_sub_field('half_image2');?>
        <a href="<?php echo $halfImage['url']; ?>" class="lightbox-gallery" alt="<?php echo $halfImage['alt']; ?>"
            style="background-image: url(<?php echo $halfImage['url']; ?>); height:<?php echo $imageHeight;?>vh;"><img
                src="<?php echo $halfImage['url']; ?>" />
            <!--<?php echo $halfImage['caption']; ?>--></a>
        <?php endwhile; endif; //image repeater?>
    </div>

    <?php elseif( get_row_layout() == 'onethird-twothird2' ):?>
    <?php $alignment = get_sub_field('alignment2');?>
    <div class="gallery__onethird-twothird <?php echo $alignment;?> slide-up">
        <?php $imageHeight = get_sub_field('height2');?>
        <?php if( have_rows('half_images2') ):
        while ( have_rows('half_images2') ) : the_row();
        $halfImage = get_sub_field('half_image2');?>

        <a href="<?php echo $halfImage['url']; ?>" class="lightbox-gallery" alt="<?php echo $halfImage['alt']; ?>"
            style="background-image: url(<?php echo $halfImage['url']; ?>); height:<?php echo $imageHeight;?>vh;">
            <!--<?php echo $halfImage['caption']; ?>--></a>
        <?php endwhile; endif; //image repeater?>
    </div>

    <?php elseif( get_row_layout() == 'three-images2' ):?>
    <?php $imageHeight = get_sub_field('height2');?>
    <?php $alignment = get_sub_field('alignment2');?>
    <div class="gallery__three-images <?php echo $alignment;?> slide-up" style="height:<?php echo $imageHeight;?>vh;">
        <?php if( have_rows('tri_images2') ):
        while ( have_rows('tri_images2') ) : the_row();
        $halfImage = get_sub_field('tri_image2');?>
        <a href="<?php echo $halfImage['url']; ?>" class="lightbox-gallery" alt="<?php echo $halfImage['alt']; ?>"
            style="background-image: url(<?php echo $halfImage['url']; ?>);"><img
                src="<?php echo $halfImage['url']; ?>" />
            <!--<?php echo $halfImage['caption']; ?>--></a>
        <?php endwhile; endif; //image repeater?>
    </div>

    <?php endif; //else if halves?>
    <?php endwhile; endif; //main gallery loop?>
</div>