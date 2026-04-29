<?php

add_filter('show_admin_bar', '__return_false');

// enqueue scripts and styles
function theme_scripts()
{
    wp_enqueue_script(
        'theme-nav',
        get_template_directory_uri() . '/js/nav.js',
        [],   // dependencies (e.g. ['jquery'])
        null, // version (null = no cache busting)
        true  // load in footer
    );

    wp_enqueue_script(
        'theme-lightbox',
        get_template_directory_uri() . '/js/lightbox.js',
        [],   // dependencies (e.g. ['jquery'])
        null, // version (null = no cache busting)
        true  // load in footer
    );
}
add_action('wp_enqueue_scripts', 'theme_scripts');
