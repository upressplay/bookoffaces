<div class="single">
	<?php if ( has_post_thumbnail() ) : ?>
	<div class="featured-img"> 
		<?php the_post_thumbnail('large'); ?>
	</div> 
	<?php endif; ?>
	<div class="info">
		<div class="title">
			<?php the_title(); ?>
		</div>

		<div class="date">
			<?php echo get_field('role'); ?>
		</div>

		<div class="content">
			<?php the_content(); ?>
		</div>
	</div>
</div><!-- single -->