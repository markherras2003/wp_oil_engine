<?php

function ju_customize_register( $wp_customize ){

    $wp_customize->add_panel( 'oil', array(
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'title'          => 'Oil Engine - Theme Settings',
        'description'    => 'Oil Engine Theme Settings',
    ) );

    ju_customizer_misc_heading_section( $wp_customize );
    ju_customizer_misc_footer_section( $wp_customize );

}

?>