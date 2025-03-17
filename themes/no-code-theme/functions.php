<?php
// Register styles and scripts
function luna_enqueue_styles() {
    wp_enqueue_style(
        'luna-style', 
        get_stylesheet_uri(), 
        array(), 
        filemtime(get_template_directory() . '/style.css')
    );
}

add_action('wp_enqueue_scripts', 'luna_enqueue_styles');
