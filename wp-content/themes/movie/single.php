<?php 
	get_header(); 
	$cat = get_the_category($post->ID);
	$catSlug = $cat[0]->slug;
	$catName = $cat[0]->name;
	echo $catSlug;
	?>


	<div class="section-header">
		<span class="title">
			<?php echo $catName;?>
		</span>
	</div>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php if ($catSlug == "castcrew") {
				get_template_part( 'post-castcrew' );	
			} elseif ($catSlug == "photos") {
				get_template_part( 'post-photos' );
			} else {
				get_template_part( 'post-single' );
			} 
		?>
	<?php endwhile; endif; ?>
	<div class="page-nav">
		<?php previous_post_link('%link', '<i class="fas fa-caret-square-left"></i>', TRUE); ?>  <?php next_post_link('%link', '<i class="fas fa-caret-square-right"></i>', TRUE); ?> 
	</div> 
<?php get_footer(); ?>
