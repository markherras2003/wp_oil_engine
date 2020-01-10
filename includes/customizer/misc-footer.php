<?php
    function ju_customizer_misc_footer_section( $wp_customize ){

        // Add Section Section
        $wp_customize->add_section( 'ju_misc_footer_section',[
            'title'     =>  __('Footer Misc Settings'),
            'priority'  =>  30,
            'panel'     =>  'oil',
        ]);


        $wp_customize->add_setting('ju_footer_lead_text',[
            'default'   => ''
        ]);
        $wp_customize->add_setting('ju_footer_contact_link',[
            'default'   => ''
        ]);
        $wp_customize->add_setting('ju_footer_contact_number',[
            'default'   => ''
        ]);
        $wp_customize->add_setting('ju_footer_copyright_text',[
            'default'   => ''
        ]);
        $wp_customize->add_setting('ju_footer_company_website',[
            'default'   => ''
        ]);


        // Add Control Section
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'ju_hero_text_input',
            array(
                'label'             =>  __('Footer Text'),
                'section'           =>  'ju_misc_footer_section',
                'settings'          =>  'ju_footer_lead_text',
                'type'              =>  'textarea',
            )
        ));

        // Add Control Section
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'ju_footer_contact_link_input',
            array(
                'label'             =>  __('Contact Button Link'),
                'section'           =>  'ju_misc_footer_section',
                'settings'          =>  'ju_footer_contact_link',
            )
        ));


        // Add Control Section
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'ju_contact_number_input',
            array(
                'label'             =>  __('Contact #'),
                'section'           =>  'ju_misc_footer_section',
                'settings'          =>  'ju_footer_contact_number',
            )
        ));

        // Add Control Section
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'ju_copyright_input',
            array(
                'label'             =>  __('Copyright Text'),
                'section'           =>  'ju_misc_footer_section',
                'settings'          =>  'ju_footer_copyright_text',
            )
        ));

        // Add Control Section
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'ju_company_website_input',
            array(
                'label'             =>  __('Company Text'),
                'section'           =>  'ju_misc_footer_section',
                'settings'          =>  'ju_footer_company_website',
            )
        ));

        
    }
?>