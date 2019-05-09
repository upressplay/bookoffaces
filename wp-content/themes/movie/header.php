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
	</head>
	<body <?php body_class(); ?>>
	
	<div id="site">
		<?php include 'overlay.php'; ?>
		<div id="site-holder">
			<div id="scroll-up">
				<i class="fas fa-chevron-circle-up"></i>
			</div>
			