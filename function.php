<?php

function bourbon_scripts() {

    // load main stylesheet.
    wp_enqueue_style( 'bbc-style', BBC_THEME_URL . 'assets/css/style.min.css' );
    wp_enqueue_style( 'owlcarousel', BBC_THEME_URL . 'assets/owl.carousel/assets/owl.carousel.css' );


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

    wp_enqueue_script ('slimscroll', BBC_THEME_URL . 'assets/js/fullPage/vendors/jquery.slimscroll.min.js', array('jquery'), false, true);
    wp_enqueue_script ('fullPage', BBC_THEME_URL . 'assets/js/fullPage/jquery.fullPage.js', array('jquery', 'slimscroll'), false, true);


    wp_enqueue_script ('modernizr', BBC_THEME_URL . 'assets/js/FullscreenOverlayStyles/js/modernizr.custom.js', array(), false, true);
    wp_enqueue_script ('classie', BBC_THEME_URL . 'assets/js/FullscreenOverlayStyles/js/classie.js', array(), false, true);

    wp_enqueue_script ('main', BBC_THEME_URL . '/assets/js/main.js', array('jquery'), '1.0', true);

}
add_action( 'wp_enqueue_scripts', 'bourbon_scripts' );