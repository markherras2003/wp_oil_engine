<?php

define('JU_DEV_MODE', true);

include( get_theme_file_path( '/includes/front/enqueue.php' ) ); // CSS
include( get_theme_file_path( '/includes/setup.php' ) );    // Menu // TITLE // CUSTOM LOGO // POST THUMBNAIL
include( get_theme_file_path('/includes/theme-customizer.php')); // Theme Customizer Include
include( get_theme_file_path('/includes/customizer/misc-heading.php')); // Theme Customizer - Heading
include( get_theme_file_path('/includes/customizer/misc-footer.php')); // Theme Customizer - Footer
include( get_theme_file_path('/includes/customizer/enqueue.php')); // Theme Customizer - Preview


add_action('after_setup_theme', 'ju_setup_theme'); // Menu
add_action('wp_enqueue_scripts', 'ju_enqueue'); // JS Scripts
add_action('customize_register', 'ju_customize_register'); // Social
add_action('customize_preview_init', 'ju_customize_preview_init'); // Social

define('ALLOW_UNFILTERED_UPLOADS', true);

?>