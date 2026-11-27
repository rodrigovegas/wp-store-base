<?php
/**
 * Base Child theme: loads the parent (Storefront) and child stylesheets.
 */
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'storefront-parent',
        get_template_directory_uri() . '/style.css'
    );
    wp_enqueue_style(
        'base-child',
        get_stylesheet_uri(),
        array( 'storefront-parent' ),
        wp_get_theme()->get( 'Version' )
    );
} );