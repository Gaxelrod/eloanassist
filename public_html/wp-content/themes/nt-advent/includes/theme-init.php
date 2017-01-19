<?php
/**
 *
 * @package WordPress
 * @subpackage nt_advent
 * @since nt_advent 1.0
 *
 */

/*************************************************
## Google Fonts
*************************************************/

if ( ! function_exists( 'nt_advent_fonts_url' ) ) :
function nt_advent_fonts_url() {
	$fonts_url = '';

	$poppins 		= 	_x( 'on', 'Poppins font: on or off', 		'nt-advent' );
	$roboto 		= 	_x( 'on', 'Roboto font: on or off', 		'nt-advent' );
	$josefin_sans 	= 	_x( 'on', 'Josefin+Sans font: on or off', 	'nt-advent' );

	if ( 'off' !== $poppins || 'off' !== $roboto || 'off' !== $josefin_sans  ) {
		$font_families = array();

		if ( 'off' !== $poppins )
			$font_families[] = 'Poppins:300,400,500,600,700';

		if ( 'off' !== $roboto )
			$font_families[] = 'Roboto';

		if ( 'off' !== $josefin_sans )
			$font_families[] = 'Josefin Sans:100,300,400,500';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$fonts_url = add_query_arg( $query_args, "//fonts.googleapis.com/css" );
	}

	return $fonts_url;
}
endif;

/*************************************************
## Styles and Scripts
*************************************************/

function nt_advent_scripts() {


	// twitter Bootstrap framework
	wp_enqueue_style( 'bootstrap',						get_template_directory_uri() . '/css/bootstrap.min.css', 		false, '1.0');
	// animate css library
	wp_enqueue_style( 'animate',						get_template_directory_uri() . '/css/animate.css', 				false, '1.0');
	// owl carousel style and default theme
	wp_enqueue_style( 'owl-carousel',					get_template_directory_uri() . '/css/owl.carousel.css', 		false, '1.0');
	wp_enqueue_style( 'owl-carousel-theme',				get_template_directory_uri() . '/css/owl.theme.css', 			false, '1.0');
	// icomoon icon library
	wp_enqueue_style( 'ionicons',						get_template_directory_uri() . '/css/ionicons.min.css', 		false, '1.0');
	// font awesome icon library
	wp_enqueue_style( 'font-awesome',					get_template_directory_uri() . '/css/font-awesome.min.css', 	false, '1.0');
	// general css file
	wp_enqueue_style( 'nt-advent-main-style',			get_template_directory_uri() . '/css/main-style.css', 			false, '1.0');
	// flexslider css file for blog post
	wp_enqueue_style( 'nt-advent-custom-flexslider',  	get_template_directory_uri() . '/js/flexslider/flexslider.css', false, '1.0');
	// wordpress css file for blog post
	wp_enqueue_style( 'nt-advent-wordpress',  			get_template_directory_uri() . '/css/wordpress.css', 			false, '1.0');
	wp_enqueue_style( 'nt-advent-visual-composer',  	get_template_directory_uri() . '/css/visual-composer.css', 		false, '1.0');
	// update css file
	wp_enqueue_style( 'nt-advent-theme',  				get_template_directory_uri() . '/css/theme.css', 				false, '1.0');
	wp_enqueue_style( 'nt-advent-update',  				get_template_directory_uri() . '/css/update.css', 				false, '1.0');

	// theme default google webfont loader
	wp_enqueue_style( 'nt-advent-fonts-load',  			nt_advent_fonts_url(), array(), '1.0.0' );
	// custom css
	wp_enqueue_style( 'nt-advent-custom-style', 		get_stylesheet_uri() );
	wp_enqueue_style( 'style',							get_stylesheet_uri() );


	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

	// Scripts for theme
	$nt_advent_smooth = ot_get_option('nt_advent_smooth');
	if($nt_advent_smooth == 'on') {
	wp_enqueue_script( 'smoothscroll', 					get_template_directory_uri() .  '/js/smoothscroll.js', 				array('jquery'), '1.0', true);
	}
	wp_register_script('particleground', 				get_template_directory_uri() .  '/js/jquery.particleground.min.js', array('jquery'), '1.0', true);
	wp_register_script('device', 						get_template_directory_uri() .  '/js/device.js', 					array('jquery'), '1.0', true);
	wp_register_script('stellar', 						get_template_directory_uri() .  '/js/jquery.stellar.min.js', 		array('jquery'), '1.0', true);
	wp_enqueue_script( 'bootstrap', 					get_template_directory_uri() .  '/js/bootstrap.min.js', 			array('jquery'), '1.0', true);
	wp_enqueue_script( 'plugins', 						get_template_directory_uri() .  '/js/plugins.js', 					array('jquery'), '1.0', true);
	wp_register_script( 'owl-carousel', 				get_template_directory_uri() .  '/js/owl.carousel.min.js', 			array('jquery'), '1.0', true);
	wp_enqueue_script( 'nt-advent-menu', 				get_template_directory_uri() .  '/js/menu.js', 						array('jquery'), '1.0', true);
	wp_enqueue_script( 'nt-advent-main-settings', 		get_template_directory_uri() .  '/js/main-settings.js', 			array('jquery'), '1.0', true);
	wp_enqueue_script( 'nt-advent-custom', 				get_template_directory_uri() .  '/js/custom.js', 					array('jquery'), '1.0', true);
	wp_register_script( 'nt-advent-parallax-set', 		get_template_directory_uri() .  '/js/shortcode/parallax-set.js', 	array('jquery'), '1.0', true);
	wp_register_script( 'nt-advent-particle-set', 		get_template_directory_uri() .  '/js/shortcode/particle-set.js', 	array('jquery'), '1.0', true);
	wp_register_script( 'nt-advent-carousel-set', 		get_template_directory_uri() .  '/js/shortcode/carousel-set.js', 	array('jquery'), '1.0', true);

	// WP default scripts for theme
	wp_register_script('nt-advent-custom-flexslider', 	get_template_directory_uri() .  '/js/blog/jquery.flexslider.js', 	array('jquery'), '1.0', true);
	wp_register_script('fitvids', 	 					get_template_directory_uri() .  '/js/blog/jquery.fitvids.js', 		array('jquery'), '1.0', true);
	wp_register_script('nt-advent-blog-settings', 		get_template_directory_uri() .  '/js/blog/blog-settings.js', 		array('jquery'), '1.0', true);

	wp_enqueue_script( 'modernizr', 					get_template_directory_uri()  . '/js/blog/modernizr.min.js', 		array('jquery'), '2.7.1', false );
	wp_script_add_data('modernizr', 					'conditional', 'lt IE 9' );

	wp_enqueue_script( 'respond', 						get_template_directory_uri()  . '/js/blog/respond.min.js', 			array('jquery'), '1.4.2', false );
	wp_script_add_data('respond', 						'conditional', 'lt IE 9' );

}

add_action( 'wp_enqueue_scripts', 'nt_advent_scripts' );


/*************************************************
## Admin style and scripts
*************************************************/

function nt_advent_admin_scripts() {

	// Update CSS within in Admin
	wp_enqueue_style(' nt-advent-custom-admin', 		get_template_directory_uri().'/css/admin.css');
	wp_enqueue_script('nt-advent-custom-admin', 		get_template_directory_uri() . '/js/blog/jquery.custom.admin.js');

}
add_action('admin_enqueue_scripts', 'nt_advent_admin_scripts');


/*************************************************
## Theme option & Metaboxes & shortcodes
*************************************************/

	// theme homepage visual composer shortcodes settings
	if(function_exists('vc_set_as_theme')) {
		require_once get_template_directory() . '/includes/visual-shortcodes.php';
	}

	// Metabox plugin check
	if ( ! function_exists( 'rwmb_meta' ) ) {
		function rwmb_meta( $key, $args = '', $post_id = null ) {
			return false;
		}
	}
	// Theme post and page meta plugin for customization and more features
	require_once get_template_directory() . '/includes/page-metaboxes.php';

	// Theme css setting file
	require_once get_template_directory() . '/includes/custom-style.php';

	// Theme default breadcrumb
	require_once get_template_directory() . '/includes/breadcrumb.php';

	// Theme navigation and pagination options
	require_once get_template_directory() . '/includes/template-tags.php';

	// Oneclick
	require_once get_template_directory() . '/includes/easy_installer/init.php';

	// image resizer
	require_once get_template_directory() . '/includes/aq_resizer.php';

	// Option tree controllers
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	if ( ! is_plugin_active( 'option-tree/ot-loader.php' ) ) {

		function ot_get_option() {
			return false;
		}

	}

	if ( is_plugin_active( 'option-tree/ot-loader.php' ) ) {

		// add filter for  options panel loader
		add_filter( 'ot_show_pages', 		'__return_false' );
		add_filter( 'ot_show_new_layout', 	'__return_false' );

		// Theme options admin panel setings file
		include_once get_template_directory() . '/includes/theme-options.php';

		// Theme customize css setting file
		require_once get_template_directory() . '/includes/custom-style.php';

	}

/*************************************************
## Theme Setup
*************************************************/

if ( ! isset( $content_width ) ) $content_width = 960;

function nt_advent_theme_setup() {

	/*
	* This theme styles the visual editor to resemble the theme style,
	* specifically font, colors, icons, and column width.
	*/
	add_editor_style ( 'custom-editor-style.css' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	* Enable support for Post Thumbnails on posts and pages.
	*
	* See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	*/
	add_theme_support( 'post-thumbnails' );

	the_post_thumbnail( 'large' );           // Large resolution (default 640px x 640px max)
	the_post_thumbnail( 'full' );            // Full resolution (original size uploaded)

	// Theme customizer and tag support
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'custom-header' );

	/*
	* Enable support for Post Formats.
	*
	* See: https://codex.wordpress.org/Post_Formats
	*/
	add_theme_support( 'post-formats', array('gallery', 'quote', 'video', 'audio'));
	add_post_type_support( 'portfolio', 'post-formats' );
	add_image_size( 'nt_advent_member_thumb', 650, 650, true);

	// Make theme available for translation
	// Translations can be filed in the /languages/ directory
	load_theme_textdomain( 'nt-advent', get_template_directory() . '/languages' );

	register_nav_menus( array(
		'primary' 			=> 	esc_html__( 'Primary Menu', 'nt-advent' ),
	) );

}
add_action( 'after_setup_theme', 'nt_advent_theme_setup' );

/*************************************************
## Widget columns
*************************************************/

function nt_advent_widgets_init() {
	register_sidebar( array(
		'name' 			=> esc_html__( 'Blog Sidebar', 'nt-advent' ),
		'id' 			=> 'sidebar-1',
		'description'   => esc_html__( 'These are widgets for the Blog page.','nt-advent' ),
		'before_widget' => '<div class="widget  %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title"><span>',
		'after_title'   => '</span></h4>'
	) );
	register_sidebar( array(
		'name' 			=> esc_html__( 'Footer widgetize area', 'nt-advent' ),
		'id' 			=> 'nt-advent-footer-widgetize',
		'description'   => esc_html__( 'Theme footer widgetize area','nt-advent' ),
		'before_widget' => '<div class="col-md-3"><div class="widget %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3 class="widget-head">',
		'after_title'   => '</h3>'
	) );
	register_sidebar( array(
		'name' 			=> esc_html__( 'Footer', 'nt-advent' ),
		'id' 			=> 'nt-advent-footer',
		'description'   => esc_html__( 'Theme footer default area','nt-advent' ),
		'before_widget' => '<div class="col-md-3"><div class="widget %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3 class="widget-head">',
		'after_title'   => '</h3>'
	) );
	register_sidebar( array(
		'name' 			=> esc_html__( 'Footer widget area 1', 'nt-advent' ),
		'id' 			=> 'nt_advent_footer_widget1',
		'description'   => esc_html__( 'Theme footer widget area first column.','nt-advent' ),
		'before_widget' => '<div class="col-md-3"><div class="widget %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3 class="widget-head">',
		'after_title'   => '</h3>'
	) );
	register_sidebar( array(
		'name' 			=> esc_html__( 'Footer widget area 2', 'nt-advent' ),
		'id' 			=> 'nt_advent_footer_widget2',
		'description'   => esc_html__( 'Theme footer widget area second column.','nt-advent' ),
		'before_widget' => '<div class="col-md-3"><div class="widget %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3 class="widget-head">',
		'after_title'   => '</h3>'
	) );

}
add_action( 'widgets_init', 'nt_advent_widgets_init' );

/*************************************************
## Include the TGM_Plugin_Activation class.
*************************************************/

require_once get_template_directory() . '/includes/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'nt_advent_register_required_plugins' );

function nt_advent_register_required_plugins() {

    $plugins = array(
		array(
            'name'         => esc_html__('Breadcrumb NavXT', "nt-advent"),
            'slug'         => 'breadcrumb-navxt',
        ),
        array(
            'name'         => esc_html__('Contact Form 7', "nt-advent"),
            'slug'         => 'contact-form-7',
        ),
        array(
            'name'         => esc_html__('Meta Box', "nt-advent"),
            'slug'         => 'meta-box',
			'required'     => true,
        ),
		array(
            'name'         => esc_html__('Option Tree', "nt-advent"),
            'slug'         => 'option-tree',
			'required'     => true,
        ),
		array(
            'name'         => esc_html__('Metabox Tabs', "nt-advent"),
            'slug'         => 'meta-box-tabs',
            'source'       => esc_url('http://ninetheme.com/themes/plugins/meta-box-tabs.zip'),
            'required'     => true,
            'version'      => '0.1.7',
        ),
		array(
            'name'		   => esc_html__('Visual CSS Style Editor', 'nt-advent'),
            'slug'		   => 'yellow-pencil-visual-theme-customizer',
        ),
		array(
            'name'         => esc_html__('Envato Auto Update Theme', "nt-advent"),
            'slug'         => 'envato-market',
            'source'       => esc_url('https://envato.github.io/wp-envato-market/dist/envato-market.zip'),
            'required'     => false,
            'version'      => '1.0.0-RC2',
        ),
		array(
            'name'         => esc_html__('Visual Composer', "nt-advent"),
            'slug'         => 'js_composer_5_0_1',
            'source'       => esc_url('http://ninetheme.com/themes/plugins/js_composer_5_0_1.zip'),
            'required'     => true,
            'version'      => '5.0.1',
		),
		array(
            'name'         => esc_html__('Revolution Slider', "nt-advent"),
            'slug'         => 'revslider_5_3_0_2',
            'source'       => esc_url('http://ninetheme.com/themes/plugins/revslider_5_3_0_2.zip'),
            'required'     => false,
            'version'      => '5.3.0.2',
        ),
		array(
            'name'         => esc_html__('Portfolio Post Type', "nt-advent"),
            'slug'         => 'portfolio-post-type',
        ),
		array(
            'name'         => esc_html__('Price Table Type', 'nt-advent'),
            'slug'         => 'price-table-type',
			'source'       => esc_url( 'http://ninetheme.com/themes/plugins/price-table-type.zip' ),
            'required'     => false,
            'version'      => '0.9.1',
        ),
		array(
            'name'         => esc_html__('NT Advent Shortcodes', "nt-advent"),
            'slug'         => 'nt-advent-shortcodes',
            'source'       => get_template_directory() . '/plugins/nt-advent-shortcodes.zip',
            'required'     => true,
            'version'      => '1.1',
        ),
    );

	$config = array(
		'id'           => 'tgmpa',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => true,
		'message'      => '',
	);

	tgmpa( $plugins, $config );
}



/*************************************************
## Register Menu
*************************************************/

class Nt_Advent_Wp_Bootstrap_Navwalker extends Walker_Nav_Menu {
	/**
	 * @see Walker::start_lvl()
	 * @since 3.0.0
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul role=\"menu\" class=\"sub-menu dropdown-menu\">\n";
	}

	/**
	 * @see Walker::start_el()
	 * @since 3.0.0
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		/**
		 * Dividers, Headers or Disabled
		 */
		if ( strcasecmp( $item->attr_title, 'divider' ) == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="divider item-has-children">';
		} else if ( strcasecmp( $item->title, 'divider') == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="divider item-has-children">';
		} else if ( strcasecmp( $item->attr_title, 'dropdown-header item-has-children') == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="dropdown-header item-has-children">' . esc_attr( $item->title );
		} else if ( strcasecmp($item->attr_title, 'disabled' ) == 0 ) {
			$output .= $indent . '<li role="presentation" class="disabled"><a href="#">' . esc_attr( $item->title ) . '</a>';
		} else {

			$class_names = $value = '';

			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$classes[] = 'menu-item-' . $item->ID;

			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );

			if ( $args->has_children )
				$class_names .= 'sub item-has-children';

			if ( in_array( 'current-menu-item', $classes ) )
				$class_names .= ' active';

			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
			$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

			$output .= $indent . '<li' . $id . $value . $class_names .'>';

			$atts = array();
			$atts['title']  = ! empty( $item->title )	? $item->title	: '';
			$atts['target'] = ! empty( $item->target )	? $item->target	: '';
			$atts['rel']    = ! empty( $item->xfn )		? $item->xfn	: '';

			// If item has_children add atts to a.
			if ( $args->has_children && $depth === 0 ) {
				$atts['href']   		= $item->url;
				$atts['data-toggle']	= 'dropdown';
				$atts['class']			= 'dropdown-toggle';
			} else {
				$atts['href'] = ! empty( $item->url ) ? $item->url : '';
			}

			$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

			$attributes = '';
			foreach ( $atts as $attr => $value ) {
				if ( ! empty( $value ) ) {
					$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
					$attributes .= ' ' . $attr . '="' . $value . '"';
				}
			}

			$item_output = $args->before;

			/*
			 * Glyphicons
			 **/
			if ( ! empty( $item->attr_title ) )
				$item_output .= '<a'. $attributes .'><span class=" ' . esc_attr( $item->attr_title ) . '"></span>&nbsp;';
			else
				$item_output .= '<a'. $attributes .'>';

			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= ( $args->has_children && 0 === $depth ) ? ' <span class="caret"></span></a>' : '</a>';
			$item_output .= $args->after;

			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
	}

	/**
	 * Traverse elements to create list from elements.
	 **/
	public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
        if ( ! $element )
            return;

        $id_field = $this->db_fields['id'];

        // Display this element.
        if ( is_object( $args[0] ) )
           $args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );

        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

	/**
	 * Menu Fallback
	 **/
	public static function fallback( $args ) {
		if ( current_user_can( 'manage_options' ) ) {

			extract( $args );

			$fb_output = null;

			if ( $container ) {
				$fb_output = '<' . $container;

				if ( $container_id )
					$fb_output .= ' id="' . $container_id . '"';

				if ( $container_class )
					$fb_output .= ' class="' . $container_class . '"';

				$fb_output .= '>';
			}

			$fb_output .= '<ul';

			if ( $menu_id )
				$fb_output .= ' id="' . $menu_id . '"';

			if ( $menu_class )
				$fb_output .= ' class="' . $menu_class . '"';

			$fb_output .= '>';
			$fb_output .= '<li><a href="' . admin_url( 'nav-menus.php' ) . '">Add a menu</a></li>';
			$fb_output .= '</ul>';

			if ( $container )
				$fb_output .= '</' . $container . '>';

			echo ($fb_output);
		}
	}
}

/*************************************************
## nt_advent Comment
*************************************************/

	if ( ! function_exists( 'nt_advent_comment' ) ) :
	function nt_advent_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
	case 'pingback' :
	case 'trackback' :
	?>

   <article class="post pingback">
   <p><?php esc_html_e( 'Pingback:', 'nt-advent' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( esc_html__( '(Edit)', 'nt-advent' ), ' ' ); ?></p>
	  <?php
		break;
	   default :
	  ?>
        <div class="comments">
            <ul>
				<li class="comment">
					<span class="who">
						<?php echo get_avatar( $comment, 80 ); ?>
					</span>
					<div class="who-comment">
					<p class="name"><?php comment_author(); ?></p>
					<?php comment_text(); ?>
                    <?php edit_comment_link( esc_html__( 'Edit', 'nt-advent' ), ' ' ); ?>
                    <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                    <span class="meta-data"><time class="comment-date" pubdate datetime="<?php comment_time( 'c' ); ?>"><?php comment_date(); ?> <?php esc_html_e( 'at', 'nt-advent' ); ?> <?php comment_time(); ?></time></span>
					<?php if ( $comment->comment_approved == '0' ) : ?>
						<em><?php esc_html_e( 'Your comment is awaiting moderation.', 'nt-advent' ); ?></em>
					<?php endif; ?>
					</div>
				</li>
            </ul>
		</div>
	<?php
	break;
	endswitch;
	}
	endif;