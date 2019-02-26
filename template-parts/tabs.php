<section class="tabs">
	<div class="top-section">
		<div class="container">
			<div class="row">
			<!-- Check for parent repeater row -->
			<?php if( have_rows('tabs') ): ?>
			<ul class="nav justify-content-center" id="myTab" role="tablist">
				<?php $row = 1; // number rows ?>
				<?php // Step 1: Loop through rows, first displaying tab titles
				while( have_rows('tabs') ): the_row(); //  ?>
				<li role="presentation" class="<?php if($row == 1) {echo 'active';}?> nav-item">
					<a href="#row<?php echo $row; ?>" role="tab" data-toggle="tab" class="nav-link <?php if($row == 1) {echo 'active';}?>">
						<img src="<?php the_sub_field('image'); ?>"/>
						<h2><?php the_sub_field('heading'); ?></h2>
						<div class="thin-arrow"></div>
					</a>
				</li>
				<?php $row++; endwhile; // (have_rows('tab_panes') ):?>
			</ul>
			<?php endif; // (have_rows('tab_panes') ): ?>
			</div><!--row-->
	</div><!--container-->
</div><!--top section-->

	<div class="bottom-section">
		<img src="<?php the_field('tab_background_image'); ?>" />	
			<div class="container">	
			<?php if( have_rows('tabs') ): ?>
				<div class="tab-content" id="myTabContent">
				<?php $row = 1; // number rows ?>
				<?php // Step 2: Loop through rows, now displaying tab contents
				while( have_rows('tabs') ): the_row();
				// Display each item as a list ?>
					<div class="tab-pane fade show <?php if($row == 1) {echo 'active';}?>" id="row<?php echo $row; ?>" role="tabpanel">
						<div class="row">
							<div class="col-sm-7">
								<h3><?php the_sub_field('heading'); ?></h3>
								<?php the_sub_field('main_copy'); ?>			
								<p class="lodges">Our lodges in the <?php the_sub_field('heading'); ?>: 				
								<?php if( have_rows('lodges_in_this_area') ) :?>
				
								<?php while( have_rows('lodges_in_this_area') ): the_row();?>							
										<a href="<?php the_sub_field('lodge_page'); ?>" class="inline-link"><?php the_sub_field('lodge_name'); ?></a>	
								<?php endwhile; endif; ?>				
								</p>		
								</div>
							<div class="col-sm-5 text-center">
							<img src="<?php the_sub_field('map'); ?>"/>	
							</div>	
					</div><!--row-->
				</div>
			<?php $row++; endwhile; // (have_rows('tab_panes') ):?>
			</div>
		<?php endif; // (have_rows('tab_panes') ): ?>
		</div>
	</div>
</section><!--bottom section-->  