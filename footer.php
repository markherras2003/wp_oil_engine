
    <footer>
        <section class="container  footer-top">
            <div class="left-info">
                <h2>Start your journey to better business – get in touch today.</h2>
                <div class="contact-info">
                    <a class="button" href="">Contact us</a>
                    <p>Or call <span>1800 573 281</span></p>
                </div>
            </div>
            <div class="footer-menu">
                <div class="nav-list">
                    <ul class="nav-items">
                        <li class="active"><a href="">Home</a></li>
                        <li><a href="">Professional Development</a></li>
                        <li><a href="">Integrated Solutions</a></li>
                        <li><a href="">Industry Insights</a></li>
                        <li><a href="">CEDAR Feedback</a></li>
                    </ul>

                    <ul class="nav-items">
                        <li><a href="">About us</a></li>
                        <li><a href="">Contact</a></li>

                        <?php
                        
                        ?>
                        <li><a href="">Members Area</a></li>
                    </ul>
                </div>
            </div>

        </section>
        <section class="footer-bottom container">
            <p>© Oil in the Engine 2019</p>
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
                <p>Website by Traction</p>
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
                            if(has_nav_menu('secondary')){
                                wp_nav_menu([
                                    'items_wrap' => '%3$s',
                                    // 'menu_class' => '',
                                    'theme_location'      => 'secondary',
                                    'container'           => false,
                                    'fallback_cb'         => false,
                                    'depth'               => 5,
                                ]);
                            }

                        ?>
                        </ul>
                    </div>
                </div>

                <div class="footer-links">
                    <ul class="links">
                    

                            <?php 
                                $menuLocations = get_nav_menu_locations();
                                $navbar_items = wp_get_nav_menu_items($menuLocations['secondary']);
                                
                                ?>
                                <li><a href="<?= end($navbar_items)->url  ?>"><?= end( $navbar_items )->post_title ?></a></li>
                                <?php
                            ?> 


                            <?php 
                                $menuLocations = get_nav_menu_locations();
                                $navbar_items = wp_get_nav_menu_items($menuLocations['extra']);
                                
                                ?>
                                <li><a href="<?= $navbar_items[0]->url  ?>"><?=  $navbar_items[0] ->post_title ?></a></li>
                                <li><a href="<?= $navbar_items[1]->url  ?>"><?=  $navbar_items[1] ->post_title ?></a></li>
                                <?php
                            ?> 

                    </ul>
                </div>
            </div>

            <div class="img-bottom">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/Header Cog 2.png" alt="">
            </div>
        </div>
    </div>


                        <!-- <?php 
                            $menuLocations = get_nav_menu_locations();
                            $navbar_items = wp_get_nav_menu_items($menuLocations['secondary']);

                            echo '<pre>';
                            print_r(end($navbar_items));
                            echo '</pre>';
                        ?>  -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php wp_footer(); ?>

</body>

</html>