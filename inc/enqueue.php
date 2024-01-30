<?php
/**
 * Template file: inc/enqueue.php
 * Settings that came with the original Boiler point
 *
 * @package Child theme
 * @since v1
 */

/**
 * Loading All CSS Stylesheets and Javascript Files.
 *
 * @since v1.0
 */
// Enqueue parent theme style
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');
// Enqueue parent theme styles and scripts
function enqueue_parent_styles() {
    // Enqueue parent theme style
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
