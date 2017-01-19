<?php

/*-----------------------------------------------------------------------------------*/
/*	Shortcode Filter
/*-----------------------------------------------------------------------------------*/

vc_set_as_theme( $disable_updater = false ); 
vc_is_updater_disabled();


function nt_advent_vc_remove_woocommerce() {
    if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
        vc_remove_element( 'woocommerce_cart' );
        vc_remove_element( 'woocommerce_checkout' );
        vc_remove_element( 'woocommerce_order_tracking' );
        vc_remove_element( 'woocommerce_my_account' );
        vc_remove_element( 'recent_products' );
        vc_remove_element( 'featured_products' );
        vc_remove_element( 'product' );
        vc_remove_element( 'products' );
        vc_remove_element( 'add_to_cart' );
        vc_remove_element( 'add_to_cart_url' );
        vc_remove_element( 'product_page' );
        vc_remove_element( 'product_category' );
        vc_remove_element( 'product_categories' );
        vc_remove_element( 'sale_products' );
        vc_remove_element( 'best_selling_products' );
        vc_remove_element( 'top_rated_products' );
        vc_remove_element( 'product_attribute' );
        vc_remove_element( 'related_products' );
    }
}
// Hook for admin editor.
add_action( 'vc_build_admin_page', 'nt_advent_vc_remove_woocommerce', 11 );
// Hook for frontend editor.
add_action( 'vc_load_shortcode', 'nt_advent_vc_remove_woocommerce', 11 );


vc_remove_element(  "vc_wp_search");
vc_remove_element(  "vc_wp_meta" );
vc_remove_element(  "vc_wp_recentcomments" );
vc_remove_element(  "vc_wp_calendar" );
vc_remove_element(  "vc_wp_pages" );
vc_remove_element(  "vc_wp_tagcloud" );
vc_remove_element(  "vc_wp_custommenu" );
vc_remove_element(  "vc_wp_text" );
vc_remove_element(  "vc_wp_posts" );
vc_remove_element(  "vc_wp_categories" );
vc_remove_element(  "vc_wp_archives" );
vc_remove_element(  "vc_wp_rss" );
vc_remove_element(  "vc_flickr" );
vc_remove_element(  "vc_facebook" );
vc_remove_element(  "vc_tweetmeme" );
vc_remove_element(  "vc_googleplus" );
vc_remove_element(  "vc_pinterest" );


/*-----------------------------------------------------------------------------------*/
/*	HERO 1 PRODUCT advent
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Advent_heroproduct_integrateWithVC' );
function NT_Advent_heroproduct_integrateWithVC() {
   vc_map( array(
		"name" 	   => esc_html__( "Hero 1 Product", "nt-advent" ),
		"base" 	   => "nt_advent_section_heroproduct",
		"category"   => esc_html__( "NT Advent", "nt-advent"),
		"params"     => array(
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Section ID', 'nt-advent' ),
				'param_name'    => 'section_id',
				'description'   => esc_html__("Add Your Section ID for scroll", "nt-advent"),
			),
			array(
				"type" 		  	=> "attach_image",
				"heading" 	  	=> esc_html__("Hero product image", "nt-advent"),
				"param_name"  	=> "heroleftimg",
				"description" 	=> esc_html__("Add your product left image", "nt-advent"),
				'group' 	  	=> esc_html__('Left Image', 'nt-advent' ),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation image', 'nt-advent' ),
				'param_name' 	=> 'imganimation',
				'group' 	  	=> esc_html__('Left Image', 'nt-advent' ),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Heading', 'nt-advent' ),
				'param_name'    => 'section_heading',
				'description'   => esc_html__("Add heading for this section", "nt-advent"),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),

			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Description', 'nt-advent' ),
				'param_name'    => 'section_desc',
				'description'   => esc_html__("Add description for this section", "nt-advent"),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Heading color', 'nt-advent' ),
				'param_name'    => 'headingcolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Description color', 'nt-advent' ),
				'param_name'    => 'desccolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation heading and description', 'nt-advent' ),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
				'param_name' 	=> 'headinganimation',
			),
			array(
				'type'          => 'vc_link',
				'heading'       => esc_html__('Button (Link)', 'nt-advent' ),
				'param_name'    => 'herobtnlink',
				'description'   => esc_html__('Add custom link.', 'nt-advent' ),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Button style', 'nt-advent' ),
				'param_name'  => 'herobtn_type',
				'description' => esc_html__('You can select button style', 'nt-advent' ),
				'group' 	  => esc_html__('Heading', 'nt-advent' ),
				'value'       => array(
					esc_html__('Rectangle', 'nt-advent' )	=> 'rectangle',
					esc_html__('Rounded', 	'nt-advent' )	=> 'rounded',
				),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation button', 'nt-advent' ),
				'param_name' 	=> 'btnanimation',
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			),
			array(
				"type" 		  	=> "attach_image",
				"heading" 	  	=> esc_html__("Background image", "nt-advent"),
				"param_name"  	=> "bgimg",
				"description" 	=> esc_html__("Add your BG image", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Background color', 'nt-advent' ),
				'param_name'    => 'bgcolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Select parallax bg hide or show', 'nt-advent' ),
				'param_name'  => 'parallax',
				'description' => esc_html__('You can select parallax bg hide or show', 'nt-advent' ),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select parallax effect', 'nt-advent' )	=> '',
					esc_html__('Show', 	'nt-advent' )	=> 'show',
					esc_html__('Hide', 	'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Select particles effect hide or show', 'nt-advent' ),
				'param_name'  => 'particle',
				'description' => esc_html__('You can select particles effect hide or show', 'nt-advent' ),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select particles effect', 'nt-advent' )	=> '',
					esc_html__('Show', 	'nt-advent' )	=> 'show',
					esc_html__('Hide', 	'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Select overlay color hide or show', 'nt-advent' ),
				'param_name'  => 'overlay_display',
				'description' => esc_html__('You can select overlay mask color hide or show', 'nt-advent' ),
				'group' 	  => esc_html__('Background options', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select a style', 'nt-advent' )	=> '',
					esc_html__('Show', 			'nt-advent' )	=> 'show',
					esc_html__('Hide', 			'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Overlay color', 'nt-advent' ),
				'param_name'    => 'overlaycolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
				'dependency' => array(
					'element' 	=> 'overlay_display',
					'value'   	=> 'show'
				)
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Padding bottom ( without px or unit )', 'nt-advent' ),
				'param_name'    => 'paddingbot',
				'description'   => esc_html__("Add padding bottom(without px or unit. example : 100)", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
		),
   ));
} class NT_Advent_section_heroproduct extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	HERO 2 BG-IMAGE advent
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Advent_herobgimg_integrateWithVC' );
function NT_Advent_herobgimg_integrateWithVC() {
   vc_map( array(
		"name" 	   => esc_html__( "Hero 2 BG-Image", "nt-advent" ),
		"base" 	   => "nt_advent_section_herobgimg",
		"category"   => esc_html__( "NT Advent", "nt-advent"),
		"params"     => array(
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Section ID', 'nt-advent' ),
				'param_name'    => 'section_id',
				'description'   => esc_html__("Add Your Section ID for scroll", "nt-advent"),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Heading', 'nt-advent' ),
				'param_name'    => 'section_heading',
				'description'   => esc_html__("Add heading for this section", "nt-advent"),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),

			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Description', 'nt-advent' ),
				'param_name'    => 'section_desc',
				'description'   => esc_html__("Add description for this section", "nt-advent"),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Heading color', 'nt-advent' ),
				'param_name'    => 'headingcolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Description color', 'nt-advent' ),
				'param_name'    => 'desccolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation heading and description', 'nt-advent' ),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
				'param_name' 	=> 'headinganimation',
			),
			array(
				'type'          => 'vc_link',
				'heading'       => esc_html__('Button (Link)', 'nt-advent' ),
				'param_name'    => 'herobtnlink',
				'description'   => esc_html__('Add custom link.', 'nt-advent' ),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Button style', 'nt-advent' ),
				'param_name'  => 'herobtn_type',
				'description' => esc_html__('You can select button style', 'nt-advent' ),
				'group' 	  => esc_html__('Heading', 'nt-advent' ),
				'value'       => array(
					esc_html__('Rectangle', 'nt-advent' )	=> 'rectangle',
					esc_html__('Rounded', 	'nt-advent' )	=> 'rounded',
				),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation button', 'nt-advent' ),
				'param_name' 	=> 'btnanimation',
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			),
			array(
				"type" 		  	=> "attach_image",
				"heading" 	  	=> esc_html__("Background image", "nt-advent"),
				"param_name"  	=> "bgimg",
				"description" 	=> esc_html__("Add your BG image", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Background color', 'nt-advent' ),
				'param_name'    => 'bgcolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Select parallax bg hide or show', 'nt-advent' ),
				'param_name'  => 'parallax',
				'description' => esc_html__('You can select parallax bg hide or show', 'nt-advent' ),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select parallax effect', 'nt-advent' )	=> '',
					esc_html__('Show', 	'nt-advent' )	=> 'show',
					esc_html__('Hide', 	'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Select particles effect hide or show', 'nt-advent' ),
				'param_name'  => 'particle',
				'description' => esc_html__('You can select particles effect hide or show', 'nt-advent' ),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select particles effect', 'nt-advent' )	=> '',
					esc_html__('Show', 	'nt-advent' )	=> 'show',
					esc_html__('Hide', 	'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Select overlay color hide or show', 'nt-advent' ),
				'param_name'  => 'overlay_display',
				'description' => esc_html__('You can select overlay mask color hide or show', 'nt-advent' ),
				'group' 	  => esc_html__('Background options', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select a style', 'nt-advent' )	=> '',
					esc_html__('Show', 			'nt-advent' )	=> 'show',
					esc_html__('Hide', 			'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Overlay color', 'nt-advent' ),
				'param_name'    => 'overlaycolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
				'dependency' => array(
					'element' 	=> 'overlay_display',
					'value'   	=> 'show'
				)
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Padding bottom ( without px or unit )', 'nt-advent' ),
				'param_name'    => 'paddingbot',
				'description'   => esc_html__("Add padding bottom(without px or unit. example : 100)", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
		),
   ));
} class NT_Advent_section_herobgimg extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	HERO 3 FORM advent
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Advent_heroform_integrateWithVC' );
function NT_Advent_heroform_integrateWithVC() {
   vc_map( array(
		"name" 	   => esc_html__( "Hero 3 Form", "nt-advent" ),
		"base" 	   => "nt_advent_section_heroform",
		"category"   => esc_html__( "NT Advent", "nt-advent"),
		"params"     => array(
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Section ID', 'nt-advent' ),
				'param_name'    => 'section_id',
				'description'   => esc_html__("Add Your Section ID for scroll", "nt-advent"),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Heading', 'nt-advent' ),
				'param_name'    => 'section_heading',
				'description'   => esc_html__("Add heading for this section", "nt-advent"),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),

			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Heading color', 'nt-advent' ),
				'param_name'    => 'headingcolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Description color', 'nt-advent' ),
				'param_name'    => 'desccolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Description', 'nt-advent' ),
				'param_name'    => 'section_desc',
				'description'   => esc_html__("Add description for this section", "nt-advent"),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'vc_link',
				'heading'       => esc_html__('Button (Link)', 'nt-advent' ),
				'param_name'    => 'herobtnlink',
				'description'   => esc_html__('Add custom link.', 'nt-advent' ),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Button style', 'nt-advent' ),
				'param_name'  => 'herobtn_type',
				'description' => esc_html__('You can select button style', 'nt-advent' ),
				'group' 	  => esc_html__('Heading', 'nt-advent' ),
				'value'       => array(
					esc_html__('Rectangle', 'nt-advent' )	=> 'rectangle',
					esc_html__('Rounded', 	'nt-advent' )	=> 'rounded',
				),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation button', 'nt-advent' ),
				'param_name' 	=> 'btnanimation',
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Hero Contact Form heading', 'nt-advent' ),
				'param_name'    => 'form_heading',
				'description'   => esc_html__("Add contact form 7 heading/title", "nt-advent"),
				'group' 	  	=> esc_html__('Hero Form', 'nt-advent' ),	
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation form', 'nt-advent' ),
				'param_name' 	=> 'formanimation',
				'group' 	  	=> esc_html__('Hero Form', 'nt-advent' ),
			),
			array(
				'type'          => 'textarea_html',
				'heading'       => esc_html__('Hero Contact Form', 'nt-advent' ),
				'param_name'    => 'content',
				'description'   => esc_html__("Add contact form 7 shortcode here", "nt-advent"),
				'group' 	  	=> esc_html__('Hero Form', 'nt-advent' ),	
			),
			array(
				"type" 		  	=> "attach_image",
				"heading" 	  	=> esc_html__("Background image", "nt-advent"),
				"param_name"  	=> "bgimg",
				"description" 	=> esc_html__("Add your BG image", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Background color', 'nt-advent' ),
				'param_name'    => 'bgcolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Select parallax bg hide or show', 'nt-advent' ),
				'param_name'  => 'parallax',
				'description' => esc_html__('You can select parallax bg hide or show', 'nt-advent' ),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select parallax effect', 'nt-advent' )	=> '',
					esc_html__('Show', 	'nt-advent' )	=> 'show',
					esc_html__('Hide', 	'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Select particles effect hide or show', 'nt-advent' ),
				'param_name'  => 'particle',
				'description' => esc_html__('You can select particles effect hide or show', 'nt-advent' ),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select particles effect', 'nt-advent' )	=> '',
					esc_html__('Show', 	'nt-advent' )	=> 'show',
					esc_html__('Hide', 	'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Select overlay color hide or show', 'nt-advent' ),
				'param_name'  => 'overlay_display',
				'description' => esc_html__('You can select overlay mask color hide or show', 'nt-advent' ),
				'group' 	  => esc_html__('Background options', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select a style', 'nt-advent' )	=> '',
					esc_html__('Show', 			'nt-advent' )	=> 'show',
					esc_html__('Hide', 			'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Overlay color', 'nt-advent' ),
				'param_name'    => 'overlaycolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
				'dependency' => array(
					'element' 	=> 'overlay_display',
					'value'   	=> 'show'
				)
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Padding bottom ( without px or unit )', 'nt-advent' ),
				'param_name'    => 'paddingbot',
				'description'   => esc_html__("Add padding bottom(without px or unit. example : 100)", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
		),
   ));
} class NT_Advent_section_heroform extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	HERO 4 SUBSCRIBE advent
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Advent_herosubscribe_integrateWithVC' );
function NT_Advent_herosubscribe_integrateWithVC() {
   vc_map( array(
		"name" 	   => esc_html__( "Hero 4 Subscribe", "nt-advent" ),
		"base" 	   => "nt_advent_section_herosubscribe",
		"category"   => esc_html__( "NT Advent", "nt-advent"),
		"params"     => array(
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Section ID', 'nt-advent' ),
				'param_name'    => 'section_id',
				'description'   => esc_html__("Add Your Section ID for scroll", "nt-advent"),
			),
			array(
				"type" 		  	=> "attach_image",
				"heading" 	  	=> esc_html__("Hero product image", "nt-advent"),
				"param_name"  	=> "heroleftimg",
				"description" 	=> esc_html__("Add your product left image", "nt-advent"),
				'group' 	  	=> esc_html__('Left Image', 'nt-advent' ),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation image', 'nt-advent' ),
				'param_name' 	=> 'imganimation',
				'group' 	  	=> esc_html__('Left Image', 'nt-advent' ),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Heading', 'nt-advent' ),
				'param_name'    => 'section_heading',
				'description'   => esc_html__("Add heading for this section", "nt-advent"),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Description', 'nt-advent' ),
				'param_name'    => 'section_desc',
				'description'   => esc_html__("Add description for this section", "nt-advent"),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Heading color', 'nt-advent' ),
				'param_name'    => 'headingcolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Description color', 'nt-advent' ),
				'param_name'    => 'desccolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation heading and description', 'nt-advent' ),
				'param_name' 	=> 'headinganimation',
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation form', 'nt-advent' ),
				'param_name' 	=> 'formanimation',
				'group' 	  	=> esc_html__('Hero Form', 'nt-advent' ),
			),
			array(
				'type'          => 'textarea_html',
				'heading'       => esc_html__('Hero Subscribe Form', 'nt-advent' ),
				'param_name'    => 'content',
				'description'   => esc_html__("Add contact form 7 shortcode here", "nt-advent"),
				'group' 	  	=> esc_html__('Hero Form', 'nt-advent' ),	
			),
			array(
				"type" 		  	=> "attach_image",
				"heading" 	  	=> esc_html__("Background image", "nt-advent"),
				"param_name"  	=> "bgimg",
				"description" 	=> esc_html__("Add your BG image", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Background color', 'nt-advent' ),
				'param_name'    => 'bgcolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Select parallax bg hide or show', 'nt-advent' ),
				'param_name'  => 'parallax',
				'description' => esc_html__('You can select parallax bg hide or show', 'nt-advent' ),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select parallax effect', 'nt-advent' )	=> '',
					esc_html__('Show', 	'nt-advent' )	=> 'show',
					esc_html__('Hide', 	'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Select particles effect hide or show', 'nt-advent' ),
				'param_name'  => 'particle',
				'description' => esc_html__('You can select particles effect hide or show', 'nt-advent' ),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select particles effect', 'nt-advent' )	=> '',
					esc_html__('Show', 	'nt-advent' )	=> 'show',
					esc_html__('Hide', 	'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Select overlay color hide or show', 'nt-advent' ),
				'param_name'  => 'overlay_display',
				'description' => esc_html__('You can select overlay mask color hide or show', 'nt-advent' ),
				'group' 	  => esc_html__('Background options', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select a style', 'nt-advent' )	=> '',
					esc_html__('Show', 			'nt-advent' )	=> 'show',
					esc_html__('Hide', 			'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Overlay color', 'nt-advent' ),
				'param_name'    => 'overlaycolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
				'dependency' => array(
					'element' 	=> 'overlay_display',
					'value'   	=> 'show'
				)
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Padding bottom ( without px or unit )', 'nt-advent' ),
				'param_name'    => 'paddingbot',
				'description'   => esc_html__("Add padding bottom(without px or unit. example : 100)", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
		),
   ));
} class NT_Advent_section_herosubscribe extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	HERO 5 SOFTWARE advent
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Advent_herosoftware_integrateWithVC' );
function NT_Advent_herosoftware_integrateWithVC() {
   vc_map( array(
		"name" 	   => esc_html__( "Hero 5 Software", "nt-advent" ),
		"base" 	   => "nt_advent_section_herosoftware",
		"category"   => esc_html__( "NT Advent", "nt-advent"),
		"params"     => array(
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Section ID', 'nt-advent' ),
				'param_name'    => 'section_id',
				'description'   => esc_html__("Add Your Section ID for scroll", "nt-advent"),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Heading', 'nt-advent' ),
				'param_name'    => 'section_heading',
				'description'   => esc_html__("Add heading for this section", "nt-advent"),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Description', 'nt-advent' ),
				'param_name'    => 'section_desc',
				'description'   => esc_html__("Add description for this section", "nt-advent"),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Heading color', 'nt-advent' ),
				'param_name'    => 'headingcolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Description color', 'nt-advent' ),
				'param_name'    => 'desccolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation heading and description', 'nt-advent' ),
				'param_name' 	=> 'headinganimation',
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'vc_link',
				'heading'       => esc_html__('Button (Link)', 'nt-advent' ),
				'param_name'    => 'herobtnlink1',
				'description'   => esc_html__('Add custom link.', 'nt-advent' ),
				'group' 	  	=> esc_html__('Button', 'nt-advent' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Button style', 'nt-advent' ),
				'param_name'  => 'herobtn_type',
				'description' => esc_html__('You can select button style', 'nt-advent' ),
				'group' 	  => esc_html__('Button', 'nt-advent' ),
				'value'       => array(
					esc_html__('Rectangle', 'nt-advent' )	=> 'rectangle',
					esc_html__('Rounded', 	'nt-advent' )	=> 'rounded',
				),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation button', 'nt-advent' ),
				'param_name' 	=> 'btnanimation',
				'group' 	  	=> esc_html__('Button', 'nt-advent' ),
			),
			array(
				"type" 		  	=> "attach_image",
				"heading" 	  	=> esc_html__("Hero bottom image", "nt-advent"),
				"param_name"  	=> "herobottomimg",
				"description" 	=> esc_html__("Add your bottom image", "nt-advent"),
				'group' 	  	=> esc_html__('Bottom Image', 'nt-advent' ),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation image', 'nt-advent' ),
				'param_name' 	=> 'imganimation',
				'group' 	  	=> esc_html__('Bottom Image', 'nt-advent' ),
			),
			array(
				"type" 		  	=> "attach_image",
				"heading" 	  	=> esc_html__("Background image", "nt-advent"),
				"param_name"  	=> "bgimg",
				"description" 	=> esc_html__("Add your BG image", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Background color', 'nt-advent' ),
				'param_name'    => 'bgcolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Select parallax bg hide or show', 'nt-advent' ),
				'param_name'  => 'parallax',
				'description' => esc_html__('You can select parallax bg hide or show', 'nt-advent' ),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select parallax effect', 'nt-advent' )	=> '',
					esc_html__('Show', 	'nt-advent' )	=> 'show',
					esc_html__('Hide', 	'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Select particles effect hide or show', 'nt-advent' ),
				'param_name'  => 'particle',
				'description' => esc_html__('You can select particles effect hide or show', 'nt-advent' ),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select particles effect', 'nt-advent' )	=> '',
					esc_html__('Show', 	'nt-advent' )	=> 'show',
					esc_html__('Hide', 	'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Select overlay color hide or show', 'nt-advent' ),
				'param_name'  => 'overlay_display',
				'description' => esc_html__('You can select overlay mask color hide or show', 'nt-advent' ),
				'group' 	  => esc_html__('Background options', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select a style', 'nt-advent' )	=> '',
					esc_html__('Show', 			'nt-advent' )	=> 'show',
					esc_html__('Hide', 			'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Overlay color', 'nt-advent' ),
				'param_name'    => 'overlaycolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
				'dependency' => array(
					'element' 	=> 'overlay_display',
					'value'   	=> 'show'
				)
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Padding bottom ( without px or unit )', 'nt-advent' ),
				'param_name'    => 'paddingbot',
				'description'   => esc_html__("Add padding bottom(without px or unit. example : 100)", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
		),
   ));
} class NT_Advent_section_herosoftware extends WPBakeryShortCode {}



/*-----------------------------------------------------------------------------------*/
/*	HERO 6 APP advent
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Advent_heroapp_integrateWithVC' );
function NT_Advent_heroapp_integrateWithVC() {
   vc_map( array(
		"name" 	   => esc_html__( "Hero 6 App", "nt-advent" ),
		"base" 	   => "nt_advent_section_heroapp",
		"category"   => esc_html__( "NT Advent", "nt-advent"),
		"params"     => array(
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Section ID', 'nt-advent' ),
				'param_name'    => 'section_id',
				'description'   => esc_html__("Add Your Section ID for scroll", "nt-advent"),
			),
			array(
				"type" 		  	=> "attach_image",
				"heading" 	  	=> esc_html__("Hero top logo image", "nt-advent"),
				"param_name"  	=> "herologoimg",
				"description" 	=> esc_html__("Add your top logo image", "nt-advent"),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation logo image', 'nt-advent' ),
				'param_name' 	=> 'logoanimation',
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Heading', 'nt-advent' ),
				'param_name'    => 'section_heading',
				'description'   => esc_html__("Add heading for this section", "nt-advent"),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Description', 'nt-advent' ),
				'param_name'    => 'section_desc',
				'description'   => esc_html__("Add description for this section", "nt-advent"),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Star count', 'nt-advent' ),
				'param_name'    => 'starcount',
				'description'   => esc_html__("Add nubber for product rating", "nt-advent"),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Heading color', 'nt-advent' ),
				'param_name'    => 'headingcolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Description color', 'nt-advent' ),
				'param_name'    => 'desccolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation heading and description', 'nt-advent' ),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
				'param_name' 	=> 'headinganimation',
			),
			array(
				"type" 		  	=> "attach_image",
				"heading" 	  	=> esc_html__("Hero bottom image", "nt-advent"),
				"param_name"  	=> "herobottomimg",
				"description" 	=> esc_html__("Add your bottom image", "nt-advent"),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation bottom image', 'nt-advent' ),
				'param_name' 	=> 'imganimation',
			),
			array(
				'type'          => 'vc_link',
				'heading'       => esc_html__('Button 1(Link)', 'nt-advent' ),
				'param_name'    => 'herobtnlink1',
				'description'   => esc_html__('Add custom link.', 'nt-advent' ),
				'group' 	  	=> esc_html__('Button', 'nt-advent' ),
			),
			array(
				"type" 		  	=> "attach_image",
				"heading" 	  	=> esc_html__("Appstore image", "nt-advent"),
				"param_name"  	=> "appstoreimg",
				"description" 	=> esc_html__("Add your custom button image", "nt-advent"),
				'group' 	  	=> esc_html__('Button', 'nt-advent' ),
			),
			array(
				'type'          => 'vc_link',
				'heading'       => esc_html__('Button 2(Link)', 'nt-advent' ),
				'param_name'    => 'herobtnlink2',
				'description'   => esc_html__('Add custom link.', 'nt-advent' ),
				'group' 	  	=> esc_html__('Button', 'nt-advent' ),
			),
			array(
				"type" 		  	=> "attach_image",
				"heading" 	  	=> esc_html__("Playstore image", "nt-advent"),
				"param_name"  	=> "playstoreimg",
				"description" 	=> esc_html__("Add your custom button image", "nt-advent"),
				'group' 	  	=> esc_html__('Button', 'nt-advent' ),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation button', 'nt-advent' ),
				'param_name' 	=> 'btnanimation',
				'group' 	  	=> esc_html__('Button', 'nt-advent' ),
			),
			array(
				"type" 		  	=> "attach_image",
				"heading" 	  	=> esc_html__("Background image", "nt-advent"),
				"param_name"  	=> "bgimg",
				"description" 	=> esc_html__("Add your BG image", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Background color', 'nt-advent' ),
				'param_name'    => 'bgcolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Select parallax bg hide or show', 'nt-advent' ),
				'param_name'  => 'parallax',
				'description' => esc_html__('You can select parallax bg hide or show', 'nt-advent' ),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select parallax effect', 'nt-advent' )	=> '',
					esc_html__('Show', 	'nt-advent' )	=> 'show',
					esc_html__('Hide', 	'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Select particles effect hide or show', 'nt-advent' ),
				'param_name'  => 'particle',
				'description' => esc_html__('You can select particles effect hide or show', 'nt-advent' ),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select particles effect', 'nt-advent' )	=> '',
					esc_html__('Show', 	'nt-advent' )	=> 'show',
					esc_html__('Hide', 	'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Select overlay color hide or show', 'nt-advent' ),
				'param_name'  => 'overlay_display',
				'description' => esc_html__('You can select overlay mask color hide or show', 'nt-advent' ),
				'group' 	  => esc_html__('Background options', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select a style', 'nt-advent' )	=> '',
					esc_html__('Show', 			'nt-advent' )	=> 'show',
					esc_html__('Hide', 			'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Overlay color', 'nt-advent' ),
				'param_name'    => 'overlaycolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
				'dependency' => array(
					'element' 	=> 'overlay_display',
					'value'   	=> 'show'
				)
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Padding bottom ( without px or unit )', 'nt-advent' ),
				'param_name'    => 'paddingbot',
				'description'   => esc_html__("Add padding bottom(without px or unit. example : 100)", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
		),
   ));
} class NT_Advent_section_heroapp extends WPBakeryShortCode {}



/*-----------------------------------------------------------------------------------*/
/*	HERO 7 COMINGSOON advent
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Advent_herocomingsoon_integrateWithVC' );
function NT_Advent_herocomingsoon_integrateWithVC() {
   vc_map( array(
		"name" 	   => esc_html__( "Hero 7 Comingsoon", "nt-advent" ),
		"base" 	   => "nt_advent_section_herocomingsoon",
		"category"   => esc_html__( "NT Advent", "nt-advent"),
		"params"     => array(
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Section ID', 'nt-advent' ),
				'param_name'    => 'section_id',
				'description'   => esc_html__("Add Your Section ID for scroll", "nt-advent"),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation left section', 'nt-advent' ),
				'param_name' 	=> 'imganimation',
				'group' 	    => esc_html__('Left BG Image', 'nt-advent' ),
			),
			array(
				'type'          => 'css_editor',
				'heading'       => esc_html__('Left Background Image', 'nt-advent' ),
				'param_name'    => 'sectionbgcss',
				'group' 	    => esc_html__('Left BG Image', 'nt-advent' ),
			),
			array(
				"type" 		  	=> "attach_image",
				"heading" 	  	=> esc_html__("Hero top logo image", "nt-advent"),
				"param_name"  	=> "herologoimg",
				"description" 	=> esc_html__("Add your top logo image", "nt-advent"),
				'group' 	  	=> esc_html__('Right Section', 'nt-advent' ),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation logo image', 'nt-advent' ),
				'group' 	  	=> esc_html__('Right Section', 'nt-advent' ),
				'param_name' 	=> 'logoanimation',
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Heading', 'nt-advent' ),
				'param_name'    => 'section_heading',
				'description'   => esc_html__("Add heading for this section", "nt-advent"),
				'group' 	  	=> esc_html__('Right Section', 'nt-advent' ),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Description', 'nt-advent' ),
				'param_name'    => 'section_desc',
				'description'   => esc_html__("Add description for this section", "nt-advent"),
				'group' 	  	=> esc_html__('Right Section', 'nt-advent' ),
			),
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Star count', 'nt-advent' ),
				'param_name'    => 'starcount',
				'description'   => esc_html__("Add nubber for product rating", "nt-advent"),
				'group' 	  	=> esc_html__('Right Section', 'nt-advent' ),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation heading and description', 'nt-advent' ),
				'param_name' 	=> 'headinganimation',
				'group' 	  	=> esc_html__('Right Section', 'nt-advent' ),
			),
			array(
				'type'          => 'vc_link',
				'heading'       => esc_html__('Button 1(Link)', 'nt-advent' ),
				'param_name'    => 'herobtnlink1',
				'description'   => esc_html__('Add custom link.', 'nt-advent' ),
				'group' 	  	=> esc_html__('Button', 'nt-advent' ),
			),
			array(
				"type" 		  	=> "attach_image",
				"heading" 	  	=> esc_html__("Appstore image", "nt-advent"),
				"param_name"  	=> "appstoreimg",
				"description" 	=> esc_html__("Add your custom button image", "nt-advent"),
				'group' 	  	=> esc_html__('Button', 'nt-advent' ),
			),
			array(
				'type'          => 'vc_link',
				'heading'       => esc_html__('Button 2(Link)', 'nt-advent' ),
				'param_name'    => 'herobtnlink2',
				'description'   => esc_html__('Add custom link.', 'nt-advent' ),
				'group' 	  	=> esc_html__('Button', 'nt-advent' ),
			),
			array(
				"type" 		  	=> "attach_image",
				"heading" 	  	=> esc_html__("Playstore image", "nt-advent"),
				"param_name"  	=> "playstoreimg",
				"description" 	=> esc_html__("Add your custom button image", "nt-advent"),
				'group' 	  	=> esc_html__('Button', 'nt-advent' ),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation button', 'nt-advent' ),
				'param_name' 	=> 'btnanimation',
				'group' 	  	=> esc_html__('Button', 'nt-advent' ),
			),
			array(
				'type'          => 'css_editor',
				'heading'       => esc_html__('Right BG CSS', 'nt-advent' ),
				'param_name'    => 'right_sectionbg',
				'group' 	    => esc_html__('Right BG CSS', 'nt-advent' ),
			),
		),
   ));
} class NT_Advent_section_herocomingsoon extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	CLIENTS advent
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Advent_clients_integrateWithVC' );
function NT_Advent_clients_integrateWithVC() {
   vc_map( array(
		"name" 	   => esc_html__( "Clients Section", "nt-advent" ),
		"base" 	   => "nt_advent_section_clients",
		"category"   => esc_html__( "NT Advent", "nt-advent"),
		"params"     => array(
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Section ID', 'nt-advent' ),
				'param_name'    => 'section_id',
				'description'   => esc_html__("Add Your Section ID for scroll", "nt-advent"),
			),
			//clients loop
			array(
				'type'        => 'param_group',
				'heading'     => esc_html__('Client items', 'nt-advent' ),
				'param_name'  => 'clientloop',
				'group' 	  => esc_html__('Clients', 'nt-advent' ),			
				'params' 	  => array(
					array(
						"type" 		  	=> "attach_image",
						"heading" 	  	=> esc_html__("Client image", "nt-advent"),
						"param_name"  	=> "item_img",
						"description" 	=> esc_html__("Add your client image", "nt-advent"),
					),
				)
			),
			array(
				'type'          => 'css_editor',
				'heading'       => esc_html__('Background CSS', 'nt-advent' ),
				'param_name'    => 'sectionbgcss',
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
		),
   ));
} class NT_Advent_section_clients extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	ABOUTONE  advent
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Advent_aboutone_integrateWithVC' );
function NT_Advent_aboutone_integrateWithVC() {
   vc_map( array(
		"name" 	   => esc_html__( "About Section", "nt-advent" ),
		"base" 	   => "nt_advent_section_aboutone",
		"category"   => esc_html__( "NT Advent", "nt-advent"),
		"params"     => array(
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Section ID', 'nt-advent' ),
				'param_name'    => 'section_id',
				'description'   => esc_html__("Add Your Section ID for scroll", "nt-advent"),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Heading display ( hide or show )', 'nt-advent' ),
				'param_name'  => 'heading_display',
				'description' => esc_html__('You can select hide or show section heading all text', 'nt-advent' ),
				'group' 	  => esc_html__('Heading', 'nt-advent' ),
				'value'       => array(
					esc_html__('Show', 	'nt-advent' )	=> 'show',
					esc_html__('Hide', 	'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Heading', 'nt-advent' ),
				'param_name'    => 'section_heading',
				'description'   => esc_html__("Add heading for this section", "nt-advent"),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
				'dependency' 	=> array(
						'element' 	=> 'heading_display',
						'value'   	=> 'show'
					)
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Description', 'nt-advent' ),
				'param_name'    => 'section_desc',
				'description'   => esc_html__("Add description for this section", "nt-advent"),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
				'dependency' 	=> array(
						'element' 	=> 'heading_display',
						'value'   	=> 'show'
					)
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation heading and description', 'nt-advent' ),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
				'param_name' 	=> 'headinganimation',
				'dependency' 	=> array(
						'element' 	=> 'heading_display',
						'value'   	=> 'show'
					)
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Item column size', 'nt-advent' ),
				'param_name'  => 'item_column',
				'description' => esc_html__('You can select detail item column size', 'nt-advent' ),
				'group' 	  => esc_html__('About Detail', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select column for all item', 	'nt-advent' )	=> '',
					esc_html__('1 Column', 	'nt-advent' )	=> 'col-md-12',
					esc_html__('2 Column', 	'nt-advent' )	=> 'col-md-6',
					esc_html__('3 Column', 	'nt-advent' )	=> 'col-md-4',
					esc_html__('4 Column', 	'nt-advent' )	=> 'col-md-3',
					esc_html__('6 Column', 	'nt-advent' )	=> 'col-md-2',
					esc_html__('Custom Column', 'nt-advent' )	=> 'custom',
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Desktop column', 'nt-advent' ),
				'param_name'  => 'desk_column',
				'description' => esc_html__('You can select desktop column size', 'nt-advent' ),
				'group' 	  => esc_html__('About Detail', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select desktop column for all item', 	'nt-advent' )	=> '',
					esc_html__('col-md-1', 	'nt-advent' )	=> 'col-md-1',
					esc_html__('col-md-2', 	'nt-advent' )	=> 'col-md-2',
					esc_html__('col-md-3', 	'nt-advent' )	=> 'col-md-3',
					esc_html__('col-md-4', 	'nt-advent' )	=> 'col-md-4',
					esc_html__('col-md-5', 	'nt-advent' )	=> 'col-md-5',
					esc_html__('col-md-6', 	'nt-advent' )	=> 'col-md-6',
					esc_html__('col-md-7', 	'nt-advent' )	=> 'col-md-7',
					esc_html__('col-md-8', 	'nt-advent' )	=> 'col-md-8',
					esc_html__('col-md-9', 	'nt-advent' )	=> 'col-md-9',
					esc_html__('col-md-10', 'nt-advent' )	=> 'col-md-10',
					esc_html__('col-md-11', 'nt-advent' )	=> 'col-md-11',
					esc_html__('col-md-12', 'nt-advent' )	=> 'col-md-12',
				),
				'dependency' 	=> array(
						'element' 	=> 'item_column',
						'value'   	=> 'custom'
					)
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Desktop column offset', 'nt-advent' ),
				'param_name'  => 'desk_column_offset',
				'description' => esc_html__('You can select desktop column offset size', 'nt-advent' ),
				'group' 	  => esc_html__('About Detail', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select desktop column offset for all item', 	'nt-advent' )	=> '',
					esc_html__('col-md-offset-1', 	'nt-advent' )	=> 'col-md-offset-1',
					esc_html__('col-md-offset-2', 	'nt-advent' )	=> 'col-md-offset-2',
					esc_html__('col-md-offset-3', 	'nt-advent' )	=> 'col-md-offset-3',
					esc_html__('col-md-offset-4', 	'nt-advent' )	=> 'col-md-offset-4',
					esc_html__('col-md-offset-5', 	'nt-advent' )	=> 'col-md-offset-5',
					esc_html__('col-md-offset-6', 	'nt-advent' )	=> 'col-md-offset-6',
					esc_html__('col-md-offset-7', 	'nt-advent' )	=> 'col-md-offset-7',
					esc_html__('col-md-offset-8', 	'nt-advent' )	=> 'col-md-offset-8',
					esc_html__('col-md-offset-9', 	'nt-advent' )	=> 'col-md-offset-9',
					esc_html__('col-md-offset-10', 'nt-advent' )	=> 'col-md-offset-10',
					esc_html__('col-md-offset-11', 'nt-advent' )	=> 'col-md-offset-11',
					esc_html__('col-md-offset-12', 'nt-advent' )	=> 'col-md-offset-12',
				),
				'dependency' 	=> array(
						'element' 	=> 'item_column',
						'value'   	=> 'custom'
					)
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Mobile column', 'nt-advent' ),
				'param_name'  => 'mob_column',
				'description' => esc_html__('You can select mobile device column size', 'nt-advent' ),
				'group' 	  => esc_html__('About Detail', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select mobile column for all item', 	'nt-advent' )	=> '',
					esc_html__('col-sm-1', 	'nt-advent' )	=> 'col-sm-1',
					esc_html__('col-sm-2', 	'nt-advent' )	=> 'col-sm-2',
					esc_html__('col-sm-3', 	'nt-advent' )	=> 'col-sm-3',
					esc_html__('col-sm-4', 	'nt-advent' )	=> 'col-sm-4',
					esc_html__('col-sm-5', 	'nt-advent' )	=> 'col-sm-5',
					esc_html__('col-sm-6', 	'nt-advent' )	=> 'col-sm-6',
					esc_html__('col-sm-7', 	'nt-advent' )	=> 'col-sm-7',
					esc_html__('col-sm-8', 	'nt-advent' )	=> 'col-sm-8',
					esc_html__('col-sm-9', 	'nt-advent' )	=> 'col-sm-9',
					esc_html__('col-sm-10', 'nt-advent' )	=> 'col-sm-10',
					esc_html__('col-sm-11', 'nt-advent' )	=> 'col-sm-11',
					esc_html__('col-sm-12', 'nt-advent' )	=> 'col-sm-12',
				),
				'dependency' 	=> array(
						'element' 	=> 'item_column',
						'value'   	=> 'custom'
					)
			),
			array(
				'type' 		 => 'animation_style',
				'heading' 	 => esc_html__( 'Animation item', 'nt-advent' ),
				'group' 	 => esc_html__('About Detail', 'nt-advent' ),
				'param_name' => 'itemanimation',
			),
		array(
			'type'        => 'param_group',
			'heading'     => esc_html__('Detail item', 'nt-advent' ),
			'param_name'  => 'aboutloop',
			'group' 	  => esc_html__('About Detail', 'nt-advent' ),			
			'params' 	  => array(

				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Icon name", "nt-advent"),
					"param_name" 	  => "icon_name",
					"description" 	  => esc_html__("Add icon name(fonticon class name). example : ion-android-notifications", "nt-advent"),
				),
				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Title", "nt-advent"),
					"param_name" 	  => "item_title",
					"description" 	  => esc_html__("Add title for item.", "nt-advent"),
				),
				array(
					"type" 			  => "textarea",
					"heading" 		  => esc_html__("Detail", "nt-advent"),
					"param_name" 	  => "item_desc",
					"description" 	  => esc_html__("Add detail for item.", "nt-advent"),
				),
			)
		),
			array(
				'type'          => 'css_editor',
				'heading'       => esc_html__('Background CSS', 'nt-advent' ),
				'param_name'    => 'sectionbgcss',
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
		),
   ));
} class NT_Advent_section_aboutone extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	FEATURES  advent
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Advent_features_integrateWithVC' );
function NT_Advent_features_integrateWithVC() {
   vc_map( array(
		"name" 	   => esc_html__( "Features Section", "nt-advent" ),
		"base" 	   => "nt_advent_section_features",
		"category"   => esc_html__( "NT Advent", "nt-advent"),
		"params"     => array(
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Section ID', 'nt-advent' ),
				'param_name'    => 'section_id',
				'description'   => esc_html__("Add Your Section ID for scroll", "nt-advent"),
			),
			//Section heading
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Heading display ( hide or show )', 'nt-advent' ),
				'param_name'  => 'heading_display',
				'description' => esc_html__('You can select hide or show section heading all text', 'nt-advent' ),
				'group' 	  => esc_html__('Heading', 'nt-advent' ),
				'value'       => array(
					esc_html__('Show', 	'nt-advent' )	=> 'show',
					esc_html__('Hide', 	'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Heading', 'nt-advent' ),
				'param_name'    => 'section_heading',
				'description'   => esc_html__("Add heading for this section", "nt-advent"),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
				'dependency' 	=> array(
						'element' 	=> 'heading_display',
						'value'   	=> 'show'
					)
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Description', 'nt-advent' ),
				'param_name'    => 'section_desc',
				'description'   => esc_html__("Add description for this section", "nt-advent"),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
				'dependency' 	=> array(
						'element' 	=> 'heading_display',
						'value'   	=> 'show'
					)
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation heading and description', 'nt-advent' ),
				'param_name' 	=> 'headinganimation',
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
				'dependency' 	=> array(
						'element' 	=> 'heading_display',
						'value'   	=> 'show'
					)
			),

		//features left column
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation left item', 'nt-advent' ),
				'param_name' 	=> 'l_itemanimation',
				'group' 	  	=> esc_html__('Features Left', 'nt-advent' ),	
			),
		array(
			'type'        => 'param_group',
			'heading'     => esc_html__('Features left item', 'nt-advent' ),
			'param_name'  => 'featuresleftloop',
			'group' 	  => esc_html__('Features Left', 'nt-advent' ),			
			'params' 	  => array(

				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Icon name", "nt-advent"),
					"param_name" 	  => "l_icon_name",
					"description" 	  => esc_html__("Add icon name(fonticon class name). example : ion-android-notifications", "nt-advent"),
				),
				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Title", "nt-advent"),
					"param_name" 	  => "l_item_title",
					"description" 	  => esc_html__("Add title for item.", "nt-advent"),
				),
				array(
					"type" 			  => "textarea",
					"heading" 		  => esc_html__("Detail", "nt-advent"),
					"param_name" 	  => "l_item_desc",
					"description" 	  => esc_html__("Add detail for item.", "nt-advent"),
				),
			)
		),
			//Center image
			array(
				"type" 		  	=> "attach_image",
				"heading" 	  	=> esc_html__("Center image", "nt-advent"),
				"param_name"  	=> "device_image",
				"description" 	=> esc_html__("Add your center image", "nt-advent"),
				'group' 	  	=> esc_html__('Center Image', 'nt-advent' ),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation image', 'nt-advent' ),
				'param_name' 	=> 'imganimation',
				'group' 	  	=> esc_html__('Center Image', 'nt-advent' ),
			),
		//features right column
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation right item', 'nt-advent' ),
				'param_name' 	=> 'r_itemanimation',
				'group' 	  	=> esc_html__('Features Right', 'nt-advent' ),
			),
		array(
			'type'        => 'param_group',
			'heading'     => esc_html__('Features right item', 'nt-advent' ),
			'param_name'  => 'featuresrightloop',
			'group' 	  => esc_html__('Features Right', 'nt-advent' ),			
			'params' 	  => array(

				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Icon name", "nt-advent"),
					"param_name" 	  => "r_icon_name",
					"description" 	  => esc_html__("Add icon name(fonticon class name). example : ion-android-notifications", "nt-advent"),
				),
				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Title", "nt-advent"),
					"param_name" 	  => "r_item_title",
					"description" 	  => esc_html__("Add title for item.", "nt-advent"),
				),
				array(
					"type" 			  => "textarea",
					"heading" 		  => esc_html__("Detail", "nt-advent"),
					"param_name" 	  => "r_item_desc",
					"description" 	  => esc_html__("Add detail for item.", "nt-advent"),
				),
			)
		),
		//Background CSS
			array(
				'type'          => 'css_editor',
				'heading'       => esc_html__('Background CSS', 'nt-advent' ),
				'param_name'    => 'sectionbgcss',
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
		),
   ));
} class NT_Advent_section_features extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	FEATURES TWO advent
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Advent_featurestwo_integrateWithVC' );
function NT_Advent_featurestwo_integrateWithVC() {
   vc_map( array(
		"name" 	   => esc_html__( "Features List Section", "nt-advent" ),
		"base" 	   => "nt_advent_section_featurestwo",
		"category"   => esc_html__( "NT Advent", "nt-advent"),
		"params"     => array(
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Section ID', 'nt-advent' ),
				'param_name'    => 'section_id',
				'description'   => esc_html__("Add Your Section ID for scroll", "nt-advent"),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Column style', 'nt-advent' ),
				'param_name'  => 'listsection',
				'description' => esc_html__('You can select column style', 'nt-advent' ),
				'value'       => array(
					esc_html__('Split Column', 	'nt-advent' )	=> 'split',
					esc_html__('Normal Column', 'nt-advent' )	=> 'normal',
				),
			),
			//Left image
			array(
				"type" 		  	=> "attach_image",
				"heading" 	  	=> esc_html__("Left image", "nt-advent"),
				"param_name"  	=> "leftimage",
				"description" 	=> esc_html__("Add your left image", "nt-advent"),
				'group' 	  	=> esc_html__('Left image', 'nt-advent' ),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation image', 'nt-advent' ),
				'param_name' 	=> 'imganimation',
				'group' 	    => esc_html__('Left image', 'nt-advent' ),
			),
			//Features heading
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Heading', 'nt-advent' ),
				'param_name'    => 'section_heading',
				'description'   => esc_html__("Add heading for this section", "nt-advent"),
				'group' 	  => esc_html__('Features Right', 'nt-advent' ),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Description', 'nt-advent' ),
				'param_name'    => 'section_desc',
				'description'   => esc_html__("Add description for this section", "nt-advent"),
				'group' 	  => esc_html__('Features Right', 'nt-advent' ),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation heading and description', 'nt-advent' ),
				'param_name' 	=> 'headinganimation',
				'group' 	  	=> esc_html__('Features Right', 'nt-advent' ),
			),
			//Features loop
		array(
			'type'        => 'param_group',
			'heading'     => esc_html__('Features left list item', 'nt-advent' ),
			'param_name'  => 'featurestwoloop',
			'group' 	  => esc_html__('Features Right', 'nt-advent' ),			
			'params' 	  => array(
				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Features", "nt-advent"),
					"param_name" 	  => "features",
					"description" 	  => esc_html__("Add detail text for features.", "nt-advent"),
				)
			)
		),
			//Background CSS
			array(
				'type'          => 'css_editor',
				'heading'       => esc_html__('Background CSS', 'nt-advent' ),
				'param_name'    => 'sectionbgcss',
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
		),
   ));
} class NT_Advent_section_featurestwo extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	FEATURES ICON advent
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Advent_featuresicon_integrateWithVC' );
function NT_Advent_featuresicon_integrateWithVC() {
   vc_map( array(
		"name" 	   => esc_html__( "Features Icon Section", "nt-advent" ),
		"base" 	   => "nt_advent_section_featuresicon",
		"category"   => esc_html__( "NT Advent", "nt-advent"),
		"params"     => array(
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Section ID', 'nt-advent' ),
				'param_name'    => 'section_id',
				'description'   => esc_html__("Add Your Section ID for scroll", "nt-advent"),
			),
			//heading
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Heading', 'nt-advent' ),
				'param_name'    => 'section_heading',
				'description'   => esc_html__("Add heading for this section", "nt-advent"),
				'group' 	  => esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Description', 'nt-advent' ),
				'param_name'    => 'section_desc',
				'description'   => esc_html__("Add description for this section", "nt-advent"),
				'group' 	  => esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation heading and description', 'nt-advent' ),
				'param_name' 	=> 'headinganimation',
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			),
			//Features column
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Item column size', 'nt-advent' ),
				'param_name'  => 'item_column',
				'description' => esc_html__('You can select detail item column size', 'nt-advent' ),
				'group' 	  => esc_html__('Features', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select column size for all item', 	'nt-advent' )	=> '',
					esc_html__('1 Column', 	'nt-advent' )	=> 'col-md-12',
					esc_html__('2 Column', 	'nt-advent' )	=> 'col-md-6',
					esc_html__('3 Column', 	'nt-advent' )	=> 'col-md-4',
					esc_html__('4 Column', 	'nt-advent' )	=> 'col-md-3',
					esc_html__('6 Column', 	'nt-advent' )	=> 'col-md-2',
					esc_html__('Custom Column', 'nt-advent' )	=> 'custom',
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Desktop column', 'nt-advent' ),
				'param_name'  => 'desk_column',
				'description' => esc_html__('You can select desktop column size', 'nt-advent' ),
				'group' 	  => esc_html__('Features', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select desktop column size for all item', 	'nt-advent' )	=> '',
					esc_html__('col-md-1', 	'nt-advent' )	=> 'col-md-1',
					esc_html__('col-md-2', 	'nt-advent' )	=> 'col-md-2',
					esc_html__('col-md-3', 	'nt-advent' )	=> 'col-md-3',
					esc_html__('col-md-4', 	'nt-advent' )	=> 'col-md-4',
					esc_html__('col-md-5', 	'nt-advent' )	=> 'col-md-5',
					esc_html__('col-md-6', 	'nt-advent' )	=> 'col-md-6',
					esc_html__('col-md-7', 	'nt-advent' )	=> 'col-md-7',
					esc_html__('col-md-8', 	'nt-advent' )	=> 'col-md-8',
					esc_html__('col-md-9', 	'nt-advent' )	=> 'col-md-9',
					esc_html__('col-md-10', 'nt-advent' )	=> 'col-md-10',
					esc_html__('col-md-11', 'nt-advent' )	=> 'col-md-11',
					esc_html__('col-md-12', 'nt-advent' )	=> 'col-md-12',
				),
				'dependency' 	=> array(
						'element' 	=> 'item_column',
						'value'   	=> 'custom'
					)
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Desktop column offset', 'nt-advent' ),
				'param_name'  => 'desk_column_offset',
				'description' => esc_html__('You can select desktop column offset size', 'nt-advent' ),
				'group' 	  => esc_html__('Features', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select desktop column offset for all item', 	'nt-advent' )	=> '',
					esc_html__('col-md-offset-1', 	'nt-advent' )	=> 'col-md-offset-1',
					esc_html__('col-md-offset-2', 	'nt-advent' )	=> 'col-md-offset-2',
					esc_html__('col-md-offset-3', 	'nt-advent' )	=> 'col-md-offset-3',
					esc_html__('col-md-offset-4', 	'nt-advent' )	=> 'col-md-offset-4',
					esc_html__('col-md-offset-5', 	'nt-advent' )	=> 'col-md-offset-5',
					esc_html__('col-md-offset-6', 	'nt-advent' )	=> 'col-md-offset-6',
					esc_html__('col-md-offset-7', 	'nt-advent' )	=> 'col-md-offset-7',
					esc_html__('col-md-offset-8', 	'nt-advent' )	=> 'col-md-offset-8',
					esc_html__('col-md-offset-9', 	'nt-advent' )	=> 'col-md-offset-9',
					esc_html__('col-md-offset-10', 'nt-advent' )	=> 'col-md-offset-10',
					esc_html__('col-md-offset-11', 'nt-advent' )	=> 'col-md-offset-11',
					esc_html__('col-md-offset-12', 'nt-advent' )	=> 'col-md-offset-12',
				),
				'dependency' 	=> array(
						'element' 	=> 'item_column',
						'value'   	=> 'custom'
					)
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Mobile column', 'nt-advent' ),
				'param_name'  => 'mob_column',
				'description' => esc_html__('You can select mobile device column size', 'nt-advent' ),
				'group' 	  => esc_html__('Features', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select mobile column for all item', 	'nt-advent' )	=> '',
					esc_html__('col-sm-1', 	'nt-advent' )	=> 'col-sm-1',
					esc_html__('col-sm-2', 	'nt-advent' )	=> 'col-sm-2',
					esc_html__('col-sm-3', 	'nt-advent' )	=> 'col-sm-3',
					esc_html__('col-sm-4', 	'nt-advent' )	=> 'col-sm-4',
					esc_html__('col-sm-5', 	'nt-advent' )	=> 'col-sm-5',
					esc_html__('col-sm-6', 	'nt-advent' )	=> 'col-sm-6',
					esc_html__('col-sm-7', 	'nt-advent' )	=> 'col-sm-7',
					esc_html__('col-sm-8', 	'nt-advent' )	=> 'col-sm-8',
					esc_html__('col-sm-9', 	'nt-advent' )	=> 'col-sm-9',
					esc_html__('col-sm-10', 'nt-advent' )	=> 'col-sm-10',
					esc_html__('col-sm-11', 'nt-advent' )	=> 'col-sm-11',
					esc_html__('col-sm-12', 'nt-advent' )	=> 'col-sm-12',
				),
				'dependency' 	=> array(
						'element' 	=> 'item_column',
						'value'   	=> 'custom'
					)
			),
			//Features loop
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation item', 'nt-advent' ),
				'param_name' 	=> 'itemanimation',
				'group' 	  	=> esc_html__('Features', 'nt-advent' ),
			),
		array(
			'type'        => 'param_group',
			'heading'     => esc_html__('Features item', 'nt-advent' ),
			'param_name'  => 'featuresiconloop',
			'group' 	  => esc_html__('Features', 'nt-advent' ),			
			'params' 	  => array(
				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Icon name", "nt-advent"),
					"param_name" 	  => "icon_name",
					"description" 	  => esc_html__("Add icon name(fonticon class name). example : ion-android-notifications", "nt-advent"),
				),
				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Title", "nt-advent"),
					"param_name" 	  => "item_title",
					"description" 	  => esc_html__("Add title for item.", "nt-advent"),
				),
				array(
					"type" 			  => "textarea",
					"heading" 		  => esc_html__("Detail", "nt-advent"),
					"param_name" 	  => "item_desc",
					"description" 	  => esc_html__("Add detail for item.", "nt-advent"),
				),
			)
		),
			//Background CSS
			array(
				'type'          => 'css_editor',
				'heading'       => esc_html__('Background CSS', 'nt-advent' ),
				'param_name'    => 'sectionbgcss',
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
		),
   ));
} class NT_Advent_section_featuresicon extends WPBakeryShortCode {}



/*-----------------------------------------------------------------------------------*/
/*	COUNTNUMBER advent
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Advent_countnumber_integrateWithVC' );
function NT_Advent_countnumber_integrateWithVC() {
   vc_map( array(
		"name" 	   => esc_html__( "Countnumber Section", "nt-advent" ),
		"base" 	   => "nt_advent_section_countnumber",
		"category"   => esc_html__( "NT Advent", "nt-advent"),
		"params"     => array(
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Section ID', 'nt-advent' ),
				'param_name'    => 'section_id',
				'description'   => esc_html__("Add Your Section ID for scroll", "nt-advent"),
			),
			//Features column
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Item column size', 'nt-advent' ),
				'param_name'  => 'item_column',
				'description' => esc_html__('You can select detail item column size', 'nt-advent' ),
				'group' 	  => esc_html__('Count', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select column size for all item', 	'nt-advent' )	=> '',
					esc_html__('1 Column', 	'nt-advent' )	=> 'col-md-12',
					esc_html__('2 Column', 	'nt-advent' )	=> 'col-md-6',
					esc_html__('3 Column', 	'nt-advent' )	=> 'col-md-4',
					esc_html__('4 Column', 	'nt-advent' )	=> 'col-md-3',
					esc_html__('6 Column', 	'nt-advent' )	=> 'col-md-2',
					esc_html__('Custom Column', 'nt-advent' )	=> 'custom',
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Desktop column', 'nt-advent' ),
				'param_name'  => 'desk_column',
				'description' => esc_html__('You can select desktop column size', 'nt-advent' ),
				'group' 	  => esc_html__('Count', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select desktop column size for all item', 	'nt-advent' )	=> '',
					esc_html__('col-md-1', 	'nt-advent' )	=> 'col-md-1',
					esc_html__('col-md-2', 	'nt-advent' )	=> 'col-md-2',
					esc_html__('col-md-3', 	'nt-advent' )	=> 'col-md-3',
					esc_html__('col-md-4', 	'nt-advent' )	=> 'col-md-4',
					esc_html__('col-md-5', 	'nt-advent' )	=> 'col-md-5',
					esc_html__('col-md-6', 	'nt-advent' )	=> 'col-md-6',
					esc_html__('col-md-7', 	'nt-advent' )	=> 'col-md-7',
					esc_html__('col-md-8', 	'nt-advent' )	=> 'col-md-8',
					esc_html__('col-md-9', 	'nt-advent' )	=> 'col-md-9',
					esc_html__('col-md-10', 'nt-advent' )	=> 'col-md-10',
					esc_html__('col-md-11', 'nt-advent' )	=> 'col-md-11',
					esc_html__('col-md-12', 'nt-advent' )	=> 'col-md-12',
				),
				'dependency' 	=> array(
						'element' 	=> 'item_column',
						'value'   	=> 'custom'
					)
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Desktop column offset', 'nt-advent' ),
				'param_name'  => 'desk_column_offset',
				'description' => esc_html__('You can select desktop column offset size', 'nt-advent' ),
				'group' 	  => esc_html__('Count', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select desktop column offset for all item', 	'nt-advent' )	=> '',
					esc_html__('col-md-offset-1', 	'nt-advent' )	=> 'col-md-offset-1',
					esc_html__('col-md-offset-2', 	'nt-advent' )	=> 'col-md-offset-2',
					esc_html__('col-md-offset-3', 	'nt-advent' )	=> 'col-md-offset-3',
					esc_html__('col-md-offset-4', 	'nt-advent' )	=> 'col-md-offset-4',
					esc_html__('col-md-offset-5', 	'nt-advent' )	=> 'col-md-offset-5',
					esc_html__('col-md-offset-6', 	'nt-advent' )	=> 'col-md-offset-6',
					esc_html__('col-md-offset-7', 	'nt-advent' )	=> 'col-md-offset-7',
					esc_html__('col-md-offset-8', 	'nt-advent' )	=> 'col-md-offset-8',
					esc_html__('col-md-offset-9', 	'nt-advent' )	=> 'col-md-offset-9',
					esc_html__('col-md-offset-10', 'nt-advent' )	=> 'col-md-offset-10',
					esc_html__('col-md-offset-11', 'nt-advent' )	=> 'col-md-offset-11',
					esc_html__('col-md-offset-12', 'nt-advent' )	=> 'col-md-offset-12',
				),
				'dependency' 	=> array(
						'element' 	=> 'item_column',
						'value'   	=> 'custom'
					)
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Mobile column', 'nt-advent' ),
				'param_name'  => 'mob_column',
				'description' => esc_html__('You can select mobile device column size', 'nt-advent' ),
				'group' 	  => esc_html__('Count', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select mobile column for all item', 	'nt-advent' )	=> '',
					esc_html__('col-sm-1', 	'nt-advent' )	=> 'col-sm-1',
					esc_html__('col-sm-2', 	'nt-advent' )	=> 'col-sm-2',
					esc_html__('col-sm-3', 	'nt-advent' )	=> 'col-sm-3',
					esc_html__('col-sm-4', 	'nt-advent' )	=> 'col-sm-4',
					esc_html__('col-sm-5', 	'nt-advent' )	=> 'col-sm-5',
					esc_html__('col-sm-6', 	'nt-advent' )	=> 'col-sm-6',
					esc_html__('col-sm-7', 	'nt-advent' )	=> 'col-sm-7',
					esc_html__('col-sm-8', 	'nt-advent' )	=> 'col-sm-8',
					esc_html__('col-sm-9', 	'nt-advent' )	=> 'col-sm-9',
					esc_html__('col-sm-10', 'nt-advent' )	=> 'col-sm-10',
					esc_html__('col-sm-11', 'nt-advent' )	=> 'col-sm-11',
					esc_html__('col-sm-12', 'nt-advent' )	=> 'col-sm-12',
				),
				'dependency' 	=> array(
						'element' 	=> 'item_column',
						'value'   	=> 'custom'
					)
			),
			//Features loop
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation item', 'nt-advent' ),
				'param_name' 	=> 'itemanimation',
				'group' 	  	=> esc_html__('Count', 'nt-advent' ),
			),
		array(
			'type'        => 'param_group',
			'heading'     => esc_html__('Count item', 'nt-advent' ),
			'param_name'  => 'countnumberloop',
			'group' 	  => esc_html__('Count', 'nt-advent' ),			
			'params' 	  => array(
				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Icon name", "nt-advent"),
					"param_name" 	  => "icon_name",
					"description" 	  => esc_html__("Add icon name(fonticon class name). example : ion-android-notifications", "nt-advent"),
				),
				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Number", "nt-advent"),
					"param_name" 	  => "item_number",
					"description" 	  => esc_html__("Add number for count.", "nt-advent"),
				),
				array(
					"type" 			  => "textarea",
					"heading" 		  => esc_html__("Title", "nt-advent"),
					"param_name" 	  => "item_title",
					"description" 	  => esc_html__("Add title for item.", "nt-advent"),
				),
			)
		),
			//Background CSS
			array(
				'type'          => 'css_editor',
				'heading'       => esc_html__('Background CSS', 'nt-advent' ),
				'param_name'    => 'sectionbgcss',
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
		),
   ));
} class NT_Advent_section_countnumber extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	SUBFEATURES  advent
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Advent_subfeatures_integrateWithVC' );
function NT_Advent_subfeatures_integrateWithVC() {
   vc_map( array(
		"name" 	   => esc_html__( "Subfeatures Section", "nt-advent" ),
		"base" 	   => "nt_advent_section_subfeatures",
		"category"   => esc_html__( "NT Advent", "nt-advent"),
		"params"     => array(
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Section ID', 'nt-advent' ),
				'param_name'    => 'section_id',
				'description'   => esc_html__("Add Your Section ID for scroll", "nt-advent"),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Heading', 'nt-advent' ),
				'param_name'    => 'section_heading',
				'description'   => esc_html__("Add heading for this section", "nt-advent"),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Heading color', 'nt-advent' ),
				'param_name'    => 'headingcolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation heading', 'nt-advent' ),
				'param_name' 	=> 'headinganimation',
			),
			array(
				'type'          => 'vc_link',
				'heading'       => esc_html__('Button (Link)', 'nt-advent' ),
				'param_name'    => 'downloadlink',
				'description'   => esc_html__('Add custom link.', 'nt-advent' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Button style', 'nt-advent' ),
				'param_name'  => 'btn_type',
				'description' => esc_html__('You can select button style', 'nt-advent' ),
				'value'       => array(
					esc_html__('Rectangle', 'nt-advent' )	=> 'rectangle',
					esc_html__('Rounded', 	'nt-advent' )	=> 'rounded',
				),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation button', 'nt-advent' ),
				'param_name' 	=> 'btnanimation',
			),
			array(
				"type" 		  	=> "attach_image",
				"heading" 	  	=> esc_html__("Background image", "nt-advent"),
				"param_name"  	=> "bgimg",
				"description" 	=> esc_html__("Add your BG image", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Background color', 'nt-advent' ),
				'param_name'    => 'bgcolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Select parallax bg hide or show', 'nt-advent' ),
				'param_name'  => 'parallax',
				'description' => esc_html__('You can select parallax bg hide or show', 'nt-advent' ),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select parallax effect', 'nt-advent' )	=> '',
					esc_html__('Show', 	'nt-advent' )	=> 'show',
					esc_html__('Hide', 	'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Select overlay color hide or show', 'nt-advent' ),
				'param_name'  => 'overlay_display',
				'description' => esc_html__('You can select overlay mask color hide or show', 'nt-advent' ),
				'group' 	  => esc_html__('Background options', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select a style', 'nt-advent' )	=> '',
					esc_html__('Show', 			'nt-advent' )	=> 'show',
					esc_html__('Hide', 			'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Overlay color', 'nt-advent' ),
				'param_name'    => 'overlaycolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
				'dependency' => array(
					'element' 	=> 'overlay_display',
					'value'   	=> 'show'
				)
			),
		),
   ));
} class NT_Advent_section_subfeatures extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	TESTIMONIAL advent
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Advent_testimonial_integrateWithVC' );
function NT_Advent_testimonial_integrateWithVC() {
   vc_map( array(
		"name" 	   => esc_html__( "Testimonial Section", "nt-advent" ),
		"base" 	   => "nt_advent_section_testimonial",
		"category"   => esc_html__( "NT Advent", "nt-advent"),
		"params"     => array(
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Section ID', 'nt-advent' ),
				'param_name'    => 'section_id',
				'description'   => esc_html__("Add Your Section ID for scroll", "nt-advent"),
			),
		//Testimonial loop
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation item', 'nt-advent' ),
				'param_name' 	=> 'testianimation',
				'group' 	  	=> esc_html__('Testimonial', 'nt-advent' ),
			),
		array(
			'type'        => 'param_group',
			'heading'     => esc_html__('Testimonial items', 'nt-advent' ),
			'param_name'  => 'testiloop',
			'group' 	  => esc_html__('Testimonial', 'nt-advent' ),			
			'params' 	  => array(

				array(
					"type" 		  	=> "attach_image",
					"heading" 	  	=> esc_html__("Testimonial image", "nt-advent"),
					"param_name"  	=> "testi_img",
					"description" 	=> esc_html__("Add your client image", "nt-advent"),
				),
				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Testimonial name", "nt-advent"),
					"param_name" 	  => "testi_name",
					"description" 	  => esc_html__("Add your testimonial name", "nt-advent"),
				),
				array(
					"type" 			  => "textfield",
					"heading" 		  => esc_html__("Testimonial job", "nt-advent"),
					"param_name" 	  => "testi_job",
					"description" 	  => esc_html__("Add your testimonial job or detail", "nt-advent"),
				),
				array(
					"type" 			  => "textarea",
					"heading" 		  => esc_html__("Testimonial quote", "nt-advent"),
					"param_name" 	  => "testi_quote",
					"description" 	  => esc_html__("Add your testimonial quote text", "nt-advent"),
				),
				array(
					'type'        => 'dropdown',
					'heading'     => esc_html__('Rating star', 'nt-advent' ),
					'param_name'  => 'stars',
					'description' => esc_html__('You can select star count', 'nt-advent' ),
					'value'       => array(
						esc_html__('1 Star', 	'nt-advent' )	=> '1',
						esc_html__('2 Star', 	'nt-advent' )	=> '2',
						esc_html__('3 Star', 	'nt-advent' )	=> '3',
						esc_html__('4 Star', 	'nt-advent' )	=> '4',
						esc_html__('5 Star', 	'nt-advent' )	=> '5',

					)
				)
			)
		),
			array(
				'type'          => 'css_editor',
				'heading'       => esc_html__('Background CSS', 'nt-advent' ),
				'param_name'    => 'sectionbgcss',
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
		),
   ));
} class NT_Advent_section_testimonial extends WPBakeryShortCode {}


/*-----------------------------------------------------------------------------------*/
/*	PRICING advent
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Advent_section_pricing_integrateWithVC' );
function NT_Advent_section_pricing_integrateWithVC() {
   vc_map( array(
      "name"       => esc_html__("Pricing ( Plugin )", "nt-advent"),
      "base"       => "nt_advent_section_pricing",
	  "icon"       => "icon-wpb-row",
	  "category"   => esc_html__("NT Advent", "nt-advent"),
      "params"     => array(
		 array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Section ID', 'nt-advent'),
            'param_name'  => 'section_id',
            'description' => esc_html__('Add your Section ID', 'nt-advent'),
        ),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__('Heading display ( hide or show )', 'nt-advent' ),
			'param_name'  => 'heading_display',
			'description' => esc_html__('You can select hide or show section heading all text', 'nt-advent' ),
			'group' 	  => esc_html__('Heading', 'nt-advent' ),
			'value'       => array(
				esc_html__('Show', 	'nt-advent' )	=> 'show',
				esc_html__('Hide', 	'nt-advent' )	=> 'hide',
			),
		),

		array(
			'type'          => 'textarea',
			'heading'       => esc_html__('Heading', 'nt-advent' ),
			'param_name'    => 'secheading',
			'description'   => esc_html__("Add heading for pricing section", "nt-advent"),
			'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			'dependency' 	=> array(
					'element' 	=> 'heading_display',
					'value'   	=> 'show'
				)
		),
		array(
			'type'          => 'textarea',
			'heading'       => esc_html__('Section description', 'nt-advent' ),
			'param_name'    => 'secdescription',
			'description'   => esc_html__("Add description for pricing section", "nt-advent"),
			'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			'dependency' 	=> array(
					'element' 	=> 'heading_display',
					'value'   	=> 'show'
				)
		),
		array(
			'type' 			=> 'animation_style',
			'heading' 		=> esc_html__( 'Animation heading and description', 'nt-advent' ),
			'param_name' 	=> 'headinganimation',
			'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			'dependency' 	=> array(
					'element' 	=> 'heading_display',
					'value'   	=> 'show'
				)
		),
		array(
			'type'        => 'vc_link',
			'heading'     => esc_html__('Price Button URL', 'nt-advent'),
			'param_name'  => 'pricelink',
			'description' => esc_html__('Add link for price button.', 'nt-advent'),
			'group' 	  => esc_html__('Post Options', 'nt-advent' ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__('Button style', 'nt-advent' ),
			'param_name'  => 'price_btntype',
			'description' => esc_html__('You can select button style', 'nt-advent' ),
			'group' 	  => esc_html__('Post Options', 'nt-advent' ),
			'value'       => array(
				esc_html__('Rectangle', 'nt-advent' )	=> 'rectangle',
				esc_html__('Rounded', 	'nt-advent' )	=> 'rounded',
			),
		),

		array(
			'type' 			=> 'animation_style',
			'heading' 		=> esc_html__( 'Animation pricing item', 'nt-advent' ),
			'param_name' 	=> 'priceanimation',
			'group' 	  	=> esc_html__('Post Options', 'nt-advent' ),
		),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Price Table Count', 'nt-advent' ),
            'param_name'  => 'post_number',
			'group'       => esc_html__('Post Options', 'nt-advent'),
            'description' => esc_html__('You can control with number your price tables.Please enter a number', 'nt-advent'),
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Category', 'nt-advent' ),
            'param_name'  => 'price_category',
			'group'       => esc_html__('Post Options', 'nt-advent'),
            'description' => esc_html__('Enter Price table category or write all', 'nt-advent'),
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Order', 'nt-advent' ),
            'param_name'  => 'order',
			'group'       => esc_html__('Post Options', 'nt-advent'),
            'description' => esc_html__('Enter Price table order. DESC or ASC', 'nt-advent'),
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__('Orderby', 'nt-advent' ),
            'param_name'  => 'orderby',
			'group'       => esc_html__('Post Options', 'nt-advent'),
            'description' => esc_html__('Enter Price table orderby. Default is : date', 'nt-advent'),
        ),
         array(
            'type'        => 'css_editor',
            'heading'     => esc_html__('Background CSS', 'nt-advent'),
            'param_name'  => 'sectionbgcss',
            'group'       => esc_html__('Background options', 'nt-advent'),
        )
    ),
   )
 );
}
class NT_Advent_section_pricing extends WPBakeryShortCode {}

/*-----------------------------------------------------------------------------------*/
/*	SUBSCRIBE  advent
/*-----------------------------------------------------------------------------------*/
add_action( 'vc_before_init', 'NT_Advent_subscribe_integrateWithVC' );
function NT_Advent_subscribe_integrateWithVC() {
   vc_map( array(
		"name" 	   => esc_html__( "Subscribe Section", "nt-advent" ),
		"base" 	   => "nt_advent_section_subscribe",
		"category"   => esc_html__( "NT Advent", "nt-advent"),
		"params"     => array(
			array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Section ID', 'nt-advent' ),
				'param_name'    => 'section_id',
				'description'   => esc_html__("Add Your Section ID for scroll", "nt-advent"),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Heading', 'nt-advent' ),
				'param_name'    => 'secheading',
				'description'   => esc_html__("Add heading for subscribe section", "nt-advent"),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Description', 'nt-advent' ),
				'param_name'    => 'secdescription',
				'description'   => esc_html__("Add description for subscribe section", "nt-advent"),
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Heading color', 'nt-advent' ),
				'param_name'    => 'headingcolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Description color', 'nt-advent' ),
				'param_name'    => 'desccolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation heading and description', 'nt-advent' ),
				'param_name' 	=> 'headinganimation',
				'group' 	  	=> esc_html__('Heading', 'nt-advent' ),
			),
			array(
				'type' 			=> 'animation_style',
				'heading' 		=> esc_html__( 'Animation subscribe form', 'nt-advent' ),
				'param_name' 	=> 'formanimation',
				'group' 	  	=> esc_html__('Subscribe Form', 'nt-advent' ),
			),
			array(
				'type'          => 'textarea_html',
				'heading'       => esc_html__('Subscribe Form shortcode', 'nt-advent' ),
				'param_name'    => 'content',
				'description'   => esc_html__("Add contact form 7 shortcode here", "nt-advent"),
				'group' 	  	=> esc_html__('Subscribe Form', 'nt-advent' ),	
			),
			array(
				"type" 		  	=> "attach_image",
				"heading" 	  	=> esc_html__("Background image", "nt-advent"),
				"param_name"  	=> "bgimg",
				"description" 	=> esc_html__("Add your BG image", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Background color', 'nt-advent' ),
				'param_name'    => 'bgcolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Select parallax bg hide or show', 'nt-advent' ),
				'param_name'  => 'parallax',
				'description' => esc_html__('You can select parallax bg hide or show', 'nt-advent' ),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select parallax effect', 'nt-advent' )	=> '',
					esc_html__('Show', 	'nt-advent' )	=> 'show',
					esc_html__('Hide', 	'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__('Select overlay color hide or show', 'nt-advent' ),
				'param_name'  => 'overlay_display',
				'description' => esc_html__('You can select overlay mask color hide or show', 'nt-advent' ),
				'group' 	  => esc_html__('Background options', 'nt-advent' ),
				'value'       => array(
					esc_html__('Select a style', 'nt-advent' )	=> '',
					esc_html__('Show', 			'nt-advent' )	=> 'show',
					esc_html__('Hide', 			'nt-advent' )	=> 'hide',
				),
			),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Overlay color', 'nt-advent' ),
				'param_name'    => 'overlaycolor',
				"description"   => esc_html__("Add/select an color", "nt-advent"),
				'group' 	    => esc_html__('Background options', 'nt-advent' ),
				'dependency' => array(
					'element' 	=> 'overlay_display',
					'value'   	=> 'show'
				)
			),
		),
   ));
} class NT_Advent_section_subscribe extends WPBakeryShortCode {}

// Filter to replace default css class names for vc_row shortcode and vc_column
add_filter( 'vc_shortcodes_css_class', 'nt_advent_custom_css_classes_for_vc_row_and_vc_column', 10, 2 );
function nt_advent_custom_css_classes_for_vc_row_and_vc_column( $class_string, $tag ) {
  if (  $tag == 'vc_row_inner' ) {
    $class_string = str_replace( 'vc_row-fluid', 'container bootstrap', $class_string ); // This will replace "vc_row-fluid" with "my_row-fluid"
  }
  return $class_string; // Important: you should always return modified or original $class_string
}