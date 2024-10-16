<?php
// Include the WordPress environment
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Load Timber and get the global context
$context = Timber::get_context();

// Fetch the menu and pass it to the context
$context['menu'] = new Timber\Menu('headerMenuLocation');





if (is_front_page()) {
  // Load homepage-specific template
  $templates = array('views/front.twig');
  // Fetch the homepage content
  $context['post'] = new Timber\Post();
} elseif (is_page('about')) {
  // Load the about page template if the slug is 'about'
  $templates = array('views/about.twig');
  // Fetch the about page content
  $context['post'] = new Timber\Post();
} elseif (is_page('gallery')) {
  // Load the gallery page template if the slug is 'gallery'
  $templates = array('views/gallery.twig');
  // Fetch the gallery page content
  $context['post'] = new Timber\Post();
} else {
  // For other pages, use the generic page template
  $templates = array('views/page.twig');
  // Fetch the current post/page content
  $context['post'] = new Timber\Post();
}


// Fetch posts using Timber\PostQuery and pass them to the context
// $context['posts'] = new Timber\PostQuery(array(
//     'post_type' => 'post',    
//     'posts_per_page' => 10,   
// ));

// Render the template with the context
Timber::render($templates, $context);
