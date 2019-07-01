<div class="single-post-content">
	
	<?php if ( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail('large'); ?>
	<?php endif; ?>
	<div class="info">
		<h1 class="title">
			<?php the_title(); ?>
		</h1>

		<div class="share-btns row">
			<div class="share" data-type="facebook" data-title="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>" data-desc="<?php echo get_the_excerpt($post->ID); ?>">
				<span class="fab fa-facebook-square" aria-hidden="true"></span><span class="screen-reader-text">Facebook</span> 
			</div>
			<div class="share" data-type="twitter" data-title="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>" data-desc="<?php echo get_the_excerpt($post->ID); ?>">
				<span class="fab fa-twitter-square" aria-hidden="true"></span><span class="screen-reader-text">Twitter</span> 
			</div>
		</div>

		<h2 class="date">
			<?php echo get_field('role'); ?>
		</h2>

		<span class="content">
			<?php the_content(); ?>
		</span>
	</div>
</div><!-- single -->









