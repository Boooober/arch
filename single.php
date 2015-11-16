<?php get_header(); ?>
<?php $templateurl = get_bloginfo('template_url'); ?>

    <div id="query-content" class="static">
        <?php if( have_posts() ) :
            while ( have_posts())  : the_post();
                include(locate_template('parts/project-page.php'));
            endwhile;
        endif; ?>
    </div>

<?php get_footer(); ?>

