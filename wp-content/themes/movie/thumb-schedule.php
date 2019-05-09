<?php 
	$start_date = get_field('start_date',$post->ID);
	$end_date = get_field('end_date',$post->ID);
	
	$date_now_u = current_time('U');
	$start_date_u = date("U", strtotime($start_date));
	$end_date_u = date("U", strtotime($end_date));

	$weekday = date("D", strtotime($start_date));
	$time = date("g a", strtotime($start_date));
	$month = date("M", strtotime($start_date));
	$day = date("j", strtotime($start_date));

?>
	<div class="thumb-schedule">
		<div class="info">
			<div class="date-time">
				<?php echo $weekday; ?>, <?php echo $month; ?> <?php echo $day; ?> - <?php echo $time; ?>
			</div><!-- date-time -->	
			<div class="venue-city">
				<div class="venue">
					<?php echo get_field('venue',$post->ID); ?>
				</div><!-- venue -->
				<div class="city">
					<?php echo get_field('city',$post->ID); ?>
				</div><!-- city -->
			</div><!-- venue-city -->
		</div><!-- info -->
		<?php 
			$ctaBtn = get_field('cta_btn');	
			if( $ctaBtn ): ?>
			<a href="<?php echo $ctaBtn['url']; ?>" target="_blank">
				<div class="tickets-btn">
					<?php echo $ctaBtn['text']; ?>
				</div><!-- cta-btn-holder -->
			</a>
		<?php endif; ?>
	</div> <!-- thumb-schedule -->

