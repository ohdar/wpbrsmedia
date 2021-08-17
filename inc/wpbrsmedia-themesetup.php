<?php

/**
 * WPBRSMEDIA Theme Setup.
 */

function wpbrsmedia_theme_setup()
{
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('home-featured', 580, 300, array('center', 'center'));
    add_image_size('single-post', 580, 272, array('center', 'center'));
    add_image_size('portfolio-thumb', 374, 260, array('center', 'center'));
    add_image_size('services-thumb', 374, 260, array('center', 'center'));
    add_image_size('angelsoft-thumb', 374, 260, array('center', 'center'));
    
    add_theme_support('automatic-feed-links');
    add_theme_support('woocommerce');

    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'wpbrsmedia')
    ));

    register_nav_menus(array(
        'secondary'   => __('Secondary Menu', 'wpbrsmedia')
    ));
};

add_action('after_setup_theme', 'wpbrsmedia_theme_setup');
