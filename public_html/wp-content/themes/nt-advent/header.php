<!DOCTYPE html>
<html <?php language_attributes(); ?> > 

<head>
	<!-- Meta UTF8 charset -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

	<!-- BODY START=========== -->
	<body <?php body_class(); ?>>

	<?php if ( ot_get_option('nt_advent_pre') != 'off' ) : ?>
		<!-- PRELOADER -->
		<div class="preloader-container">
			<div class="la-ball-triangle-path la-2x">
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
		<!-- /PRELOADER -->
	<?php endif; ?>

	<!-- START CONTAINER -->
	 <div class="wrapper">