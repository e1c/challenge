<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */


 /**
 * Enqueue a script with jQuery as a dependency.
 */
function wpdocs_scripts_method() {
    wp_enqueue_script( 'custom-scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_scripts_method' );