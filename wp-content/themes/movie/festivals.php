<div id="festivals">
<?php 
	$args = array(
	   'category_name'		=>'festivals',
	    'posts_per_page'	=> 100,
	    'order'				=> 'ASC',
		'orderby'			=> 'meta_value'
	);
	$query = new WP_Query( $args );
	while ( $query->have_posts() ) : $query->the_post(); 
	    get_template_part( 'thumb-festival' );	


 endwhile; 
 wp_reset_postdata();
 ?>
</div>