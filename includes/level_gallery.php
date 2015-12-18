<?php function post_projects ($category) {

    $sub_cat_ids = get_term_children( $category->term_id, $category->taxonomy );


    if(!empty($sub_cat_ids)){

        ob_start();
		echo '<div class="inner-tab-caption"></div>';

        foreach( $sub_cat_ids as $sub_cat_id) {

            //get object of child by id
            $sub_cat = get_term_by('id', $sub_cat_id, $category->taxonomy);

			echo '<div class="inner-tab-content">';
                echo '<div class="subundertitle">' . $sub_cat->name . '</div>';
                //recursion
                echo post_projects($sub_cat);
            echo '</div>';
        }

        return ob_get_clean();

    } else {
        ob_start();


        $args = array(
            'cat'            => $category->term_id,
            'posts_per_page' => 5,
        );

        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post();

                $post_id = get_the_ID();

                $img_id   = get_post_thumbnail_id( $post_id );
                $img_attr = wp_get_attachment_image_src( $img_id, 'medium-image' );
                $img_url  = $img_attr[0];
                $img_alt  = get_post_meta( $img_id, '_wp_attachment_image_alt', true );


                ?>
                <a class="item trigger-push-content js-single-ajax" href="<?php echo get_permalink(); ?>" data-project="<?php echo $post_id; ?>">
                    <figure class="item-img">
	                    <img src="<?php echo $img_url; ?>" alt="<?php echo $img_alt ?>"/>
                    </figure>

                    <div class="item-content">
<!--                        <div class="item-container">-->
	                        <h3 class="item-title"><?php the_title(); ?></h3>
	                        <span class=" item-button">Посмотреть проект</span>
<!--                        </div>-->
                    </div>
                </a>
            <?php

            endwhile;
        endif;
        wp_reset_postdata();

        return '<div class="owl-gallery">' . ob_get_clean() . '</div>';
    }
}
