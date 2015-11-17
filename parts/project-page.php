<?php
    $prev_link = get_adjacent_post( true, '', true )->guid;
    $next_link = get_adjacent_post( true, '', false )->guid;
    $prev_id = get_adjacent_post( true, '', true )->ID;
    $next_id = get_adjacent_post( true, '', false )->ID;
?>
<div class="single">
    <div class="page-header feature-image" style="background-image: url('<?php echo get_field('slide_image'); ?>')">
        <div class="page-wrapper header-wrapper">
            <div class="topline clearfix">
                <a href="<?php echo esc_url( get_option('home') ); ?>" class="logo">
                    <?php get_template_part('assets/svg/logo.svg') ?>
                </a>
                <div class="menu-wrap">
                    <p class="overlay-close icon-cancel"></p>
                    <div class="menu-button">MENU</div>
                </div>
            </div>

            <h1 class="title"><?php the_title(); ?></h1>

            <p class="undertitle"><?php echo get_field('undertitle'); ?></p>
            <div class="project-nav clearfix">

                <?php if($prev_link) { ?>
                    <a href="<?php echo esc_url($prev_link); ?>" class="prev-project js-nav" data-project="<?php echo $prev_id; ?>">
                        <span>Предыдущий проект</span>
                        <div class="project-nav-icon prev-icon"></div>
                    </a>
                <?php } ?>

                <?php if($next_link) { ?>
                    <a href="<?php echo esc_url($next_link); ?>" class="next-project js-nav" data-project="<?php echo $next_id; ?>">
                        <div class="project-nav-icon next-icon"></div>
                        <span>Следующий проект</span>
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
                if( get_row_layout() == 'left_image' ):
                    ?>
                    <div class="page-wrapper">
                        <div class="row left-image ">

                            <?php if($img_l = get_sub_field('left_image_image')) {
                                $img_l_src = $img_l['url'];
                                $img_l_alt = $img_l['alt'];

                                echo '<div class="col image">';
                                echo '<figure><img src="'.$img_l_src.'" alt="'.$img_l_alt.'"/></figure>';
                                echo '</div>';
                            } ?>

                            <div class="col text">
                                <?php the_sub_field('left_image_text'); ?>
                            </div>
                        </div>
                    </div>

                <?php elseif( get_row_layout() == 'right_image' ): ?>
                    <div class="page-wrapper">
                        <div class="row right-image">
                            <div class="col text">
                                <?php the_sub_field('right_image_text'); ?>
                            </div>

                            <?php if($img_r = get_sub_field('right_image_image')) {
                                $img_r_src = $img_r['url'];
                                $img_r_alt = $img_r['alt'];

                                echo '<div class="col image">';
                                echo '<figure><img src="'.$img_r_src.'" alt="'.$img_r_alt.'"/></figure>';
                                echo '</div>';
                            } ?>

                        </div>
                    </div>

                <?php elseif( get_row_layout() == 'left_image_out' ): ?>

                    <div class="row left-image-out">
                        <?php if($img_lo = get_sub_field('left_image_out_image')) {
                            $img_lo_src = $img_lo['url'];
                            $img_lo_alt = $img_lo['alt'];

                            echo '<div class="col image">';
                            echo '<figure><img src="'.$img_lo_src.'" alt="'.$img_lo_alt.'"/></figure>';
                            echo '</div>';
                        } ?>

                        <div class="col text">
                            <?php the_sub_field('left_image_out_text'); ?>
                        </div>

                    </div>

                <?php elseif( get_row_layout() == 'right_image_out' ): ?>

                    <div class="row right-image-out">

                        <div class="col text">
                            <?php the_sub_field('right_image_out_text'); ?>
                        </div>

                        <?php if($img_ro = get_sub_field('right_image_out_image')){
                            $img_ro_src = $img_ro['url'];
                            $img_ro_alt = $img_ro['alt'];

                            echo '<div class="col image">';
                            echo '<figure><img src="'.$img_ro_src.'" alt="'.$img_ro_alt.'"/></figure>';
                            echo '</div>';
                        } ?>

                    </div>

                <?php
                endif;

            endwhile;

        else :

            // no layouts found

        endif;

        ?>
    </div>

<!--    <div class="row row-1">-->
<!--        <div class="col col-1">-->
<!--            <div class="entry-text">-->
<!--                <p>--><?php //echo get_field('row1_text'); ?><!--</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col col-2">-->
<!--            <figure class="entry-image">-->
<!--                <img src="--><?php //echo esc_url( get_field('row1_image') ); ?><!--" alt=""/>-->
<!--            </figure>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="row row-2">-->
<!---->
<!--        <div class="col col-2">-->
<!--            <div class="entry-text">-->
<!--                <p>--><?php //echo get_field('row2_text'); ?><!--</p>-->
<!--            </div>-->
<!--            <figure class="entry-image">-->
<!--                <img src="--><?php //echo esc_url( get_field('row2_text-image') ); ?><!--" alt=""/>-->
<!--            </figure>-->
<!--        </div>-->
<!---->
<!--        <div class="col col-1">-->
<!--            <figure class="entry-image">-->
<!--                <img src="--><?php //echo esc_url( get_field('row2_image') ); ?><!--" alt=""/>-->
<!--            </figure>-->
<!--        </div>-->
<!---->
<!--    </div>-->

    <footer class="footer">
        <div class="page-wrapper clearfix">
            <?php if($prev_link) { ?>
                <a href="<?php echo esc_url($prev_link); ?>" class="prev-project js-nav" data-project="<?php echo $prev_id; ?>">
                    <span>Предыдущий проект</span>
                    <div class="project-nav-icon prev-icon"></div>
                </a>
            <?php } ?>

            <?php if($next_link) { ?>
                <a href="<?php echo esc_url($next_link); ?>" class="next-project js-nav" data-project="<?php echo $next_id; ?>">
                    <div class="project-nav-icon next-icon"></div>
                    <span>Следующий проект</span>
                </a>
            <?php } ?>
            <div class="soc-icons">
                <ul>
                    <li><a href="#" class="icon-facebook"></a></li>
                    <li><a href="#" class="icon-linkedin"></a></li>
                    <li><a href="#" class="icon-instagram"></a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>
