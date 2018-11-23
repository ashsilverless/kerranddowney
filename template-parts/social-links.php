<?php if( have_rows('social_links', 'option') ): ?>	
<?php while ( have_rows('social_links', 'option') ) : the_row(); ?>
<a href="<?php the_sub_field('facebook'); ?>"><i class="fab fa-facebook-f"></i></a>
<a href="<?php the_sub_field('twitter'); ?>"><i class="fab fa-twitter"></i></a>
<a href="<?php the_sub_field('instagram'); ?>"><i class="fab fa-instagram"></i></a>
<?php   endwhile;?>
<?php   endif;?>