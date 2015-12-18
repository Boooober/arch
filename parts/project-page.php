<?php
    $prev_link = get_adjacent_post( true, '', true )->guid;
    $next_link = get_adjacent_post( true, '', false )->guid;
    $prev_id = get_adjacent_post( true, '', true )->ID;
    $next_id = get_adjacent_post( true, '', false )->ID;
?>
<div class="single">
    <div class="page-header" style="background:<?php the_field('background_undercolor'); ?>">
         <div class="feature-image" style="background-image: url('<?php the_field('topline_image') ? the_field('topline_image') : the_field('slide_image'); ?>')"></div>
         <div class="page-wrapper header-wrapper">
             <div class="topline clearfix">
                 <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
                     <?php get_template_part('assets/svg/logo.svg') ?>
                 </a>
                 <?php if($is_ajax){ ?>
                     <div class="close-btn">
                         <div class="push-content-close close-elements trigger">

                         </div>
                     </div>
                 <?php } ?>
                 <div class="menu-wrap">
                     <?php
                     wp_nav_menu( array(
                         'container'      => '',
                         'menu_class'     => 'menu langs-menu',
                         'menu_id'        => '',
                         'theme_location' => 'langs',
                     ) );
                     ?>
                     <div class="menu-button trigger-pull-menu">MENU</div>
                 </div>
             </div>

             <h1 class="title" style="color:<?php the_field('topline_text_color'); ?>"><?php the_title(); ?></h1>

             <p class="undertitle" style="color:<?php the_field('topline_text_color') ?>"><?php echo get_field('undertitle'); ?></p>
             <div class="project-nav clearfix">

                 <?php if($prev_link) { ?>
                     <a href="<?php echo esc_url($prev_link); ?>" class="prev-project js-nav" data-project="<?php echo $prev_id; ?>">
                         <span><?php pll_e('Previous project', TEXTDOMAIN); ?></span>
                         <div class="project-nav-icon prev-icon"></div>
                     </a>
                 <?php } ?>

                 <?php if($next_link) { ?>
                     <a href="<?php echo esc_url($next_link); ?>" class="next-project js-nav" data-project="<?php echo $next_id; ?>">
                         <div class="project-nav-icon next-icon"></div>
                         <span><?php pll_e('Next project', TEXTDOMAIN); ?></span>
                     </a>
                 <?php } ?>

             </div>
         </div>
    </div>
    <div class="entry-content">
        <?php

        // check if the flexible content field has rows of data
        if( have_rows('project_content') ):

            // loop through the rows of data
            while ( have_rows('project_content') ) : the_row();

                if( get_row_layout() == 'left_image' ): ?>

                    <div class="row left-image">
                        <div class="col image">
                            <?php
                            if( have_rows('left_image_image_repeater') ):
                                while ( have_rows('left_image_image_repeater') ) : the_row();

                                    if($img = get_sub_field('left_image_image')) {
                                        $img_src = $img['url'];
                                        $img_alt = $img['alt'];

                                        echo '<figure><img src="'.$img_src.'" alt="'.$img_alt.'"/></figure>';
                                    }
                                endwhile;
                            endif;
                            ?>
                        </div>
                        <div class="col text">
                            <?php
                            if( have_rows('left_image_text_repeater') ):
                                while ( have_rows('left_image_text_repeater') ) : the_row();

                                    the_sub_field('left_image_text_repeater--text');

                                    if($img_add = get_sub_field('left_image_text_repeater--image')) {
                                        $img_add_src = $img_add['url'];
                                        $img_add_alt = $img_add['alt'];

                                        echo '<figure><img src="'.$img_add_src.'" alt="'.$img_add_alt.'"/></figure>';
                                    }
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>

                <?php elseif( get_row_layout() == 'right_image' ): ?>
                    <div class="row right-image">

                        <div class="col text">
                            <?php
                            if( have_rows('right_image_text_repeater') ):
                                while ( have_rows('right_image_text_repeater') ) : the_row();

                                    the_sub_field('right_image_text_repeater--text');

                                    if($img_add = get_sub_field('right_image_text_repeater--image')) {
                                        $img_add_src = $img_add['url'];
                                        $img_add_alt = $img_add['alt'];

                                        echo '<figure><img src="'.$img_add_src.'" alt="'.$img_add_alt.'"/></figure>';
                                    }
                                endwhile;
                            endif;
                            ?>
                        </div>
                        <div class="col image">
                            <?php
                            if( have_rows('right_image_image_repeater') ):
                                while ( have_rows('right_image_image_repeater') ) : the_row();

                                    if($img = get_sub_field('right_image_image')) {
                                        $img_src = $img['url'];
                                        $img_alt = $img['alt'];

                                        echo '<figure><img src="'.$img_src.'" alt="'.$img_alt.'"/></figure>';
                                    }
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                <?php
                endif;
            endwhile;
        else :
            // no layouts found
        endif;
        ?>
    </div>

    <footer class="footer">
        <div class="page-wrapper clearfix">
            <?php if($prev_link) { ?>
                <a href="<?php echo esc_url($prev_link); ?>" class="prev-project js-nav" data-project="<?php echo $prev_id; ?>">
                    <span><?php pll_e('Previous project'); ?></span>
                    <div class="project-nav-icon prev-icon"></div>
                </a>
            <?php } ?>

            <?php if($next_link) { ?>
                <a href="<?php echo esc_url($next_link); ?>" class="next-project js-nav" data-project="<?php echo $next_id; ?>">
                    <div class="project-nav-icon next-icon"></div>
                    <span><?php pll_e('Next project'); ?></span>
                </a>
            <?php } ?>
            <div class="soc-icons">
                <ul>
                    <li><a href="https://www.facebook.com/BuroArchDesign" class="icon-facebook"></a></li>
                    <li><a href="https://www.instagram.com/buroarchdesign/" class="icon-instagram"></a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>
