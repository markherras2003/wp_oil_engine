<?php 

function ju_enqueue(){
    $uri                = get_theme_file_uri();
    $ver                = JU_DEV_MODE ? time() : false;

    wp_register_style('ju_style', $uri . '/assets/css/compressed/main.css', [], $ver);
    wp_register_style('ju_swiper', $uri . '/assets/css/swiper.min.css', [], $ver);
    wp_enqueue_style('ju_style');
    wp_enqueue_style('ju_swiper');

    // ( $handle, $path, $dependencies, $version (optional), $insert_inside_footer(boolean))                              
    wp_register_script('ju_main', $uri. '/assets/js/main.js', [], $ver, true);
    wp_register_script('ju_swiper_js', $uri. '/assets/js/swiper.min.js', [], $ver, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('ju_main');
    wp_enqueue_script('ju_swiper_js');
}

?>