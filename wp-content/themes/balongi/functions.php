<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

function balongi_scripts()
{
    wp_enqueue_style('balongi-style', get_stylesheet_uri());
    wp_enqueue_style('balongi-lightgallery', get_template_directory_uri(). '/css/lightgallery.css');

    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

    wp_enqueue_script('balongi-jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), '20151215', true);

    wp_enqueue_script('balongi-ligthgallery', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/js/lightgallery-all.min.js', array(), '20151215', true);

    wp_enqueue_script('balongi-ligthgalleryThumbnail', 'https://f.vimeocdn.com/js/froogaloop2.min.js', array(), '20151215', true);

    wp_enqueue_script('balongi-ligthgalleryOption', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js', array(), '20151215', true);
    wp_enqueue_script('balongi-vide', get_template_directory_uri() . '/js/jquery.vide.js', array(), '20151215', true);
    
    wp_enqueue_script('balongi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

    wp_enqueue_script('balongi-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true);

    wp_enqueue_script('balongi-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);
}
add_action('wp_enqueue_scripts', 'balongi_scripts');
