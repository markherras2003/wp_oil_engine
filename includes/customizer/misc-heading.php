<?php
    function ju_customizer_misc_heading_section( $wp_customize ) {

        // Add Section Section
        $wp_customize->add_section( 'ju_misc_heading_section',[
            'title'     =>  __('Heading Misc Settings'),
            'priority'  =>  30,
            'panel'     =>  'oil',
        ]);

        // Add Setting Section
        $wp_customize->add_setting('ju_header_upload_img',[
            'default'   => '',
        ]);

        $wp_customize->add_setting('ju_header_heading_text',[
            'default'   => '',
        ]);

        $wp_customize->add_setting('ju_header_overline_text',[
            'default'   => '',
        ]);

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'logo',
                array(
                    'label'      => __( 'Upload an Image', 'theme_name' ),
                    'section'    => 'ju_misc_heading_section',
                    'settings'   => 'ju_header_upload_img',
                )
            )
        );

        // Add Control Section
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'ju_hero_text_input',
            array(
                'label'             =>  __('Hero Text'),
                'section'           =>  'ju_misc_heading_section',
                'settings'          =>  'ju_header_heading_text',
                'type'              =>  'textarea',
            )
        ));

        // Add Control Section
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'ju_overline_header_input',
            array(
                'label'             =>  __('Over-heading Text'),
                'section'           =>  'ju_misc_heading_section',
                'settings'          =>  'ju_header_overline_text',
            )
        ));


    }
?>