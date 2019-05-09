<header>
	<div id="background" class="desktop">
		
	</div>
	<div id="background-light" class="desktop">
		
	</div>
	<?php 
		include 'nav.php';
		$date_now = date('Y-m-d H:i:s');
		$args = array(
		   'category_name'		=>'latest',
		    'posts_per_page'	=> 1,
		    'order'				=> 'ASC',
			'orderby'			=> 'meta_value'
		);
		$query = new WP_Query( $args );
		while ( $query->have_posts() ) : $query->the_post(); 
		    get_template_part( 'thumb-latest' );	


	 endwhile; 
	 wp_reset_postdata();
	 ?>
</header>