<?php
if (!defined('ABSPATH')) {
  exit;
}
function liovettemoto_support()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  add_theme_support('menus');
  register_nav_menu('header', 'En tête du menu');
  register_nav_menu('footer', 'Pied de page');
  add_image_size('card-header', 350, 215, true);
}

function liovettemoto_register_assets()
{
  wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
  wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', [], false, true); //Le dernier argument est pour dire si le script doit être chargé dans le footer ou non
  wp_enqueue_style('bootstrap');
  wp_enqueue_script('bootstrap');
  wp_enqueue_style('liovettemoto', get_stylesheet_uri());
  wp_enqueue_style(
    'google-font-oleo',
    'https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap',
    [],
    null
);
}

// Pour les li dans le header
function liovettemoto_menu_class(array $classes): array
{
  $classes[] = 'nav-item';
  return $classes;
}
// Pour les liens dans le header
function liovettemoto_menu_link_class(array $atts): array
{
  $atts['class'] = 'nav-link';
  return $atts;
}

add_action('after_setup_theme', 'liovettemoto_support'); 
add_action('wp_enqueue_scripts', 'liovettemoto_register_assets');
add_filter('nav_menu_css_class', 'liovettemoto_menu_class'); 
add_filter('nav_menu_link_attributes', 'liovettemoto_menu_link_class');
