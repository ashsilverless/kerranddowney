<div class="camp-video">



    <?php if( have_rows('video') ): ?>

    <div class="title">
        <p>Videos</p>
    </div>

    <?php while ( have_rows('video') ) : the_row(); ?>


    <?php

$video = get_sub_field("video_file");
if($video): ?>

    <video controls id="myVideo">
        <source src="<?php echo $video['url'];?>" type="video/mp4">
    </video>

    <?php endif; ?>


    <?php endwhile; ?>


    <!--row-->

    <?php endif; ?>


</div>
<!--container-->