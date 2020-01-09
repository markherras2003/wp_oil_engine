<?php
    function ju_setup_theme() {
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo');
        add_theme_support('title-tag');
        register_nav_menu('primary', __('Primary Menu'));
        register_nav_menu('secondary', __('Secondary Menu'));
        register_nav_menu('extra', __('Extra Pages'));
    }
?>