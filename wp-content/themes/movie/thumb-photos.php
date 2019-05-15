<a href="<?php the_permalink(); ?>" class="photos" data-hires="<?php echo get_the_post_thumbnail_url($post->ID,'full'); ?>">">
	<div class="gallery-thumb ">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="thumb-img"> 
			<?php the_post_thumbnail('thumbnail'); ?>
		</div><!-- thumb-img --> 
	<?php endif; ?>
	</div> <!-- thumb -->
</a>



