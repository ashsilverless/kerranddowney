<?php
/**
 * SLMaster functions and definitions
 *
 * @package SLMaster
 */

if ( ! function_exists( 'slmaster_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function slmaster_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on SLMaster, use a find and replace
		 * to change 'slmaster' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'slmaster', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'slmaster' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'slmaster_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'slmaster_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function slmaster_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'slmaster_content_width', 640 );
}
add_action( 'after_setup_theme', 'slmaster_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// Add scripts to wp_head()
function slmaster_theme_head_script() {?> 

<?php }
add_action( 'wp_head', 'slmaster_theme_head_script' ); 
 
function slmaster_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'slmaster' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'slmaster' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'slmaster_widgets_init' );

/**
 * Enqueue scripts and styles. Another just for the dev branch.
 */ 
function slmaster_scripts() {
	wp_enqueue_style( 'slmaster-style', get_stylesheet_uri() );
	
	//wp_enqueue_style( 'slmaster-theme-style', get_template_directory_uri() . '/main.css', array() );
	
	wp_enqueue_script( 'slmaster-bootstrap-jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', true );
	
	wp_enqueue_script( 'slmaster-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', true );
	
	wp_enqueue_script( 'slmaster-bootstrap-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', true );
	
	wp_enqueue_script( 'slmaster-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'slmaster-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'slmaster_scripts' );

//** Add Owl Carousel Assets

function sl_owl_assets() {
	
	// load owl css
	wp_enqueue_style( 'sw-owl-css', get_template_directory_uri() . '/owl/owl.carousel.min.css' );
	wp_enqueue_style( 'sw-owl-theme-css', get_template_directory_uri() . '/owl/owl.theme.default.css' );	
	//load owl js
	wp_enqueue_script( 'sw-old-js', get_template_directory_uri() . '/owl/owl.carousel.min.js', array(), true );
}
add_action( 'wp_enqueue_scripts', 'sl_owl_assets' );

//** Add Core JS

function sl_core_js() {
	
	wp_enqueue_script( 'sl-core-js', get_template_directory_uri() . '/js/core.js', array(), true );
}
add_action( 'wp_enqueue_scripts', 'sl_core_js' );

//** Add Lightroom JS

function lightroom_js() {
	
	wp_enqueue_script( 'lightroom-js', get_template_directory_uri() . '/js/ekko-lightbox.js', array(), true );
}
add_action( 'wp_enqueue_scripts', 'lightroom_js' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function sl_custom_new_menu() {
  register_nav_menus(
    array(
		'k&d-menu' => __( 'Main Menu' ),
		'k&d-planning-menu' => __( 'Planning Menu' ),
		'k&d-about-menu' => __( 'About Menu' ),
		'k&d-gallery-menu' => __( 'Gallery Menu' ),
		'k&d-safari-menu' => __( 'Safari Menu' ),
    )
  );
}
add_action( 'init', 'sl_custom_new_menu' );

/**
 * ACF Options Pages.
 */
 
 if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Ker & Downey Settings',
		'menu_title'	=> 'Ker & Downey Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Camp Navigator',
		'menu_title'	=> 'Camp Navigator',
		'menu_slug' 	=> 'camp-navigator',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'What We Do Best',
		'menu_title'	=> 'What We Do Best',
		'menu_slug' 	=> 'what-we-do-best',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Contact Details',
		'menu_title'	=> 'Contact Details',
		'menu_slug' 	=> 'contact-details',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}
 
/**
 * Remove Default Menu Items.
 */
function remove_menus(){

  remove_menu_page( 'edit-comments.php' );          //Comments
  
}
add_action( 'admin_menu', 'remove_menus' );

/**
 * Only User ID 2 to view ACF Menu
 */

function my_acf_show_admin( $show ) { 

if ( get_current_user_id() == "2" ){
return true; // show it
}
else {
return false; // hide it
}

}

// Add SVG support to media library

function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads'); 
 
function prefix_category_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'prefix_category_title' );
 
