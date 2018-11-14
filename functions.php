<?php
function featuredlite_custom_css() {
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0' );
}
add_action('wp_enqueue_scripts', 'featuredlite_custom_css');
?>