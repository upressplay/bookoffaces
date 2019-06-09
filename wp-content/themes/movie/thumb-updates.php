<a href="<?php the_permalink(); ?>" class="article" data-hires="<?php echo get_the_post_thumbnail_url($post->ID,'full'); ?>">
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
				<?php echo get_the_date( 'l F j, Y' ); ?>
			</div> 

			<?php if ( !empty( get_the_excerpt($post->ID) ) ) : ?>
			<div class="excerpt"> 
				<?php echo get_the_excerpt($post->ID); ?>
			</div> 
			<?php endif; ?>
		</div><!-- info --> 
		<div class="content">
			<?php the_content($post->ID); ?>
		</div>
	</div> <!-- gallery-thumb -->
</a> 



