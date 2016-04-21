<?php
/**
 * _tk functions and definitions
 *
 * @package _tk
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 750; /* pixels */

if ( ! function_exists( '_tk_setup' ) ) :
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function _tk_setup() {
	global $cap, $content_width;

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	/**
	 * Add default posts and comments RSS feed links to head
	*/
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	*/
	add_theme_support( 'post-thumbnails' );

	/**
	 * Enable support for Post Formats
	*/
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	*/
	add_theme_support( 'custom-background', apply_filters( '_tk_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on _tk, use a find and replace
	 * to change '_tk' to the name of your theme in all the template files
	*/
	load_theme_textdomain( '_tk', get_template_directory() . '/languages' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	*/
	register_nav_menus( array(
		'front-page'  => __( 'Front page menu', '_tk' ),
	) );
	register_nav_menus( array(
		'profile-page'  => __( 'Profile menu', '_tk' ),
	) );

}
endif; // _tk_setup
add_action( 'after_setup_theme', '_tk_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function _tk_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_tk' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', '_tk_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function _tk_scripts() {
	

	// Import the necessary TK Bootstrap WP CSS additions
	wp_enqueue_style( '_tk-bootstrap-wp', get_template_directory_uri() . '/includes/css/bootstrap-wp.css' );

  
	// load bootstrap css
	wp_enqueue_style( '_tk-bootstrap', get_template_directory_uri() . '/includes/resources/bootstrap/css/bootstrap.css' );

	// load Font Awesome css
	wp_enqueue_style( '_tk-font-awesome', get_template_directory_uri() . '/includes/css/font-awesome.min.css', false, '4.1.0' );
    //load custom content filter portfolio style
  
    
  
	// load _tk styles
	wp_enqueue_style( '_tk-style', get_stylesheet_uri() );



	// load bootstrap js
	wp_enqueue_script('_tk-bootstrapjs', get_template_directory_uri().'/includes/resources/bootstrap/js/bootstrap.js', array('jquery') );

	// load bootstrap wp js
	wp_enqueue_script( '_tk-bootstrapwp', get_template_directory_uri() . '/includes/js/bootstrap-wp.js', array('jquery') );

	wp_enqueue_script( '_tk-skip-link-focus-fix', get_template_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );
    
    //custom-shuffle-portfolio-modernizr js
	wp_enqueue_script( "custom-shuffle-portfolio-modernizr", WP_PLUGIN_URL."/custom-shuffle-portfolio/dist/modernizr.custom.min.js",
array("jquery"),'',true);

	wp_enqueue_script( "custom-shuffle-portfolio-throttle", WP_PLUGIN_URL."/custom-shuffle-portfolio/dist/jquery-throttle-debounce-master/jquery.ba-throttle-debounce.min.js",
array("jquery","custom-shuffle-portfolio-modernizr"),'',true);

wp_enqueue_script( "custom-shuffle-portfolio-shuffle", WP_PLUGIN_URL."/custom-shuffle-portfolio/dist/jquery.shuffle.min.js",
array("jquery","custom-shuffle-portfolio-modernizr","custom-shuffle-portfolio-throttle"),'',true);


    //jcaraousel master js
	wp_enqueue_script( "jquery.jcarousel", WP_PLUGIN_URL."/jcarousel-master/dist/jquery.jcarousel.js",
array("jquery"),1);

	wp_enqueue_script( '_tk-jcarousel', get_template_directory_uri() . '/includes/js/jcarousel.js', array(), '', true );
    
   // wp_enqueue_script( '_tk-custom', get_template_directory_uri() . '/includes/js/custom.js', array(), '', true );

    wp_localize_script( '_tk-jcarousel', 'ajax_object',
            array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
    
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( '_tk-keyboard-image-navigation', get_template_directory_uri() . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

}
add_action( 'wp_enqueue_scripts', '_tk_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/includes/bootstrap-wp-navwalker.php';


/*custom php funtion to process user description popup questions*/

function user_desc(){


$data=$_POST["data"];
parse_str($data); 
	
global $wpdb;


$user_id = get_current_user_id();
/*$wpdb->insert('usermeta',array(
'user_id'=>$user_id,
'meta_key'=>'about',
'meta_value'=>$about
),array(
'%d',
'%s',
'%s'

));*/

echo $id_user_desc;

die();


}
add_action('wp_ajax_user_desc', 'user_desc');
add_action('wp_ajax_nopriv_user_desc', 'user_desc');

/*custom php funtion to process user description popup questions*/

function is_freelancer(){


$data=$_POST["data"];
parse_str($data); 
	
global $wpdb;

$about = "kaju";
$user_id = get_current_user_id();
/*$wpdb->insert('usermeta',array(
'user_id'=>$user_id,
'meta_key'=>'about',
'meta_value'=>$about
),array(
'%d',
'%s',
'%s'

));*/

echo $id_is_freelancer;

die();


}
add_action('wp_ajax_is_freelancer', 'is_freelancer');
add_action('wp_ajax_nopriv_is_freelancer', 'is_freelancer');


function freelancer_related(){


$data=$_POST["data"];
parse_str($data); 
	
global $wpdb;


$user_id = get_current_user_id();
/*$wpdb->insert('usermeta',array(
'user_id'=>$user_id,
'meta_key'=>'about',
'meta_value'=>$about
),array(
'%d',
'%s',
'%s'

));*/
if(isset($freelancer_related_last))
{
echo json_encode(array($id_freelancer_related, $freelancer_related_last));
}
else
{
	echo json_encode(array($id_freelancer_related));
}

die();


}
add_action('wp_ajax_freelancer_related', 'freelancer_related');
add_action('wp_ajax_nopriv_freelancer_related', 'freelancer_related');

/*custom php funtion to process user description popup questions*/


/*custom php funtion to process user description popup questions*/

function is_content_creator(){


$data=$_POST["data"];
parse_str($data); 
	
global $wpdb;

$about = "kaju";
$user_id = get_current_user_id();
/*$wpdb->insert('usermeta',array(
'user_id'=>$user_id,
'meta_key'=>'about',
'meta_value'=>$about
),array(
'%d',
'%s',
'%s'

));*/

echo $id_is_content_creator;

die();


}
add_action('wp_ajax_is_content_creator', 'is_content_creator');
add_action('wp_ajax_nopriv_is_content_creator', 'is_content_creator');

/*custom php funtion to process user description popup questions*/

function is_employer(){


$data=$_POST["data"];
parse_str($data); 
	
global $wpdb;

$about = "kaju";
$user_id = get_current_user_id();
/*$wpdb->insert('usermeta',array(
'user_id'=>$user_id,
'meta_key'=>'about',
'meta_value'=>$about
),array(
'%d',
'%s',
'%s'

));*/

echo $id_is_employer;

die();


}
add_action('wp_ajax_is_employer', 'is_employer');
add_action('wp_ajax_nopriv_is_employer', 'is_employer');









