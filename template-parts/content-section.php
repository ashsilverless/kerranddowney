<div class="container text-center">
	<div class="row">

		<div class="col-sm-6 offset-sm-3">
			
			<div class="lead-wrapper">
				<?php the_field('lead_copy');?>	
			</div>
			
			<?php if( get_field('button_text') ): ?>
			<a href="<?php the_field('button_target');?>" class="button trans-dk med final-element">
				<?php the_field('button_text');?><span></span>
			</a>	
			<?php endif; ?>
			
		</div>		
		
	</div><!--row-->
</div><!--container-->




