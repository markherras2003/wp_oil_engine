<?php
    function ju_customize_preview_init(){
        wp_enqueue_script(
            'ju_theme_customizer', // ID
            get_theme_file_uri( 'assets/js/theme-customize.js'), // Path
            ['jquery', 'customize-preview'], // Dependencies
            false, // Version
            true // Footer
        );
    }
?>