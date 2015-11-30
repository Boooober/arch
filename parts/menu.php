<div class="overlay overlay-contentpull menu-bg">
    <div class="menu-page">
        <div class="menu-wrapper">

            <div class="topline clearfix">
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php get_template_part('assets/svg/logo.svg') ?>
                    </a>
                </div>
                <div class="menu-wrap">
                    <p class="pull-menu-close icon-cancel"></p>
                </div>
            </div>

            <div class="menu">
                <?php
                    wp_nav_menu( array(
                        'container'      => '',
                        'menu_class'     => 'pull_menu',
                        'menu_id'        => '',
                        'theme_location' => 'header',
                    ) );
                ?>
            </div>


            <div class="row menu-footer">
                <div class="col contacts">
                    <p class="headline">Adress</p>
                    <p>1058, Rue des Plans 06510 CARROS
                        <span>Fax:</span> 09 50 10 82 11<br />
                        <span>Telephone:</span> +33 078 564 60 90  +33 07 85 64 60 90
                    </p>
                </div>
                <div class="col soc-icons">
                    <p class="headline">Share</p>
                    <ul>
                        <li><a href="https://www.facebook.com/BuroArchDesign" class="icon-facebook"></a></li>
                        <li><a href="https://www.instagram.com/buroarchdesign/" class="icon-instagram"></a></li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</div>