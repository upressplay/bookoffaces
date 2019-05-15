<a href="<?php the_permalink(); ?>" class="" data-hires="<?php echo get_the_post_thumbnail_url($post->ID,'full'); ?>">
	<div class="gallery-thumb">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="thumb-img"> 
				<?php the_post_thumbnail('rect'); ?>
			</div><!-- thumb-img --> 
		<?php endif; ?>
		<div class="info">


			<div class="title"> 
				<?php echo get_the_title($post->ID); ?>
			</div> 

			<div class="date">
				<?php echo get_field('role'); ?>
			</div>

		</div><!-- info --> 
		
	</div> <!-- thumb -->
</a> 



