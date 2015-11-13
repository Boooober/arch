<?php

define( 'ARC_THEME_URL', get_template_directory_uri() . '/' );
define( 'ARC_THEME_DIR', get_template_directory() . '/' );
define( 'TEXTDOMAIN', 'archdesign');


if ( ! function_exists( 'archdesign_setup' ) ) :
    function archdesign_setup() {

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on twentyfifteen, use a find and replace
         * to change 'twentyfifteen' to the name of your theme in all the template files
         */
        load_theme_textdomain( 'TEXTDOMAIN', get_template_directory() . '/languages' );


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
         * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support( 'post-thumbnails' );

        set_post_thumbnail_size( 200, 200, true );

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
            'header' => __( 'Header Menu',      'TEXTDOMAIN' ),
            'langs'  => __( 'Language menu', 'TEXTDOMAIN' ),
        ) );

    }
endif;
add_action( 'after_setup_theme', 'archdesign_setup' );




function archdesign_javascript_detection() {
    echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'archdesign_javascript_detection', 0 );




function archdesign_scripts() {

    // load main stylesheet.
    wp_enqueue_style( 'arc-style', ARC_THEME_URL . 'assets/css/style.min.css' );


    // clear head
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
    add_filter('the_generator', '__return_false');
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('set_comment_cookies', 'wp_set_comment_cookies');

    // load scripts
    wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), false, true );



    wp_enqueue_script ('slimscroll', ARC_THEME_URL . 'assets/js/fullPage/vendors/jquery.slimscroll.min.js', array('jquery'), false, true);
    wp_enqueue_script ('fullPage', ARC_THEME_URL . 'assets/js/fullPage/jquery.fullPage.js', array('jquery', 'slimscroll'), false, true);


    wp_enqueue_script ('modernizr', ARC_THEME_URL . 'assets/js/FullscreenOverlay/js/modernizr.custom.js', array(), false, true);
    wp_enqueue_script ('classie', ARC_THEME_URL . 'assets/js/FullscreenOverlay/js/classie.js', array(), false, true);


    wp_enqueue_script ('main', ARC_THEME_URL . '/assets/js/main.js', array('jquery'), '1.0', true);

}
add_action( 'wp_enqueue_scripts', 'archdesign_scripts' );