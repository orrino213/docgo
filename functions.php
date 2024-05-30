<?php

// Enqueue styles and scripts
function your_theme_enqueue_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'your-theme-style', get_stylesheet_uri() .'/style.css' );

    // // Enqueue a custom script (example)
    // wp_enqueue_script( 'your-theme-script', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'your_theme_enqueue_scripts' );

?>