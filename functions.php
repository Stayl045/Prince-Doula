<?php


function prince_doula_assets()
{
  wp_enqueue_style('output', get_template_directory_uri() . '/src/output.css');
}

add_action('wp_enqueue_scripts', 'prince_doula_assets');

// Menus
function doula_features()
{
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
  register_nav_menu('footerLocationOne', 'Footer Menu Location One');
  register_nav_menu('footerLocationTwo', 'Footer Menu Location Two');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'doula_features');

?>
