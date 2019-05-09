


<div id="latest">

	<?php 
		$sub = get_field('sub',$post->ID);
		if( $sub ): ?>
		<div class="sub">
			<?php echo $sub; ?>
		</div>
	<?php endif; ?>
	<div class="title">
		<?php echo get_the_title($post->ID); ?>
	</div>

	<?php if ( !empty( get_the_content($post->ID) ) ) : ?>
		<div class="desc">
			<?php echo get_the_content($post->ID); ?>
		</div>
	<?php endif; ?>

	<?php 
		$venue = get_field('venue',$post->ID);
		if( $venue ): ?>
		<div class="venue">
			<?php echo $venue; ?>
		</div>
	<?php endif; ?>
	<?php 
		$city = get_field('city',$post->ID);
		if( $city ): ?>
		<div class="city">
			<?php echo $city; ?>
		</div>
	<?php endif; ?>
	
	<?php 
		$ctaBtn = get_field('cta_btn');	
		if( $ctaBtn ): ?>

		<?php if($ctaBtn['url'] != ""): ?>
		<a href="<?php echo $ctaBtn['url']; ?>" target="<?php echo $ctaBtn['target']; ?>">
			<div id="latest-btn" class="yellow-btn">
				<?php echo $ctaBtn['text']; ?>
			</div><!-- get-tickets-btn -->
		</a>
		<?php endif; ?>
		<?php if($ctaBtn['vidid'] != ""): ?>
		<div id="latest-btn" class="yellow-btn videos" data-vidId="<?php echo $ctaBtn['vidid']; ?>">
			<?php echo $ctaBtn['text']; ?>
		</div><!-- get-tickets-btn -->
		<?php endif; ?>
	<?php endif; ?>
	
</div>
