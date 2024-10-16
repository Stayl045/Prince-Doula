<!-- Styling & JS -->
<?php 




function prince_doula_assets() {
  wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/src/output.css');
}

add_action('wp_enqueue_scripts', 'prince_doula_assets');

// Menus
function doula_features() {
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
  register_nav_menu('footerLocationOne', 'Footer Menu Location');
  register_nav_menu('footerLocationTwo', 'Footer Menu Location');
}

add_action('after_setup_theme', 'doula_features');

// Addding templates support
add_theme_support('post-thumbnails');








