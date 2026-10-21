<?php

function mon_theme_fse_assets()
{
    wp_enqueue_style('mon-theme-fse-style', get_stylesheet_uri());
    wp_enqueue_style('mon-theme-fse-custom', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'mon_theme_fse_assets');

// Permettre les images d'être de meilleure qualité
add_filter('jpeg_quality', function($arg){ return 100; });