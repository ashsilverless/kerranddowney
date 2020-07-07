<?php 

$images = get_field('gallery');

if( $images ): ?>

<?php foreach( $images as $image ): ?>
<div class="gallery-image">
    <a href="<?php echo $image['url']; ?>" data-toggle="lightbox" data-gallery="gallery-name">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    </a>
    <p><?php echo $image['caption']; ?></p>
</div>
<?php endforeach; ?>

<?php endif; ?>

<script>
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});
</script>