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

    <div class="row row-1">
        <div class="col col-1">
            <div class="entry-text">
                <p><?php echo get_field('row1_text'); ?></p>
            </div>
        </div>
        <div class="col col-2">
            <figure class="entry-image">
                <img src="<?php echo esc_url( get_field('row1_image') ); ?>" alt=""/>
            </figure>
        </div>
    </div>

    <div class="row row-2">

        <div class="col col-2">
            <div class="entry-text">
                <p><?php echo get_field('row2_text'); ?></p>
            </div>
            <figure class="entry-image">
                <img src="<?php echo esc_url( get_field('row2_text-image') ); ?>" alt=""/>
            </figure>
        </div>

        <div class="col col-1">
            <figure class="entry-image">
                <img src="<?php echo esc_url( get_field('row2_image') ); ?>" alt=""/>
            </figure>
        </div>

    </div>

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
