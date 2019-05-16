<div class="single">
	<?php if ( has_post_thumbnail() ) : ?>
	<div class="featured-img"> 
		<?php the_post_thumbnail('large'); ?>
	</header> 
	<?php endif; ?>
	<div class="info">
		<h1 class="title">
			<?php the_title(); ?>
		</h1>

		<h2 class="date">
			<?php the_date('F j, Y'); ?>
		</h2>

		<div class="content">
			<?php the_content(); ?>
		</div>
	</div>
</div><!-- single -->




