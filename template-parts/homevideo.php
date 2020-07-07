<div class="container home-video">



    <?php if( have_rows('video_files') ): ?>
    <div class="title">
        <p>Videos</p>
    </div>

    <div class="row">

        <?php while ( have_rows('video_files') ) : the_row(); ?>

        <div class="col-sm-4">
            <?php

$video = get_sub_field("video");
if($video): ?>

            <video controls id="myVideo">
                <source src="<?php echo $video['url'];?>" type="video/mp4">
            </video>

            <?php endif; ?>
        </div>

        <?php endwhile; ?>

    </div>
    <!--row-->

    <?php endif; ?>


</div>
<!--container-->