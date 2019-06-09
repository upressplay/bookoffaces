<header>
	<div id="trending">
		<?php 
		$date_now = date('Y-m-d H:i:s');
		$args = array(
		   'category_name'		=>'trending',
		    'posts_per_page'	=> 1,
		    'order'				=> 'ASC',
			'orderby'			=> 'meta_value'
		);
		$query = new WP_Query( $args );
		while ( $query->have_posts() ) : $query->the_post(); 
		   	if ( !empty( get_the_content($post->ID) ) ) :
		   		echo get_the_content($post->ID); 
			endif;

		endwhile; 
		wp_reset_postdata();
	 ?>
	</div>

	<div class="company-logo">
		<img src="<?php echo get_template_directory_uri(); ?>/img/cathartic_logo.jpg"/>
	</div>
	<div class="presents">
		presents
	</div>
	<div class="film-by">
		a Rus Robert Blemker film:
	</div>
	<div class="site-title">
		The Book of Faces
	</div>

</header>