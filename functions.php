<?php


if ( ! function_exists( 'erinkahnTheme_setup' ) ) :

function erinkahnTheme_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'erinkahnTheme', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'erinkahnTheme' ),
        'secondary' => __('Secondary Menu', 'erinkahnTheme' )
    ) );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif; // erinkahnTheme_setup
add_action( 'after_setup_theme', 'erinkahnTheme_setup' );

?>