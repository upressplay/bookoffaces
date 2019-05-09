<?php 
	get_header(); 
	include 'header-category.php';
	$cat = get_the_category($post->ID);
	$catSlug = $cat[0]->slug;
	$catName = $cat[0]->name;
?>

<div class="section-header schedule">
	<h1 class="title">
		<?php echo $catName; ?>
	</h1>
</div><!-- section-header -->

<div class="thumb-holder">
<?php 
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

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
	    'order'				=> 'ASC',
		'orderby'			=> 'meta_value',
		'meta_key'			=> 'start_date',
		'meta_type'			=> 'DATETIME',
		'paged'				=> $paged,
		'meta_query' => $meta_query
	);
	$query = new WP_Query( $args );
	while ( $query->have_posts() ) : $query->the_post(); 
	    
	    get_template_part( 'thumb-schedule' );	


 endwhile; ?>

</div><!-- thumb-holder -->
<?php if (function_exists("pagination")) {
		pagination();
	} 
?>
<?php get_footer(); ?>