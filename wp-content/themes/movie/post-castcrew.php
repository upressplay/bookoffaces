<div class="castcrew">
	<?php if ( has_post_thumbnail() ) : ?>
	<div class="headshot"> 
		<?php the_post_thumbnail('large'); ?>
	</div> 
	<?php endif; ?>

	<h1 class="title">
		<?php the_title(); ?>
	</h1>

	<h2 class="date">
		<?php echo get_field('role'); ?>
	</h2>

	<div class="content">
		<?php the_content(); ?>
	</div>
</div><!-- single -->