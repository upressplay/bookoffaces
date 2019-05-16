
<?php 
	$link = get_field('link',$post->ID);	
	if( $link ):
		echo '<a href="'.$link['url'].'" target="'.$link['target'].'">';
	endif; 
?>
<div class="festival">
	<?php if ( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail('medium'); ?>
	<?php endif; ?>
</div> <!-- thumb -->
<?php 
	if( $link ): 
		echo '</a>';
	endif; 
?>



