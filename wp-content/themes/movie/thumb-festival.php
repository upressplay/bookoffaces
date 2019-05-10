
<?php 
	$link = get_field('link');	
	if( $link ):
		echo '<a href="'.$link['url'].'" target="'.$link['target'].'">';
	endif; 
?>
<div class="festival-thumb">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="thumb-img"> 
			<?php the_post_thumbnail('rect'); ?>
		</div><!-- thumb-img --> 
	<?php endif; ?>
</div> <!-- thumb -->
<?php 
	if( $link ): 
		echo '</a>';
	endif; 
?>



