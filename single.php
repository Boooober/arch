<?php get_header(); ?>
<?php $templateurl = get_bloginfo('template_url'); ?>
<div class="container">
    <div id="query-content" class="static">
        <?php if( have_posts() ) :
            while ( have_posts())  : the_post();
                include(locate_template('parts/project-page.php'));
            endwhile;
        endif; ?>
    </div>
</div>


<?php get_template_part('parts/menu'); ?>
<?php get_footer(); ?>

