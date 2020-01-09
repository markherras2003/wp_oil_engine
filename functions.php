<?php

define('JU_DEV_MODE', true);

include( get_theme_file_path( '/includes/front/enqueue.php' ) ); // CSS
include( get_theme_file_path( '/includes/setup.php' ) );    // Menu // TITLE // CUSTOM LOGO // POST THUMBNAIL


add_action('after_setup_theme', 'ju_setup_theme'); // Menu
add_action('wp_enqueue_scripts', 'ju_enqueue'); // JS Scripts
define('ALLOW_UNFILTERED_UPLOADS', true);

?>