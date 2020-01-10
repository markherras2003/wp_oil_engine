
    <footer>
        <section class="container  footer-top">
            <div class="left-info">
            <?php
                if( get_theme_mod('ju_footer_lead_text') ) {
                    ?>
                    <h2><?= get_theme_mod('ju_footer_lead_text') ?></h2>
                    <?php
                }else {
                    ?>
                    <h2>Start your journey to better business – get in touch today.</h2>
                    <?php
                }
            ?>
                <div class="contact-info">
                <?php
                if( get_theme_mod('ju_footer_contact_link') ) {
                    ?>
                    <a class="button" href="<?= get_theme_mod('ju_footer_contact_link') ?>">Contact us</a>
                    <?php
                }else {
                    ?>
                    <a class="button" href="">Contact us</a>
                    <?php
                }

                ?>

                <?php
                
                if( get_theme_mod('ju_footer_contact_number')) {
                    ?>
                        <p>Or call <span><?= get_theme_mod('ju_footer_contact_number') ?></span></p>
                    <?php
                }else {
                    ?>
                        <p>Or call <span>1800 573 281</span></p>
                    <?php
                }
                
                ?>
                </div>
            </div>
            <div class="footer-menu">
                <div class="nav-list">
                    <ul class="nav-items">
                    <?php 
                    
                        if(has_nav_menu('secondary')){
                            wp_nav_menu([
                                'items_wrap'          => '%3$s',
                                'theme_location'      => 'secondary',
                                'container'           => false,
                                'fallback_cb'         => false,
                                'depth'               => 4,
                            ]);
                        }
                    ?>   
                    </ul>

                    <ul class="nav-items">
                 <?php 
                 
                    if(has_nav_menu('company')){
                        wp_nav_menu([
                            'items_wrap'          => '%3$s',
                            'theme_location'      => 'company',
                            'container'           => false,
                            'fallback_cb'         => false,
                            'depth'               => 4,
                        ]);
                    }
                 ?>       
                    </ul>
                </div>
            </div>

        </section>
        <section class="footer-bottom container">

        <?php
        
            if( get_theme_mod('ju_footer_copyright_text')) {
                ?>
                <p>© <?= get_theme_mod('ju_footer_copyright_text') ?></p>

                <?php
            }else {
                ?>
                <p>© Oil in the Engine 2019</p>
                <?php
            }
        
        ?>
            <div class="right">
            <?php

                if(has_nav_menu('extra')){
                    wp_nav_menu([
                        'theme_location'      => 'extra',
                        'container'           => false,
                        'fallback_cb'         => false,
                        'depth'               => 4,
                    ]);
                }
            
            ?>
            <?php 
                if ( get_theme_mod('ju_footer_company_website') ) {
                    ?>
                    <p><?= get_theme_mod('ju_footer_company_website')?></p>
                    <?php
                }else {
                    ?>
                    <p>Website by Traction</p>
                    <?php
                }
            
            ?>
            </div>
        </section>

    </footer>

    <!--Modal-->
    <div class="bg-modal menu-modal">
        <div class="modal-content">
            <div class="img-topLeft">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/Header Cog 1.png" alt="">
            </div>
            <div class="close"><img src="<?= get_template_directory_uri() ?>/assets/img/close.svg" alt=""></div>

            <div class="main-content">
                <div class="main-menu">
                    <div class="nav-list">
                        <ul class="nav-items">
                            
                        <?php
                            $menuLocations = get_nav_menu_locations();
                            $navbar_items = wp_get_nav_menu_items($menuLocations['secondary']);
                            // array_pop($navbar_items);

                            foreach($navbar_items as $items) {
                            ?>

                                <li>
                                    <a href="<?= $items->url ?>">
                                        <h2><?= $items->post_title ?></h2>
                                    </a>
                                </li>

                            <?php
                            }


                            $menuLocations_company = get_nav_menu_locations();
                            $navbar_items_company = wp_get_nav_menu_items($menuLocations['company']);
                            array_pop($navbar_items_company);

                            foreach($navbar_items_company as $items_company ) {
                                ?>

                                <li>
                                    <a href="<?= $items_company->url ?>">
                                        <h2><?= $items_company->post_title ?></h2>
                                    </a>
                                </li>

                                <?php
                            }
                            

                        ?>
                        </ul>
                    </div>
                </div>

                <div class="footer-links">
                    <ul class="links">
                    
                        <?php 
                            $menuLocations = get_nav_menu_locations();
                            $navbar_items = wp_get_nav_menu_items($menuLocations['company']);
                            
                            ?>
                            <li><a href="<?= end($navbar_items)->url  ?>"><?= end( $navbar_items )->post_title ?></a></li>
                            <?php
                        ?> 

                        <?php 
                            $menuLocations = get_nav_menu_locations();
                            $navbar_items = wp_get_nav_menu_items($menuLocations['extra']);

                            foreach( $navbar_items as $items ) {
                            
                            ?>
                            <li><a href="<?= $items->url  ?>"><?=  $items->post_title ?></a></li>
                            <?php
                            }
                        ?> 

                    </ul>
                </div>
            </div>

            <div class="img-bottom">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/Header Cog 2.png" alt="">
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php wp_footer(); ?>

</body>

</html>