	<?php
	
		/*
		Template name: One page Template
		*/
		
		get_header();
		
		/* metabox or primary menu options */
		$nt_advent_menu_item_name 	= 	rwmb_meta( 'nt_advent_section_name' );
		$nt_advent_menu_item_url 	= 	rwmb_meta( 'nt_advent_section_url' );
		$nt_advent_menutype 		= 	rwmb_meta( 'nt_advent_menutype' );
		
		/* logo options */
		$nt_advent_logo_option 		= ( ot_get_option( 'nt_advent_logo_type' ) );
		$nt_advent_img_logo 		= ( ot_get_option( 'nt_advent_logo_img' ) );
		$nt_advent_text_logo 		= ( ot_get_option( 'nt_advent_logo_text' ) );
		
	?>

	<div class="container">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					  <span class="sr-only"><?php echo esc_html( 'Toggle navigation' ); ?></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
					
					<?php if ( ( $nt_advent_logo_option ) == 'text' || ( $nt_advent_logo_option ) == '') : ?>
						<?php if ( $nt_advent_text_logo ) : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand page-scroll text-logo"><?php echo esc_html( $nt_advent_text_logo ); ?></a> <!-- Your Logo -->
						<?php  else : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand page-scroll text-logo"><?php esc_html_e( 'advnt.', 'nt-advent' ); ?></a> <!-- Your Logo -->
						<?php endif; ?>
					<?php endif; ?>
						
					<?php if (( $nt_advent_logo_option ) == 'img' ) : ?>
						<?php if ( $nt_advent_img_logo  ) : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand page-scroll img-logo">
								<img src="<?php echo esc_url( $nt_advent_img_logo ); ?>" alt="<?php esc_html_e( 'Logo', 'nt-advent' ); ?>">
							</a> <!-- Your Logo -->
							<?php  else : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand page-scroll text-logo"><?php esc_html_e( 'advnt.', 'nt-advent' ); ?></a> <!-- Your Logo -->
						<?php endif; ?>
					<?php endif; ?>
			  
				</div>
                <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<?php 
						wp_nav_menu( array(
							'menu'              => 'primary',
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => '',
							'container_class'   => '',
							'menu_class'        => 'nav navbar-nav',
							'menu_id'		    => 'primary-menu',
							'echo' 				=> true,
							'fallback_cb'       => 'Nt_Advent_Wp_Bootstrap_Navwalker::fallback',
							'walker'            => new Nt_Advent_Wp_Bootstrap_Navwalker()
						));
					?>
				</div>
			</div>
        </nav><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
	
	
	<div class="main" id="main"><!-- Main Section-->
	
	<?php 
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();  
				the_content(); 
			endwhile; 
		endif; 
	?>
	
	<?php get_footer(); ?>