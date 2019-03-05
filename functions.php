<?php

if ( ! function_exists( 'sead_setup' ) ) {
/**
 * Set up theme defaults and registers support for various WordPress feaures.
 */
function sead_setup() {
	load_theme_textdomain( 'sead', get_theme_file_uri( 'languages' ) );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );
	add_theme_support( 'custom-background', apply_filters( 'sead_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'sead' ),
	) );
}

}
add_action( 'after_setup_theme', 'sead_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sead_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sead_content_width', 960 );
}
add_action( 'after_setup_theme', 'sead_content_width', 0 );

/**
 * Register widget area.
 */
function sead_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sead' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'sead_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sead_scripts() {

	wp_enqueue_style( 'sead-style', get_theme_file_uri( 'assets/css/main.css' ) );

	wp_enqueue_script( 'sead-script', get_theme_file_uri( 'assets/js/bundle.js' ), array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sead_scripts' );
