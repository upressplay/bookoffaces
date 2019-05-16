<?php 
	$link = get_field('link');	
	$featured_img_url = get_the_post_thumbnail_url($post->ID,'full'); 
	$quote = get_field('quote');
	$quote_length = strlen($quote);
	$class = 'txt';
	if($quote_length > 100) $class = 'txt long';

	if( $link ):
		echo '<a href="'.$link['url'].'" target="'.$link['target'].'">';
	endif; 
?>
<div class="quote scrolling" style="background-image:url(<?php echo $featured_img_url; ?>);">
	<div class="holder <?php echo get_field('placement'); ?>">
		<div class="<?php echo $class; ?>">
			"<?php echo $quote; ?>"
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



