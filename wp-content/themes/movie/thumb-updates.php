<div class="gallery-thumb">
	<a href="<?php the_permalink(); ?>" class="article" data-hires="<?php echo get_the_post_thumbnail_url($post->ID,'full'); ?>">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="thumb-img"> 
			<?php the_post_thumbnail('rect'); ?>
		</div><!-- thumb-img --> 
	<?php endif; ?>
	<div class="info">

		<div class="title"> 
			<?php echo get_the_title($post->ID); ?>
		</div> <!-- title --> 

		<div class="date"> 
			<?php echo get_the_date( 'l F j, Y' ); ?>
		</div> <!-- date --> 

		<?php if ( !empty( get_the_excerpt($post->ID) ) ) : ?>
		<div class="excerpt"> 
			<?php echo get_the_excerpt($post->ID); ?>
		</div> <!-- excerpt --> 
		<?php endif; ?>
	</div><!-- info --> 
	</a> 
	<div class="content">
		<?php the_content($post->ID); ?>
	</div><!-- content -->
</div> <!-- gallery-thumb -->




