<?php

    // ---------------------------------------------------------------------------------------------
    // theme setup ---------------------------------------------------------------------------------
    // ---------------------------------------------------------------------------------------------
    if ( ! function_exists( 'erinkahnTheme_setup' ) ) :

    function erinkahnTheme_setup() {
        load_theme_textdomain( 'erinkahnTheme', get_template_directory() . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
    
        /**
         * Add support for two custom navigation menus.
         */
        register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'erinkahnTheme' ),
            'secondary' => __('Secondary Menu', 'erinkahnTheme' )
        ) );
    
        add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    }
    endif; // erinkahnTheme_setup
    add_action( 'after_setup_theme', 'erinkahnTheme_setup' );




    // -------------------------------------------------------------------------------------------------
    // add .hvr-underline-from-center class to each nav a link to animate ------------------------------
    // -------------------------------------------------------------------------------------------------
    function add_menuclass($ulclass) {
        return preg_replace('/<a/', '<a class="hvr-underline-from-center"', $ulclass, -1);
        }
    add_filter('wp_nav_menu','add_menuclass');






?>