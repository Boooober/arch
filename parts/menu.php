<div class="overlay overlay-contentpull pull-menu-content menu-bg">
    <div class="pull-page">
        <div class="pull-wrapper">

            <div class="topline clearfix">
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php get_template_part('assets/svg/logo.svg') ?>
                    </a>
                </div>
                <div class="menu-wrap">
                    <p class="menu-close pull-close icon-cancel"></p>
                </div>
            </div>

	        <div class="middle-container clearfix">
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

		        <div class="form-menu">
			        <div class="form">
				        <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida lacus at neque blandit.</p>
				        <form class="contact-form" action="">
					        <div class="row">
						        <div class="col">
							        <lable for="fname" class="lable"><?php pll_e('Your Name'); ?></lable>
							        <input class="form-input" name="fname" type="text" placeholder="<?php pll_e('Your Name'); ?>"/>
						        </div>
						        <div class="col">
							        <lable for="name" class="lable"><?php pll_e('Your Email'); ?></lable>
							        <input class="form-input" name="femail" type="text" placeholder="<?php pll_e('Your Email'); ?>"/>
						        </div>
						        <div class="col">
							        <lable for="name" class="lable"><?php pll_e('Your Phone'); ?></lable>
							        <input class="form-input" name="fphone" type="text" placeholder="<?php pll_e('Your Phone'); ?>"/>
						        </div>
						        <div class="col">
							        <input type="submit" value="<?php pll_e('SEND'); ?>"/>
						        </div>
					        </div>
				        </form>
			        </div>
		        </div>
	        </div>



            <div class="row pull-footer">
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