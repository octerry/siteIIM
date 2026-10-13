<?php

function mon_theme_fse_assets()
{
    wp_enqueue_style('style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'mon_theme_fse_assets');

// Permettre les images d'être de meilleure qualité
add_filter('jpeg_quality', function($arg){ return 100; });