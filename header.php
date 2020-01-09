<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
    <?php wp_head() ?>

</head>

<body <?php body_class('stretched no-transition'); ?>>

    <div class="navigation">
        <div class="branding">
            <a href="./index.html"><img src="<?= get_template_directory_uri() ?>/assets/img/branding.png" alt=""></a>
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

    <div class="hero-section">
        <img src="<?= get_template_directory_uri()  ?>/assets/img/bill-oxford--fGqsewtsJY-unsplash.jpg" alt="">
        <div class="hero-text">
            <span class="overline-text">We are oil in the engine</span>
            <h1>Helping managers to lead quality performance conversations at work</h1>
        </div>
        <div class="arrow-down"><img src="<?= get_template_directory_uri() ?>/assets/img/arrow.svg" alt=""></div>
    </div>
