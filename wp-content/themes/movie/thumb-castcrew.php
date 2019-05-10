<a href="<?php echo get_field('url');?>" target="_blank">
	<div class="gallery-thumb">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="thumb-img"> 
				<?php the_post_thumbnail('medium'); ?>
			</div><!-- thumb-img --> 
		<?php endif; ?>
		<div class="info">

			

			<div class="title"> 
				<?php echo get_the_title($post->ID); ?>
			</div> 

			<div class="date">
				<?php echo get_field('role'); ?>
			</div>

			<?php if ( !empty( get_the_excerpt() ) ) : ?>
			<div class="excerpt"> 
				<?php echo get_the_excerpt($post->ID); ?>
			</div> 
			<?php endif; ?>
		</div><!-- info --> 
		
	</div> <!-- thumb -->
</a> 



