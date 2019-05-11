<?php 
	$link = get_field('link');	
	$featured_img_url = get_the_post_thumbnail_url($post->ID,'full'); 
	if( $link ):
		echo '<a href="'.$link['url'].'" target="'.$link['target'].'">';
	endif; 
?>
<div class="quote scrolling" style="background-image:url(<?php echo $featured_img_url; ?>);">
	<div class="holder <?php echo get_field('placement'); ?>">
		<div class="txt">
			"<?php echo get_field('quote'); ?>"
		</div>
		<div class="author">
			<?php echo get_field('author'); ?>
		</div>
	</div>
</div> <!-- thumb -->
<?php 
	if( $link ): 
		echo '</a>';
	endif; 
?>



