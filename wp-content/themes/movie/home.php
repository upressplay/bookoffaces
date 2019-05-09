<?php 
	get_header(); 
	include 'header-home.php';
?>
	<div id="schedule">
		<div class="section-header">
			<h3 class="sub">
				Schedule
			</h3><!-- title -->
			<h2 class="title">
				BILL MAHER COMEDY TOUR
			</h2><!-- title -->
		</div><!-- section-header -->
		<div class="schedule-thumbs">
			<?php 

				$meta_query = array(
					array(
						'key' => 'start_date',
						'value' => date('Ymd'),
						'type' => 'DATE',
						'compare' => '>='
					)
				);
				$args = array(
				   'category_name'		=>'schedule',
				    'posts_per_page'	=> 6,
				    'order'				=> 'ASC',
					'orderby'			=> 'meta_value',
					'meta_key'			=> 'start_date',
					'meta_type'			=> 'DATETIME',
					'meta_query' => $meta_query
				);
				$query = new WP_Query( $args );
				while ( $query->have_posts() ) : $query->the_post(); 
				    get_template_part( 'thumb-schedule' );	


			 endwhile; 
			 wp_reset_postdata();
			 ?>
		</div>
		<a href="/schedule">
			<div id="schedule-more" class="more-btn">
				MORE
			</div><!-- more-btn -->
		</a>

	</div><!-- schedule-section -->	
	<div class="quote">
		<?php 
			$args = array(
			   'category_name'		=>'quote',
			    'posts_per_page'	=> 1,
				'orderby'			=> 'rand'
			);
			$query = new WP_Query( $args );
			while ( $query->have_posts() ) : $query->the_post(); 
			   echo get_the_title($post->ID);

		 endwhile; 
		 wp_reset_postdata();?>
	</div><!-- quote -->	
	<div class="promo">
		<?php 
			$args = array(
			   'category_name'		=>'promo',
			    'posts_per_page'	=> 1,
				'orderby'			=> 'rand'
			);
			$query = new WP_Query( $args );
			while ( $query->have_posts() ) : $query->the_post(); 
			   get_template_part( 'thumb-promo' );	

		 endwhile; 
		 wp_reset_postdata();?>
	</div><!-- promo -->

	<div id="headlines" class="gallery">
		<div class="section-title">
			HEADLINES
		</div>
		<div class="container">
			<div class="gallery-arrow left">
				<i class="fas fa-chevron-circle-left"></i>
			</div>
			<div class="holder">
				<div class="thumbs">
				<?php 
					$pip = '<div class="pip"></div>';
					$pips = '';
					$count = 0;
					$args = array(
					   'category_name'		=>'headlines',
					    'posts_per_page'	=> 10,
						'orderby'			=> 'date'
					);
					$query = new WP_Query( $args );
					while ( $query->have_posts() ) : $query->the_post(); 
					   	get_template_part( 'thumb-headlines' );	
					   	$count++;
					   	if($count%2 != 0){
					   		$pips .= $pip;
					   		//$count =0;
					   	}

				 endwhile; 
				?>
				</div><!-- thumbs -->
			</div><!-- holder -->
			<div class="gallery-arrow right active">
				<i class="fas fa-chevron-circle-right"></i>
			</div>

		</div><!-- container -->
		<div class="pips">
			<?php echo $pips; ?>
		</div><!-- pips -->
		<a href="http://billmaher.tumblr.com" target="_blank">
			<div id="headlines-more" class="more-btn">
				MORE
			</div><!-- more-btn -->
		</a>
	</div><!-- headlines -->
	<div id="videos" class="gallery">
		<div class="section-title">
			VIDEOS
		</div>
		<div class="container">
			<div class="gallery-arrow left">
				<i class="fas fa-chevron-circle-left"></i>
			</div>
			<div class="holder">
				<div class="thumbs">
				<?php 
					$pip = '<div class="pip"></div>';
					$pips = '';
					$count = 0;
					$args = array(
					   'category_name'		=>'videos',
					    'posts_per_page'	=> 10,
						'orderby'			=> 'date'
					);
					$query = new WP_Query( $args );
					while ( $query->have_posts() ) : $query->the_post(); 
					   	get_template_part( 'thumb-videos' );	
					   	$count++;
					   	if($count%2 != 0){
					   		$pips .= $pip;
					   		//$count =0;
					   	}

				 endwhile; 
				?>
				</div><!-- thumbs -->
			</div><!-- holder -->
			<div class="gallery-arrow right active">
				<i class="fas fa-chevron-circle-right"></i>
			</div>

		</div><!-- container -->
		<div class="pips">
			<?php echo $pips; ?>
		</div><!-- pips -->
		<a href="/videos" target="_self">
			<div id="headlines-more" class="more-btn">
				MORE
			</div><!-- more-btn -->
		</a>
	</div><!-- videos -->
	<div id="photos" class="gallery">
		<div class="section-title">
			PHOTOS
		</div>
		<div class="container">
			<div class="gallery-arrow left">
				<i class="fas fa-chevron-circle-left"></i>
			</div>
			<div class="holder">
				<div class="thumbs">
				<?php 
					$pip = '<div class="pip"></div>';
					$pips = '';
					$count = 0;
					$args = array(
					   'category_name'		=>'photos',
					    'posts_per_page'	=> 10,
						'orderby'			=> 'date'
					);
					$query = new WP_Query( $args );
					while ( $query->have_posts() ) : $query->the_post(); 
					   	get_template_part( 'thumb-photos' );	
					   	$count++;
					   	if($count%2 != 0){
					   		$pips .= $pip;
					   		//$count =0;
					   	}

				 endwhile; 
				?>
				</div><!-- thumbs -->
			</div><!-- holder -->
			<div class="gallery-arrow right active">
				<i class="fas fa-chevron-circle-right"></i>
			</div>

		</div><!-- container -->
		<div class="pips">
			<?php echo $pips; ?>
		</div><!-- pips -->
		<a href="/videos" target="_self">
			<div id="headlines-more" class="more-btn">
				MORE
			</div><!-- more-btn -->
		</a>
	</div><!-- videos -->	
<?php get_footer(); ?>