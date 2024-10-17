<?php
// Load Timber and get the global context
$context = Timber::get_context();
$context['home_url'] = home_url();

// Get posts, optionally specify query arguments.

// Fetch the menu and pass it to the context
$context['header_menu'] = new Timber\Menu('headerMenuLocation');
$context['footer_menu_one'] = new Timber\Menu('footerLocationOne');
$context['footer_menu_two'] = new Timber\Menu('footerLocationTwo');


// Get the background image from ACF
$background_image = get_field('background_image');

if ($background_image) {
  $context['background_image'] = $background_image['url']; // Get the URL of the image
} else {
  // Set a default background image if no custom field is provided
  $context['background_image'] = get_template_directory_uri() . '/assets/images/default-hero.jpg';
}

// main-hero
if (function_exists('get_field')) {
  $context['title'] = get_field('hero_title') ?: get_the_title();
  $context['description'] = get_field('hero_description');
  $context['button_text'] = get_field('hero_button_text');
  $context['button_url'] = get_field('hero_button_url');
  
  $hero_image = get_field('hero_image');
  if ($hero_image) {
    $context['hero_image'] = $hero_image['url'];
  }
}



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



// Render the template with the context
Timber::render($templates, $context);
