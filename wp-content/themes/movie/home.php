<?php 
	get_header(); 
	include 'festivals.php';

	$args = array(
	   'category_name'		=>'quote',
	    'posts_per_page'	=> 1
	);
	$query = new WP_Query( $args );
	while ( $query->have_posts() ) : $query->the_post(); 

	   get_template_part( 'thumb-quote' );	

	endwhile; 
	wp_reset_postdata();
	?>

	

	<?php 
		$args = array(
		   	'category_name'		=>'synopsis',
		    'posts_per_page'	=> 1
		);
		$query = new WP_Query( $args );
		while ( $query->have_posts() ) : $query->the_post(); 

			if ( !empty( get_the_content() ) ) :
				echo '<div id="synopsis">';
				echo '<div class="holder">';
		   		echo get_the_content($post->ID);
		   		echo '</div>';
		   		echo '</div>';
		   	endif;

		endwhile; 
		wp_reset_postdata();
	?>

	<?php 
	$args = array(
	   'category_name'		=>'quote',
	    'posts_per_page'	=> 1,
		'offset'			=> 1
	);
	$query = new WP_Query( $args );
	while ( $query->have_posts() ) : $query->the_post(); 

	   get_template_part( 'thumb-quote' );	

	endwhile; 
	wp_reset_postdata();
	?>
	<div id="headlines" class="gallery">
		<div class="section-title">
			Updates
		</div>
		<div class="container">
			<div class="gallery-arrow left">
			</div>
			<div class="holder">
				<div class="thumbs">
				<?php 
					$pip = '<div class="pip"></div>';
					$pips = '';
					$count = 0;
					$args = array(
					   'category_name'		=>'updates',
					    'posts_per_page'	=> 10,
						'orderby'			=> 'date'
					);
					$query = new WP_Query( $args );
					while ( $query->have_posts() ) : $query->the_post(); 
					   	get_template_part( 'thumb-updates' );	
					   	$count++;
					   	if($count%2 != 0){
					   		$pips .= $pip;
					   		//$count =0;
					   	}

				 endwhile; 
				 wp_reset_postdata();
				?>
				</div><!-- thumbs -->
			</div><!-- holder -->
			<div class="gallery-arrow right active">
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
	</div><!-- updates -->
	<div id="castcrew" class="gallery">
		<div class="section-title">
			Cast/Crew
		</div>
		<div class="container">
			<div class="gallery-arrow left">
			</div>
			<div class="holder">
				<div class="thumbs">
				<?php 
					$pip = '<div class="pip"></div>';
					$pips = '';
					$count = 0;
					$args = array(
					   'category_name'		=>'castcrew',
					    'posts_per_page'	=> 100
					);
					$query = new WP_Query( $args );
					while ( $query->have_posts() ) : $query->the_post(); 
					   	get_template_part( 'thumb-castcrew' );	
					   	$count++;
					   	if($count%2 != 0){
					   		$pips .= $pip;
					   		//$count =0;
					   	}

				 endwhile; 
				 wp_reset_postdata();
				?>
				</div><!-- thumbs -->
			</div><!-- holder -->
			<div class="gallery-arrow right active">
			</div>

		</div><!-- container -->
		<div class="pips">
			<?php echo $pips; ?>
		</div><!-- pips -->
	</div><!-- headlines -->
	<div id="videos" class="gallery">
		<div class="section-title">
			Videos
		</div>
		<div class="container">
			<div class="gallery-arrow left">
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
				 wp_reset_postdata();
				?>
				</div><!-- thumbs -->
			</div><!-- holder -->
			<div class="gallery-arrow right active">
			</div>

		</div><!-- container -->
		<div class="pips">
			<?php echo $pips; ?>
		</div><!-- pips -->
		<a href="/videos" target="_self">
			<div id="videos-more" class="more-btn">
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
				 wp_reset_postdata();
				?>
				</div><!-- thumbs -->
			</div><!-- holder -->
			<div class="gallery-arrow right active">
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
	</div><!-- photos -->	
<?php get_footer(); ?>