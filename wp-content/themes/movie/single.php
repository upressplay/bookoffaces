<?php 
	get_header(); 
	$cat = get_the_category($post->ID);
	$catSlug = $cat[0]->slug;
	$catName = $cat[0]->name;
	?>


	<div class="section-header">
		<span class="title">
			<?php echo $catName;?>
		</span>
	</div>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php if ($catSlug == "castcrew") {
				get_template_part( 'post-castcrew' );	
			} else {
				get_template_part( 'post-single' );
			} 
		?>
	<?php endwhile; endif; ?>
	<div class="page-nav">
		<?php previous_post_link('%link', '<div class="page-arrow left active"></div>', TRUE); ?> More <?php next_post_link('%link', '<div class="page-arrow right active"></div>', TRUE); ?> 
	</div> 
<?php get_footer(); ?>
