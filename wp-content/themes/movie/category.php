<?php 
	get_header(); 
	include 'header-category.php';
	$cat = get_the_category($post->ID);
	$catSlug = $cat[0]->slug;
	$catName = $cat[0]->name;
?>

<div class="section-header category">
	<h1 class="title">
		<?php echo $catName; ?>
	</h1>
</div><!-- section-header -->

<div class="thumb-holder">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if ($catSlug == "videos") {
		get_template_part( 'thumb-videos' );	
	} elseif ($catSlug == "headlines") {
		get_template_part( 'thumb-headlines' );
	} elseif ($catSlug == "photos") {
		get_template_part( 'thumb-photos' );
	} elseif ($catSlug == "schedule") {
		get_template_part( 'thumb-schedule' );	
	} else {
		get_template_part( 'thumb' );
	} ?>

<?php endwhile; endif; ?>

</div><!-- thumb-holder -->
<?php if (function_exists("pagination")) {
		pagination();
	} 
?>

<?php get_footer(); ?>