<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="bg-gray-800 text-white">
        <div class="container mx-auto flex justify-between items-center p-4">
            <h1 class="text-2xl font-bold">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-teal-400">Prince Doula</a>
            </h1>
            <nav>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'headerMenuLocation',
                    // 'container' => false,
                    'items_wrap' => '<ul class="flex space-x-4">%3$s</ul>',
                    'fallback_cb' => false,
                    'link_class' => 'hover:text-teal-400'
                ));
                ?>
            </nav>
        </div>
    </header>
