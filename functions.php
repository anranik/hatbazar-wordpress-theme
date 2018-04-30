<?php
/**
 * Hat Bazar functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hat_Bazar
 */



if ( ! function_exists( 'hatbazar_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hatbazar_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Hat Bazar, use a find and replace
		 * to change 'hatbazar' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hatbazar', get_template_directory() . '/languages' );

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
//		register_nav_menus( array(
//			'menu-1' => esc_html__( 'Primary', 'hatbazar' ),
//		) );

        register_nav_menus(
            array(
                "menu-primary" => __('Primary menu','hatbazar'),
                "menu-footer" => __('Footer menu','hatbazar'),
            )
        );

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
		add_theme_support( 'custom-background', apply_filters( 'hatbazar_custom_background_args', array(
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
add_action( 'after_setup_theme', 'hatbazar_setup' );


/**
 * add bootstrap nav walker
 */
require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
/**
 * hatbazar customizer
 */




/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hatbazar_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'hatbazar_content_width', 640 );
}
add_action( 'after_setup_theme', 'hatbazar_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hatbazar_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hatbazar' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'hatbazar' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hatbazar_widgets_init' );


/*footer widget area*/
$args = array(
    'name'          => __( 'Footer widget area', 'hatbazar' ),
    'id'            => 'footer-sidebar',    // ID should be LOWERCASE  ! ! !
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="col-md-3 col-lg-3 widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>' );
register_sidebar( $args );

/**
 * register nav menus
 */
//register_nav_menus


/**
 * Enqueue scripts and styles.
 */
function hatbazar_scripts() {
	wp_enqueue_style( 'hatbazar-style', get_stylesheet_uri() );
	wp_enqueue_style( 'hatbazar-bootstrap', get_template_directory_uri()."/css/bootstrap.min.css" );
	wp_enqueue_style( 'hatbazar-fontawesome', get_template_directory_uri()."/css/font-awesome.min.css" );
    wp_enqueue_style( 'hatbazar-custom', get_template_directory_uri()."/css/custom.css" );

    //jquery
    wp_enqueue_script( 'hatbazar-jquery', get_template_directory_uri().'/js/jquery-3.1.1.min.js');

    //bootstrap
   wp_enqueue_script('hatbazar-popper-script', get_template_directory_uri().'/js/popper.min.js');
    wp_enqueue_script('hatbazar-boot-script', get_template_directory_uri().'/js/bootstrap.min.js');


   // wp_enqueue_script( 'hatbazar-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'hatbazar-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hatbazar_scripts' );

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
//remove defualts
function hatbazar_customize_deregister( $wp_customize ) {
    $wp_customize->remove_section('colors');
    $wp_customize->remove_section('header_image');
    $wp_customize->remove_section('background_image');
}
add_action( 'customize_register', 'hatbazar_customize_deregister' );

require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
