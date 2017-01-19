	<?php
		/**
		* The template for displaying the footer
		*
		*
		* @package WordPress
		* @subpackage nt_advent
		* @since nt_advent 1.0
		*/
	?>
	<?php if ( ot_get_option('nt_advent_widgetize') == 'on') : ?>
	<!-- footer custom widgetize -->
	<div class="footer footer-widgetize">
		<div class="container">
			<?php if ( ! dynamic_sidebar( 'nt-advent-footer-widgetize' ) ) : ?>
				<?php echo dynamic_sidebar( 'nt-advent-footer-widgetize' ); ?>
			<?php endif; ?>
		</div>
	</div>
	<?php endif; ?>
	<?php if ( ot_get_option('nt_advent_footer_default_2') != 'off') : ?>
	<!-- footer default -->
	<div class="footer">
		<div class="container">
			<div class="col-md-6">
				<?php 
					if ( ot_get_option('nt_advent_f_left') != '') : 
						$nt_advent_f_left = ot_get_option('nt_advent_f_left');

						$nt_advent_allowed_tags = array(
							'span' 	 => array(),
							'h1' 	 => array(),
							'h2' 	 => array(),
							'h3' 	 => array(),
							'h4' 	 => array(),
							'i' 	 => array(
								'class'  => array()
							),
							'div' 	 => array(
								'class'  => array(),
								'id'  	 => array()
							),
							'img' 	 => array(
								'width'  => array(),
								'height' => array(),
								'class'  => array(),
								'id'  	 => array()
							),
							'p' 	 => array(),
							'br' 	 => array(),
							'strong' => array(),
							'a' 	 => array(
								'href'  => array(),
								'title' => array()
							)
						);
						echo wp_kses( $nt_advent_f_left, $nt_advent_allowed_tags ); 
					endif; 
				?>
			</div>

			<div class="col-md-6">
				<?php 
					if ( ot_get_option('nt_advent_f_right') != '') : 
						$nt_advent_f_right = ot_get_option('nt_advent_f_right');

						$nt_advent_allowed_tags = array(
							'span' 	 => array(),
							'h1' 	 => array(),
							'h2' 	 => array(),
							'h3' 	 => array(),
							'h4' 	 => array(),
							'i' 	 => array(
								'class'  => array()
							),
							'div' 	 => array(
								'class'  => array(),
								'id'  	 => array()
							),
							'img' 	 => array(
								'width'  => array(),
								'height' => array(),
								'class'  => array(),
								'id'  	 => array()
							),
							'p' 	 => array(),
							'br' 	 => array(),
							'strong' => array(),
							'a' 	 => array(
								'href'  => array(),
								'title' => array()
							)
						);
						echo wp_kses( $nt_advent_f_right, $nt_advent_allowed_tags ); 
					endif; 
				?>
			</div>
		</div>
	</div>
	<?php endif; ?>
	
        <!-- Scroll To Top -->

          <a id="back-top" class="back-to-top page-scroll" href="#main">
          <i class="ion-ios-arrow-thin-up"></i>
          </a>

        <!-- Scroll To Top Ends-->
		<!-- END footer -->
	<?php wp_footer(); ?>

	
	</body>
</html>