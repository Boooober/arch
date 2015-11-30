<?php

/*
* Template Name: Home Page RU
*/
get_header();
$templateurl = get_bloginfo('template_url');

?>

<body>
<div class="container">
<div id="fullpage">
<div class="section box-1 switcher" data-section-name="Home">
    <div class="box-bg animate"></div>
    <section class="content">
        <div class="title-wrapper">
            <div class="title-container content-switch">
                <div data-target="1" class="title entry-content" style="display:block">
                    <p>We are a studio of architecture & interior design <b>arch.design</b></p>
                </div>
                <div data-target="2" class="title entry-content small-title">
                    <p>We create the projects for our client's happy life, comfort and aesthetic enjoyment!</p>
                </div>
                <div data-target="3" class="title entry-content">
                    <p>We are a studio of architecture & interior design <b>arch.design</b></p>
                </div>
            </div>
        </div>
        <ul>
            <li>
                <div data-switch="1" class="switch-trigger trigger"><span>1</span><p>Slide name</p></div>
            </li><li>
                <div data-switch="2" class="switch-trigger trigger"><span>2</span><p>Who we<br />are</p></div>
            </li><li>
                <div data-switch="3" class="switch-trigger trigger"><span>3</span><p>Our<br />approach</p></div>
            </li>
        </ul>
    </section>
</div>
<div class="section box-2 switcher" data-section-name="Service">
    <div class="box-bg"></div>


    <?php
    if( wp_mobile_detect() ) {
        get_template_part( 'parts/mobile/box-2' );
    } else { ?>
        <section class="content">
            <div class="row">
                <div class="col left">
                    <h2 class="mob-title">Our services</h2>
                    <div class="row">
                        <div class="col">
                            <div data-switch="3d" class="content-tile switch-trigger">
                                <span>img<?php /*get_template_part('assets/svg/l1.svg'); */?></span>
                                <p>Architecture</p>
                            </div>
                        </div>
                        <div class="col">
                            <div data-switch="engineering" class="content-tile switch-trigger">
                                <span>img</span>
                                <p>Design</p>
                            </div>
                        </div>
                        <div class="col">
                            <div data-switch="1" class="content-tile switch-trigger">
                                <span>img</span>
                                <p>Acquisition, supervision, various demarches</p>
                            </div>
                        </div>
                        <!--                                    <div class="col">-->
                        <!--                                        <div data-switch="2" class="content-tile switch-trigger">-->
                        <!--                                            <span>img</span>-->
                        <!--                                            <p>Согласование перепланировок</p>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                    <div class="col">-->
                        <!--                                        <div data-switch="3" class="content-tile switch-trigger">-->
                        <!--                                            <span>img</span>-->
                        <!--                                            <p>Авторский надзор</p>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                    <div class="col">-->
                        <!--                                        <div data-switch="4" class="content-tile switch-trigger">-->
                        <!--                                            <span>img</span>-->
                        <!--                                            <p>Квалифицированная помощь в подборе подрядчика</p>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                    <div class="col">-->
                        <!--                                        <div data-switch="5" class="content-tile switch-trigger">-->
                        <!--                                            <span>img</span>-->
                        <!--                                            <p>Сопровождение строительных и отделочных работ</p>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                    <div class="col">-->
                        <!--                                        <div data-switch="6" class="content-tile switch-trigger">-->
                        <!--                                            <span>img</span>-->
                        <!--                                            <p>Разработка рабочего проекта и технической документации</p>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                    </div>
                </div>
                <div class="col right">
                    <div class="content-right">
                        <h1>Our services</h1>
                        <div class="content-switch">
                            <div data-target="design" class="entry-content">
                                <h2>Дизайн проект-интерьеров</h2>
                                <p>Профессиональное, творческое действие по созданию функционального и дизайнерского решения по оформлению дома, офиса, виллы или производственного помещения.</p>
                            </div>
                            <div data-target="3d" class="entry-content">
                                <h2>Эскизы 3D</h2>
                                <p>Помогает Вам правильно увидеть мысль автора проекта. Благодаря 3D визуализации красивая картинка воплотится для Вас в жизнь.</p>
                            </div>
                            <div data-target="engineering" class="entry-content" style="display:block">
                                <h2>Проектирование вилл</h2>
                                <p>Наша команда создаст проект оптимально комфортного, надежного и красивого дома, что поможет не только сэкономить Ваше время, нервы и средства, но и ускорить процесс строительства Вашего дома.</p>
                            </div>
                            <div data-target="1" class="entry-content">
                                <h2>Планировочные решения</h2>
                                <p>Интерьер должен быть не только внушительным в своей красоте, но и считаться с принципами удобства. Именно поэтому планировочные решения неотъемлемая часть дизайн-проекта.</p>
                            </div>
                            <div data-target="2" class="entry-content">
                                <h2>Согласование перепланировок</h2>
                                <p>Процесс оформления документов для приведения в соответствие планировки квартиры и документов о собственности.</p>
                            </div>
                            <div data-target="3" class="entry-content">
                                <h2>Авторский надзор</h2>
                                <p>Участие автора проекта гарантирует своевременное устранение возможных ошибок; во-вторых, при проведении авторского надзора часто приходят новые идеи, о возможном дополнении или усовершенствовании проектных решений.</p>
                            </div>
                            <div data-target="4" class="entry-content">
                                <h2>Квалифицированная помощь в подборе подрядчика</h2>
                                <p>Если Вы нуждаетесь в квалифицированной помощи экспертов, разбирающихся в строительстве и ремонте, наша компания поможет сделать действительно правильный выбор, основываясь на собственном опыте работы.</p>
                            </div>
                            <div data-target="5" class="entry-content">
                                <h2>Сопровождение строительных и отделочных работ</h2>
                                <p>Это подразумевает выполнение локальных эскизов и чертежей по мере необходимости, при возникновении затруднений во время реализации проекта.</p>
                            </div>
                            <div data-target="6" class="entry-content">
                                <h2>Разработка рабочего проекта и технической документации</h2>
                                <p>Часть работы над проектом, необходимая для его реализации. Рабочий проект требуется для проведения строительных работ при возведении дома, а также для проведения строительных и ремонтных работ в квартире.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>



</div>
<section class="section box-3" data-section-name="Проекты">
    <?php
    $args = array(
        'cat' => 1,
        'post_status' => 'publish',
        'posts_per_page' => 5
    );



    $query = new WP_Query($args);

    if($query->have_posts()){
        while($query->have_posts()){
            $query->the_post();
            $post_id = get_the_ID();
            ?>
            <div id="slide<?php echo $post_id; ?>" class="slide" style="background-image: url('<?php the_field('slide_image'); ?>')">
                <div class="slide-content">
                    <h2><?php the_title(); ?></h2>
                    <a href="<?php echo get_permalink(); ?>" class="trigger-push-content js-single-ajax" data-project="<?php echo $post_id; ?>">view project</a>
                </div>
            </div>

        <?php
        }
    }
    ?>
</section>
<div class="section box-4 switcher" data-section-name="Workflow">
    <div class="box-bg animate"></div>
    <?php
    if( wp_mobile_detect() ) {
        get_template_part( 'parts/mobile/box-4' );
    } else { ?>
        <section class="content">
            <h1>Этапы работы</h1>
            <div class="row">
                <div class="col left">
                    <div class="row">
                        <div class="col">
                            <div data-switch="preproject" class="content-tile switch-trigger">
                                <span>1</span>
                                <p>The pre-design part</p>
                            </div>
                        </div>
                        <div class="col">
                            <div data-switch="sketch" class="content-tile switch-trigger">
                                <span>2</span>
                                <p>Sketchup part</p>
                            </div>
                        </div>
                        <div class="col">
                            <div data-switch="production" class="content-tile switch-trigger">
                                <span>3</span>
                                <p>The working part</p>
                            </div>
                        </div>
                        <div class="col">
                            <div data-switch="delivery" class="content-tile switch-trigger">
                                <span>4</span>
                                <p>A hand over of a design project</p>
                            </div>
                        </div>
                        <div class="col">
                            <div data-switch="supervision" class="content-tile switch-trigger">
                                <span>5</span>
                                <p>The construction design supervision</p>
                            </div>
                        </div>
                        <div class="col">
                            <div data-switch="decorating" class="content-tile switch-trigger">
                                <span>6</span>
                                <p>The Decoration</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col right">
                    <div class="content-right">
                        <div class="content-switch">
                            <div data-target="preproject" class="entry-content"  style="display:block">
                                <h2>The pre-design part</h2>
                                <p>We make an arrangement for a meeting onsite, our experts measure the rooms, we discuss your wishes and draw up the terms of reference for a future project. Then begins an active and creative process of creating of first sketches. There are some variants of layout which are provided to a customer and then we pass on creation of the fundamental concept of design.</p>
                            </div>
                            <div data-target="sketch" class="entry-content">
                                <h2>Sketchup part</h2>
                                <p>Then begins the work on the design decisions and visualization of your future interior. Usually, there are 3 variants of different designs for each room. After an approval of the final version is made a computer 3D visualization of all necessary interior zones in different angles. The virtual modeling of interior space allows you to see the project the way it will look for real after its implementation.</p>
                            </div>
                            <div data-target="production" class="entry-content">
                                <h2>The working part</h2>
                                <p>On the approved sketches makes the series of drawings which are needed for construction and repair works. At the same stage goes a process of selection and approval of final finishing materials and makes a room finish schedule.</p>
                            </div>
                            <div data-target="delivery" class="entry-content">
                                <h2>A hand over of a design project</h2>
                                <p>After all the agreement of all the drawings and decorative materials, all the necessary changes include in the project. Having the “working” project with all drawings, you can spend the marketing of the construction market, offering several construction companies design – a project on a checking of cost account and, of course, to choose the most suitable company or a maintenance crew according to a quality and budget.</p>
                            </div>
                            <div data-target="supervision" class="entry-content">
                                <h2>The construction design supervision</h2>
                                <p>If you need the author’s control over the progress of the project, then, on the beginning of the construction works makes a contract on construction design supervision of the design project. Under the contract, designer will visit regularly a place and monitor the progress of the work, to make the necessary measurements, check the accordance of the work make necessary modifications in it.</p>
                            </div>
                            <div data-target="decorating" class="entry-content">
                                <h2>The Decoration</h2>
                                <p>If you need assistance in selecting of equipment, furniture, light, plumbing, textile design and other accessories here concludes a contract for the decoration which have all the necessary elements of the selection. To select the necessary equipment will be an ability to make the visits also will be the consultations and will be carried out a selection of the most profitable places for the customer to buy in the needed elements of decoration. This service can be carried out simultaneously with the supervision.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
</div>
<div class="section box-5" data-section-name="Offers">
    <div class="box-bg"></div>
    <section class="content">
        <h1>What we offer</h1>
        <div class="row">
            <div class="col">
                <a href="#">
                    <div class="entry-content">
                        <h2>ARCHITECTURAL DESIGN</h2>
                        <p>The architectural form showing the character of the owner at a glance. The project of a residential building, restaurant, cottage or a commercial building.</p>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <div class="entry-content">
                        <h2>INTERIOR DESIGN</h2>
                        <p>The optimization of space, interior design of rooms, apartments, houses, offices, cafes, clubs, restaurants, showroom, shop.</p>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <div class="entry-content">
                        <h2>OBJECT DESIGN</h2>
                        <p>Coziness is even in tiny details. Design of furniture, interior parts, lighting, tableware.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
</div>
<section class="section box-6" data-section-name="Contacts">
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d81295.50604234143!2d30.567537809521486!3d50.450700782061084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1suk!2sua!4v1447250718941" width="100%" height="350" frameborder="0" style="border:0; display: block;" allowfullscreen></iframe>
        <!--        --><?php //get_template_part('parts/gmap'); ?>
    </div>
    <div class="row">
        <div>
            <div class="col left js-col">
                <div class="js-cell">
                    <div class="entry-content">
                        <p class="text-logo"><span>ARCH</span> design</p>
                        <div class="info">
                            <p>1058, Rue des Plans 06510 CARROS</p>
                            <p><span>Fax:</span> 09 50 10 82 11</p>
                            <p class="tel clearfix"><span class="lable">Telephone:</span><span class="numb">+33 078 564 60 90<br />+33 07 85 64 60 90</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col right js-col">
                <div class="js-cell">
                    <p class="title">Leave a request for a meeting with the design and making the necessary measurements</p>
                    <form action="">
                        <div class="row">
                            <div class="col">
                                <lable class="flable" for="name">Your name</lable>
                                <input type="text" placeholder="Your name"/>
                            </div>
                            <div class="col">
                                <lable class="flable" for="email">Your email</lable>
                                <input type="text" placeholder="Your email"/>
                            </div>
                            <div class="col">
                                <lable class="flable" for="phone">Your phone</lable>
                                <input type="text" placeholder="Your phone"/>
                            </div>
                            <div class="col">
                                <input type="submit" value="SEND"/>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</section>
</div>
</div>


<div class="overlay overlay-contentpush">
    <div id="query-content"></div>
</div>

<?php get_template_part( 'parts/menu' ); ?>

<div id="flying-panel" class="flying-panel white">
    <div class="topline-nav clearfix">
        <div id="logo" class="logo">
            <?php get_template_part('assets/svg/logo.svg') ?>
        </div>

        <nav class="menu nav-menu">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#workflow">Workflow</a></li>
                <li><a href="#offers">Offers</a></li>
                <li><a href="#contacts">Contacts</a></li>
            </ul>
        </nav>

        <nav class="menu-wrap">
            <?php
            //            wp_nav_menu( array(
            //               'container'      => '',
            //                'menu_class'     => 'menu main-header_menu',
            //                'menu_id'        => '',
            //                'theme_location' => 'header',
            //            ) );

            wp_nav_menu( array(
                'container'      => '',
                'menu_class'     => 'menu langs-menu',
                'menu_id'        => '',
                'theme_location' => 'langs',
            ) );
            ?>

            <div class="menu-button trigger-pull-menu">MENU</div>
        </nav>

    </div>
    <!--    <div id="next" class="next">-->
    <!--        go next-->
    <!--    </div>-->
</div>

<?php get_footer(); ?>
