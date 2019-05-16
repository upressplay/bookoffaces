<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   
		<script src="<?php echo get_template_directory_uri(); ?>/js/main.min.js"></script>
		<?php wp_head(); ?>

		<script>
			var templateDir = "<?php bloginfo('template_directory') ?>";
		</script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-140353974-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-140353974-1');
		</script>

	</head>
	<body <?php body_class(); ?>>
	
	<div id="site">
		<?php include 'overlay.php'; ?>
		<div id="site-holder">
			<div id="scroll-up">
				<i class="fas fa-chevron-circle-up"></i>
			</div>
			<header>
				<div id="trending">
					<?php 
					$date_now = date('Y-m-d H:i:s');
					$args = array(
					   'category_name'		=>'trending',
					    'posts_per_page'	=> 1,
					    'order'				=> 'ASC',
						'orderby'			=> 'meta_value'
					);
					$query = new WP_Query( $args );
					while ( $query->have_posts() ) : $query->the_post(); 
					   	if ( !empty( get_the_content($post->ID) ) ) :
					   		echo get_the_content($post->ID); 
						endif;

					endwhile; 
					wp_reset_postdata();
				 ?>
				</div>

				<div class="company-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/cathartic_logo.jpg"/>
				</div>
				<div class="presents">
					presents
				</div>
				<div class="film-by">
					a Rus Robert Blemker film:
				</div>
				<a href="/">
					<div class="site-title">
						The Book of Faces
					</div>
				</a>
			</header>
			