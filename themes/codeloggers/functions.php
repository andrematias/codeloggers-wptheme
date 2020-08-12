<?php


// Define the version as a constant so we can easily replace it throughout the theme
define( 'CODELOGGERS_VERSION', 1.0 );
add_theme_support( 'title-tag' );
/*-----------------------------------------------------------------------------------*/
/* Add Rss to Head
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );

/*-----------------------------------------------------------------------------------*/
/* Translations
/*-----------------------------------------------------------------------------------*/
function codeloggers_load_theme_textdomain() {
	load_theme_textdomain( 'codeloggers', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'codeloggers_load_theme_textdomain' );

/*-----------------------------------------------------------------------------------*/
/* Add Content width
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 900;

/*-----------------------------------------------------------------------------------*/
/* register main menu
/*-----------------------------------------------------------------------------------*/
register_nav_menus( 
	array(
		'primary'	=>	__( 'Primary Menu', 'codeloggers' ),
	)
);

/*-----------------------------------------------------------------------------------*/
/* Enque Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function codelogger_scripts()  { 

	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );
}
add_action( 'wp_enqueue_scripts', 'codelogger_scripts' );


/*-----------------------------------------------------------------------------------*/
/* Add a pingback url to header
/*-----------------------------------------------------------------------------------*/

function less_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'less_pingback_header' );

/*-----------------------------------------------------------------------------------*/
/* Custom to Gutenberg Editor
/*-----------------------------------------------------------------------------------*/

add_theme_support( 'editor-styles');
function codeloggers_add_editor_styles() {
	add_editor_style('style-editor.css' );
}
add_action( 'admin_init', 'codeloggers_add_editor_styles' );

/*-----------------------------------------------------------------------------------*/
/* Add support to featured image on posts
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );

/*-----------------------------------------------------------------------------------*/
/* Add custom menu to mobile version and to social medias
/*-----------------------------------------------------------------------------------*/
function codeloggers_mobile_and_social_menu() {
  register_nav_menus(
		array(
      'mobile-menu' => __( 'Mobile Menu', 'codeloggers' ),
      'social-menu' => __( 'Social Menu', 'codeloggers' )
    )
	);
}
add_action( 'init', 'codeloggers_mobile_and_social_menu' );