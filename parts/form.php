<div class="overlay overlay-contentpull pull-form-content menu-bg">
    <div class="pull-page">
        <div class="pull-wrapper">

            <div class="topline clearfix">
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php get_template_part('assets/svg/logo.svg') ?>
                    </a>
                </div>
                <div class="menu-wrap">
                    <p class="form-close pull-close icon-cancel"></p>
                </div>
            </div>


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


            <div class="row pull-footer">
                <div class="col contacts">
                    <p class="headline"><?php pll_e('Adress'); ?></p>
                    <p><?php pll_e('1058, Rue des Plans 06510 CARROS'); ?>
                        <span><?php pll_e('Fax'); ?>:</span> 09 50 10 82 11<br />
                        <span><?php pll_e('Telephone'); ?>:</span> +33 078 564 60 90  +33 07 85 64 60 90<br />
	                    <span>Email:</span> contact@buroarchdesign.com
                    </p>
                </div>
                <div class="col soc-icons">
                    <p class="headline"><?php pll_e('Share'); ?></p>
                    <ul>
                        <li><a href="https://www.facebook.com/BuroArchDesign" class="icon-facebook"></a></li>
                        <li><a href="https://www.instagram.com/buroarchdesign/" class="icon-instagram"></a></li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</div>