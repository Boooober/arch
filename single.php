<?php get_header(); ?>
<div class="container">
    <div id="query-content" class="static">
        <?php if( have_posts() ) :
            while ( have_posts())  : the_post();

//                include(locate_template('templates/project-page.php'));
                get_template_part('templates/project-page');
            endwhile;
        endif; ?>
    </div>
</div>


<?php get_template_part('parts/menu'); ?>
<?php get_footer(); ?>

