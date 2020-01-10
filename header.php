<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
    <?php wp_head() ?>

</head>

<body <?php body_class('stretched no-transition'); ?>>

    <!--Navigation-->
    <div class="navigation">
        <div class="branding">
            <?php 
                if( has_custom_logo() ){
                    the_custom_logo();
                }else{
                    ?>
                    <a href="./index.html"><img src="<?= get_template_directory_uri() ?>/assets/img/branding.png" alt=""></a>
                    <?php
                }
            ?>
        </div>
        <div class="main-nav">
            <div class="nav-list">
                <?php
                    if(has_nav_menu('primary')){
                    wp_nav_menu([
                        'theme_location'      => 'primary',
                        'container'           => false,
                        'fallback_cb'         => false,
                        'depth'               => 4,
                        // 'walker'              => new JU_Custom_Nav_Walker()
                    ]);
                    }
                ?>
            </div>
            <div class="nav-bar">
                <a class="login" href="javascript:"><img src="<?= get_template_directory_uri() ?>/assets/img/bar.svg" alt=""></a>
            </div>
        </div>
    </div>

    <!--HEro-Section-->
    <div class="hero-section">
        <div class="hero-content">
            <div class="img-wrapper">
                <img src="<?= get_template_directory_uri() ?>/assets/img/cover.png" alt="">
            </div>
            <div class="hero-text">
                <div class="section-heading">
                    <?php 
                        if( get_theme_mod('ju_header_overline_text') ) {
                            ?>
                            <span class="overline-text"><?= get_theme_mod('ju_header_overline_text') ?></span>
                            <?php
                        }else {
                            ?>
                                <span class="overline-text">We are oil in the engine</span>
                            <?php
                        }
                    ?>
                    <?php 
                        if( get_theme_mod('ju_header_heading_text') ) {
                            ?>
                            <h1><?= get_theme_mod('ju_header_heading_text') ?></h1>
                            <?php
                        }else {
                            ?>
                                <h1>Helping managers to lead quality performance conversations at work</h1>
                            <?php
                        }
                    ?>
                </div>
            <div class="arrow-down"><img src="<?= get_template_directory_uri() ?>/assets/img/arrow.svg" alt=""></div>
            </div>
        </div>
    </div>


