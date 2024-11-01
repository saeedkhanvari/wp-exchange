<?php

function exchange_files()
{
    wp_enqueue_style('exchange_main_styles', get_stylesheet_uri());
}
;
function mytheme_enqueue_styles()
{
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

add_action('wp_enqueue_scripts', 'exchange_files');
?>