<?php

/*
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/waypoints.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/venobox.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCe2q1gFSd75jKUnTDPq0nZWaMlEu6vL30"></script>
<script src="js/google-map.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>

*/

// Enqueue styles and scripts
function your_theme_enqueue_scripts() {
    // Enqueue main stylesheets
    wp_enqueue_style('template-style-1', get_template_directory_uri() . '/consulpro html template/consulpro-v2.3/css/bootstrap.min.css');
    wp_enqueue_style('template-style-3', get_template_directory_uri() . '/consulpro html template/consulpro-v2.3/css/flaticon.css');
    wp_enqueue_style('template-style-4', get_template_directory_uri() . '/consulpro html template/consulpro-v2.3/css/owl.carousel.min.css');
    wp_enqueue_style('template-style-7', get_template_directory_uri() . '/consulpro html template/consulpro-v2.3/css/style.css');
    wp_enqueue_style( 'your-theme-style', get_template_directory_uri() .'/style.css' );

    // // Enqueue a custom scripts
    wp_enqueue_script( 'your-theme-script-1', get_template_directory_uri() . '/consulpro html template/consulpro-v2.3/js/jquery-3.6.0.min.js');
    wp_enqueue_script( 'your-theme-script-2', get_template_directory_uri() . '/consulpro html template/consulpro-v2.3/js/bootstrap.bundle.min.js');
    wp_enqueue_script( 'your-theme-script-3', get_template_directory_uri() . '/consulpro html template/consulpro-v2.3/js/jquery.scrollUp.min.js');
    wp_enqueue_script( 'your-theme-script-4', get_template_directory_uri() . '/consulpro html template/consulpro-v2.3/js/owl.carousel.min.js');
}
add_action( 'wp_enqueue_scripts', 'your_theme_enqueue_scripts' );

?>