<div class="single">
	<?php if ( has_post_thumbnail() ) : ?>
	<header> 
		<?php the_post_thumbnail('large'); ?>
	</header> 
	<?php endif; ?>

	<div class="banner">
		<a href="https://bang-energy.com" target="_blank">
			<img src="http://new.kapowiff.com/wp-content/uploads/2019/02/bang_720x90.jpg"/>
		</a>
	</div>
	
	<h1 class="title">
		<?php the_title(); ?>
	</h1>

	<h2 class="date">
		<?php the_date('F j, Y'); ?>
	</h2>

	<div class="content">
		<?php the_content(); ?>
	</div>
</div><!-- single -->




